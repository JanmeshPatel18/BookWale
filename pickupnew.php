<?php
session_start();


header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.


if (!isset($_SESSION['user_name'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "bookswale";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $addressLine1 = mysqli_real_escape_string($conn, $_POST['address-line1']);
    $addressLine2 = mysqli_real_escape_string($conn, $_POST['address-line2']);
    $landmark = mysqli_real_escape_string($conn, $_POST['landmark']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);

    $sql = "INSERT INTO Pickup (Addressline1, Addressline2, Landmark, Pincode, City, State) VALUES ('$addressLine1', '$addressLine2', '$landmark', '$pincode', '$city', '$state')";

    if (mysqli_query($conn, $sql)) {
        
        mysqli_close($conn);
        
       
        header("Location: index2.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    
    mysqli_close($conn);
}
?>
