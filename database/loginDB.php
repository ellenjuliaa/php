<?php
include 'conexao.php';

function isLoginExists($usuario,$senha){
    $conn = abrirConexao(); 
    $sql = "SELECT * FROM Login WHERE usuario='$usuario' AND senha='$senha'"; 
    $resultado = mysqli_query($conn, $sql);
    $numLinhas = mysqli_num_rows($resultado);
    $login = true;
    
    if ($numLinhas == 0) {
        $login = false;
    } 

    fecharConexao($conn);
    
    return $login;       
}
?>