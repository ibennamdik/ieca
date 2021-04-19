<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //super admin
        $role = Role::create([
            'name' => 'Level 1'
        ]);
        $permissions = [
            'admin-dashboard',
            'manage roles and permissions',
            'manage logs',
            'manage settings',
            'manage delivery methods',
            'manage staff',
            
            'manage products',
            'manage brands',
            'manage categories',
            'manage subscriptions',
            
            'manage complaints',
            'manage orders',
            'manage posts',
            'manage post categories',
            'manage customers',
            'manage payments',
            'manage tickets',
            //member
            'manage account',
            'buy item',
            'member dashboard'
        ];
        $role->syncPermissions($permissions);

        //admin
        $level2 = Role::create([
            'name' => 'Level 2'
        ]);
        $permissions = [
            'admin-dashboard',
            'manage roles and permissions',
            'manage logs',
            'manage settings',
            'manage delivery methods',
            'manage staff',
            
            'manage products',
            'manage brands',
            'manage categories',
            'manage subscriptions',
            
            'manage complaints',
            'manage orders',
            'manage posts',
            'manage post categories',
            'manage customers',
            'manage payments',
            'manage tickets',
        ];
        $level2->syncPermissions($permissions);

        //agent
        $level3 = Role::create([
            'name' => 'Level 3'
        ]);
        $permissions = [
            'admin-dashboard',
            'manage complaints',
            'manage orders',
            'manage posts',
            'manage post categories',
            'manage customers',
            'manage payments',
            'manage tickets',
        ];
        $level3->syncPermissions($permissions);

        //client
        $level4 = Role::create([
            'name' => 'Level 4'
        ]);
        $permissions = [
            'manage account',
            'buy item',
            'member dashboard'
        ];
        $level4->syncPermissions($permissions);


    }
}
