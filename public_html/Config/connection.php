<?php
session_start();

define('SITEURL', 'http://localhost/Online Medicine Shopping/public_html/');

$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "medicine") or die(mysqli_connect_error());

?>