<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'elements/Dbconnect.php';

    $newusername =  $_POST["newusername"]; 
    $newpassword =  $_POST["newpassword"];
    $mobilenumber = $_POST["mobilenumber"];
    $Address =  $_POST["Address"];

    $sql = "SELECT * FROM `signup` WHERE `newusername` = '$newusername'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if (!$result) {
        die(mysqli_error($conn));
    }
    else{
      $sql ="INSERT INTO `signup` (`newusername`, `newpassword`, `mobilenumber`, `Address`) VALUES ('$newusername', '$newpassword', '$mobilenumber', '$Address')";
      $result=mysqli_query($conn,$sql);
    }
    

    if ($num > 0) 
    {
        echo '<script>alert("User already exists")</script>';
    } 
    else {
        $_SESSION['Email'] = $Email;
        header('Location: login.html'); 
        exit; 
    }
}
?>




