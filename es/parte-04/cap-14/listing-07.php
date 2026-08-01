<?php
ob_start();

echo "Hola";
setcookie("theme", "dark");

ob_end_flush();
