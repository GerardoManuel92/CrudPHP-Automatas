<?php

include "conexion.php";

$id = $_POST["txtId"];
$nombre = $_POST["txtNombre"];
$apellidos = $_POST["txtApellido"];
$alias = $_POST["txtAlias"];
$password = $_POST["txtPassword2"];

$sql = "UPDATE usuarios SET nombre='$nombre',apellido='$apellidos',alias='$alias',contrasena='$password' WHERE usuarioId='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registro modificado correctamente'); window.location='../HTML/datos.php';</script>";
    
} else {
    
    echo "<script> alert('Error al modificar registro'" . $sql . "<br>" . mysqli_error($conn) + "'); window.location='../HTML/modificar.php';</script>";
}

mysqli_close($conn);