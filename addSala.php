<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basedatosproyecto";

$conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["nombre"];
$sala = $_POST["sala"];
$descripcion = $_POST["descripcion"];
$tamano = $_POST["tamano"];
$centro = $_POST["centro"];


$query = mysqli_query($conexion,"CALL insertasala('".$nombre."','".$sala."','".$descripcion."','".$tamano."','".$centro."')");
// $query = mysqli_query($conexion,"CALL insertacentro('".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."')");


    header("Location: addSala.html");




?>