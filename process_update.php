<!-- process_update.php -->
<?php
include 'elements/Dbconnect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newusername = $_POST['newusername'];
    $mobilenumber = $_POST['mobilenumber'];
    $address = $_POST['address'];

    $sql = "UPDATE `signup` SET `mobilenumber`='$mobilenumber', `Address`='$address' WHERE `newusername`='$newusername'";
    $result = mysqli_query($conn, $sql);

    if ($result) 
    {
        $_SESSION["newusername"] = $username;
        
        header("Location: profile.php"); // Redirect to a welcome page or dashboard
        
        exit();
        echo "<script>alert('$error_message');</script>";
    } 
    else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
} 
else {
    echo "Invalid request.";
}
?>
