
<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$para = $_POST['destino'];
$mensaje = $_POST['mensaje_breve'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje_breve'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = $para;
$asunto = 'Mensaje de formulario web';

mail($para, $asunto, utf8_decode($mensaje), $header);

/* header("Location:GPT.html"); */

/* if (mail){
    echo "js/sweetMailAlert.js" (
				'Email Enviado!',
				'A sua notificação foi enviada com sucesso!',
				'success' );
				
			} catch (Exception $e) {
			echo "Swal.fire(
				'Erro!',
				'Algo deu errado ao enviar o Email',
				'error'
		  	) {$mail->ErrorInfo}"; 
			} */
  
	
?>