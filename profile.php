<?php
session_start();

// Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: black;
            color: #fff;
            padding: 20px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
            top: 0;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        section {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }

        h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 10px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Profile</h1>
        <nav>
            <ul>
                <li><a href="index2.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="pickup.php">Pickup</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>User Information</h2>
            <?php
                include 'elements/Dbconnect.php';
                
                $user = $_SESSION['user_name'];
                if ($user==true) 
                {
                    $username = $_SESSION["user_name"];
                    $sql = "SELECT * FROM `signup` WHERE `newusername` = '$user'";
                    $result = mysqli_query($conn , $sql);

                    if ($result && mysqli_num_rows($result) == 1) 
                    {
                        $user_data = mysqli_fetch_assoc($result);

                        echo "<p><strong>Username:</strong> $user_data[newusername]</p>";
                        echo "<p><strong>Mobile Number:</strong> $user_data[mobilenumber]</p>";
                        echo "<p><strong>Address:</strong> $user_data[Address]</p>";
                        echo "<p><strong>Update Profile  </strong><a href='updateprofile.php'>✏️</a></p>";
                    }
                } 
                else 
                {
                    echo "<p>User not logged in. Please log in to view the profile.</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>
