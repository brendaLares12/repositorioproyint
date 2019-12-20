<?php
session_start();
require_once 'funciones/funciones.php';

$errores = "";

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
  <link rel="icon" type="image/png" href="img/icono-pag.png" />
</head>

<body>
  <main style="margin-top:200px">
    <?php require_once 'HeadyFoot/header.php' ?>

    <div class="container-form">
      <div class="contenedor-email">
        <h3 align="center">Cambiá tu contraseña</h3>
        <p align="center">Te enviaremos un email para que puedas cambiar tu contraseña.</p>
        <br>
        <div class="container-email">
          <form method="post" enctype="multipart/form-data">
            <label for="email"><strong>Email:</strong></label>
            <br>
            <div>
              <input type="email" id="email" class="campo-email" name="email" placeholder="Ingresa tu email">
            </div>
            <br>
            <div class="container-link">
              <a href="login.php" class="volver-login">Volver a Login</a>
            </div>
            <div class="button-enviar">
              <button class="enviar" name="button" type="submit">Enviar</button>
              <br>
              <br>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </main>
    <?php require_once 'HeadyFoot/footer.php' ?>
</body>

</html>