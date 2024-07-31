<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'elements/Dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `signup` WHERE `newusername` = '$username' AND `newpassword` = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION["user_name"] = $username;
        
        header("Location: index2.php"); // Redirect to a welcome page or dashboard
        
        exit();
    } 
    
    else {
        $error_message = "Invalid username or password";
        $encoded= urlencode($error_message);
        header("Location: login.html?e=$encoded");
        exit();
    }
    
    /*else {
        // Login failed
        $error_message = "Invalid username or password";

        // Display alert message using JavaScript
        
        header("Location: login.html"); // Redirect to a welcome page or dashboard
        echo "<script>alert('$error_message');</script>";
        exit();
    }*/
}

?>

