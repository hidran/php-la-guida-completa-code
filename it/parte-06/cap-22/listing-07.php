<?php

declare(strict_types=1);

const ROLE_USER = 'user';
const ROLE_ADMIN = 'admin';
const ROLE_EDITOR = 'editor';

function user_can_update(): bool
{
    return in_array(get_user_role(), [ROLE_ADMIN, ROLE_EDITOR]);
}

function user_can_delete(): bool
{
    return get_user_role() === ROLE_ADMIN;
}
