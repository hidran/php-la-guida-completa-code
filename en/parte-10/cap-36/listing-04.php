<?php
$payload = file_get_contents("php://input");
$data = json_decode($payload, true, 512, JSON_THROW_ON_ERROR);
