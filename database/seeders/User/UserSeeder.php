<?php

namespace Database\Seeders\User;

use App\Domain\User\Entities\User;
use App\Domain\User\Enum\UserRoles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 *
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => fake()->name(),
            'email' => "admin@mb.com",
            'email_verified_at' => now(),
            'phone_number' => fake()->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole(UserRoles::ADMIN->value);

        $agent = User::create([
            'name' => fake()->name(),
            'email' => "agent@mb.com",
            'email_verified_at' => now(),
            'phone_number' => fake()->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $agent->assignRole(UserRoles::AGENT->value);

        $supervisor = User::create([
            'name' => fake()->name(),
            'email' => "supervisor@mb.com",
            'email_verified_at' => now(),
            'phone_number' => fake()->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $supervisor->assignRole(UserRoles::SUPERVISOR->value);

        $editor = User::create([
            'name' => fake()->name(),
            'email' => "editor@mb.com",
            'email_verified_at' => now(),
            'phone_number' => fake()->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $editor->assignRole(UserRoles::EDITOR->value);

    }
}
