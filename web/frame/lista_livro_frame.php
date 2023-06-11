<?php
include '../database/livroDB.php';

$livros = new Livro();
$livros = listarLivros();
foreach($livros as $livro){
    echo "<tr>";
    echo "<td>" . $livro->id . "</td>";
    echo "<td>" . $livro->titulo . "</td>";
    echo "<td>" . $livro->autor . "</td>";
    echo "<td>" . $livro->editora . "</td>";
    echo "<td>" . $livro->genero . "</td>";
    echo "</tr>";
}
?>