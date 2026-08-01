<?php
$stmt = $pdo->query(
    "SELECT id, first_name, last_name, email FROM users ORDER BY id DESC"
);

foreach ($stmt as $user) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($user["first_name"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") . "</td>";
    echo "<td>" . htmlspecialchars($user["last_name"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") . "</td>";
    echo "<td>" . htmlspecialchars($user["email"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") . "</td>";
    echo "</tr>";
}
