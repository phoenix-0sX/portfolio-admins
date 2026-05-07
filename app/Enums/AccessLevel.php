<?php

namespace App\Enums;

enum AccessLevel: int
{
    case USER = 0;
    case ADMIN = 1;
    case SUPER_ADMIN = 2;
}
