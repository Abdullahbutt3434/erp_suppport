<?php

namespace App\Domain\User\Entities;

use App\Domain\User\Contracts\Config;
use App\Domain\User\Enum\UserStatus;
use App\Infrastructure\Traits\HasTblPrefix;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

/**
 *
 */
class User extends Authenticatable
{
    use HasRoles;
    use HasTblPrefix;
    use HasFactory;

    protected $table = 'users';
    protected string $config = Config::class;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'status',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }

    public function isActive(): bool
    {
        return $this->status === UserStatus::ACTIVE->value;
    }

}
