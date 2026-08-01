<?php
try {
    $user = find_user(10);
} catch (UserNotFoundException $e) {
    http_response_code(404);
}
