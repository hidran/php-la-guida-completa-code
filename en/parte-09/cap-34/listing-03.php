<?php

declare(strict_types=1);

public function testLoginRejectsUnknownUser(): void
{
    $repo = $this->createMock(UserRepositoryInterface::class);
    $repo->method('findByEmail')->willReturn(null);

    $service = new AuthService($repo);

    self::assertSame(
        'USER NOT FOUND',
        $service->verifyLogin('a@b.co', 'secret123', 't', 't')->message
    );
}
