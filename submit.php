<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wesweb01";
require_once('connect.php');

connect();

 $text = $_POST['inlägg'];



$sql = "SELECT konton.anvnamn, posts.text  FROM konton,posts";
mysqli_query($conn, $sql);
$sql = "INSERT INTO   konton.posts FROM $text";
header("Location: index.php");
?>
