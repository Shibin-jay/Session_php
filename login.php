<?php

/**
 * File name: login.php
 * PHP script to handle login.
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

$user_email = $_POST["userMail"];
$user_pass = $_POST["userPass"];
$json_file = file_get_contents('users.json');
$users = json_decode($json_file, true);
foreach ($users as $user) {
    if ($user['email'] === $user_email && $user['password'] === $user_pass) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['userId'] = $user["id"];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        header('Location: fiiii/homePage.php');
        exit;
    }
}
