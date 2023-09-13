<?php

namespace App\Domain\User\Enum;

/**
 *
 */

/**
 *
 */
enum UserRoles: string
{
    case ADMIN = 'Admin';
    case EDITOR = 'Editor';
    case AGENT = 'Agent';
    case SUPERVISOR = 'Supervisor';

    public const DEFAULT = self::ADMIN;

    public static function toArray(): array
    {
        $data = [];

        foreach (self::cases() as $status) {
            $data[] = [
                'name' => $status->name,
                'label' => $status->value,
            ];
        }

        return $data;
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
