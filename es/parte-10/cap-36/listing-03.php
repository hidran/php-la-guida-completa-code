<?php
if (!$post) {
    return json_response(["error" => "Post no encontrado"], 404);
}
