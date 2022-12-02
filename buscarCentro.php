<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "basedatosproyecto";
    
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conexion){
        die("No hay conexion: ".mysqli_connect_error());
    }
    $id= $_POST["id"];
    $sql = "SELECT * FROM centros where id =".$id.";";
    $aidi = "SELECT id from centros where id =".$id.";";

    $result = mysqli_query($conexion, $sql);
    // $result = $conn->query($sql);
    // $mostrars = $result->fetch_All();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <title>Buscar centro de ocio por id</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example">
    <div class="form-div">
        <form action="buscarCentro.php" method="post">
            <h1 class="formTitle">Centro de Ocio</h1>
            <?php
                while ($mostrar= mysqli_fetch_array($result))  {
                ?>
            </form>
            <form action="buscarCentro.php" method="post">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="id" placeholder="ID" name="id" required value="<?php echo $mostrar['id'];?>">
                    <label for="nombre" >ID a buscar</label>
                    <button type="submit" class="btn">Buscar Registro</button>
                </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo $mostrar['nombre']; ?>" >
                        <label for="nombre" >Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion" value="<?php echo $mostrar['direccion']; ?>">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad" value="<?php echo $mostrar['ciudad']; ?>" >
                        <label for="ciudad">Ciudad</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="<?php echo $mostrar['telefono']; ?>" >
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $mostrar['correo']; ?>" >
                        <label for="correo">Correo</label>
                    </div>
                    
                </form>
            <?php }    ?>
            <button type="button" class="btn" onclick="location.href=`./home.html`">Volver</button>
        </form>
    </div>
</body>
</html>