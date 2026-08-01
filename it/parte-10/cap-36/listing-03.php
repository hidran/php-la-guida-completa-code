<?php
if (!$post) {
    return json_response(["error" => "Post non trovato"], 404);
}
