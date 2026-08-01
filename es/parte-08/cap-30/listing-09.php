<?php
try {
    // código de aplicación
} catch (Throwable $e) {
    // invia a Sentry
    throw $e;
}
