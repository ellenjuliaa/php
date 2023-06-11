<?php
include '../database/livroDB.php';

$titulo = $_POST['titulo'];

deletarLivros($titulo);

header("Location: ../web/livro.php");
exit();
?>