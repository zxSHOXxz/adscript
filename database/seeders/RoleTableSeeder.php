<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(['name' => 'anas', 'email' => 'anas@g.com', 'created_at' => now(), 'updated_at' => now(),]);

        Role::create(['name' => 'admin', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Role::create(['name' => 'editor', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);

        //PERMISSIONS - ADMIN AUTH
        Permission::create(['name' => 'create-role', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-role', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-role', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-role', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-permission', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-permission', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-permission', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-permission', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-divs', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-divs', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-divs', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-divs', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-colors', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-colors', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-colors', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-colors', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-texts', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-texts', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-texts', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-texts', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-ads', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-ads', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-ads', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-ads', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-iquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-iquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-iquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-iquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-oquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-oquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-oquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-oquestions', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'create-navbar-items', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-navbar-items', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'update-navbar-items', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-navbar-items', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => now()]);

        $user->assignRole('admin');
        $user->givePermissionTo('create-role');
        $user->givePermissionTo('index-role');
        $user->givePermissionTo('update-role');
        $user->givePermissionTo('delete-role');
    }
}
