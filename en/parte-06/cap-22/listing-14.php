<?php
function require_role(string $role): void
{
    require_login();

    if (($_SESSION["role_type"] ?? null) !== $role) {
        http_response_code(403);
        exit("Access denied");
    }
}
