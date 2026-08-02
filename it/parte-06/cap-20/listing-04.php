function storeUser(array $data): int
{
    $conn = getConnection();
    $sql = 'INSERT INTO users (username,email,fiscalcode,age,avatar, password,role_type) values( ?, ?, ?,?,?,?,?)';
    $stm = $conn->prepare($sql);
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $stm->bind_param(
        'sssisss',
        $data['username'],
        $data['email'],
        $data['fiscalcode'],
        $data['age'],
        $data['avatar'],
        $password,
        $data['role_type']

    );
    $stm->execute();
