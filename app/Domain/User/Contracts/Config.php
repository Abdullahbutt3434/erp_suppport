<?php

namespace App\Domain\User\Contracts;


use DB;

abstract class Config
{
    public static string $schema = 'mb_users';

    public static function schema(): void
    {
        DB::statement(DB::raw('CREATE SCHEMA IF NOT EXISTS ' . self::$schema));
    }
}
