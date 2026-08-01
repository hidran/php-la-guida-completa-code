<?php
function normalize_email(string $email): string
{
    return strtolower(trim($email));
}

$email = normalize_email($_POST["email"] ?? "");
