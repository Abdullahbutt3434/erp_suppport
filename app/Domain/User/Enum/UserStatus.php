<?php

namespace App\Domain\User\Enum;

enum UserStatus: string
{
    case ACTIVE = 'Active';

    case INACTIVE = 'inactive';

    public const DEFAULT = self::ACTIVE;

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
