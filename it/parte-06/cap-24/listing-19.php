<?php
// logout.php
require_once 'auth.php';
require_once 'acl.php';

// ... verifica CSRF e avvio della sessione, come nel Capitolo 23 ...

// PRIMA di distruggere la sessione: revoca dei token
revoke_all_remember_me_tokens($pdo, get_user_id());

// ... distruzione della sessione, come nel Capitolo 23 ...

// e infine cancelliamo il cookie del Remember me
clear_remember_me();

header('Location: login.php');
exit;
