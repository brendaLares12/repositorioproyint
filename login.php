
<?php
  session_start();
  require_once 'funciones/funciones.php';

$erroresLogin="";

if($_POST){
  $erroresLogin = validarRegistracion($_POST);
  if(count($erroresLogin) == 0) {
     $usuariosGuardados = file_get_contents('usuarios.json');
     $usuariosGuardados = explode(PHP_EOL,$usuariosGuardados);
     array_pop($usuariosGuardados);
     foreach($usuariosGuardados as $usuario){
         $usuarioFinal = json_decode($usuario, true);
         if($usuarioFinal['email'] == $_POST['email']) {
            if (password_verify($_POST['pass'], $usuarioFinal['pass']) ){
              $SESSION['emailUsuario'] == $usuarioFinal['email'];
              if (isset($_POST['recordarme']) && $_POST['recordarme'] =='on'){
                 setcookie('emailUsuario', $usuarioFinal['email'], time() + 60 * 60 * 24 * 7);
                 setcookie('passUsuario', $usuarioFinal['pass'], time() + 60 * 60 * 24 * 7);
              }
              header('Location: index.php');
            }

         }
     }
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
    <div class="container">
    <?php require_once 'HeadyFoot/header.php'  ?>

          <div class="contenedor-login">
          <div class="contenedor-form">
            <h2>Ingresar Usuario</h2>
            <form class="formulario" method="POST">

                  <label for="email">Email de Usuario</label>
                  <input type="email" name="email" placeholder="Ingresa email" class="form-control" id="email" value="">
                  <small class="text-danger"><?= isset($erroresLogin['apellido']) ? $erroresLogin['apellido'] : "" ?></small>


                  <label for="pass">Contraseña</label>
                  <input type="password" name="pass" placeholder="Ingresa contraseña" class="form-control" id="pass" value="" >
                  <small class="text-danger"><?= isset($erroresLogin['apellido']) ? $erroresLogin['apellido'] : "" ?></small>

                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="recordarme" name="recordarme">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>

              <button class="boton-ingresar" name="button" type="submit" >Ingresar</button>
              <br>
              <br>
              <button class="boton-volver" type="button" name="button" onclick="history.back()">Volver</button>
              </form>
          </div>
        </div>
        <?php require_once 'HeadyFoot/footer.php' ?>

  </body>
</html>
