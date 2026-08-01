<?php
class Counter
{
    private static int $count = 0;

    public static function increment(): int
    {
        return ++self::$count;
    }
}

echo Counter::increment();
