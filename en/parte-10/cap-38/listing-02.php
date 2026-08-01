<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "localhost";
    $mail->Port = 1025;

    $mail->setFrom("noreply@example.com", "PHP Guida");
    $mail->addAddress("mario@example.com");

    $mail->Subject = "Welcome";
    $mail->Body = "Thank you for registering.";

    $mail->send();
} catch (Exception $e) {
    error_log($e->getMessage());
}
