<?php

include "conexion.php";

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE usuarioId='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('El registro se ha eliminado correctamente'); window.location='../HTML/datos.php';</script>";
    
} else {
    
    echo "<script> alert('Error al eliminar registro'" . $sql . "<br>" . mysqli_error($conn) + "'); window.location='../HTML/modificar.php';</script>";
}

mysqli_close($conn);