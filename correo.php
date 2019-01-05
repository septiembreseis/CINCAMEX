<html>
    <head>
        <meta http-equiv="refresh" content="7;url=http://cincamex.borealstudio.mx" />
        <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container correo">
            <div class="row">
                <div class="col-12 text-center">
                   <br>
                    <h1 class="big-white" style="font-size:2em; margin-top:20%;">¡Gracias por tu interés!</h1>
                    <h5 style="width:100%;">Te respoderemos a la brevedad posible.</h5>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>


<?php
if(isset($_POST['correo'])) {

$email_to = "gaby@borealstudio.mx"; //Correo al que se enviaran los mails
$email_subject = "Contacto desde sitio web";

// Validamos todos los campos
if(!isset($_POST['nombre']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['correo']) ||
!isset($_POST['tel']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contización:\n\n";
$email_message .= "Nombre(s): " . "\n".$_POST['nombre'] . "\n\n";
$email_message .= "Apellido(s): " . "\n".$_POST['apellidos'] . "\n\n";
$email_message .= "Correo electrónico: " . "\n".$_POST['correo'] . "\n\n";
$email_message .= "Teléfono: " . "\n".$_POST['tel'] . "\n\n";
$email_message .= "Mensaje: " . "\n".$_POST['mensaje'] . "\n\n";


//Función para enviar correo
$headers = 'From: '.$_POST['correo']."\r\n".
'Reply-To: '.$_POST['correo']."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


}
?>