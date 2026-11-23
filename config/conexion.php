<?php
$host = "localhost";
$db = "cecyjobs";
$usuario = "root";
$pass = "";

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db;charset=utf8mb4",$usuario,$pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("error de conexion".$e->getMessage());
}
?>