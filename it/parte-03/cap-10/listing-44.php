function stringJoin(string $separator, string ...$parts): string
{
    return implode($separator, $parts);
}

echo stringJoin('-', '1', '2', '3', '4'); // 1-2-3-4
echo stringJoin('-', 'a', 'b');            // a-b
