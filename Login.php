<?php

session_start();
session_destroy();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
    $(function(){
      $boton=$("button");
      $boton.on("click".function(evento){
         evento.preventDefault();
         var Usuario=$('[name]="Usuario"');
         var Contrasena=$('[name]="password"');

         $.ajax({
            
         })
      });
    });
    </script>
    <style>
    .fa-spin{
       display:none;
    }
    </style>
</head>
<body>
 <section class="container">
 <section class="row">
        <div class="col-md-6">
        <form action="resultado.php" method="POST">
         <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" class="form-control" name="Usuario">
         </div>
         <div class="form-group">
            <label for="">PASSWORD</label>
            <input type="password" class="form-control" name="password">
         </div>
         <button class="btn btn-primary">Enviar Datos</button>
         <i class="fas fa-sync fa-spin"></i>
        </form>
     </div>
 </section>
 </section>
</body>
</html>