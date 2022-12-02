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
$tipoSala = $_POST['tipoSala'];
$descripcion = $_POST['descripcion'];
$tamaño = $_POST['tamaño'];
$centro = $_POST['centro'];


$query = mysqli_query($conexion,"CALL actualizarsala(".$id.",'".$nombre."','".$tipoSala."','".$descripcion."','".$tamaño."','".$centro."');");
// $query = mysqli_query($conexion,"CALL insertacentro('".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."')");


    header("Location: updSala.html");




?>