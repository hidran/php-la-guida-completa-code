<?php

declare(strict_types=1);

final class RedisCache implements CacheInterface
{
    private readonly Psr16Cache $inner;

    public function __construct(string $dsn, string $namespace = 'fb')
    {
        $client = RedisAdapter::createConnection($dsn);
        $adapter = new RedisAdapter($client, $namespace);
        $this->inner = new Psr16Cache($adapter);
    }
}
