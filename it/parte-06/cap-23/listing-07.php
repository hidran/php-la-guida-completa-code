if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(419);
    exit('Invalid request method');
}
$fromAll = getParam('fromAll');
if (!csrf_validate(post_string('csrf_token'))) {
    http_response_code(419);
    exit('Invalid token');
}
