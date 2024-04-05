<!DOCTYPE html>
<html lang="en">
<head>

<?php
        $servidor = "localhost"; //servidor de la base de datos
        $usuario = "root"; //usuario de la base de datos
        $password = "";   //contraseña de la base de datos 
        $base_de_datos= "empleados"; //nombre de la base de datos

        $conexion = mysqli_connect($servidor, $usuario, $password, $base_de_datos);
    if (!empty($_POST["btnentrada"])) {
    if (!empty($_POST["txtnum"])) {
        $numempleado=$_POST["txtnum"];
        
        
        $consulta=$conexion->query("select count(*) as 'total' from usuarios where numempleado='$numempleado'");
        if ($consulta->fetch_object()->total >0) {
        } else {?>
            <script>
            $(function notificacion(){
              PNotify.notice({
                title: 'INCORRECTO',
                    text: 'número de empleado no existe',
                    delay: 1000
                  ({
  
});
                    
                })
            })
        </script>
            
        <?php }
        
    } else { ?>
        <script>
            $(function notificacion(){
                new PNotify({
                    title: "INCORRECTO",
                    type: "error",
                    text: "Ingrese numero de empleado",
                })
            })
        </script>
    
    <?php }
} 
?>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checador</title>
    <style type="text/css">
      
     body{
      background-color:gray;
    
        
      }
      
      h1{
        font-family:'Calibri';
        padding: 20px;
        color:black ;
        font-size: 40px;
        text-align: center;
        width: 50%;
        margin: auto;
        margin-top: 10px;
      }
  
      #fecha{
        font-family:'Calibri';
        color: black;
        text-align: center;
        font-size: 30px;
      }
      .container{
        width: 700px;
        background:#2471A3;
        padding: 20px;
        margin: auto;
      }
      .acceso{
        color: black;
        font-family:'Calibri';
        font-size: 25px;

      }
      .em{
        color: white;
        text-align: center;
        font-family:'Calibri';
        font-size: 25px;
      }
      input{
        width: 95%;
        padding: 20px;
        border: none;
        font-size: 30px;
      }
      .botones{
        display: flex;
        margin-top: 20px;
      }
      .entrada{
        background: #196F3D;
        font-family:'Calibri';
        color: white;
        font-size: 30px;
        width: 20%;
        padding: 5px;
        text-align:center;
        text-decoration: none;

      }
      .salida{
        background:#E74C3C;
        font-family:'Calibri';
        color: white;
        font-size: 30px;
        width: 20%;
        padding: 5px;
        text-align:center;
        text-decoration: none;
      }
      
    </style>
</head>


<body>
    <h1>BIENVENIDOS, REGISTRA TU ASISTENCIA</h1>
    <h2 id="fecha"></h2>
    
    <div class="container">
        <a class="acceso" href="acceso.html">Ingresar al sistema</a> 
        <p class="em">Ingrese su número de empleado</p>
        <form action="" method="POST">
            <input type="text" name="txtnum" placeholder="Número de empleado" required>
            <div class="botones">
            
            <button class=entrada type="submit" name="btnentrada" value= "ok" >ENTRADA </button>  
            <button class=salida type="submit" name="btnsalida" value= "ok" >SALIDA </button>  

           </div>
        </form>
    </div>
    <!--Abrimos javascript-->
    <script>
    //Este set nos ayuda a que el tiempo corra y se vean los segundos al momento del checado de asistencia
    setInterval(() => {
        let fecha=new Date();
        let fechaHora=fecha.toLocaleString();
        document.getElementById("fecha").textContent=fechaHora;
    }, 1000);
    </script>
    
</body>
</html>

