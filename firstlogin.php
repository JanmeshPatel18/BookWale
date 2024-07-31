<?php
        $errormsg = "Login to Purchase a book";
        $e= urlencode($errormsg);
        header("Location:products.html?error=$e");
        exit();
    
    /*else {
        // Login failed
        $error_message = "Invalid username or password";

        // Display alert message using JavaScript
        
        header("Location: login.html"); // Redirect to a welcome page or dashboard
        echo "<script>alert('$error_message');</script>";
        exit();
    }*/


?>
