<?php
return json_response([
    "message" => "Dati non validi",
    "errors" => [
        "title" => "Il titolo è obbligatorio",
    ],
], 422);
