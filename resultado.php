<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p class="text-info">
        <?php
        $Usuario=$_POST["Usuario"];
        echo$Usuario;
        ?>
    </p>
    <p class="text-info">
        <?php
        $Password=$_POST["password"];
        echo$Password;
        ?>
    </p>
</body>
</html>