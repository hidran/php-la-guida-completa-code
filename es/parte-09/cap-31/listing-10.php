<?php

namespace App\Db;

use InvalidArgumentException;

final class DbFactory
{
    public static function create(array $options): DbPdo
    {
        if (!isset($options['driver'])) {
            throw new InvalidArgumentException('Driver de base de datos no configurado');
        }

        $charset = $options['charset'] ?? 'utf8';
        $dsn = match ($options['driver']) {
            'mysql' => "mysql:host={$options['host']};dbname={$options['database']};charset={$charset}",
            'sqlite' => 'sqlite:' . $options['database'],
            default => throw new InvalidArgumentException('Driver de base de datos no soportado'),
        };

        $options['dsn'] = $options['dsn'] ?? $dsn;

        return DbPdo::getInstance($options);
    }
}
