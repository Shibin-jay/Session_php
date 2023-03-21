<?php

/**
 * File name: homepage.php
 * PHP script to see logged-in user's home page and details.
 * PHP version 8.2.3
 * @category PHP Session
 * @package  CodilarProjects
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.example.com/docs/auth
 * @author   Shibin <shibin.s@codilar.com>
 */

session_start();
if (!isset($_SESSION['name'])) {
    header('Location: ../');
    clearstatcache();
}
$username = $_SESSION['name'];
$id = $_SESSION['userId'];
$email = $_SESSION['email'];

$user
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="#">Logo</a>
            <nav>
                <a href="#" class="" id="">Home</a>
                <a href="#">About</a>
                <a href="logout.php" id="logout">Logout</a>
            </nav>
    
        </div>
    </header>

    <main>
        <div class="banner-container">
            <div class="container">
                <div class="leftsection">
                    <h1>Welcome <?php echo $username?></h1>
                    <p>Email: <?php echo $email ?></p>
                    <p>User ID: <?php echo $id ?></p>
                    <p>This is an experimental page<br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Nobis veniam aliquid sint repellat est, cupiditate, modi veritatis ducimus illo voluptate 
                     ullam itaque iure laudantium consequuntur numquam eaque, sed necessitatibus tenetur?</p>
                </div>
            </div>
        </div>
        
        <section class="section-two">
            <div class="card-container">
                <div class="imagecontainer">
                    <img src="photo1611909122.jpeg" alt="">
                </div>
                <h1>DUCATI Panigale</h1>
            </div>
            <div class="card-container">
                <div class="imagecontainer">
                    <img src="1244.jpg" alt="">
                </div>
                <h1>Aiming at sky</h1>
            </div>
            <div class="card-container">
                <div class="imagecontainer">
                    <img src="1245.jpg" alt="">
                </div>
                <h1>Universe</h1>
            </div>
        </section>
    </main>
    <footer>
        Designed by <span>Shibin</span> on 21-03-2023
    </footer>
</body>
</html>