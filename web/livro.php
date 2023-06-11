<?php include '../filtro/sessao.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exibição de Livros</title>
  <link rel="stylesheet" type="text/css" href="/web/style/livro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="buttons-container">
    <button class="logout-button" onclick="encerrarSessao()"><i class="fas fa-sign-out-alt"></i> Encerrar Sessão</button>
  </div>
  <h1>Livros</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor(a)</th>
        <th>Editora</th>
        <th>Gênero</th>
      </tr>
    </thead>
    <tbody>
      <?php include 'frame/lista_livro_frame.php'; ?>     
    </tbody>
  </table>

  <div class="buttons-container">
    <button class="cadastro-button" onclick="cadastrarLivro()"><i class="fas fa-plus"></i> Cadastro</button>
    <button class="excluir-button" onclick="excluirLivro()"><i class="fas fa-trash"></i> Excluir</button>
  </div>

  <script>
    function cadastrarLivro() {
      window.location.href = "formulario/cadastro_livro_form.html";
    }

    function excluirLivro() {
      window.location.href = "formulario/exclusao_livro_form.php";
    }
    function encerrarSessao(){
      window.location.href = "../acao/encerra_sessao.php";
    }
  </script>
</body>
</html>
