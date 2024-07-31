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
    <title>Book Wale</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <a href="profile.php" id="profile-link">
            <h1><span>&#128214;</span> Book Wale</h1>
        </a>
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
        <section class="featured-books">
                <div class="blog-post">
                    <h2 class="blog-title">Start of Book Wale</h2>
                    <p class="blog-meta">Posted on January 1, 2023</p>
                    
                    <p class="blog-content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, omnis soluta. Eos soluta nihil architecto sit nesciunt, perspiciatis, facilis quibusdam aspernatur sunt quo debitis expedita iste ad reprehenderit dolor. Perferendis facilis esse impedit officia, harum maiores quaerat reprehenderit. Consequuntur, explicabo dolorum rem, odio sint esse quae officiis vel asperiores iste maxime quasi quia, molestiae officia saepe! Nemo magni reprehenderit nihil consequuntur quae quo molestiae debitis nisi placeat ullam? Aperiam illo excepturi impedit tempora provident facere, velit commodi quaerat aut, magnam quidem ea esse voluptatum! Sequi explicabo quasi facilis mollitia vel animi accusamus maxime ab. Dolorem porro tenetur, neque, voluptatibus quisquam eius doloribus sequi corrupti dolores animi aperiam nihil soluta, pariatur repudiandae vel adipisci quos impedit ullam minus aut? Amet dolorem quisquam quos expedita nobis obcaecati sunt facilis officiis pariatur atque nisi possimus est deserunt, voluptates sequi hic magni. Officia officiis sunt minus cumque corporis architecto, rem maxime perspiciatis. Tempore dolores in rerum adipisci sed eum excepturi nisi, voluptatum <img id="img4" src="https://thumbs.dreamstime.com/b/old-book-flying-letters-magic-light-background-bookshelf-library-ancient-books-as-symbol-knowledge-history-218640948.jpg" alt="xyz">hic laboriosam, quos pariatur eaque ab similique nihil molestiae qui possimus blanditiis sunt magnam assumenda accusamus delectus laudantium. Cumque earum veniam laborum facilis harum esse delectus dolorem fugiat doloribus cum eos nemo, reiciendis, numquam cupiditate? Ipsum labore eveniet quidem, vitae iusto nulla beatae iste nihil molestiae similique ipsam obcaecati quod natus. Error tempore, sequi, quia quis repellat nesciunt eum qui exercitationem iste et eligendi odit dolores ipsam. Inventore fugiat sunt iste, alias quas laboriosam expedita deserunt voluptate distinctio fugit eveniet! Perferendis cupiditate voluptas quae quia quos! Autem ipsum officia quaerat facilis error?
                    </p>
                        <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate asperiores ipsam qui voluptatem repellat atque delectus non soluta rerum consequatur officiis quisquam aliquid cupiditate beatae, id culpa quod nihil enim ullam similique praesentium. Maiores, voluptatibus. Accusantium aliquid quam temporibus quod excepturi sed itaque consequatur nam? Quidem corporis facere porro cumque repudiandae delectus cupiditate et culpa quo rem voluptates ab, dolorum laudantium cum libero temporibus laboriosam possimus dignissimos facilis necessitatibus iste incidunt doloremque! Facere, magni alias impedit ducimus, nam voluptatum hic autem voluptate eos sunt itaque tempore, fuga asperiores eveniet odio recusandae rerum. Quo excepturi neque saepe, facere ipsum facilis enim.
                    </p>
                </div>
            <!-- Featured book listings -->
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