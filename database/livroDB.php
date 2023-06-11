<?php

include 'conexao.php';

class Livro
{
    public $id;
    public $titulo;
    public $autor;
    public $editora;
    public $genero;

// ... outros métodos e construtores, se necessário
}

function inserirLivro($titulo, $autor, $editora, $genero)
{
    $conn = abrirConexao();
    $sql = "INSERT INTO livro (titulo, autor, editora, genero) VALUES ('$titulo','$autor','$editora','$genero')";
    mysqli_query($conn,$sql);
    fecharConexao($conn);
    return $sql;

}

function listarLivros()
{
    $conn = abrirConexao();
    $sql = "SELECT titulo, autor, editora, genero FROM livro";
    // Executar a consulta SQL
    $result = $conn->query($sql);

    // Verificar se houve algum resultado
    if ($result->num_rows > 0) {
        // Criar uma lista de livros
        $livros = array();

        // Loop para adicionar cada livro ao array
        $cont = 0;
        while ($row = $result->fetch_assoc()) { 
            $cont++;           
            $livro = new Livro();
            $livro->id = $cont;
            $livro->titulo = $row["titulo"];
            $livro->autor = $row["autor"];
            $livro->editora = $row["editora"];
            $livro->genero = $row["genero"];            
            $livros[] = $livro;            
        }

        // Fechar a conexão com o banco de dados
        $conn->close();

        // Retornar a lista de livros
        return $livros;
    }
    else {
        // Fechar a conexão com o banco de dados
        $conn->close();

        // Retornar um array vazio se nenhum livro for encontrado
        return array();    
}
}

function listarLivrosPorTitulo(){
    $conn = abrirConexao();
    $sql = "SELECT titulo FROM livro";
    // Executar a consulta SQL
    $result = $conn->query($sql);

    // Verificar se houve algum resultado
    if ($result->num_rows > 0) {
        // Criar uma lista de livros
        $livros = array();

        // Loop para adicionar cada livro ao array
        while ($row = $result->fetch_assoc()) {
            $livro = new Livro();            
            $livro->titulo = $row["titulo"];
            $livros[] = $livro;
        }

        // Fechar a conexão com o banco de dados
        $conn->close();

        // Retornar a lista de livros
        return $livros;
    }
    else {
        // Fechar a conexão com o banco de dados
        $conn->close();

        // Retornar um array vazio se nenhum livro for encontrado
        return array();    
}
}

function deletarLivros($titulo)
{
    $conn = abrirConexao();
    $sql = "DELETE FROM livro WHERE titulo='$titulo'";
    mysqli_query($conn,$sql);
    fecharConexao($conn);
    return $sql;
}

?>