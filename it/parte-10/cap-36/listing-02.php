<?php

declare(strict_types=1);

return $this->json([
    'db' => $db,
    'redis' => $redis,
    'version' => Env::string('APP_VERSION', 'dev'),
], $status);
