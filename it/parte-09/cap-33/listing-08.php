<?php

declare(strict_types=1);

$pending = array_filter(
    $files,
    static fn(string $file): bool => !isset($applied[basename($file)])
);

foreach ($pending as $file) {
    $this->apply($file);
}
