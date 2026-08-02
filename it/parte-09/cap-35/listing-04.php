<?php

declare(strict_types=1);

public function check(ServerRequestInterface $request, array $args = []): ResponseInterface
{
    $db = $this->probe(function (): bool {
        $stmt = $this->pdo->query('SELECT 1');
        return $stmt !== false && (int) $stmt->fetchColumn() === 1;
    });

    $status = $db === 'ok' ? 200 : 503;

    return $this->json(['db' => $db], $status);
}
