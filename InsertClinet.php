<?php

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = ""; // Por defecto, en XAMPP la contraseña está vacía
$db_name = "TiendaJDTM";

$Nombre=$_REQUEST['Nombre'];
$Apellido=$_REQUEST['Apellido'];
$telefono=$_REQUEST['telefono'];
$email=$_REQUEST['email'];

// Crear conexión
$link= mysqli_connect($servername, $username, $password,$db_name)or die("Error");

$query="INSERT INTO Clientes (Nombre, Apellidos, telefono, email)values('$Nombre','$Apellido','$telefono','$email')";

if(mysqli_query($link,$query))
{
    print("Se guardo a: " . $Nombre);
}
else
{
    print("NO Seguardo a: " . $Nombre);
}

mysqli_close($link);

?>