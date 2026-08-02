$calcHash = hash('sha256', $token);
if (!hash_equals($row['token_hash'], $calcHash)) {
    deleteRememberTokenById($row['id']);
    clearRememberMe();
    return;
}
