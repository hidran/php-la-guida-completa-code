<?php
try {
    // application code
} catch (Throwable $e) {
    // invia a Sentry
    throw $e;
}
