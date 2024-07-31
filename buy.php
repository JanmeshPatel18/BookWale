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
if (!isset($_GET['SrNo'])) {
    echo "Book Sr.No. not specified.";
    exit();
}
if (!isset($_GET['bookname'])) {
    echo "Book not specified.";
    exit();
}
$sr_no = $_GET['SrNo'];
$bookname=$_GET['bookname']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
    }
    body::before {
    content: "";
    background-image: url('bgimg.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    opacity: 0.3; /* Adjust the opacity level as needed */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Place the pseudo-element behind the content */
    }
    
   .submit-button {
    text-align: center;
    margin-top: 20px;
    }
    .submit-button button {
        padding: 10px 20px;
        font-size: 16px;
    }
    .payment-section {        
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .payment-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .payment-option {
            background-color: #fff8e1; 
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .payment-option label {
            margin-left: 10px;
            cursor: pointer;
        }

        .payment-option input[type="radio"] {
            cursor: pointer;
        }

        .payment-option.disabled {
            background-color: #e0e0e0; /* Lighter background for disabled options */
            cursor: not-allowed;
        }

        .payment-option input[type="radio"]:disabled {
            cursor: not-allowed;
        }
    </style>  
</head>
<body>
    <header>
        <h1>Complete Your Purchase</h1>
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
        <div class="form-container">
            
            <form method="POST" action="bought.php">
            <input type="hidden" id="bookname" name="bookname" value="<?php echo htmlspecialchars($bookname); ?>">    
            <input type="hidden" id="sr_no" name="sr_no" value="<?php echo htmlspecialchars($sr_no); ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address_line_1">Address Line 1:</label>
                    <input type="text" id="address_line_1" name="address_line_1" required>
                </div>
                <div class="form-group">
                    <label for="address_line_2">Address Line 2:</label>
                    <input type="text" id="address_line_2" name="address_line_2">
                </div>
                <div class="form-group">
                    <label for="landmarks">Landmarks:</label>
                    <input type="text" id="landmarks" name="landmarks">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" id="state" name="state" required>
                </div>
                <div class="payment-section">
                    <h2>Select Payment Method</h2>
                    <div class="payment-option">
                        <input type="radio" id="cod" name="payment_method" value="Cash on Delivery" checked>
                        <label for="cod">Cash on Delivery</label>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="credit_card" name="payment_method" value="Credit Card" disabled>
                        <label for="credit_card">Credit Card (Unavailable)</label>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="debit_card" name="payment_method" value="Debit Card" disabled>
                        <label for="debit_card">Debit Card (Unavailable)</label>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="paypal" name="payment_method" value="PayPal" disabled>
                        <label for="paypal">PayPal (Unavailable)</label>
                    </div>
                    <div class="payment-option">
                        <input type="radio" id="net_banking" name="payment_method" value="Net Banking" disabled>
                        <label for="net_banking">Net Banking (Unavailable)</label>
                    </div>
                </div>
                <div class="submit-button">
                    <button type="submit">Place Order</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Discover our passion for books and our commitment to providing you with the best reading experience.</p>
        </div>
        
        <div class="footer-section">
            <h3>Customer Service</h3>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Connect With Us</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Newsletter</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
