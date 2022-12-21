<?php
$servername = "localhost:3306";
$database = "registros";
$username = "root";
$password = "P4tr1c10";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Conexion Fallida: " . mysqli_connect_error());
      echo "<script>alert('Conexion fallida: '" .mysqli_connect_error()."'); </script>";      
}
else{
    //echo "<script>alert('Conectado correctamente a la base de datos'); </script>";
}  