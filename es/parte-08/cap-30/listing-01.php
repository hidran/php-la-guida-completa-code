<?php
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "Conexión fallida";
} finally {
    // código ejecutado de todos modos
}
