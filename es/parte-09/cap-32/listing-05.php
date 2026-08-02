<?php

declare(strict_types=1);

final class Router implements RequestHandlerInterface
{
    private readonly LeagueRouter $router;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->router->handle($request);
    }
}
