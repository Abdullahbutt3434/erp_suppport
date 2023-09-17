<?php

namespace Database\Seeders\User;

use App\Domain\User\Entities\Authorization\Permission;
use App\Domain\User\Entities\Authorization\Role;
use Illuminate\Database\Seeder;

/**
 *
 */
class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'view-user']);


        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $agentRole = Role::create(['name' => 'Agent']);
        $supervisorRole = Role::create(['name' => 'Supervisor']);


        $adminRole->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'view-user',
        ]);

        $editorRole->givePermissionTo([
            'view-user',
        ]);

        $agentRole->givePermissionTo([
            'view-user',
        ]);

        $supervisorRole->givePermissionTo([
            'view-user',
        ]);


        $editorRole->givePermissionTo([
            'view-user',
        ]);
    }
}
