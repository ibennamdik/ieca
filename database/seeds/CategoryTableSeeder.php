<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name' => 'Shops & Workshops',
                'description'  => '...'
            ],
            [
                'name' => 'Warehouses',
                'description'  => '...'
            ],
            [
                'name' => 'Showrooms',
                'description'  => '...'
            ],
            [
                'name' => 'Residential Plots',
                'description'  => '...'
            ],
            [
                'name' => 'Industrial Plots',
                'description'  => '...'
            ]
        ];


        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
