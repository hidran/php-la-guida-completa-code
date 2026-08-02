if (!$user || !password_verify($password, $user['password'])) {
    $res['success'] = false;
    $res['message'] = 'Wrong password or user doesn´t exist';
    return $res;
}
if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
    update_password_hash($conn, $user['id'], password_hash($password, PASSWORD_DEFAULT));
}
