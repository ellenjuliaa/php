<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/web/style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <title>Formulário</title>
</head>
<body>
  <div class="container">
    <h2>Excluir Livro</h2>
    <form action="/acao/exclusao_livro_acao.php" method="POST">
      <div class="form-group">
        <label for="titulo">Título do Livro:</label>
        <select id="titulo" name="titulo">          
          <?php include '../frame/exclusao_livro_frame.php'; ?>
         </select> 
      </div>     
      <input type="submit" value="Excluir">
    </form>
  </div>
</body>
</html>