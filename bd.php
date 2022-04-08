<?php 
$mysqli = new mysqli('localhost', 'wp_dev_admin', 'hamlet11', 'Nikita_Yash');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$results = $mysqli->query("SELECT * FROM posts");

$mysqli->close();
