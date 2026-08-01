<?php
$json = '{"name":"John","active":true}';

$data = json_decode($json, true);

echo $data["name"];
