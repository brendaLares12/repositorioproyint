<?php
session_start();
include_once('pdo.php');
require_once 'funciones/funciones.php';
require_once 'funciones/funcLogin.php';
if(!empty($_POST["remember"])){
setcookie('email', $user['email'], time()+3600);
        setcookie('password', $_POST['pass'], time()+3600);
        setcookie('checked', 'recordarme', time()+3600);}

// if(isset($_SESSION['usuario'])){
//     header("Location: perfil-usuario.php");
//   }
//   if(isset($_COOKIE['usuario'])){
//     $_SESSION['usuario']= json_decode($_COOKIE['usuario'], true);
//   }

$arrayDeErrores = "";

// if ($_POST) {
//   $arrayDeErrores = validarRegistracion($_POST);
//   if (count($arrayDeErrores) === 0) {
//     $usuariosGuardados = file_get_contents('usuarios.json');
//     $usuariosGuardados = explode(PHP_EOL, $usuariosGuardados);
//     array_pop($usuariosGuardados);
//     foreach ($usuariosGuardados as $usuario) {
//       $usuarioFinal = json_decode($usuario, true);
//       if ($usuarioFinal['email'] == $_POST['email']) {
//         if (password_verify($_POST['pass'], $usuarioFinal['pass'])) {
//           $_SESSION['usuario'] = $usuarioFinal;
//           if (isset($_POST['recordarme']) && ($_POST['recordarme']) == true) {
//             setcookie('usuario', json_encode($usuarioFinal), time() + 604800);
//           }
//           header('Location: perfil-usuario.php');
//         } else {
//           $errores['pass'] = 'La clave no es correcta';
//         }
//       }
//     }
//   }
// } else {
//   if (isset($_COOKIE['usuario'])) {
//     $_SESSION['usuario'] = json_decode($_COOKIE['usuario'], true);
//   }
//   if (isset($_SESSION['usuario'])) {
//     header('Location: perfil-usuario.php');
//   }
// }

// $verifica = $db -> query("SELECT * FROM usuarios");               //QUERY PARA LEER LA BD 
// $consul = $verifica -> fetchAll(PDO::FETCH_ASSOC);

// function verificarMail($usuariosDb, $email, $pass){           //LE PASO LA BD + EL MAIL INGRESADO POR EL USUARIO Y EL PASS
// foreach ($usuariosDb as $user) {                             //RECORRO LA BD
//   if ($user['email'] == $email) {                           //SI COINCIDE  MAIL INGRESADO CON EL DE LA BD 
//     if (password_verify($pass, $user['password'])) {       //VERIFICO PASSWORD
//        $_SESSION['usuario'] = $user['email'];              //SI ESTA BIEN LO GUARDO EN LA SESSION
//       if(!empty($_POST["recordarme"])){                   //SI EL BOTON CHECKED ES MARCADO SETEO LAS COOKIES
//         setcookie('usuario', $_POST['email'], time()+3600);
//         setcookie('password', $_POST['pass'], time()+3600);
//         setcookie('checked', 'recordarme', time()+3600);
//         }
//         header('Location: index.php');
//     }
//     else {$errores['pass'] = 'La clave no es correcta'; }
//   }
// }
//     Echo "El usuario no existe";
// }

// if ($_POST) {
//   $password = $_POST['pass'];
//   $mail = $_POST['email'];
//   verificarMail($consul, $mail, $password);
// }

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
    <div class="contenedor-login">
      <div class="contenedor-form">
        <h2>Ingresar Usuario</h2>
        <form method="post">
          <div class="form-group">
            <label for="email"><strong>Email de Usuario</strong></label>
            <input type="email" name="email" placeholder="Ingresa email" class="form-control" id="email" value="<?= persistirDato($arrayDeErrores, 'email') ?>">
            <small class="text-danger"><?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?></small>
          </div>

          <div class="form-group">
            <label for="pass"><strong>Contraseña</strong></label>
            <input type="password" name="pass" placeholder="Ingresa contraseña" class="form-control" id="pass" value="">
            <small class="text-danger"><?= isset($arrayDeErrores['pass']) ? $arrayDeErrores['pass'] : "" ?></small>
          </div>

          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="recordarme" name="recordarme" value="true">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            <br>
            <br>
            <!-- ¿Olvidaste tu contraseña?-->
            <div class="link">
              <a href="forgot-password.php">¿Olvidaste tu contraseña?</a>
            </div>
          </div>
          <p>
            <a href="registrar.php">Si no tiene usuario registrese</a>
          </p>
          <form class="formulario" method="POST">
            <button class="boton-ingresar" name="button" type="submit">Ingresar</button>
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
