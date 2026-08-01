<?php
$params = $_GET;
$params["page"] = 2;

$url = "index.php?" . http_build_query($params);
