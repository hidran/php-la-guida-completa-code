<?php
if ($password !== $passwordConfirm) {
    $errors["password_confirm"] = "The passwords do not match";
}
