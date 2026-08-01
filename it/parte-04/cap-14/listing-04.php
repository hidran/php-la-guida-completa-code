<?php
setcookie("theme", "dark", [
    "expires" => time() + 60 * 60 * 24 * 30,
    "path" => "/",
    "secure" => true,
    "httponly" => true,
    "samesite" => "Lax",
]);
