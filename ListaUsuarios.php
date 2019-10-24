<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php

include("conexion.php");

$sentencia ="SELECT Nombre,Contrasena,Email,Lugares From usuarios";
$resulatdo =$ConexionBD->query($sentencia);

$Usuarios =array();
while($fila=mysqli_fetch_assoc($resulatdo)){
    $Usuarios[]=$fila;
}


echo"<table class=\"table table-striped\">
        <tr>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Email</th>
            <th>Lugares</th>
        </tr>";

foreach($Usuarios AS $Usuarios){
    $nombre = $Usuarios["Nombre"];
    $contrasena = $Usuarios["Contrasena"];
    $email = $Usuarios["Email"];
    $lugar = $Usuarios["Lugares"];
    echo"<tr>
            <td>$nombre</td>
            <td>$contrasena</td>
            <td>$email</td>
            <td>$lugar</td>
        </tr>";
}

echo"</tabel>";


?>
</body>
</html>
