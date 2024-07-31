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

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookswale";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sanitize and fetch form data
$name = mysqli_real_escape_string($conn, $_POST['name']);
$address_line_1 = mysqli_real_escape_string($conn, $_POST['address_line_1']);
$address_line_2 = mysqli_real_escape_string($conn, $_POST['address_line_2']);
$landmarks = mysqli_real_escape_string($conn, $_POST['landmarks']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
$sr_no = mysqli_real_escape_string($conn, $_POST['sr_no']);
$bookname=mysqli_real_escape_string($conn, $_POST['bookname']);
$order_quantity=1;

$sql = "SELECT Quantity FROM books WHERE `Sr.No.` = '$sr_no'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $available_quantity = intval($row['Quantity']);

    if ($available_quantity >= $order_quantity) {
        // Update the quantity in the books table
        $new_quantity = $available_quantity - $order_quantity;
        $update_sql = "UPDATE books SET Quantity = $new_quantity WHERE `Sr.No.` = '$sr_no'";


        if (mysqli_query($conn, $update_sql)) {
            // Insert data into orders table
            $sql = "INSERT INTO `order` (name, addressline1, addressline2, landmark, city, state, mop, Bookname)
                    VALUES ('$name', '$address_line_1', '$address_line_2', '$landmarks', '$city', '$state', '$payment_method', '$bookname')";

        if (mysqli_query($conn, $sql)) {
            // Close the connection
            mysqli_close($conn);
            
            // Redirect to products page
            header("Location: products.php");
            exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

        } else {
            echo "Error updating book quantity: " . mysqli_error($conn);
        }
    } else {
        echo "Sorry, the book is out of stock.";
    }
} else {
    echo "Book not found.";
}
// Insert data into orders table
/*$sql = "INSERT INTO `order` (name, addressline1, addressline2, landmark, city, state , mop)
        VALUES ('$name', '$address_line_1', '$address_line_2', '$landmarks', '$city', '$state', '$payment_method')";

if (mysqli_query($conn, $sql)) {
    // Close the connection
    mysqli_close($conn);
    
    // Redirect to products page
    header("Location: products.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
// Close the connection
mysqli_close($conn);
?>