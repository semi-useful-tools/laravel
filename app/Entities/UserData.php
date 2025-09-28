<?php

namespace App\Entities;

class UserData
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {}
}
