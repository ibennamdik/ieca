<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brands = [
            [
                'name' => 'Maxxis',
                'description'  => ""
            ],
            [
                'name' => 'Goodride',
                'description'  => ""
            ],
            [
                'name' => 'Fronway',
                'description'  => ""
            ],
            [
                'name' => 'Double King',
                'description'  => ""
            ],
            [
                'name' => 'Michelin',
                'description'  => ""
            ]
        ];
        
        foreach ($brands as $brand) {
            # 
            Brand::create($brand);
        }
    }
}
