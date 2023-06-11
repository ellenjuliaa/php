<?php
include '../database/livroDB.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$genero = $_POST['genero'];

inserirLivro($titulo,$autor,$editora,$genero);
header("Location: ../web/livro.php");
exit();
?>
