<?php

declare(strict_types=1);

public function testParameterizedMatchExtractsParams(): void
{
    $router = new Router($this->routes());

    $this->assertSame(
        ['Ctrl', 'show', ['42']],
        $router->dispatch('GET', '/posts/42')
    );
}
