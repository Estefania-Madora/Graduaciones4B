<?php
session_start();
$session=$_SESSION["Usuario"];

if(isset($session)){
    echo"Estas sección es para puros compas!!";
}
else{
    header("Location: Login.php");
}


?>