
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
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

        echo"<h1 class=\"text-success\">Bienvenid@".$Usuario."</h1>";
    }
    else{
        echo"<h1 class=\"text-danger\">Usuario o Contraseñan incorrectas!</h1>";
    }
    ?>
</body>
</html>