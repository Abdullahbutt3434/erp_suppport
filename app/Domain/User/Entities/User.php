<?php

namespace App\Domain\User\Entities;

use App\Infrastructure\Traits\HasTblPrefix;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

/**
 *
 */
class User extends Authenticatable
{
    use HasRoles;
    use HasTblPrefix;

    // ...
}
