<?php
if (!$post) {
    return json_response(["error" => "Post not found"], 404);
}
