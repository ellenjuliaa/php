<?php
include '../../database/livroDB.php';

$livros = new Livro();
$livros = listarLivrosPorTitulo();
foreach($livros as $livro){
    echo "<option value='" . $livro->titulo . "'>" . $livro->titulo . "</option>";   
}
?>
