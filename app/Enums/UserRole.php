<?php

namespace App\Enums;

enum UserRole: int
{

    case ADMIN  = 1;
    case WORKER = 2;
    case USER = 3;


    public function toString()
    {
        return match ($this) {
            self::ADMIN => 'administrator',
            self::WORKER => 'pracownik',
            self::USER => 'użytkownik',
        };
    }
}