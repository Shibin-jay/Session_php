<?php

/**
 * File name: index.php
 * PHP script for authentication system that allows users to register and login.
 * PHP version 8.2.3
 * @category PHP Session
 * @package  CodilarProjects
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.example.com/docs/auth
 * @author   Shibin <shibin.s@codilar.com>
 */

session_start();
if (isset($_SESSION['loggedIn'])) {
    header('Location: fiiii/homePage.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button class="toggle-btn" onclick="login()">Login</button>
                <button class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-facebook"></i>
            </div>
            <form id="login" method="post" action="login.php" class="input-group">
                <input type="email" class="input-field" name="userMail"  id="userMail" placeholder="E-mail">
                <input type="password" class="input-field" name="userPass" id="userPass" placeholder="Password">
                <!-- <input type="checkbox" name="check-box" id=""><span>Remember password</span> -->
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" method="post" action="reg_handler.php" class="input-group">
                <input type="email" class="input-field" id="email" name="email" placeholder="E-mail">
                <input type="text" class="input-field" id="name" name="name" placeholder="Name">
                <input type="text" class="input-field" id="regPassword" name="regPassword" placeholder="Password">
                <label for="regpassword" id="validateMessage"></label>
                <input type="password" class="input-field" id="regPassConfirm" placeholder="Confirm Password">
                <!-- <input type="checkbox" name="check-box" id=""><span>Remember password</span> -->
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/f162ef9719.js" crossorigin="anonymous"></script>
</body>
</html>