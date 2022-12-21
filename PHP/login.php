<?php

include "conexion.php";

$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];

$sql = "SELECT * FROM usuarios WHERE alias='".$usuario."' and contrasena ='".$password."'";

$resultado = mysqli_query($conn, $sql);
if ($log = mysqli_fetch_assoc($resultado)) {
      echo "<script>alert('Autenticacion exitosa'); window.location='../HTML/datos.php';</script>";
      
} else {
      
      echo "<script> alert('Credenciales incorrectas'" . $sql . "<br>" . mysqli_error($conn) + "');window.location='../HTML/index.html';</script>";
}

mysqli_close($conn);