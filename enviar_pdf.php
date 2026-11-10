<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP (ej. Gmail, Outlook, etc.)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Cambiar por tu servidor SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'jesusball14.6@gmail.com';
    $mail->Password   = 'pjom iirz zles obwf';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Remitente y destinatario
    $mail->setFrom('jesusball14.6@gmail.com', 'Jesús Ballester');
    $mail->addAddress('talentooccidenteep@empresaspolar.com');

    // Archivo PDF adjunto (sin texto en el cuerpo, solo el PDF)
    $mail->addAttachment(__DIR__ . '/CV_Jesus_Ballester.pdf'); 

    // Configuración del mensaje (cuerpo vacío o con asunto descriptivo)
    $mail->isHTML(false);
    $mail->Subject = 'PDF Adjunto: CV de Jesús Ballester';
    $mail->Body    = 'Adjunto el CV de Jesús Ballester.'; // Mensaje descriptivo

    $mail->send();
    echo "Correo enviado correctamente a las " . date('Y-m-d H:i:s');
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error: {$mail->ErrorInfo}";
}