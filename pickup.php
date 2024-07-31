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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pickup Address</h1>
        <nav>
            <ul>
                <li><a href="index2.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="pickup.php">Pickup</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="pickup-address">
            <h2>Please provide your pickup address:</h2>
            <form action="pickupnew.php" method="POST">
                <div class="form-group">
                    <label for="address-line1">Address Line 1:</label>
                    <input type="text" id="address-line1" name="address-line1" required>
                </div>
                <div class="form-group">
                    <label for="address-line2">Address Line 2:</label>
                    <input type="text" id="address-line2" name="address-line2">
                </div>
                <div class="form-group">
                    <label for="landmark">Landmark:</label>
                    <input type="text" id="landmark" name="landmark">
                </div>
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" id="pincode" name="pincode" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
