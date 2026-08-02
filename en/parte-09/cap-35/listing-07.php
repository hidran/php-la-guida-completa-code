<?php

declare(strict_types=1);

final class RedisSessionHandler implements SessionHandlerInterface
{
    public function read(string $id): string
    {
        $value = $this->redis->get($this->prefix . $id);

        return is_string($value) ? $value : '';
    }

    public function write(string $id, string $data): bool
    {
        return $this->redis->setex($this->prefix . $id, $this->ttl, $data) === true;
    }
}
