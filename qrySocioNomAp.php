<!DOCTYPE html>
<html lang="en">
    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "basedatosproyecto";
    
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conexion){
        die("No hay conexion: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM socionomap;";

    $result = mysqli_query($conexion, $sql);
    // $result = $conn->query($sql);
    // $mostrars = $result->fetch_All();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    <h2>Datos de la Tabla: Socios</h2>
    <div align="center">
        <table border="1" width="90%" border-color="white">
            <thead>
                <tr>
                    <th>Nombre  </th>
                    <th>Apellido paterno</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($mostrar= mysqli_fetch_array($result))  {
                ?>
            </tbody>
            <tr>
                <div>
                    <td> <?php echo $mostrar['nombre']; ?></td>
                    <td> <?php echo $mostrar['apellidoPaterno']; ?></td>

                </div>
            </tr>
            <?php }    ?>
        </table>
        <div>
            <input type="button" value="Volver" onclick="location.href='./qrySocio.html'">
        </div>
    </div>
</body>
</html>