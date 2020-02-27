<?php 
$verifica = $db -> query("SELECT * FROM usuarios");               //QUERY PARA LEER LA BD 
$consul = $verifica -> fetchAll(PDO::FETCH_ASSOC);

function verificarMail($usuariosDb, $email, $pass){           //LE PASO LA BD + EL MAIL INGRESADO POR EL USUARIO Y EL PASS
foreach ($usuariosDb as $user) {                             //RECORRO LA BD
  if ($user['email'] == $email) {                           //SI COINCIDE  MAIL INGRESADO CON EL DE LA BD 
    if (password_verify($pass, $user['password'])) {       //VERIFICO PASSWORD
       $_SESSION['usuario'] = $user['email'];              //SI ESTA BIEN LO GUARDO EN LA SESSION
      if(!empty($_POST["recordarme"])){                   //SI EL BOTON CHECKED ES MARCADO SETEO LAS COOKIES
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['apellido'] = $user['apellido'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['foto'] = $user['foto_perfil'];
         }
        header('Location: perfil-usuario.php');
    }
    else {$errores['pass'] = 'La clave no es correcta'; }
  }
}
    Echo "El usuario no existe";
}

if ($_POST) {
  $password = $_POST['pass'];
  $mail = $_POST['email'];
  verificarMail($consul, $mail, $password);
}

?>