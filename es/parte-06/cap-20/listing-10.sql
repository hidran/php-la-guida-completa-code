SELECT id, first_name, last_name, email, created_at FROM users
ORDER BY created_at DESC
LIMIT ? OFFSET ?
