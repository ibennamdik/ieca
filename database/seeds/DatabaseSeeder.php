<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             PermissionTableSeeder::class,
             StatusTableSeeder::class,
             RolesTableSeeder::class,
             SettingTableSeeder::class,
             RimsTableSeeder::class,
             WidthTableSeeder::class,
             SpeedTableSeeder::class,
             TyreProfileSeeder::class,
             BrandTableSeeder::class,
             CategoryTableSeeder::class,
             ProductTableSeeder::class,
             PostsCategoryTableSeeder::class,
             PostsTableSeeder::class,
             UserTableSeeder::class,
             FormsTableSeeder::class,
             DeliveryMethodTableSeeder::class
        ]);
    }
}
