<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alimente o futuro | Contato recebido</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
  <?php
  include "php/header.php";
  ?>
  <main>
    <h1 id="h1envio">A <span>"ALIMENTE O FUTURO!"</span> RECEBEU SEU CONTATO!</h1>
    <p id="paragenvio">Obrigado por entrar em contato conosco! Sua mensagem foi recebida e será respondida em breve. <br> Volte para nossa página principal ou página de atividades para saber mais sobre nossa organização!</p>
    <div id="enviolink"><a href="index.php" id="linkenvio">Voltar à página inicial</a></div>
  </main>
</body>
</html>


<?php

require "php/dados.php";
$pdo = mysqlConnect();

try {
  $sql = <<<SQL
    SELECT cpf, nome, assunto
    FROM dados_pp2
  SQL;

  $stmt = $pdo->query($sql);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello World - Listagem de Tabela do MySQL</title>
  
</head>
<body>
  <div class="container">
    <h3>Dados na tabela <b>Dados de Contato:</b></h3>
    <table class="table table-striped table-hover">
      <tr>
        <th>CPF</th>
        <th>Nome</th>
        <th>Assunto</th>
      </tr>
      <?php
      while ($row = $stmt->fetch()) 
      {
        $cpf = htmlspecialchars($row['cpf']);
        $nome = htmlspecialchars($row['nome']);
        $assunto = htmlspecialchars($row['assunto']);

        echo <<<HTML
        <tr>
          <td>$cpf</td>
          <td>$nome</td> 
          <td>$assunto</td>
        </tr>      
        HTML;
      }
      ?>
    </table>
    <a href="formulario.php">Deseja fazer outro contato?</a>
  </div>
  <?php
  include "php/footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
