<?php
function current_user_id(): ?int
{
    return isset($_SESSION["user_id"]) ? (int) $_SESSION["user_id"] : null;
}

function is_logged_in(): bool
{
    return current_user_id() !== null;
}

function require_login(): void
{
    if (!is_logged_in()) {
        header("Location: login.php");
        exit;
    }
}
