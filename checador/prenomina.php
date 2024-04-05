<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenónima</title>
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

<a class="regresar" href="prenomina.html">REGRESAR</a>
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);
if(($_POST)==true){
  $numeroemple = $_POST["numeroemple"] ;
  $fechapre = $_POST["fechapre"] ;
  $horastrabajadas = $_POST["horastrabajadas"] ;
  $horasextras = $_POST["horasextras"] ;
  $retardos = $_POST["retardos"] ;
  $faltas = $_POST["faltas"] ;
  $faltasjustificadas = $_POST["faltasjustificadas"] ;
  $pretotal = $_POST["pretotal"] ;
 
    
}else{
  
  $numeroemple="";
  $fechapre="";
  $horastrabajadas="";
  $horasextras="";
  $retardos="";
  $faltas="";
  $faltasjustificadas="";
  $pretotal="";

}

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido</h3></b>" ;
        }
      
        $datab = "prenomina";
      
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Registros Prenómina:</h3>";
        }
        if(!($numeroemple=="")){
        
        $instruccion_SQL = "INSERT INTO prenomina (numeroemple,fechapre,horastrabajadas, horasextras,retardos,faltas,faltasjustificadas,pretotal)
                             VALUES ('$numeroemple','$fechapre','$horastrabajadas','$horasextras','$retardos','$faltas','$faltasjustificadas','$pretotal')";
                                           
        $resultado = mysqli_query($connection,$instruccion_SQL);
        }
        
        $consulta = "SELECT * FROM prenomina";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Número de empleado</th></h1>";
echo "<th><h1>Fecha</th></h1>";
echo "<th><h1>Horas Trabajadas</th></h1>";
echo "<th><h1>Horas Extras</th></h1>";
echo "<th><h1>Retardos</th></h1>";
echo "<th><h1>Faltas</th></h1>";
echo "<th><h1>Faltas Justificadas</th></h1>";
echo "<th><h1>Pre-Total</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['numeroemple']. "</td></h2>";
    echo "<td><h2>" . $colum['fechapre']. "</td></h2>";
    echo "<td><h2>" . $colum['horastrabajadas']. "</td></h2>";
    echo "<td><h2>" . $colum['horasextras'] . "</td></h2>";
    echo "<td><h2>" . $colum['retardos'] . "</td></h2>";
    echo "<td><h2>" . $colum['faltas'] . "</td></h2>";
    echo "<td><h2>" . $colum['faltasjustificadas'] . "</td></h2>";
    echo "<td><h2>" . $colum['pretotal'] . "</td></h2>";
    echo "</tr>";
    
}

?>




