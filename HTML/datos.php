<?php
 include "../PHP/conexion.php";

 $sql = "SELECT * FROM usuarios";
 $resultado = mysqli_query($conn, $sql);

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
    <title>Muestra de datos</title>
</head>

<body>
    <main class="contenedor-datos">
        <div class="contenedor-datos__tabla">                   
            <div class="contenedor__tabla" style = "display: inline-block;">
                <div class="contenedor__encabezado">
                    <h1 class="titulo-listado" style="font-size : 4rem; text-align : center;">Listado de registros</h1>
                    <a class="boton" href="index.html" style="margin: auto;">
                        <img src="../IMG/salir.png" alt="Salir">
                    </a>
                </div> 
                <table class="tabla" style="margin-top: 4rem;">
                    <tr class="tabla__fila">
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo">UsuarioId</td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo">Nombre(s)</td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo">Apellidos</td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo">Alias</td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo">Password</td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna--titulo" colspan="2">Acciones</td>
                        
                    </tr>
                    <tbody>
                        <?php while($mostrar = mysqli_fetch_assoc($resultado)){ ?>
                    <tr class="tabla__fila">
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><?php echo $mostrar['usuarioId']; ?></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><?php echo $mostrar['nombre']; ?></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><?php echo $mostrar['apellido']; ?></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><?php echo $mostrar['alias']; ?></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><?php echo $mostrar['contrasena']; ?></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><a style="display: flex; justify-content:center;" class="boton-accion boton-accion--modificar" href="modificar.php?id=<?php echo $mostrar['usuarioId']; ?>"> Modificar </a></td>
                        <td style="font-size : 3rem; background-color : #e6eee4;" class="tabla__columna"><a style="display: flex; justify-content:center;" class="boton-accion boton-accion--eliminar" href="../PHP/eliminar.php?id=<?php echo $mostrar['usuarioId']; ?>"> Eliminar </a></td>                        
                    </tr>  
                    <?php } ?>  
                    </tbody>              
                </table>
                
            </div>
        </div>
    </main>
</body>

</html>