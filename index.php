<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alimente o futuro | Página inicial</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">


</head>

<body>
  <?php
  include "php/header.php";
  ?>
  <div class="flexaside">
    <main>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner smaller-image">
          <div class="carousel-item active">
            <img class="d-block w-100" src="fotos/logo.png" alt="Nossa logo!">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="fotos/felipe.png" alt="Integrante 1!">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="fotos/luiz.png" alt="Integrante 2!">
          </div>
        </div>
        <a class="carousel-control-prev custom-carousel-control" href="#carouselExampleIndicators" role="button"
          data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next custom-carousel-control" href="#carouselExampleIndicators" role="button"
          data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <section>
        <h1>Alimente o futuro!</h1>
        <h2>Combate à fome e promoção da nutrição</h2>
        <h3>Bem vindo(a)!</h3>
        <p>Bem-vindo à Alimente o Futuro, uma organização sem fins lucrativos dedicada a ajudar a alimentar
          comunidades em todo o mundo. <br> Acreditamos que a fome é um problema global que pode ser resolvido
          com uma abordagem colaborativa e comunitária. Com isso em mente, trabalhamos incansavelmente para
          fornecer alimentos e recursos para aqueles que mais precisam.</p>
      </section>

      <section>
        <h3>Nosso objetivo</h3>
        <p>Nosso objetivo é criar um mundo onde todas as pessoas tenham acesso a alimentos nutritivos e
          saudáveis. Para alcançar essa meta, trabalhamos com voluntários, organizações governamentais e
          outras ONGs para arrecadar fundos, distribuir alimentos e criar programas de alimentação
          sustentáveis em comunidades carentes.</p>
      </section>

      <section>
        <h3>Como Ajudar</h3>
        <p>A Alimente o Futuro é uma organização sem fins lucrativos dedicada a combater a fome global. A
          organização trabalha com voluntários, organizações governamentais e outras ONGs para fornecer
          alimentos e recursos para aqueles que mais precisam. Há várias maneiras de contribuir, incluindo
          doações financeiras, voluntariado, eventos de arrecadação de fundos e parcerias com empresas locais.
          Cada doação e cada esforço fazem uma grande diferença para ajudar a alimentar comunidades em todo o
          mundo.</p>
      </section>

      <section>
        <h3>Noticias sobre a nossa organização</h3>
        <article>
          <h4>Alimente o Futuro distribui alimentos para famílias carentes em comunidade local.</h4>
          <p>No último final de semana, a Alimente o Futuro, organização sem fins lucrativos, distribuiu
            alimentos para mais de 500 famílias carentes em uma comunidade local. A ação foi possível graças
            à arrecadação de fundos e ao trabalho de voluntários da organização. Os alimentos distribuídos
            foram selecionados com base em sua qualidade nutricional e ajudarão a alimentar famílias que têm
            dificuldade em obter alimentos saudáveis e nutritivos.</p>
        </article>
        <article>
          <h4>Alimente o Futuro anuncia parceria com empresa local para aumentar programas de alimentação
            sustentável</h4>
          <p>A Alimente o Futuro anunciou hoje uma parceria com uma empresa local para aumentar seus programas
            de alimentação sustentável em comunidades carentes. A empresa fornecerá financiamento e recursos
            para ajudar a Alimente o Futuro a expandir seus programas de hortas comunitárias e educação
            nutricional. A parceria é uma iniciativa importante para promover a conscientização sobre a
            importância de uma alimentação saudável e sustentável em comunidades em todo o mundo.</p>
        </article>
        <article>
          <h4>Alimente o Futuro recebe doação de empresa multinacional para ajudar a combater a fome global
          </h4>
          <p>A Alimente o Futuro recebeu uma doação significativa de uma empresa multinacional para ajudar a
            combater a fome global. A doação será usada para apoiar os esforços da organização em fornecer
            alimentos e recursos para pessoas em todo o mundo. A Alimente o Futuro agradeceu a empresa por
            seu compromisso em ajudar a resolver um dos maiores desafios globais e prometeu usar a doação de
            maneira responsável e eficiente para fazer a maior diferença possível na vida das pessoas.</p>
        </article>
      </section>

    </main>
  </div>
  <?php
  include "php/footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>