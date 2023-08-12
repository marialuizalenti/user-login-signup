<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("Faça login para acessar!<p><a href=\"../html/index.php\">Entrar</a></p>");
}
?>