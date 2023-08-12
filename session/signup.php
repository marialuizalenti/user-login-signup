<?php
if (isset($_POST['email'])) {
    include('conn.php');
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    $mysqli->query("INSERT INTO user (email, password, name) VALUES ('$email', '$password', '$name')");
}
?>