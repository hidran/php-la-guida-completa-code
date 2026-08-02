<?php

public function dispatch(): array
{
    $url = $_SERVER['REQUEST_URI'] ?? $_SERVER['REDIRECT_URL'];
    $segment = trim(parse_url($url, PHP_URL_PATH), '/');
    $segment = $segment ?: '/';
    $method = $_SERVER['REQUEST_METHOD'];
    $urls = $this->routes[$method];

    if (array_key_exists($segment, $urls)) {
        return $urls[$segment];
    }

    $ret = $this->matchRoute($urls, $segment);

    if (!$ret) {
        throw new Exception('No routes matched');
    }

    return $ret;
}
