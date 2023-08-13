<?php
include('../session/protect.php');
include('../session/conn.php');

$id = $mysqli->real_escape_string($_SESSION['id']);
$query = "UPDATE user SET";

if (isset($_POST['new_name']) && !empty($_POST['new_name'])) {
    $newName = $mysqli->real_escape_string($_POST['new_name']);
    $query .= " name = '$newName',";
}

if (isset($_POST['new_email']) && !empty($_POST['new_email'])) {
    $newEmail = $mysqli->real_escape_string($_POST['new_email']);
    $query .= " email = '$newEmail',";
}

if (isset($_POST['new_password']) && !empty($_POST['new_password'])) {
    $newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $query .= " password = '$newPassword',";
}

$query = rtrim($query, ',');

$query .= " WHERE id = '$id'";

if ($mysqli->query($query)) {
    echo "Atualizado com sucesso";
} else {
    echo "Erro ao alterar a conta: " . $mysqli->error;
}
?>
