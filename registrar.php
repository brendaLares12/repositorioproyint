<?php
  session_start();
  require_once 'funciones/funciones.php';

  $arrayDeErrores="";

  if($_POST){
    $arrayDeErrores = validarForm($_POST);
    if(count($arrayDeErrores) == 0)
      //registro al usuario
      $usuarioFinal=[
        'nombre'=>trim($_POST['nombre']),
        'apellido'=>trim($_POST['apellido']),
        'email'=>$_POST['email'],
        'pass'=>password_hash($_POST['pass'],PASSWORD_DEFAULT)
      ];
      //enviar datos del usuario a la BD
      $jsonDeUsuario=json_encode($usuarioFinal);
      file_put_contents('usuarios.json',$jsonDeUsuario , FILE_APPEND);
      header('Location: login.php');
      exit;
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
    <link rel="icon" type="image/png" href="img/icono-pag.png" />
  </head>
  <body>
    <div class="container">
      <?php require_once 'HeadyFoot/header.php'  ?>

      <div class="contenedor-registrar">
        <div class="contenedor-form">
          <h2>Registro de Usuario</h2>
      <form class="formulario" method="post" >
        <label for="nombre">Nombre:</label>
        <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre">
        <small class="text-danger"><?= isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ?></small>
        <!--=============================================================================================-->
        <label for="apellido">Apellidos:</label>
        <input name="apellido" type="text" id="apellido" class="form-control" placeholder="Apellidos">
        <small class="text-danger"><?= isset($arrayDeErrores['apellido']) ? $arrayDeErrores['apellido'] : "" ?></small>

        <!--=============================================================================================-->
        <label for="email">Correo:</label>
        <input name="email" type="text" id="email" class="form-control" placeholder="ejemplo@correo.com">
        <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
        <!--=============================================================================================-->

        <label for="pass">Contraseña:</label>
        <input name="pass" type="password" id="pass" class="form-control" placeholder="Contraseña">
        <small class="text-danger"><?= isset($arrayDeErrores['pass']) ? $arrayDeErrores['pass'] : "" ?></small>
        <!--=============================================================================================-->

        <label for="repass">Repetir Contraseña:</label>
        <input name="repass" type="password" id="repass" class="form-control" placeholder="Repetir contraseña">
        <small class="text-danger"><?= isset($arrayDeErrores['repass']) ? $arrayDeErrores['repass'] : "" ?></small>

        <button class="boton-registrar" type="submit" name="submit" class="button">Registrar</button>
        <br>
        <br>
        <button class="boton-volver" type="button" name="button" onclick="history.back()">Volver</button>
      </form>
        </div>
      </div>
      <?php require_once 'HeadyFoot/footer.php' ?>
    </div>
  </body>
</html>
