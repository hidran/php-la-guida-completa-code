<?php
// logout.php
require_once 'auth.php';
require_once 'acl.php';

// ... verificación CSRF e inicio de la sesión, como en el Capítulo 23 ...

// ANTES de destruir la sesión: revocar tokens
revoke_all_remember_me_tokens($pdo, get_user_id());

// ... destrucción de la sesión, como en el Capítulo 23 ...

// por último, borramos el cookie Remember me
clear_remember_me();

header('Location: login.php');
exit;
