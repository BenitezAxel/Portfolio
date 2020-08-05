<?php $pg ="inicio";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
    <div id="home" class="container-fluid">
        <div class="container">
        <?php 
            include_once("menu.php");
        ?>
        </div>
        <div class="container">
        <section>
        <div class="row py-5">
            <div class="col-10">
                <h1>Hola! <br> Bievenido a mi web </h1>
                <h2>Axel Benitez</h2>
                <a href="proyectos.php" class="btn mt-sm-4">Conoce mis proyectos</a>
            </div>
        </div>
        </section>
</div>
    </div>
        <?php 
            include_once("footer.php");
        ?>
</body>
</html>