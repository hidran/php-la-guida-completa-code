<?php

require_once 'includes/session.php';
require_once 'connection.php';
require_once 'functions.php';
require_once 'includes/acl.php';
require_once 'includes/auth.php';
tryAutoLogin();
if (!is_user_logged_in()) {
    redirect('login.php');
}
require_once 'includes/csrf.php';
