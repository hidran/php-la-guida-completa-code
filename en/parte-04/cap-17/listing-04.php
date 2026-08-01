<?php
$data = json_decode($json, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_last_error_msg();
}
