<?php

namespace App\Domain\User\Entities\Authorization;

use App\Domain\User\Contracts\Config;

/**
 *
 */
class Role extends \Spatie\Permission\Models\Role
{
    protected string $config = Config::class;
    protected $table = 'roles';

}
