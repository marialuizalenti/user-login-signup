<?php
include('../session/protect.php');
include('../session/conn.php');

$email = $mysqli->real_escape_string($_SESSION['email']);

$query = "DELETE FROM user WHERE email = '$email'";

if ($mysqli->query($query)) {
    header('Location:../html/index.php');
} else {
    echo "Erro ao excluir a conta: " . $mysqli->error;
}
?>
