<?php
function split_name(string $fullName): array
{
    return explode(" ", $fullName, 2);
}

[$firstName, $lastName] = split_name("Juan García");
