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
    <!--iconos estrellas-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!--inicio del header-->
    <header>
        <nav class="navbar navbar-expand-lg container-fluid">
            <div class="col-lg-2 col-sm-12">
                <a href="index.html">
                    <img src="img/logo Ozizi.jpg" alt="logo OZIZI" class="logo">
                </a>

            </div>
            <div class="col-lg-1 col-sm-12 ">
                <li>
                    <a class="nav-link" href="cursos.html">Cursos</a>
                </li>
            </div>
            <div class="col-lg-1 col-sm-12">
                <li>
                    <a class="nav-link" href="#">Asesorias</a>
                </li>
            </div>
            <div class="col-lg-1 col-sm-12">
                <li>
                    <a class="nav-link" href="#">Talleres</a>
                </li>
            </div>

            <form class="form-inline" action="/action_page.php">
                <div class="col-lg-3">
                    <input class="form-control mr-sm-2 aprender" type="text" placeholder="¿Qué quieres aprender hoy?">
                </div>
            </form>
            <div class="col-lg-5 ">
                <div class="row ">
                    <div class="col-lg-2 centradoIconos ">
                        <i class="campana fa-solid fa-bell"></i>
                    </div>
                    <div class="col-lg-2 centradoIconos">
                        <i class="usuario fa-solid fa-circle-user"></i>
                    </div>
                    <div class="col-lg-2 centradoIconos">
                        <i class="angulo fa-solid fa-angle-down"></i>
                    </div>
                    <div class="col-lg-2 centradoIconos">
                        <i class="confi fa-solid fa-gear"></i>
                    </div>
                    <div class="col-lg-4 centradoIconos">
                        <a class="nav-link" href="#"><i class="arr fa-solid fa-arrow-right-to-bracket"></i> Salir</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--Fin de header-->
    <main>
        <h1>Curso de vocabulario francés</h1>

        <section>
            <h2>aprende a reconocer el idioma en su totalidad</h2>
            <p>4,4 estrella estrella ( 12 calificaciones ) 1.583 estudiantes</p>
            <p><b>Creado por:</b> Juan David</p>

            <div class="preview-curso">
                <video src="https://www.youtube.com/watch?v=BF0YVDnILWo" width=320 height=240 controls poster="img/logo Ozizi.jpg">
                    Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
                    La versión descargable está disponible en <a href="URL">Enlace</a>.
                </video>
                <?php
                $url = "https://www.youtube.com/embed/v_zcvFofipg?autoplay=1";
                ?>
                <iframe width="560" height="315" src="<?php echo $url; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
    </main>
    <section>
        <h2>¿Qué aprenderás?</h2>
        <div class="lista">
            <ul>
                <li>Pronunciación</li>
                <li>Historia de los tipos de acento en Francia</li>
                <li>Historia del idioma y sus reglas</li>
            </ul>
        </div>
        <div class="lista-2">
            <ul>
                <li>Pronunciación Nativa</li>
                <li>Reglas Gramaticales</li>
                <li>Comprensión total del idioma</li>
            </ul>
        </div>
    </section>
    <aside>
        <div class="comprar-curso">
            <button class="btn">Comprar ahora</button>
            <h3>Garantía por 30 días</h3>
            <ul>
                <span><b>Este curso incluye:</b></span>
                <li>30 horas de video</li>
                <li>2 sesiones en línea</li>
                <li>Material de estudio de por vida</li>
                <li>Certificado de finalización</li>
            </ul>
            <a href="#">Compartir</a>
            <a href="#">Regalar este curso</a>
            <a href="#">Aplicar cupón</a>
        </div>
        <div class="requisitos">
            <div class="personas">
                <h4>¿Para quién es este curso?</h4>
                <ul>
                    <li>
                        <p>Para todo aquel que quiera adquirir los conocimientos necesarios para empezar a comprender el idioma francés.</p>
                    </li>
                </ul>
            </div>
            <div class="materiales-necesarios">
                <h4>¿Para quién es este curso?</h4>
                <ul>
                    <li>
                        Tener un PC
                    </li>
                    <li>
                        Conexión a internet
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <section>
        <div class="contenido-curso">
            <ul>
                <li>15 secciones</li>
                <li>25 clases</li>
                <li>6h 34m duración total</li>
            </ul>

            <ul>
                <li>introducción</li>
                <li>vista previa</li>
                <li>reglas gramaticales</li>
            </ul>
        </div>
    </section>
    <section>
        <h4>descripcion</h4>
        <p>Get ready for the best learning experience you will have with this PHP PDO course. In this course, I did everything for you and fully explained PDO from the basics like connecting the database more securely and efficiently to advanced concepts like using transaction and so on.So why basically choose this course from the rest of the courses about the same topic? Well, I made sure that you fully understand everything in detail, and while creating this course I used a lot of recourses including whole documentation just to bring you the best and finest content.

            Let me show you what you are actually going to learn:

            -Securely Connect to a database of your chosen with PDO and of Catching errors while connecting to your database</p>
    </section>

    <div class="info-tutor">
        <div class="foto-tutor">
            <img src="<?php echo "img/perfil-del-usuario-tutor.png" ?>" alt="foto perfil">
        </div>
        <div class="info-tutor">
            <h4>instructor</h4>
            <span><?php echo "Juan David Alzate Garcia"; ?></span>
            <p>Developer || Freelancer || Instructor</p>
        </div>
    </div>
<footer>
    <div class="logo">
        <img src="img/logo Ozizi.jpg" alt="Logo Ozizi">
    </div>
    <div class="links">
        <a href="index.html">Inicio</a>
        <a href="cursos.html">Cursos</a>
        <a href="acerca_de_nosotros.html">Acerca de nosotros</a>
        <a href="nuestros_servicios.html">Nuestros servicios</a>
    </div>
    
    <div class="redes-sociales">
        <p>iconos de redes sociales</p>
        <div class="copy-right">
            <p>2022 Ozizi Inc</p>
        </div>
    </div>

</footer>
</body>

</html>
</body>

</html>