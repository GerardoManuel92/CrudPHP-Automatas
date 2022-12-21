<?php
 include "../PHP/conexion.php";
 
 $id=$_GET['id'];
 $sql = "SELECT * FROM usuarios WHERE usuarioId=$id";
 $query = mysqli_query($conn, $sql);
 while($row=mysqli_fetch_assoc($query)){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Modificar Registros</title>
</head>
<body>
    <main class="contenedor-datos">
        <div class="contenedor__registros">
            <form class="contenedor__registros--formulario" action="../PHP/update.php" method="post">
                <fieldset>
                    <legend>Agregar los nuevos datos a almacenar</legend>
                    <div class="registro">
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Id usuario</label>
                            <input class="registro__campos--input" type="hidden" name="txtId" id="txtId" value=" <?php echo $row['usuarioId'] ?>">
                        </div>
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Nombre</label>
                            <input class="registro__campos--input" type="text" name="txtNombre" id="txtNombre" value=" <?php echo $row['nombre'] ?>">
                        </div>
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Apellido</label>
                            <input class="registro__campos--input" type="text" name="txtApellido" id="txtApellido" value=" <?php echo $row['apellido'] ?>">
                        </div>
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Alias</label>
                            <input class="registro__campos--input" type="text" name="txtAlias" id="txtAlias" value=" <?php echo $row['alias'] ?>">
                        </div>
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Password</label>
                            <input class="registro__campos--input" type="password" name="txtPassword1" id="txtPass1" value=" <?php echo $row['contrasena'] ?>">
                        </div>
                        <div class="registro__campos">
                            <label class="registro__campos--label" for="">Confirmar Password</label>
                            <input class="registro__campos--input" type="password" name="txtPassword2" id="txtPass2" value=" <?php echo $row['contrasena'] ?>">
                        </div>
                        <div class="registro__botones">
                            <button class="boton" type="submit">
                                <img src="../IMG/registrar.png" alt="Registrar">
                            </button>                            
                            <a class="boton" href="datos.php">
                                <img src="../IMG/salir.png" alt="Salir">
                            </a>
                        </div>  
                    </div>
                </fieldset>
            </form>
            <?php
                }
            ?>
        </div>
    </main>
    <script src="../JS/modificar.js"></script>
</body>
</html>

