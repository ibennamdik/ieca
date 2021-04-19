<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            //admin
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

        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
