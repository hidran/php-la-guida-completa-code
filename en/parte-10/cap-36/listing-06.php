<?php

declare(strict_types=1);

return $this->json([
    'message' => 'Validation failed',
    'errors' => [
        'title' => 'Title is required',
        'message' => 'Message is required',
    ],
], 422);
