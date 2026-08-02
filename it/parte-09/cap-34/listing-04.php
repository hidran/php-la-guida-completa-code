<?php

declare(strict_types=1);

$stmt->expects($this->once())
    ->method('execute')
    ->with($this->callback(function (array $params): bool {
        self::assertSame('actual message body', $params['message']);
        self::assertArrayNotHasKey('email', $params);

        return true;
    }));
