<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "localhost";
    $mail->Port = 1025;

    $mail->setFrom("noreply@example.com", "PHP Guida");
    $mail->addAddress("juan@example.com");

    $mail->Subject = "Bienvenido";
    $mail->Body = "Gracias por registrarte.";

    $mail->send();
} catch (Exception $e) {
    error_log($e->getMessage());
}
