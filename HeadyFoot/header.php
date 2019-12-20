<header class="fixed-top">

<?php

/*if (isset($_SESSION['usuario']['nombre'])) {
  $nombreUsuario = $_SESSION['usuario']['nombre'];
} 
if (isset($_SESSION['usuario']['archivo'])) {
  $avatar = $_SESSION['usuario']['archivo'];
}
  var_dump($avatar);exit;*/
?>
  <img src="img/icono-pag.png" alt="icono">
  <h1>Libreria Lablic</h1>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
    </button>
    <div class="vent-user dropdown-menu " style="position: absolute;will-change: transform;top: 0px;left: 0px;transform: translate3d(-200px, 38px, 0px);text-align-last: center;" aria-labelledby="btnGroupDrop1">
      <?php if (!isset($_SESSION['usuario'])) : ?>
        <a class="dropdown-item" href="login.php">Ingresar</a>
        <a class="dropdown-item" href="registrar.php">Registrar</a>
      <?php endif; ?>

      <?php if (isset($_SESSION['usuario'])) : ?>
        <a class="dropdown-item" href="perfil-usuario.php">
          <span class="rounded-circle border border-primary" style="background-image: url('<?= $_SESSION['usuario']['archivo']?>'); background-size: cover;  width:42px; height: 42px;"></span>
          Hola <?= $_SESSION['usuario']['nombre'] ; ?>
        </a>
        <a class="dropdown-item btn-danger" href="logout.php" value="salir">Salir</a>
      <?php endif; ?>
    </div>
  </div>

  <button onclick="location.href='carrito.php'" type="button" class="btn btn-transparent btn-compra"><i class="fas fa-shopping-cart"></i></button>

  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Libros</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="listado-productos.php#LiteraturaUni">Literatura Universal</a>
            <a class="dropdown-item" href="listado-productos.php#LiteraturaInf">Literatura Infantil/Juvenil</a>
            <a class="dropdown-item" href="listado-productos.php#HistoriaUni">Historia Universal</a>
            <div class="dropdown-divider"></div>
          </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Papelería</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="listado-productos.php#Utiles">Útiles Escolares</a>
            <a class="dropdown-item" href="listado-productos.php#LibyAg">Libretas y Agendas</a>
            <a class="dropdown-item" href="listado-productos.php#Tarj-Kraft">Tarjetas y Bolsas kraft</a>
            <div class="dropdown-divider"></div>
          </div>

        <li class="nav-item">
          <a class="nav-link" href="faq.php">F.A.Q</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Ingresa palabra clave">
        <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
          <i class="fas fa-search"></i>
        </button>
      </form>
      <br>
    </div>
  </nav>
</header>