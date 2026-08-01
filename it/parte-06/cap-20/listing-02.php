<?php
$errors = [];

$firstName = trim($_POST["first_name"] ?? "");
$email = trim($_POST["email"] ?? "");

if ($firstName === "") {
    $errors["first_name"] = "Il nome è obbligatorio";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Email non valida";
}
