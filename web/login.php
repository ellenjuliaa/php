<?php 
include '../filtro/sessao.php';
if (isset($_GET['mensagem'])) {
  $mensagem = $_GET['mensagem'];
  echo "<script>alert('$mensagem');</script>";
} 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="post" action="/acao/verifica_login_acao.php" id="formlogin" name="formlogin">
      <div class="form-group">
        <label for="username">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <input type="submit" value="Login">
      <div class="cadastro-container">
      <a class="cadastro" href="formulario/cadastro_usuario_form.html">Não tem conta? Clique para cadastre-se</a>
     </div> 
    </form>
     
  </div>  
</body>
</html>
