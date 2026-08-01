<?php
class UserNotFoundException extends RuntimeException
{
}

function find_user(int $id): array
{
    $user = null;

    if (!$user) {
        throw new UserNotFoundException("Usuario $id no encontrado");
    }

    return $user;
}
