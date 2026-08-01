<?php
ob_start();

echo "Hello";
setcookie("theme", "dark");

ob_end_flush();
