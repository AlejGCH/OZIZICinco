<?php
    require 'config/database.php';
    $db = new Database();
    $con = $db->connect();
    
    $sql = $con->prepare("SELECT idcurso, nombre, precio FROM tblcurso");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
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
                <?php
                require 'header_home.php';?>
    </header>
    <!--Fin de header-->
    
    <!--inicio botones-->
    <div class="container-fluid">
    <h1 class="miscursos">Cursos</h1>
    
    
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1 col-sm-12">
            <button class="Alfabetico btn" type="button">Alfabético</button>
        </div>
            <div class="col-lg-1 col-sm-12 ">
                <button type="button" class="Categorías-btn btn">Categorías</button>
            </div>
            <div class="col-lg-1 col-sm-12">
                <button type="button" class="  Alfabetico btn "><i class="fa-solid fa-qrcode"></i>
                </button>
            </div>
            <div class="col-lg-1 col-sm-12 ">
                <button type="button" class="btn Alfabetico btn"><i class="fa-solid fa-align-justify"></i></button>
            </div>
    
    </div>
    
    <!--fin botones-->
    
    <!--inicio,mis cursos-->
    <div class="row">
    
    <?php foreach($resultado as $row) { ?>
    
        <div class="card">
    
            <?php 
            
                $id = $row['idcurso']; 
                  $image = "img/cursos/" .$id. "/talleres.jpeg";
    
                  if(!file_exists($image)){
                    $image = "img/no-photo.jpg";
                  }
    
    
            ?>
    
            <img src="<?php echo $image; ?>" alt="talleres" class="imagen">
            <h3><?php echo $row['nombre']; ?></h3><br>
            <p><?php echo number_format($row['precio'], 2, '.', ','); ?></p>
            <div>
                <samp class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></samp>
                <samp class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></samp>    
                <samp class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></samp>
                <samp class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></samp>
                <samp class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></samp>
                <button type="button" class="calificar-btn" onclick="Mensaje()">Calificar curso</button>
            </div>
            
            <!--verificar-->
            <div> 
                <button type="button" class="curso-btn">Ir al curso</button>
            </div>
        </div>
    
        <?php } ?> 
    </div>
    
    </div>
            <!--fin de mis cursos-->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script>
                var contador;
                function calificar(item){
                    console.log(item);
                    contador=item.id[0];//captura el primer caracter
                    let nombre = item.id.substring(1);//4 estrellas captura todo menos el primer caracter
                    for(let i=0;i<5;i++){
                        if(i<contador){
                            document.getElementById((i+1)+nombre).style.color="orange";
                        }else{
                            document.getElementById((i+1)+nombre).style.color="black";
                        }
                    }
                }
                function Mensaje(){
                    alert("Gracias por calificar nuestro curso "+contador+" estrellas")
                }
            </script>
        </body>
    </html>