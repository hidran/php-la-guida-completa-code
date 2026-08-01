<?php
$mail->Host = getenv("SMTP_HOST");
$mail->Port = (int) getenv("SMTP_PORT");
$mail->Username = getenv("SMTP_USER");
$mail->Password = getenv("SMTP_PASSWORD");
