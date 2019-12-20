<?php
session_start();
require_once 'funciones/funciones.php';
if(isset($_SESSION['usuario'])){
 header("Location: index.php");
}

$arrayDeErrores = "";

if ($_POST) {
  $arrayDeErrores = validarRegistracion($_POST);
  if (count($arrayDeErrores) === 0) {
    recorrerJson(abrirJson(),infoUsuario());
    //informacion del usuario
    infoUsuario();
    $usuarioFinal=infoUsuario();
    
    //enviar datos del usuario a la BD
    $jsonDeUsuario = json_encode($usuarioFinal);
    file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
    
    $_SESSION['usuario'] = $usuarioFinal;
    header('Location: login.php');
    exit;
  }
  if ($_POST['recordar']=="recordar"){
      setcookie('usuario', json_encode($usuarioFinal), time()+(60*60*24*365),"/");   
   }
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
  <?php require_once 'HeadyFoot/header.php' ?>
  <main style="margin-top:200px">
    <div class="contenedor-registrar">
      <div class="contenedor-form">

        <h2>Registro de Usuario</h2>

        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre"><strong>Nombre:</strong></label>
            <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" value="<?= persistirDato($arrayDeErrores, 'nombre'); ?>">
            <!-------------------------------------- (CONDICION)            ?            A              : B -->
            <small class="text-danger"><?= isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ?></small></div>
          <!--=============================================================================================-->
          <div class="form-group">
            <label for="apellido"><strong>Apellidos:</strong></label>
            <input name="apellido" type="text" id="apellido" class="form-control" placeholder="Apellidos" value="<?= persistirDato($arrayDeErrores, 'apellido'); ?>">
            <small class="text-danger"><?= isset($arrayDeErrores['apellido']) ? $arrayDeErrores['apellido'] : "" ?></small>
          </div>

          <!--============================================================================================-->
          <div class="form-group">
            <label for="email"><strong>Correo:</strong></label>
            <input name="email" type="text" id="email" class="form-control" placeholder="ejemplo@correo.com" value="<?= persistirDato($arrayDeErrores, 'email'); ?>">
            <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
          </div>
          <!--=============================================================================================-->

          <div class="form-group">
            <label for="pass"><strong>Contraseña:</strong></label>
            <input name="pass" type="password" id="pass" class="form-control" placeholder="Contraseña" value="<?= persistirDato($arrayDeErrores, 'pass'); ?>">
            <small class="text-danger"><?= isset($arrayDeErrores['pass']) ? $arrayDeErrores['pass'] : "" ?></small>
          </div>
          <!--=============================================================================================-->

          <div class="form-group">
            <label for="repass"><strong>Repetir Contraseña:</strong></label>
            <input name="repass" type="password" id="repass" class="form-control" placeholder="Repetir contraseña" value="<?= persistirDato($arrayDeErrores, 'repass'); ?>">
            <small class="text-danger"><?= isset($arrayDeErrores['repass']) ? $arrayDeErrores['repass'] : "" ?></small>
          </div>

          <div class="form-group">
            <label for="archivo"><strong>Foto de perfil:</strong></label>
            <input name="archivo" type="file" id="archivo">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="recordar" value="recordar" name="recordar">
            <label class="form-check-label" for="recordar">Recordarme</label>
          </div>
          <button class="boton-registrar" type="submit">Registrar</button>
          <br>
          <br>
          <button class="boton-volver" type="button" name="button" onclick="history.back()">Volver</button>
        </form>
      </div>
      </div>
  </main>
  <?php require_once 'HeadyFoot/footer.php' ?>

</body>

</html>
