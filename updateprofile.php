<!-- update_profile.php -->
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
    <link rel="stylesheet" href="style.css">
    <title>Update Profile</title>
    <!-- Add your styles here if needed -->
</head>
<body>
    <header>
        <h1>Update Profile</h1>
        <!-- You can include the navigation bar here if needed -->
    </header>

    <main>
        <section>
            <h2>Update User Information</h2>
            <?php
                // Retrieve user data and pre-fill the form fields
                include 'elements/Dbconnect.php';
                
                $user = $_SESSION['user_name'];
                if ($user == true) {
                    $username = $_SESSION["user_name"];
                    $sql = "SELECT * FROM `signup` WHERE `newusername` = '$user'";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) == 1) {
                        $user_data = mysqli_fetch_assoc($result);

                        // Display the update form
                        echo "<form action='process_update.php' method='post'>";
                        echo "<label for='newusername'>Username:</label>";
                        echo "<input type='text' id='newusername' name='newusername' value='$user_data[newusername]' readonly><br>";

                        echo "<label for='mobilenumber'>Mobile Number:</label>";
                        echo "<input type='text' id='mobilenumber' name='mobilenumber' value='$user_data[mobilenumber]'><br>";

                        echo "<label for='address'>Address:</label>";
                        echo "<input type='text' id='address' name='address' value='$user_data[Address]'><br>";

                        echo "<button type='submit'>Update</button>";
                        echo "</form>";
                    }
                } else {
                    echo "<p>User not logged in. Please log in to update the profile.</p>";
                }
            ?>
        </section>
    </main>
</body>
</html>
