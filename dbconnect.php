<?php
//sets error reporting to blank
error_reporting(0);

//sets db login details
$user = "guest";
$password = "";
$database = "reguser";
$host = "localhost";

//connects to mysql
$mysqli = mysqli_connect($host, $user, $password, $database);

//redirects to sitedown page if connection fails
if ($mysqli == false) {
    header("location: sitedown.php");
}

//reports all errors
error_reporting(E_ALL);
?>