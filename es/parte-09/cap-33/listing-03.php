<?php

declare(strict_types=1);

final class Post
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $message,
        public readonly int $userId,
        public readonly string $datecreated,
        public readonly string $email,
    ) {
    }
}
