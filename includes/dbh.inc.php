<?php 

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem-php";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection faile: ".mysqli_conect_error());
}

?>