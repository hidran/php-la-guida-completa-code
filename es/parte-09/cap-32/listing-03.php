<?php
$pattern = preg_replace("#\{([a-zA-Z_]+)\}#", "([^/]+)", $path);
$pattern = "#^" . $pattern . "$#";
