<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/48e57d5629.js" crossorigin="anonymous"></script>    

    <link rel="stylesheet" href="style/gallery.css">
</head>
<body>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.html" class="text-gray">Freedom Reigns</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="archive.html">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="aboutMe.html">About Me</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="books.php">Books</a>
                    </li>
                    
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/abby.murphy.98"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/abby_msnr/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <main>
    <?php require_once 'connect.php';?>
<div class="gallery-grid-container">

<?php
// Select all data from the gallery table
$sql = "SELECT * FROM gallery";
$result = $con->query($sql);

// Check if there are any rows returned from the query
if ($result->num_rows > 0) {
    // Start the grid container
    
    // Loop through each row and display the data in a grid item
    while ($row = $result->fetch_assoc()) {
        $image_url = $row["image_url"];
        $title = $row["title"];
        
        // Display the data in a grid item
        echo "<div class='grid-item'>";
        echo "<img src='$image_url' alt='$title'>";
        echo "</div>";
    }
} else {
    // Display a message if there are no rows returned from the query
    echo "No data found.";
}

// Close the database connection
$con->close();
?>
</div>
</main>

<footer class="footer">
    <div class="container">
        <div class="about-us">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis
                iure, autem nulla tenetur repellendus.</p>
        </div>
        <div class="newsletter">
            <h2>Subscribe</h2>
            <p>Never miss a post!</p>
            <div class="form-element">
                <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
        <div class="instagram">
            <h2>Instagram</h2>
            <div class="flex-row">
                <img src="./assets/insta/insta1.jpeg" alt="insta1">
                <img src="./assets/insta/insta2.jpeg" alt="insta2">
                <img src="./assets/insta/insta3.jpeg" alt="insta3">
            </div>
            <div class="flex-row">
                <img src="./assets/insta/insta4.jpeg" alt="insta4">
                <img src="./assets/insta/insta5.jpeg" alt="insta5">
                <img src="./assets/insta/insta6.jpeg" alt="insta6">
            </div>
        </div>
        <div class="follow">
            <h2>Stop by!</h2>
            <div>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
    <div class="rights flex-row">
        <h4 class="text-gray">
            Copyright ©223 All rights reserved | made by the cool kids 
        </h4>
    </div>
    <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
</footer>
   

   <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script>
        // JavaScript code for image click event
        const galleryItems = document.querySelectorAll('.grid-item');

        // Add click event listener to each gallery item
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('expanded');
            });
        });
    </script>
<script src="/functionality.js"></script>
</body>
</html>