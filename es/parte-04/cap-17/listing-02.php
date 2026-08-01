<?php
$json = '{"name":"Juan","active":true}';

$data = json_decode($json, true);

echo $data["name"];
