<?php
$allowedColumns = ["first_name", "last_name", "email", "created_at"];
$orderBy = $_GET["order_by"] ?? "created_at";

if (!in_array($orderBy, $allowedColumns, true)) {
    $orderBy = "created_at";
}

$direction = ($_GET["direction"] ?? "desc") === "asc" ? "asc" : "desc";

$sql = "SELECT id, first_name, last_name, email, created_at
        FROM users
        ORDER BY $orderBy $direction";
