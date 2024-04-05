<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton con el name:registrar haya sido presionado
if(isset($_POST['registrar'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['numempleado'];
$apellidopa = $_POST['apellidopa'];
$apellidoma = $_POST['apellidoma'];
$nombre = $_POST['nombre'];
$fechanacimiento = $_POST['fechanacimiento'];
$area = $_POST['area'];
$puesto = $_POST['puesto'];
$fechaingreso = $_POST['fechaingreso'];
$contra = $_POST['contra'];
$contrase = $_POST['contrase'];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO usuarios (numempleado, apellidopa, apellidoma, nombre,fechanacimiento,area, puesto,fechaingreso,contra,contrase) 
VALUES  ( '$usuario', '$apellidopa', '$apellidoma', '$nombre', '$fechanacimiento','$area','$puesto','$fechaingreso','$contra', '$contrase')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado);
		// Iserción correcta
		echo "¡Se insertaron los datos correctamente!";
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
	//validamos las contraseñas
    if($contra == $contrase){
    echo "las contraseñas son correctas" ;
	} else {
		echo "Pero Lo sentimos tus contraseñas son distintas, verifica tus contraseñas!";
	  }
    
?>



