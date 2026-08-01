<?php
// logout.php
require_once 'auth.php';
require_once 'acl.php';

// ... CSRF check and session startup, as in Chapter 23 ...

// BEFORE destroying the session: revoke tokens
revoke_all_remember_me_tokens($pdo, get_user_id());

// ... session destruction, as in Chapter 23 ...

// finally, delete the Remember me cookie
clear_remember_me();

header('Location: login.php');
exit;
