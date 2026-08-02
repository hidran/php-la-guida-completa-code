<?php

declare(strict_types=1);

namespace App\Support;

use RuntimeException;

final class Env
{
    public static function int(string $key, ?int $default = null): int
    {
        $raw = self::string($key, $default === null ? null : (string) $default);

        if (!preg_match('/^-?\d+$/', $raw)) {
            throw new RuntimeException("Env var {$key} is not an integer: {$raw}");
        }

        return (int) $raw;
    }
}
