<?php
session_start();
$conexion = new mysqli(/*localhost*/,/*user*/,/*password*/,/*database*/);
$usuario = $_POST['user'];
$pass = $_POST['password'];
$_SESSION['user'] = $usuario;
$query = "SELECT * FROM usuario WHERE username = ".$usuario." AND password = " . $pass ." LIMIT 1";
if(!$conexion->query($query)) /*redireccion pagina error*/
/*redireccion pagina principal*/
header("location: index.php");
?>
