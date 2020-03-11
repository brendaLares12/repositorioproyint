<?php
$dns = 'mysql:host=localhost;dbname=libreria_db;port=3306';
$user = 'root';
$password = '';
// $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $db = new PDO($dns, $user, $password);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo  "Hubo un error"; exit;
}


?>