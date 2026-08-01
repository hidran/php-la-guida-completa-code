<?php
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email non valida";
}
