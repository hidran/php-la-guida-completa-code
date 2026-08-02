$conn = getConnection();
$st = $conn->prepare(
    'SELECT  t.id,t.expires_at,t.token_hash, u.id as uid, u.email, u.username, u.role_type FROM remember_tokens as t INNER JOIN users as u ON t.user_id=u.id WHERE selector=?'
);
$st->bind_param('s', $selector);
$res = $st->execute();
