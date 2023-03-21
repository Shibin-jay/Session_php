<?php

/**
 * File name: logout.php
 * PHP script to handle logout and session destroy.
 * PHP version 8.2.3
 * @category PHP Session
 * @package  CodilarProjects
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://www.example.com/docs/auth
 * @author   Shibin <shibin.s@codilar.com>
 */

session_start();
session_destroy();
header('Location: ../');
clearstatcache();
