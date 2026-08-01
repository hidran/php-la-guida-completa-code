function test(callable $func)
{
    echo $func(5, 5);
}

test($sum); // 10
