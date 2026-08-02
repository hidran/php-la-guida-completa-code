function updateUser(array $data, int $id): bool
{
    $conn = getConnection();
    $types = 'sssis';
    $values = [
        $data['username'],
        $data['email'],
        $data['fiscalcode'],
        $data['age'],
        $data['avatar']
    ];
    $sql = 'UPDATE users SET username = ?, email = ?, fiscalcode = ?, age = ?,avatar=? ';
    if ($data['password']) {
        $sql .= ', password = ? ';
        $types .= 's';
        $values[] = password_hash($data['password'], PASSWORD_DEFAULT);
    }
