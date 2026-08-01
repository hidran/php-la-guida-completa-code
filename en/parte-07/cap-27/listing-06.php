<?php
function can_delete(Role $role): bool
{
    return $role === Role::Admin;
}
