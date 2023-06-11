<?php
include 'conexao.php';

function insereUsuario($nome, $sobrenome, $sexo, $usuario, $senha)
{
  $conn = abrirConexao();
  $sql = "INSERT INTO cadastro(nome, sobrenome, sexo)
    VALUES ('$nome','$sobrenome','$sexo')";
  mysqli_query($conn, $sql) or die("Erro ao executar a inserção dos dados");

  $sql = "INSERT INTO login(usuario, senha)
    VALUES ('$usuario','$senha')";
  mysqli_query($conn, $sql) or die("Erro ao executar a inserção dos dados");

  fecharConexao($conn);
}

?>