function getFullName(string $name, string $surname, int $age)
{
    echo "$name $surname, $age anni";
}

// con i named argument l'ordine non conta:
getFullName(age: 45, name: 'Maria', surname: 'Rossi');
