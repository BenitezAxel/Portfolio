<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "contacto";

include_once "PHPMailer/src/SMTP.php";
include_once "PHPMailer/src/PHPMailer.php";
$msg = "";

function guardarCorreo($correo)
{
    $archivo = fopen("mails.txt", "a+");
    fwrite($archivo, $correo . ";\n\r");
    fclose($archivo);
}

if ($_POST) { /* es postback */

    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    if ($nombre != "" && $correo != "") {
        guardarCorreo($correo);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.nelsontarche.com.ar"; // SMTP a utilizar. Por ej. mail.dominio.com.ar
        $mail->Username = "info@nelsontarche.com.ar"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@nelsontarche.com.ar"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = "Nelson Daniel Tarche";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ),
        );

        //Destinatario
        $mail->addAddress($correo);
        //$mail->addBCC("nelson.tarche@gmail.com");
        $mail->Subject = "Contacto página web";
        $mail->Body = "Recibimos tu consulta, <br>te responderemos a la brevedad.";
        //  if(!$mail->Send()){
        //     $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        //   }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Nosotros
        $mail->addAddress("benitezaxel03@gmail.com");
        $mail->Subject = "Recibiste un mensaje desde tu página web";
        $mail->Body = "Te escribió $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

        //if ($mail->Send()) {
        if (1==1) {
            header('Location:confirmacion_envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
    } else {
        $msg = "Complete todos los campos";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
<div class="container">
<?php

include_once "menu.php";

?>
<section id="contacto">
    <?php if (isset($msg) && $msg != ""): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
            <?php echo $msg; ?>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="row mt-5">
        <div class="col-12">
            <h1>¡Trabajemos juntos!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-12">
            <h2>Para más detalles sobre mi<br>
                trabajo podés ver mi Linkedin,<br>
                descargar mi CV o mandarme<br>
                un mensaje.
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 col-12">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-sm-6 col-12 form-group">
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="NOMBRE" value="<?php echo isset($_POST["txtNombre"]) ? $_POST["txtNombre"] : ""; ?>">
                    </div>
                    <div class="col-sm-6 col-12 form-group">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="CORREO" value="<?php echo isset($_POST["txtCorreo"]) ? $_POST["txtCorreo"] : ""; ?>">
                    </div>
                    <div class="col-12 form-group">
                            <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" placeholder="ASUNTO">
                    </div>
                    <div class="col-12 form-group">
                            <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control" placeholder="MENSAJE" required><?php echo isset($_POST["txtMensaje"]) ? $_POST["txtMensaje"] : ""; ?></textarea>
                    </div>
                </div>
                <div class="row">
                     <div class="col-12 text-center">
                        <input type="submit" value="ENVIAR" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
<?php

include_once "footer.php";

?>
</body>

</html>