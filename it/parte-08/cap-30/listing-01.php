<?php
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "Connessione non riuscita";
} finally {
    // codice eseguito comunque
}
