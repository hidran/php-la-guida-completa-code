<?php
return json_response([
    "message" => "Datos no válidos",
    "errors" => [
        "title" => "El título es obligatorio",
    ],
], 422);
