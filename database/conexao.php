<?php
function abrirConexao(){
  $servername = "localhost";
  $username = "root";
  $password = "12345";
  $dbname = "AT749489";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
      die("Falha na conexão: " . mysqli_connect_error());
  }
  //echo 'Conexão realizada com sucesso!';
  return $conn;
}

function fecharConexao($conn){
  mysqli_close($conn);
}

?>