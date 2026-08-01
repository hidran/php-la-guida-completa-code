<?php
if (!empty($user["avatar"]) && is_file(__DIR__ . "/../" . $user["avatar"])) {
    unlink(__DIR__ . "/../" . $user["avatar"]);
}
