<?php

include "conexion.php";

$nombre = $_POST["txtNombre"];
$apellidos = $_POST["txtApellidos"];
$alias = $_POST["txtAlias"];
$password = $_POST["txtPassword2"];

$sql = "INSERT INTO usuarios (nombre,apellido,alias,contrasena) VALUES ('$nombre','$apellidos','$alias','$password')";
$resultado = mysqli_query($conn, $sql);
if ($resultado) {
      echo "<script>alert('Nuevo registro creado exitosamente'); window.location='../HTML/registrar.html';</script>";
      
} else {
      
      echo "<script> alert('Error al registrar'" . $sql . "<br>" . mysqli_error($conn) + "');</script>";
}

mysqli_close($conn);