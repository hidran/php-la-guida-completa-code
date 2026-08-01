<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->execute(["id" => $id]);

    header("Location: index.php");
    exit;
}
