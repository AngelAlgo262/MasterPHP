<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];
$sexo = $_POST['sexo'];
$correo = "Hola mi nombre es ". $nombre. " estoy interesado en su servicio de " . $sexo.
		  "por favor contactarme al correo". $email. "adisional a eso quiero decir".
		  $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.ingarqmc.com.mx';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'edson.martinez@ingarqmc.com.mx';                     //SMTP username
    $mail->Password   = 'Ing4rqMartinez2';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
    $mail->setFrom('edson.martinez@ingarqmc.com.mx', 'Sitio de MC'); //Recipients remitente (quien envia)
    $mail->addAddress('angelocampo262@gmail.com', 'Sitio de MC');     //aquien se envia

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $correo;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '
	<script>
	alert ("Gracias por enviar su informacion, en breve nos pondremos en contacto");
	window.history.go(-1);
	</script>;
	';
} catch (Exception $e) {
    echo "Hubo un error al enviar correo: {$mail->ErrorInfo}";
}

?>

