<?php
if (!empty($_POST("enviar"))) {
    if (!empty($_POST["numempleado"])and !empty($_POST["contrase"])) {
        $numempleado=$_POST["numempleado"];
        $contrase=$_POST["contrase"];
        echo "numempledo";
    } else {
        echo "los campos estan vacios";
    }
    
}

?>