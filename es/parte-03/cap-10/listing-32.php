function test(callable $func)
{
    echo $func(5, 5);
}

test($suma); // 10
