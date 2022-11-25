<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $owner = Role::firstOrCreate(['name' => 'owner', 'guard_name' => 'admin']);
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'admin']);

        $owner_permissions = [
            Permission::firstOrCreate(['name' => 'roles.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'roles.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'roles.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'roles.destroy', 'guard_name' => 'admin']),

            Permission::firstOrCreate(['name' => 'operators.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'operators.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'operators.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'operators.destroy', 'guard_name' => 'admin']),
        ];

        $admin_permissions = [
            Permission::firstOrCreate(['name' => 'users.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'users.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'users.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'users.destroy', 'guard_name' => 'admin']),

            Permission::firstOrCreate(['name' => 'categories.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'categories.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'categories.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'categories.destroy', 'guard_name' => 'admin']),

            Permission::firstOrCreate(['name' => 'musicgenres.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'musicgenres.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'musicgenres.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'musicgenres.destroy', 'guard_name' => 'admin']),

            Permission::firstOrCreate(['name' => 'specialties.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'specialties.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'specialties.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'specialties.destroy', 'guard_name' => 'admin']),

            Permission::firstOrCreate(['name' => 'equipments.index', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'equipments.create', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'equipments.edit', 'guard_name' => 'admin']),
            Permission::firstOrCreate(['name' => 'equipments.destroy', 'guard_name' => 'admin']),
        ];

        $owner->syncPermissions(array_merge($owner_permissions, $admin_permissions));
        $admin->syncPermissions($admin_permissions);

        $customer = Role::firstOrCreate(['name' => 'customer', 'guard_name' => 'user']);
        $seller = Role::firstOrCreate(['name' => 'seller', 'guard_name' => 'user']);

        $customer_permissions = [
            Permission::firstOrCreate(['name' => 'customer.buy', 'guard_name' => 'user']),
        ];

        $seller_permissions = [
            Permission::firstOrCreate(['name' => 'seller.artists.index', 'guard_name' => 'user']),
            Permission::firstOrCreate(['name' => 'seller.artists.create', 'guard_name' => 'user']),
            Permission::firstOrCreate(['name' => 'seller.artists.edit', 'guard_name' => 'user']),
            Permission::firstOrCreate(['name' => 'seller.artists.destroy', 'guard_name' => 'user']),
        ];

        $customer->syncPermissions($customer_permissions);
        $seller->syncPermissions($seller_permissions);
    }
}
