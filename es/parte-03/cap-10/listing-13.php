function getFullName(string $name, string $surname, int $age)
{
    echo "$name $surname, $age años";
}

// con argumentos con nombre, el orden no importa:
getFullName(age: 45, name: 'María', surname: 'García');
