<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta_Registros_Empleados</title>
    <style type="text/css">
    *{
	    margin: 0;
	    padding: 0;
	    box-sizing: border-box;
      font-family: 'Calibri';
    }
     table {
        font-size: 12px;
        font-family: 'Calibri';
        border: 3px solid fae767;
        padding: 40px 50px;
        margin-top: 50px;
        border-radius: 20px;
        background-color:#378FD0 ;
        align: center;
      }
        th, h1 {
        background-color:#A9CCE3;
        font-family: 'Calibri';
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
        font-family: 'Calibri';
      }
      h3{
        color:black ;
        font-size: 30px;
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 10px;
        font-family: 'Calibri';
      }
      body{
        background-image: url('img/coppel.png');
        background-repeat: repeat;
        background-size:50% 50%;
      }
      .regresar{
        background: #378FD0;
        font-family:'Calibri';
        color: black;
        font-size: 20px;
        width: 20%;
        padding: 5px;
        text-align:center;
        text-decoration: none;

      }
      
    </style>
</head>
<body>

<a class="regresar" href="acceso.php">REGRESAR</a>
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);
if(($_POST)==true){
  $numempleado = $_POST["numempleado"] ;
  $apellidopa = $_POST["apellidopa"] ;
  $apellidoma = $_POST["apellidoma"] ;
  $nombre = $_POST["nombre"] ;
  $fechanacimiento = $_POST["fechanacimiento"] ;
  $area = $_POST["area"] ;
  $puesto = $_POST["puesto"] ;
  $fechaingreso = $_POST["fechaingreso"] ;
  $contra = $_POST["contra"] ;
  $contrase = $_POST["contrase"] ;
 
    
}else{
  
  $numempleado="";
  $apellidopa="";
  $apellidoma="";
  $nombre="";
  $fechanacimiento="";
  $area="";
  $puesto="";
  $fechaingreso="";
  $contra="";
  $contrase="";


}

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido</h3></b>" ;
        }
      
        $datab = "empleados";
      
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Registros :</h3>";
        }
        if(!($numempleado=="")){
        
        $instruccion_SQL = "INSERT INTO empleados (numempleado,apellidopa,apellidoma, nombre,fechanacimiento,area,puesto,fechaingreso)
                             VALUES ('$numempleado','$apellidopa','$apellidoma','$nombre','$fechanacimiento','$area','$puesto','$fechaingreso','$contra','$contrase')";
                                           
        $resultado = mysqli_query($connection,$instruccion_SQL);
        }
        
        $consulta = "SELECT * FROM usuarios";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Número de empleado</th></h1>";
echo "<th><h1>Apellido Paterno</th></h1>";
echo "<th><h1>Apellido Materno</th></h1>";
echo "<th><h1>Nombre(s)</th></h1>";
echo "<th><h1>Fecha nacimiento</th></h1>";
echo "<th><h1>Area</th></h1>";
echo "<th><h1>Puesto</th></h1>";
echo "<th><h1>Fecha Ingreso</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "<th><h1>Confirmación contraseña</th></h1>";
echo "<th>Editar</th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['numempleado']."</td></h2>"; 
    echo "<td><h2>" . $colum['apellidopa']. "</td></h2>";
    echo "<td><h2>" . $colum['apellidoma']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre'] . "</td></h2>";
    echo "<td><h2>" . $colum['fechanacimiento'] . "</td></h2>";
    echo "<td><h2>" . $colum['area'] . "</td></h2>";
    echo "<td><h2>" . $colum['puesto'] . "</td></h2>";
    echo "<td><h2>" . $colum['fechaingreso'] . "</td></h2>";
	  echo "<td><h2>" . $colum['contra'] . "</td></h2>";
    echo "<td><h2>" . $colum['contrase'] . "</td></h2>";
    

    echo "</tr>";
    
}

?>

<input class="botoneditar" type="edit" value="Editar" name="editar" id="editar">



