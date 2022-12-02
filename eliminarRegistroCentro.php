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


$query = mysqli_query($conexion,"CALL eliminarcentro(".$id.")" );
// $query = mysqli_query($conexion,"CALL insertacentro('".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."')");


    header("Location: verCentro.php");




?>