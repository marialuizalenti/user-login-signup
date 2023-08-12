<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'textbookgenius';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->error) {
    die("Error connecting to database: " . $mysqli->connect_error);
}
// try {
//     $conn = mysqli_connect("localhost", "root", "", "textbookgenius");
// } catch (\Exception $erro) {
//     echo "erro" . $erro;
// }
?>