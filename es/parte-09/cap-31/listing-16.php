<?php

private function matchRoute(array $routes, string $segment): array
{
    foreach ($routes as $route => $handler) {
        if (!str_contains($route, ':')) {
            continue;
        }

        $quoted = preg_quote($route, '@');
        $pattern = preg_replace('/\\\\:[A-Za-z0-9_-]+/', '([A-Za-z0-9_-]+)', $quoted);

        if (preg_match('@^' . $pattern . '$@', $segment, $matches)) {
            array_shift($matches);
            return [$handler[0], $handler[1], $matches];
        }
    }

    return [];
}
