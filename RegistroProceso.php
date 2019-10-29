<?php

include("conexion.php");
$Usuario=$_POST["usuario"];
$Contrasena=hash("whirlpool",$_POST["contrasena"]);
$Email=$_POST["email"];
$statement="INSERT INTO 
            Usuarios (Nombre,Contrasena,Email)
            values('$Usuario','$Contrasena','$Email')";

$Resutado=$ConexionBD->query($statement);
if($Resutado){
    echo"Si se inserto el registro";
}
else{
    echo"NO se inserto el registro";
}
?>