<?php
if (preg_match($pattern, $uri, $matches)) {
    array_shift($matches);
    return (new $class())->$action(...$matches);
}
