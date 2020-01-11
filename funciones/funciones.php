<?php

function pre($algo) {
  echo '<pre>';
  var_dump($algo);
  echo '</pre>';
}

function validarRegistracion($array){
  $errores=[];
  $_SESSION['erroremail'] ="";
  
  //validacion de nombre
  if (isset($array["nombre"])) {
    if (empty($array["nombre"])) {
      $errores["nombre"]="El campo no debe estar vacio";
    }
    elseif (strlen($array["nombre"]) < 2) {
      $errores["nombre"]="El nombre debe tener mas de dos caracteres";
    }
  }
  //validacion de apellido
  if (isset($array["apellido"])) {
    if (empty($array["apellido"])) {
      $errores["apellido"]="El campo no debe estar vacio";
    }
    elseif (strlen($array["apellido"]) < 2) {
      $errores["apellido"]="El apellido debe tener mas de dos caracteres";
    }
  }
  //validacion de email
  if (isset($array["email"])) {
    if (empty($array["email"])) {
      $errores["email"]="El campo no debe estar vacio";
    }
    elseif (!filter_var($array["email"],FILTER_VALIDATE_EMAIL)) {
      $errores["email"]="Debes ingresar un email valido";
    }
  }
  //validacion de contraseña
  if (isset($array["pass"])) {
    if (empty($array["pass"])) {
      $errores["pass"]="Debe completar este campo";
    }
    elseif (strlen($array["pass"])<6) {
      $errores["pass"]="La contraseña debe tener como minimo 6 caracteres";
    }
  }
  if (isset($array["repass"])) {
    if (empty($array["repass"])) {
      $errores["repass"]="Debe completar este campo";
    }
    if ($array["repass"] != $array["pass"]) {
      $errores["repass"]="Las contraseñas deben coincidir";
    }
  }
  return $errores;
}

// function infoUsuario(){
//   $usuarioFinal = [
//     'id' => uniqid(),
//     'nombre' => trim($_POST['nombre']),
//     'apellido' => trim($_POST['apellido']),
//     'email' => $_POST['email'],
//     'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT)
//   ];
//   if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
//     if (pathinfo($_FILES['userimage']['name'], PATHINFO_EXTENSION) == 'jpg' || pathinfo($_FILES['userimage']['name'], PATHINFO_EXTENSION) == 'jpeg' || pathinfo($_FILES['userimage']['name'], PATHINFO_EXTENSION) == 'png'){
//       $archivo = $_FILES["archivo"]["tmp_name"];
//       $nombre = pathinfo($_FILES['archivo']['name'], PATHINFO_FILENAME);
//       $ext = pathinfo($nombre, PATHINFO_EXTENSION);

//       move_uploaded_file($archivo, 'imagenPerfil/' . $nombre . '.' . $ext);
//       $usuarioFinal['image'] = 'imagenPerfil/' . $nombre . '.' . $ext;

//     }
//   };
//   return $usuarioFinal;
// }

function abrirJson(){
  $jsonDeUsuario = file_get_contents('usuarios.json');
  $usuarios = json_decode($jsonDeUsuario, true);
  return $usuarios;
}

function persistirDato($arrayErrores,$string){
  if (isset($arrayErrores[$string])) {
    return "";
  }else {
    if (isset($_POST[$string])) {
      return $_POST[$string];
    }
  }
}

function recorrerJson($usuarios,$usuarioFinal){
  for ($i = 0; $i < count($usuarios); $i++) {
    foreach ($usuarios[$i] as $key => $value) {
      if ($key == $_POST['email']) {
        if ($value == $usuarioFinal['email']) {
          $_SESSION['erroremail'] = "El usuario ya existe";
          header('Location: registrar.php');
          exit;
        };
      };
    }
  }
}
 ?>
