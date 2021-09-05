<?php

$conn = mysqli_connect("localhost", "root", "");

$query = "CREATE DATABASE canvas";
$sql = mysqli_query($conn, $query);
// Если база данных с таким именем уже есть, то она не заменяется на новую.
if(! $sql) echo "<p>db allready exists</p>";

mysqli_select_db($conn, "canvas");

$query = "CREATE TABLE canva";
$sql = mysqli;

$query = "ALTER TABLE ADD canva(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
figura TEXT, param TEXT, code TEXT)";
$sql = mysqli_query($conn, $query);
if(! sql) echo "<p>table whith id allready exists</p>";



mysqli_close($conn);

?>
