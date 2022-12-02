<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basedatosproyecto";

$conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conexion){
    die("No hay conexion: ".mysqli_connect_error());
}
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$query = mysqli_query($conexion,"SELECT * FROM socios WHERE email= '".$usuario."' AND passW = '".$password."'");

$nr = mysqli_num_rows($query);
if($nr == 1){
    $nombre = mysqli_query($conexion,"SELECT nombre FROM socios WHERE email= '".$usuario."' AND passW = '".$password."'");
    header("Location: home.html");
}
else if ($nr == 0){
    echo "A donde vas perdidirijillo?";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "CONTRASEÑA ERRONEA, TE VOY A HAKIAR";
    header("Location: index.html");
}




?>