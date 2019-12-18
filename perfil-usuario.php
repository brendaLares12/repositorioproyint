<?php
session_start();
if(!$_SESSION['usuario']){
 header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Muli&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ac70a7b0a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Literata:400,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Libreria Lablic</title>
    <link rel="icon" type="image/png" href="img/icono-pag.png"/>
  </head>
  <body>
  <div class="container">
  <?php require_once 'HeadyFoot/header.php'  ?>

<!--PERFIL-USUARIO-->
<!--INFORMACION-USUARIO-->
  <div class=titulo-perfil><h2>Mi Perfil</h2></div>

  <div class="row justify-content-around">
    <div class="col-4">
      <nav class="nav flex-column">
          <a class="nav-link active" href="#">Información Personal</a>
          <a class="nav-link" href="#">Libreta De Direcciones</a>
          <a class="nav-link" href="#">Mi Lista De Artículos</a>
          <a class="nav-link" href="#">Mis Consultas</a>
          <a class="nav-link" href="#">Formas de Pago</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </nav>
    </div>
    <div class="col-6">
      <div class="card-info-1">
        <h5 class="card-header">Información del usuario</h5>
        <div class="card-body-info">
          <h5 class="card-title-username">Datos del contacto</h5>
          <p class="card-text">Nombre de usuario: <?=$_SESSION['usuario']['nombre']?></p>
          <p class="card-text">Email: <?=$_SESSION['usuario']['email']?></p>
          <a href="" class="card-text">Cambiar contraseña</a>
          <br>
          <br>
          <a href="#" class="btn btn-primary">Editar</a>
        </div>
      </div>
      <br>
      <br>
        <h5 class="card-header">Libreta De Direcciones</h5>
          <div class="card-body-info">
            <h5 class="card-title-username">Dirección De Envío</h5>
            <p class="card-text">No ha establecido una dirección de envío predeterminada.</p>
            <a href="" class="card-text">Editar Dirección</a>
            <br>
            <br>
            <a href="#" class="btn btn-primary">Editar</a>
            <br>
            <br>
        <h5 class="card-title-username">Dirección de facturación</h5>
          <p class="card-text">No ha establecido una dirección de facturación predeterminada.</p>
          <a href="" class="card-text">Editar Dirección</a>
          <br>
          <br>
          <a href="#" class="btn btn-primary">Editar</a>
      </div>
    </div>
    </div>
    
<!--PERFIL-USUARIO-END-->
<?php require_once 'HeadyFoot/footer.php' ?>

  </div>
  </body>
</html>

