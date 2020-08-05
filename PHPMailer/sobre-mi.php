<?php $pg ="sobremi";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <?php 
            include_once("menu.php");
        ?>
    </header>
    <section id="sobre-mi">
        <div class="container">
        <div class="row mt-5">
            <div class="col-sm-7 col-12">
                <h1>Sobre mi</h1>
                <h2>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación Full
                    Stack y de Base de datos.</h2>
                <a href="" class="btn my-4" target="_blank">Descargar CV</a>
            </div>
            <div class="col-sm-3 col-9 mx-5">
                <img src="images/perfil.jpg" alt="Axel Benitez" class="img-fluid img-circle">
            </div>
        </div>
        <div class="row my-sm-4 my-3">
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-code">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>PROGRAMACION</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>HTML, CSS, Bootstrap, C#.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-database">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>BASE DE DATOS</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>MySQL.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-server">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>SERVIDORES</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>XAMPP.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-language">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>IDIOMAS</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>INGLES - Principiante A1</p>
                            <br>
                            "ESPAÑOL - Nativo"
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-window-restore">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>SOFTWARE</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>GitHub, Visual Code, Sublime, Filezilla, SSH Putty, MySQL Workbench, Adobe Photoshop, MS
                                Office, Google Docs. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 px-2 my-2">
                <div class="bg-white">
                    <div class="p-3">
                        <i class="fas fa-puzzle-piece">
                        </i>
                    </div>
                    <div class="row px-3">
                        <div class="col-12">
                            <h3>HOBBIES</h3>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-12">
                            <p>Escuchar musica, Turismo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="experiencia">
        <div class="container py-sm-5 py-4">
            <div class="row">
                <div class="col-12 py-4">
                    <h2>Experiencia Laboral</h2>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12 col-sm-2">
                    <h3>2019 - PRESENTE -<br> La Rambla</h3>
                </div>
                <div class="col-12 col-sm-2">
                    <img src="images/rambla.jpg" alt="La Rambla" class="img-responsive py-3 py-sm-0" width="120" title="La Rambla">
                </div>
                <div class="col-12 col-sm-8">
                    <h4>"Realizo todo tipo de tareas relacionadas a la gastronomia, como limpieza del
                        establecimiento, bachero, ayudante de cocina y delivery"</h4>
                </div>
            </div>
        </div>
    </div>
    </section>
        <?php 
            include_once("footer.php");
        ?>
</body>

</html>