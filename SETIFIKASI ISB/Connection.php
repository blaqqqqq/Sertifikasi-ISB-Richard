<?php
$host = "localhost";
$user = "root";
$pass = "root123";
$db = "perpustakaan";

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Connection fail: " . mysqli_connect_error());
}
?>

