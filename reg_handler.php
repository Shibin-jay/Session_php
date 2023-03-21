<?php

/**
 * File name: reg_handler.php
 * PHP script to create a new user and storing their information in a JSON file.
 * PHP version 8.2.3
 * @category PHP Session
 * @package  CodilarProjects
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.example.com/docs/auth
 * @author   Shibin <shibin.s@codilar.com>
 */

$id = uniqid();
$user_name = $_POST['name'];
$email = $_POST['email'];
$regPass = $_POST['regPassword'];

$json_data = file_exists("users.json") ? file_get_contents('users.json') : "";
$array_data = json_decode($json_data, true);

foreach ($array_data as $existing_user) {
    if ($existing_user['email'] == $email) {
        // If email is already registered, redirect user to an error page
        header('Location: error.php?message=Email%20already%20exists%20-%20please%20choose%20an%20alternative%20email');
        exit();
    }
}

$data = array(
    "id" => $id,
    "name" => $user_name,
    "email" => $email,
    "password" => $regPass,
);

if (!empty($array_data)) {
    $last_element = end($array_data);
    if ($last_element) {
        $json_data = rtrim($json_data, "]");
        $json_data .= ",";
    }
}
$array_data[] = $data;
$json_new = json_encode($array_data, JSON_PRETTY_PRINT);
file_put_contents("users.json", $json_new);
header('Location: index.php');
