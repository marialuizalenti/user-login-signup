<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    include('conn.php');
    $email = $mysqli->real_escape_string($_POST['email']); // sql injection
    $password = $_POST['password'];

    $sql_code = "SELECT * FROM user WHERE email='$email'";
    $sql_query = $mysqli->query($sql_code) or die("Error: " . $mysqli->error);

    $user = $sql_query->fetch_assoc(); // put the infos on query in user

    if ($user && password_verify($password, $user['password'])) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];

        header("Location: ../html/home.php");
    } else {
        echo ("<div style=\"margin-left: 190px; position: absolute; top: 0; width: 250px; height: 30px; background-color: red; text-align: center;\"<p style=\"font-size: 12px; color: red\">E-mail ou senha incorretos!</p></div>");
    }
}


?>