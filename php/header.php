<?php
function getCurrentPage()
{
  $currentPage = basename($_SERVER['PHP_SELF']);
  return $currentPage;
}
?>
<header class="meuheader p-3">
  <img src="./fotos/logo.png" alt="Imagem do projeto destaque">
  <nav>
    <ul id="lista_responsiva" class="d-flex align-items-center">
      <li <?php if (getCurrentPage() == "index.php") echo 'class="ativo"'; ?>>
        <a href="index.php">
          <span class="menu-icon">
            <i class="bi bi-house-door-fill"></i>
          </span>
          <span class="menu-text">Home</span>
        </a>
      </li>
      <li <?php if (getCurrentPage() == "atividades.php") echo 'class="ativo"'; ?>>
        <a href="atividades.php">
          <span class="menu-icon">
            <i class="bi bi-calendar-check-fill"></i>
          </span>
          <span class="menu-text">Atividades</span>
        </a>
      </li>
      <li <?php if (getCurrentPage() == "formulario.php") echo 'class="ativo"'; ?>>
        <a href="formulario.php">
          <span class="menu-icon">
            <i class="bi bi-envelope-fill"></i>
          </span>
          <span class="menu-text">Contato</span>
        </a>
      </li>
      <li <?php if (getCurrentPage() == "localizacao.php") echo 'class="ativo"'; ?>>
        <a href="localizacao.php">
          <span class="menu-icon">
            <i class="bi bi-geo-alt-fill"></i>
          </span>
          <span class="menu-text">Local</span>
        </a>
      </li>
    </ul>
  </nav>
</header>

