<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "khaled_admin";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>