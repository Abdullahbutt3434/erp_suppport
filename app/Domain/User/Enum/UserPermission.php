<?php

namespace App\Domain\User\Enum;

/**
 *
 */
enum UserPermission: string
{
    case CREATE_USER = 'create-user';
    case DELETE_USER = 'delete-user';
    case EDIT_USER = 'edit-user';
    case VIEW_USER = 'view-user';

    public const DEFAULT = self::VIEW_USER;

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
