<?php
include 'elements/Dbconnect.php'; // Include your database connection file

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

$products = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
?>