<?php
if ($password !== $passwordConfirm) {
    $errors["password_confirm"] = "Las contraseñas no coinciden";
}
