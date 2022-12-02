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
$apP = $_POST["apP"];
$apM = $_POST["apM"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$fechaAlta = $_POST["fechaAlta"];


$query = mysqli_query($conexion,"CALL insertasocio('".$nombre."','".$apP."','".$apM."','".$telefono."','".$correo."','".$password."','".$fechaNacimiento."','".$fechaAlta."')");
// $query = mysqli_query($conexion,"SELECT * FROM socios WHERE email= '".$usuario."' AND password = '".$password."'");

    header("Location: addSocio.html");




?>