<?php

declare(strict_types=1);

return RectorConfig::configure()
    ->withPaths([__DIR__ . '/src', __DIR__ . '/bin', __DIR__ . '/config', __DIR__ . '/tests'])
    ->withSets([
        LevelSetList::UP_TO_PHP_85,
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::TYPE_DECLARATION,
    ]);
