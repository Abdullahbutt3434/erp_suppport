<?php

namespace App\Domain\User\Entities\Authorization;

use App\Domain\User\Contracts\Config;
use App\Infrastructure\Traits\HasTblPrefix;

/**
 *
 */
class Permission extends \Spatie\Permission\Models\Permission
{
    use HasTblPrefix;

    protected $table = 'permissions';
    protected string $config = Config::class;
}
