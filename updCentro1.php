<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basedatosproyecto";

$conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];


$query = mysqli_query($conexion,"CALL actualizarcentro(".$id.",'".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."');");
// $query = mysqli_query($conexion,"CALL insertacentro('".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."')");


    header("Location: updCentro.html");




?>