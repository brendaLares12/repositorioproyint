<?php
session_start();
session_destroy();
  setcookie('usuario', json_encode($usuarioFinal), time() -1);
  header('Location: index.php');

?>
