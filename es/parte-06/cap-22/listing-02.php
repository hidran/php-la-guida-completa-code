<?php
if ($password !== $passwordConfirm) {
    $errors["password_confirm"] = "Le password non coincidono";
}
