<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alimente o futuro | Formulário</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>
  /* Estilos personalizados para o formulário */
  .custom-form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .custom-form input[type="text"],
  .custom-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    font-size: 14px;
  }

  .custom-form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
    font-size: 14px;
    background: url("path_to_dropdown_icon") no-repeat right center;
    padding-right: 25px;
  }

  .custom-form button {
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    margin: 2rem;
  }

  /* Estilos para exibir os campos de seleção lado a lado */
  @media (min-width: 576px) {
    .custom-form .checkbox,
    .custom-form .radio {
      display: inline-block;
      margin-right: 10px;
    }
  }
</style>

</head>

<body>
<?php
  include "php/header.php";
  ?>
  <h1>Formulário de Contato</h1>
  <div id="formsec" class="custom-form">
    <form action="enviar.php" id="form" method="post" enctype="multipart/form-data">
      <div class="css-field">
        <label for="nome">Nome completo:</label>
        <input type="text" class="center" id="nome" name="nome">
        <small></small>
      </div>
      <div class="css-field">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="___.___.___-__">
        <small></small>
      </div>
      <div class="css-field">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <small></small>
      </div>
      <div>
        <fieldset>
          <legend>Assunto</legend>
          <div class="css-field">
            <input type="radio" id="doacao" name="assunto" value="Doação">
            <label for="sim">Doação</label>
            <input type="radio" id="voluntariado" name="assunto" value="Voluntariado">
            <label for="não">Voluntariado</label>
            <input type="radio" id="parceria" name="assunto" value="Parceria">
            <label for="sim">Parceria</label> 
            <small></small>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <legend>Serviços:</legend>
          
          <div class="css-field">
            <label for="Doação de Alimento">Doação de Alimento</label>
            <input type="checkbox" id="Doação de Alimento" name="esportes" value="Doação de Alimento">
            <label for="Doação Financeira">Doação Financeira</label>
            <input type="checkbox" id="Doação Financeira" name="esportes" value="Doação Financeira">
            <label for="Trabalho Voluntario">Trabalho Voluntario</label>
            <input type="checkbox" id="Trabalho Voluntario" name="esportes" value="Trabalho Voluntário">
            <label for="Atendimento">Atendimento</label>
            <input type="checkbox" id="Atendimento" name="esportes" value="Atendimento">
            <label for="Outros">Outros</label>
            <input type="checkbox" id="Outros" name="esportes" value="outros">
            <small></small>
          </div>
        </fieldset>
      </div>
      <div>
        <label for="contato">A que se refere o contato?</label>
        <select name="contato" id="contato">
          <option value="" disabled selected>Selecione uma opção</option>
          <option value="Dúvida">Dúvidas</option>
          <option value="Reclamação">Reclamações</option>
          <option value="Sugestão">Sugestões</option>
        </select>
      </div>
      <label for="coment">Deixe seu comentário aqui</label>
      <div class="css-field">
        <textarea name="comentario" id="coment" cols="30" rows="10" maxlength="2000"
          placeholder="Digite sua mensagem"></textarea>
        <small></small>
        <p>Caso tenha alguma foto ou vídeo que deseja compartilhar.</p>
        <div>
          <input type="file" accept=".png, .jpg, .jpeg, .mp4, .mpeg">
        </div>
      </div>
      <div style="text-align: center;">
        <button type="reset">Limpar</button>
        <button id="btnVerificar">Verificar dados!</button>
      </div>
    </form>
  </div>

  <div id="mensagem" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="resultado-formulario"></div>
    </div>
  </div>

  <?php
  include "php/footer.php";
  ?>
  <script src="javascript/contato.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>