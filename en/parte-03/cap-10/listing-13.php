function getFullName(string $name, string $surname, int $age)
{
    echo "$name $surname, $age years old";
}

// with named arguments, order does not matter:
getFullName(age: 45, name: 'Mary', surname: 'Smith');
