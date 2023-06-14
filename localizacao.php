<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alimente o futuro | Localização</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>
<?php
  include "php/header.php";
  ?>
  
	<main id="loc">
	<aside>
            <h3>Qualquer dúvida, entre em contato!</h3>
            <div class="social-media-images">
                <img src="fotos/felipe.png" alt="Felipe Leme Dias">
                <img src="fotos/luiz.png" alt="Luiz Martini de Souza">
            </div>
            <ul>
                <li><a href="https://www.instagram.com/felipelemedias/" target="_blank">Felipe Leme Dias</a></li>
                <li><a href="https://www.instagram.com/luizz.martini/" target="_blank">Luiz Martini de Souza</a></li>
            </ul> 
    </aside>
		<h2>Localização</h2>
		<p>Estamos localizados na cidade de Monte Carmelo em Minas Gerais, no bairro Cidade Jardim, próximo a
			Universidade Federal de Uberlândia - Campus Monte Carmelo, dentre as diversas opções de transporte
			público até o nossa localização.</p>

		<h3>Como Chegar</h3>
		<p>Confira as opções de transporte público:</p>
		<ul>
			<li>050 - Linha de ônibus da unidade Araras - Boa Vista</li>
			<li>InterCampi - Linha de ônibus da unidade Araras - Boa Vista</li>
		</ul>

		<h3>Foto do local para referencia:</h3>
		 <img src="fotos/localizacao.jpeg" alt="Foto da ONG" id="imgloc">
		<h3>Mapa</h3>
		<div id="mapa">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1335.946396694824!2d-47.514593713654236!3d-18.72550919630916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1682277529656!5m2!1spt-BR!2sbr"></iframe>
		</div>
	</main>
	<?php
  include "php/footer.php";
  ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>