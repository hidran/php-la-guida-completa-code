<?php

declare(strict_types=1);

$payload = (string) $request->getBody();
$data = json_decode($payload, true, 512, JSON_THROW_ON_ERROR);

$title = trim((string) ($data['title'] ?? ''));
$message = trim((string) ($data['message'] ?? ''));
