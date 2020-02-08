<?php

use App\PostCategory;
use Illuminate\Database\Seeder;

class PostsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Miantainance',
                'description'  => 'desc'
            ],
            [
                'name' => 'Pricing',
                'description'  => 'desc'
            ]
        ];

        foreach ($categories as $category) {
            PostCategory::create($category);
        }
    }
}
