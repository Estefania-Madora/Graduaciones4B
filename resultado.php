<?php
    include("conexion.php");
    $Usuario=$_POST["Usuario"];
    $Password=hash("whirlpool",$_POST["password"]);

    $statement="SELECT Contrasena
                FROM usuarios
                where Contrasena='$Password'
                and Nombre ='$Usuario'";

    $resultado=$ConexionBD->query($statement);
    //var_dump($Resultado);

    if($resultado->num_rows>0){
        session_start();
        $_SESSION["Usuario"]=$Usuario;
        $datos=[
            "mensaje"=>"<h1 class=\"text-success\">Bienvenid@".$Usuario."</h1>",
            "codigo"=>"1"
        ];
        
        
    }
    else{
        $datos=[
            "mensaje"=>"<h1 class=\"text-danger\">Usuario o Contraseñan incorrectas!</h1>",
            "codigo"=>"0"
        ];
    }
    echo json_encode($datos);
?>


