<?php
$verif = $db -> query("SELECT * FROM usuarios"); //QUERY PARA LEER LA BD 
$usuario = $verif -> fetchAll(PDO::FETCH_ASSOC);

function verificarUsuario($user, $ingreso) {  //VERIFICA QUE EL MAIL NO EXISTE (DEBE SER UNICO EN LA BD)
  if (!empty($user)) {
    foreach ($user as $usuario) {
    if ($usuario['email'] == $ingreso) {return false;}
    else {return true;}
  }}
  else {return true;}
}

if(isset($_POST['email'])) {
    $ingre = $_POST['email'];
if (verificarUsuario($usuario, $ingre)){ //SI EL MAIL ES UNICO PREPARO EL INGRESO DE DATOS
  $consul = $db -> prepare("INSERT INTO usuarios (nombre, apellido, password, email, foto_perfil) VALUES (:nombre, :apellido, :password, :email, :fotoPerfil)");
  $consul -> bindValue(":nombre", $_POST['nombre']);
  $consul -> bindValue(":apellido", $_POST['apellido']);
  $consul -> bindValue(":password", password_hash($_POST['pass'], PASSWORD_DEFAULT));
  $consul -> bindValue(":email", $_POST['email']);
  $consul -> bindValue(":fotoPerfil", file_get_contents($_FILES["archivo"]["tmp_name"]));
  $consul -> execute();
  header('Location: login.php'); exit;
  }
else {Echo "El usuario ya existe"; header('Location: registrar.php');
          exit; } //SI EL MAIL EXISTE TIRA ESTE ERROR
}
?>