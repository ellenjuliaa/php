<?php

include '../database/loginDB.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$loginExistente = isLoginExists($usuario, $senha);

if ($loginExistente) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header("Location: ../web/livro.php");
    exit();
}
else {
    $mensagem = "Usuário e/ou senha incorreto(s)!";
    header("Location: ../web/login.php?mensagem=" . urlencode($mensagem));
    exit();
}

?>