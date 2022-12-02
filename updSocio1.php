<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basedatosproyecto";

$conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}
// $id = $_POST['id'];
// $nombre = $_POST['nombre'];
// $tipoSala = $_POST['tipoSala'];
// $descripcion = $_POST['descripcion'];
// $tamaño = $_POST['tamaño'];
// $centro = $_POST['centro'];


// $query = mysqli_query($conexion,"CALL actualizarsala(".$id.",'".$nombre."','".$tipoSala."','".$descripcion."','".$tamaño."','".$centro."');");
// $query = mysqli_query($conexion,"CALL insertacentro('".$nombre."','".$direccion."','".$ciudad."','".$telefono."','".$correo."')");
$id = $_POST['id'];
$nombre = $_POST["nombre"];
$apP = $_POST["apP"];
$apM = $_POST["apM"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$fechaAlta = $_POST["fechaAlta"];


$query = mysqli_query($conexion,"CALL actualizarsocio('".$id."','".$nombre."','".$apP."','".$apM."','".$telefono."','".$correo."','".$password."','".$fechaNacimiento."','".$fechaAlta."')");

    header("Location: updSocio.html");




?>