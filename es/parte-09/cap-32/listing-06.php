<?php

declare(strict_types=1);

public function handle(): void
{
    $this->loadEnv();
    session_start();

    $container = $this->buildContainer();
    $request = $this->buildRequest();

    $response = $container->get(Router::class)->handle($request);

    $this->emit($response);
}
