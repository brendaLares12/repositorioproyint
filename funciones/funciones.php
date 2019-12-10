<?php

function pre($algo) {
  echo '<pre>';
  var_dump($algo);
  echo '</pre>';
}

function validarRegistracion($array){
  $errores=[];
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

function guardarFotoPerfil(){
  if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
    $nombre=$_FILES["archivo"]["name"];
    $archivo=$_FILES["archivo"]["tmp_name"];
    $ext=pathinfo($nombre,PATHINFO_EXTENSION);

    $miArchivo= "imagenPerfil/";
    $miArchivo=$miArchivo . uniqid() . "." . $ext;
    move_uploaded_file($archivo, $miArchivo);

  }
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
 ?>
