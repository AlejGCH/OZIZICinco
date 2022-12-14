<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: login.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>OZIZI</title>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <!--iconos-->
        <script src="https://kit.fontawesome.com/6d0d2b42b1.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="img/logo_blanco.svg" type="image/x-icon">          
    </head>
    <body>
        <!--inicio del header-->
        <header>
                       <?php include 'header.php'; ?>
        </header>
        <!--Fin de header-->
        
            <div class="portada">
                <img src="img/Portada.jpeg" alt="" class="imgportada">
                <div class="textportada">
                <h1>Tu futuro<br> profesional<br> empieza hoy</h1><br>
                <p>+75% de nuestros estudiantes aplican lo aprendido en menos de 24hs.</p>
              </div>
            <div class="calificacion">
                    <a href="#" class="verranking" >Ranking Tutores</a>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    
</html>