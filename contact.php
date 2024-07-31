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
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
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
        <section class="contact-info">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem libero, at nobis corrupti aspernatur unde laudantium ratione omnis cum magnam autem dicta voluptatum necessitatibus, totam consequuntur esse minus voluptatibus nostrum amet, quae iusto aperiam soluta! Eius alias dolorem consectetur deleniti provident autem aut, voluptas harum doloremque architecto rerum maiores nam quaerat fugiat, saepe ipsa, tempora deserunt incidunt inventore dolorum earum placeat! Voluptatibus molestiae aut amet, voluptatum reprehenderit rem magni optio natus enim porro aliquid iure repellendus aperiam, at ratione perferendis dicta? Maiores veniam dolorem quam sed quae fugit a ad facere aperiam incidunt ullam nemo, inventore, in doloremque quod esse voluptatibus. Eveniet autem eligendi atque natus voluptate odio. Similique officia aspernatur nulla doloremque alias quas amet ullam esse illum asperiores cum facere quidem distinctio minus nobis sit, maiores fugit quia ut temporibus?<br><br> Doloribus, et beatae? Provident doloribus reiciendis ullam aliquid ipsa voluptatum veritatis consequatur tenetur! Aspernatur non, fugit consequuntur nobis vel doloremque esse quo, aperiam explicabo cum, asperiores ratione? Nihil, iusto molestiae accusantium est, deserunt quod esse officiis ducimus eveniet pariatur dolores aperiam! Odio voluptas sed nostrum nulla debitis omnis qui, necessitatibus similique, harum soluta, culpa facere perferendis aspernatur ut explicabo reprehenderit unde placeat provident! Nam, maiores totam? Recusandae aliquid, tempora neque, fugiat, deleniti dicta error perspiciatis sed vitae excepturi ut iusto voluptate. Ipsum adipisci atque numquam eaque molestiae. Sapiente, rerum, facilis amet fugiat similique et rem omnis neque, eius quod perferendis vero mollitia? Aliquid quia, officia omnis saepe et sapiente debitis aperiam blanditiis repellat facilis itaque nesciunt ab expedita

            <!-- Contact information and a contact form -->
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