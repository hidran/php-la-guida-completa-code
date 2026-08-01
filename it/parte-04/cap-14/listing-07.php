<?php
ob_start();

echo "Ciao";
setcookie("theme", "dark");

ob_end_flush();
