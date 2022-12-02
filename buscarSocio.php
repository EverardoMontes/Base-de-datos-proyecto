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
    $sql = "SELECT * FROM socios where id =".$id.";";

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
    <title>Buscar Socio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example">
    <div class="form-div">
        <form action="buscarSocio.php" method="post">
            <h1 class="formTitle">Socio</h1>
            <?php
                while ($mostrar= mysqli_fetch_array($result))  {
                ?>
            </form>
            <form action="buscarSocio.php" method="post">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="id" placeholder="ID" name="id" required value="<?php echo $mostrar['id'];?>">
                <label for="nombre" >ID a buscar</label>
                <button type="" class="btn">Buscar registro</button>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required value="<?php echo $mostrar['nombre'];?>">
                <label for="bombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellidoP" placeholder="Apellido Paterno" name="apP" value="<?php echo $mostrar['apellidoPaterno'];?>">
                <label for="apellidoP">Apellido Paterno</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellidoM" placeholder="Apellido Materno" name="apM" value="<?php echo $mostrar['apellidoMaterno'];?>">
                <label for="apellidoM">Apellido Materno</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="Tel" placeholder="Teléfono" name="telefono" value="<?php echo $mostrar['telefono'];?>">
                <label for="Tel">Teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="Email" placeholder="Correo" name="correo" value="<?php echo $mostrar['email'];?>">
                <label for="Email">Correo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="password" placeholder="Contraseña" name="password" value="<?php echo $mostrar['passW'];?>">
                <label for="password">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="fechaNac" placeholder="Fecha de Nacimiento" name="fechaNacimiento" value="<?php echo $mostrar['fecha_nacimiento'];?>">
                <label for="fechaNac">Fecha de Nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="fechaAlta" placeholder="Fecha de Alta" name="fechaAlta" value="<?php echo $mostrar['fecha_alta'];?>">
                <label for="fechaAlta">Fecha de Alta</label>
            </div>
            <button type="button" class="btn" onclick="location.href=`./home.html`">Volver</button>
                </form>
            <?php }    ?>
        </form>
    </div>
</body>
</html>