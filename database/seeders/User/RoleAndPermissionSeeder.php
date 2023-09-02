<?php

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        Permission::create(['name' => 'create-admin']);
        Permission::create(['name' => 'edit-admin']);
        Permission::create(['name' => 'delete-admin']);
        Permission::create(['name' => 'view-admin']);

        Permission::create(['name' => 'create-editor']);
        Permission::create(['name' => 'edit-editor']);
        Permission::create(['name' => 'delete-editor']);
        Permission::create(['name' => 'view-editor']);

        Permission::create(['name' => 'create-agent']);
        Permission::create(['name' => 'edit-agent']);
        Permission::create(['name' => 'delete-agent']);
        Permission::create(['name' => 'view-agent']);

        Permission::create(['name' => 'create-supervisor']);
        Permission::create(['name' => 'edit-supervisor']);
        Permission::create(['name' => 'delete-supervisor']);
        Permission::create(['name' => 'view-supervisor']);


        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $agentRole = Role::create(['name' => 'Agent']);
        $supervisorRole = Role::create(['name' => 'Supervisor']);


        $adminRole->givePermissionTo([
            'create-editor',
            'edit-editor',
            'delete-editor',
            'view-editor',
            'create-agent',
            'edit-agent',
            'delete-agent',
            'view-agent',
            'create-supervisor',
            'edit-supervisor',
            'delete-supervisor',
            'view-supervisor',
        ]);

        $editorRole->givePermissionTo([
            'view-agent',
            'view-supervisor',
        ]);

        $editorRole->givePermissionTo([
            'view-editor',
            'view-supervisor',
            'view-agent',
        ]);
    }
}
