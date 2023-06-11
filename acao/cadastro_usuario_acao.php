<?php
include '../database/usuarioDB.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$sexo = $_POST['sexo'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

insereUsuario($nome,$sobrenome,$sexo,$usuario,$senha);
header("Location: ../web/livro.php");
exit();
?>