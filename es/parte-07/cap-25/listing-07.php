<?php
class Usuario
{
    public function __construct(
        private string $email,
        private string $name
    ) {
    }
}
