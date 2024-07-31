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
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Explore Our Collection</h1>
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
        <section class="product-listings">
            <div class="product-card">
                <img src="book1.jpg" alt="Book 1">
                <h3>The C Programming Language</h3>
                <p>Author: Brian .W.K</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=1&bookname=The C Programming Language">Buy Now</a></button>
            </div>

            <!-- Product Box 2 -->
            <div class="product-card">
                <img src="book2.jpg" alt="Book 2">
                <h3>COMPUTER PROGRAMMING LANGUAGES: THE BLUEPRINT Learn The Basics Of Computer Programming</h3>
                <p>Author: Cyberpunk Books</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=2&bookname=COMPUTER PROGRAMMING LANGUAGES: THE BLUEPRINT Learn The Basics Of Computer Programming">Buy Now</a></button>
            </div>

            <!-- Repeat this structure for the other 7 product boxes -->
            
            <!-- Product Box 3 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/71PE7TBiUnL._AC_UF1000,1000_QL80_.jpg" alt="Book 3">
                <h3>Advanced Web Development with React</h3>
                <p>Author: Mehul Mohan</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=3">Buy Now</a></button>
            </div>
            <!-- ... -->

            <!-- Product Box 4 -->
            <div class="product-card">
                <img src="https://www.intelligent.com/wp-content/uploads/2022/08/Practical-English-Usage-4th-edition.jpg" alt="Book 4">
                <h3>Practical English Usage</h3>
                <p>Author: Michael Swan</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=4&bookname=Practical English Usage">Buy Now</a></button>
            </div>
            <!-- ... -->
 
            <!-- Product Box 5 -->
            <div class="product-card">
                <img src="https://gtustudy.in/wp-content/uploads/2023/05/image.png" alt="Book 5">
                <h3>Electrical Engineering Materials</h3>
                <p>Author: GTU</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=5&bookname=Electrical Engineering Materials">Buy Now</a></button>
            </div>
            <!-- ... -->

            <!-- Product Box 6 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/4165Dt4YBzL._AC_UF1000,1000_QL80_.jpg" alt="Book 6">
                <h3>Mathematics 1</h3>
                <p>Author: Ravish R Singh</p>
                <p>Price: ₹19</p>
                <button class="buy-button"><a href="buy.php?SrNo=6&bookname=Mathematics 1">Buy Now</a></button>
            </div>

            <!-- <div class="product-card">
                <img src="book1.jpg" alt="Book 7">
                <h3>Book Title 1</h3>
                <p>Author: Author Name</p>
                <p>Price: ₹19</p>
                <button class="buy-button">Buy Now</button>
            </div>

            <div class="product-card">
                <img src="book1.jpg" alt="Book 8">
                <h3>Book Title 1</h3>
                <p>Author: Author Name</p>
                <p>Price: ₹19</p>
                <button class="buy-button">Buy Now</button>
            </div>


            <div class="product-card">
                <img src="book1.jpg" alt="Book 9">
                <h3>Book Title 1</h3>
                <p>Author: Author Name</p>
                <p>Price: ₹19</p>
                <button class="buy-button">Buy Now</button>
            </div> -->
            
            <!-- Book listings with details and prices -->
        </section>
        
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