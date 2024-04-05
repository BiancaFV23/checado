<?php
session_start();
session_destroy();




// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton de aceptar con el name:"enviar" haya sido presionado
if(isset($_POST['enviar'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['numempleado'];
$contrase = $_POST['contrase'];



// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM usuarios WHERE numempleado = '$usuario' and contrase = '$contrase' ";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		
		// Inicio de sesión exitoso
       
		echo "<div style='color: green; font-size: 40px;' 
        >Inicio de sesión exitoso. Bienvenido, " . $usuario ."!</div>";
	
	} else {
		// Credenciales inválidas
		echo "<div style='color: red; font-size: 30px;' 
        >Datos inválidos. Por favor, verifica tu numero de empleado y/o contraseña.</div>"; 
        
		
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style type="text/css">
    
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
    font-family: 'Calibri';
}
body{
    font-family: 'Calibri';
	background-image: url(img/coppel.png);
	background-size: cover;
}
nav{
	max-width: 900px;
	margin: auto;
	background-color: #333;
	font-size: 20px;
	margin-top: 50px;
}
.menu-horizontal{
	list-style: none;
	display: flex;
	justify-content: space-around;
}
.menu-horizontal > li > a{
	display: block;
	padding: 15px 20px;
	color: white;
	text-decoration: none;
}
.menu-horizontal > li:hover{
	background-color:blue;
}
.menu-vertical{
	position: absolute;
	display: none;
	list-style: none;
	width: 200px;
	background-color: rgba(0, 0, 0, .5);
}
.menu-horizontal li:hover .menu-vertical{
	display: block;
}
.menu-vertical li:hover{
	background-color: black;
}

.menu-vertical li a{
	display: block;
	color: white;
	text-decoration: none;
	padding: 15px 15px 15px 20px;
}

#html{
	margin: auto;
	padding: 20px;
	max-width: 900px;
	background: white;

}
.regresar{
        background: #1A5276;
        font-family:'Calibri';
        color: white;
        font-size: 20px;
        width: 20%;
        padding: 5px;
        text-align:center;
        text-decoration: none;

      }
</style>
</head>
<body>
<a class="regresar" href="acceso.html">REGRESAR</a>
        <nav>
            <ul class="menu-horizontal">
                <li>
                    <a href="empleados.html">+ Registros</a>
                    <ul class="menu-vertical">
                    </ul>
                </li> 
                <li>
                    <a href="#">Consultar</a>
                    <ul class="menu-vertical">
                        <li><a href="consultaempleados.php">Registros de empleados</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html">Checador</a>
                    <ul class="menu-vertical">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Prenomina</a>
                    <ul class="menu-vertical">
                        <li><a href="calcular.html">Calcular</a></li>
                        <li><a href="#">Horas trabajadas</a></li>
                        <li><a href="#">Horas extras</a></li>
                        <li><a href="#">Retardos</a></li>
                        <li><a href="#">Faltas</a></li>
                        <li><a href="#">Faltas Justificadas</a></li>
                    </ul>
                </li>
            </ul>
            
        </nav>
        
</body>
</html>


 
