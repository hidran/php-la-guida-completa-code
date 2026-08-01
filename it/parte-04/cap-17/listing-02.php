<?php
$json = '{"name":"Mario","active":true}';

$data = json_decode($json, true);

echo $data["name"];
