<?php
//Definimos las credenciales de la base de datos
$servidor = "localhost"; //servidor de la base de datos
$usuario = "root"; //usuario de la base de datos
$password = "";   //contraseña de la base de datos 
$base_de_datos= "empleados"; //nombre de la base de datos

//Creamos la conexion con la base de datos utilizando la funcion msqli_conexionect
$conexion = mysqli_connect($servidor, $usuario, $password, $base_de_datos);

// verificamos si la coneccion fue exitosa
if (!$conexion) {
    die("conexion fallida: " . msqli_connect_error()); // si la conexion falla, se muestra un mensaje de error y se termina la ejecucion
}

//Ejecutamos una consulta a la base de datos utilizando la funcion mysqli_query
$sql="SELECT * FROM usuarios"; // creamos la consulta
$resultado = mysqli_query($conexion, $sql); // ejecutamos la consulta y guardamos el resultado en una variable

?>

 