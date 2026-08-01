<?php
set_exception_handler(function (Throwable $e): void {
    error_log($e);

    http_response_code(500);
    echo "Errore interno";
});
