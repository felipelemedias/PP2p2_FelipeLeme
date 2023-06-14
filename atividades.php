<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alimente o futuro | Atividades</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
<?php
  include "php/header.php";
  ?>
	<div class="card custom-card" style="width: 100%;">
		<img class="card-img-top" src="fotos/slogan.png" alt="Card image cap">
		<div class="card-body">
			<p class="card-text" style="font-size: 1.5rem;">"Juntos, podemos alimentar esperanças e nutrir corações
				através do compartilhamento
				generoso de alimentos. Seja parte dessa corrente do bem e faça a diferença na vida de quem precisa."</p>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">NOSSAS ATIVIDADES</h1>
			<h2 class="lead" style="text-align: center;">Aqui você encontra informações sobre as atividades que a
				"Alimente o Futuro" realiza, clique nas atividades que achou interessante!.</h2>
		</div>

	</div>
	<main>

		<table>
			<thead>
				<tr>
					<th>ATIVIDADE</th>
					<th>DESCRIÇÃO</th>
					<th>LOCAL</th>
				</tr>
			</thead>
			<tbody>
				<tr id="linhaDistribuicao">
					<td>Distribuição de alimentos</td>
					<td>Distribuição de alimentos para famílias em situação de vulnerabilidade social</td>
					<td>Bairros carentes da cidade</td>
				</tr>
				<tr id="linhaOficina">
					<td>Oficinas de culinária</td>
					<td>Oficinas de culinária para ensinar receitas saudáveis e econômicas</td>
					<td>Centros comunitários e escolas públicas</td>
				</tr>
				<tr id="linhaHorta">
					<td>Hortas comunitárias</td>
					<td>Implantação de hortas comunitárias para produção de alimentos orgânicos</td>
					<td>Bairros e comunidades carentes</td>
				</tr>
				<tr id="linhaDoacao">
					<td>Recolhimento de alimentos</td>
					<td>Campanha de arrecadação de alimentos não perecíveis junto à comunidade</td>
					<td>Pontos de coleta e supermercados parceiros</td>
				</tr>
			</tbody>
		</table>
		<button id="btnDistribuicao" type="button" class="btn btn-primary">
			Distribuição de Alimentos
			<span id="badgeDistribuicao" class="badge badge-light custom-badge">0</span>
		</button>
		<button id="btnOficina" type="button" class="btn btn-primary">
			Oficinas de culinária
			<span id="badgeOficina" class="badge badge-light custom-badge">0</span>
		</button>
		<button id="btnHorta" type="button" class="btn btn-primary">
			Hortas Comunitárias
			<span id="badgeHorta" class="badge badge-light custom-badge">0</span>
		</button>
		<button id="btnDoar" type="button" class="btn btn-primary">
			Recolhimento de Alimentos
			<span id="badgeDoar" class="badge badge-light custom-badge">0</span>
		</button>
	</main>

	<?php
  include "php/footer.php";
  ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script>
		var quantidadeAlimentosDistribuidos = 0;
		var quantidadeOficinas = 0;
		var quantidadeHortas = 0;
		var quantidadeDoacoes = 0;

		function atualizarBadgeDistribuicao() {
			$('#badgeDistribuicao').text(quantidadeAlimentosDistribuidos);
		}

		function atualizarBadgeOficina() {
			$('#badgeOficina').text(quantidadeOficinas);
		}

		function atualizarBadgeHorta() {
			$('#badgeHorta').text(quantidadeHortas);
		}

		function atualizarBadgeDoar() {
			$('#badgeDoar').text(quantidadeDoacoes);
		}

		function incrementarBadgeDistribuicao() {
			quantidadeAlimentosDistribuidos++;
			atualizarBadgeDistribuicao();
		}

		function incrementarBadgeOficina() {
			quantidadeOficinas++;
			atualizarBadgeOficina();
		}

		function incrementarBadgeHorta() {
			quantidadeHortas++;
			atualizarBadgeHorta();
		}

		function incrementarBadgeDoar() {
			quantidadeDoacoes++;
			atualizarBadgeDoar();
		}

		atualizarBadgeDistribuicao();
		atualizarBadgeOficina();
		atualizarBadgeHorta();
		atualizarBadgeDoar();

		$('#linhaDistribuicao').click(function () {
			incrementarBadgeDistribuicao();
		});

		$('#linhaOficina').click(function () {
			incrementarBadgeOficina();
		});

		$('#linhaHorta').click(function () {
			incrementarBadgeHorta();
		});

		$('#linhaDoacao').click(function () {
			incrementarBadgeDoar();
		});

	</script>


</body>

</html>