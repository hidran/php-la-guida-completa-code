<?php
return json_response([
    "message" => "Invalid data",
    "errors" => [
        "title" => "The title is required",
    ],
], 422);
