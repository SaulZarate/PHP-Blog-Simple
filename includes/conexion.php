<?php
// Conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$puerto = "3308";
$db = mysqli_connect($servidor, $usuario, $password, $basededatos,$puerto);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}