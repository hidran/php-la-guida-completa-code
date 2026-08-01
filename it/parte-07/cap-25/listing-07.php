<?php
class Utente
{
    public function __construct(
        private string $email,
        private string $name
    ) {
    }
}
