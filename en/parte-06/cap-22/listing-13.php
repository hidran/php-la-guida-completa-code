<?php
if (!hash_equals($_SESSION["csrf_token"] ?? "", $_POST["csrf_token"] ?? "")) {
    http_response_code(419);
    exit("Invalid CSRF token");
}
