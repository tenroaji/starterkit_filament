<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create basic roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);

        // Create admin user
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('qwe'),
        ]);
        $adminUser->assignRole($adminRole);

        // Create superadmin user
        $superadminUser = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('qwe'),
        ]);
        $superadminUser->assignRole($superAdminRole);




        // Create permissions
        $permissions = [
            'view_users',
            'create_users',
            'edit_users',
            'delete_users',
            'view_roles',
            'create_roles',
            'edit_roles',
            'delete_roles',
            'view_permissions',
            'create_permissions',
            'edit_permissions',
            'delete_permissions',
        ];

        // Create permissions and assign them
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission]);

            // Admin has basic permissions
            $perm->givePermissionTo($adminRole);

            // Superadmin and Super Admin have all permissions
            $perm->givePermissionTo($superAdminRole);
        }

        // Give superadmin and super_admin additional permissions
        $superPermissions = [
            'manage_system',
            'manage_settings',
            'manage_database',
        ];

        foreach ($superPermissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission]);
            $perm->givePermissionTo($superAdminRole);
        }
    }
}
