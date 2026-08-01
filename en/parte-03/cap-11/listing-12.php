<?php
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email";
}
