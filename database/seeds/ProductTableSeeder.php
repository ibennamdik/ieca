<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'category_id' => '1',
                'brand_id' => '1',
                'width_id' => '1',
                'rim_id' => '1',
                'tyre_profile_id'  => '1',
                'name' => 'Maxi Year',
                'description'  => 'desc',
                'rating'  => '1',
                'quantity'  => '1',
                'amount'  => '12000',
                'size' => '4 X 4 M',
            ],
            [
                'category_id' => '1',
                'brand_id' => '2',
                'width_id' => '2',
                'rim_id' => '2',
                'tyre_profile_id'  => '2',
                'name' => 'Gold Erlis',
                'description'  => 'desc',
                'rating'  => '2',
                'quantity'  => '10',
                'amount'  => '23000',
            ],
            [
                'category_id' => '1',
                'brand_id' => '3',
                'width_id' => '3',
                'rim_id' => '3',
                'tyre_profile_id'  => '3',
                'name' => 'Packman Fish',
                'description'  => 'desc',
                'rating'  => '3',
                'quantity'  => '40',
                'amount'  => '24000',
            ],
            [
                'category_id' => '1',
                'brand_id' => '4',
                'width_id' => '4',
                'rim_id' => '4',
                'tyre_profile_id'  => '4',
                'name' => 'Poldo Tinker',
                'description'  => 'desc',
                'rating'  => '4',
                'quantity'  => '50',
                'amount'  => '25500',
            ],
            [
                'category_id' => '1',
                'brand_id' => '5',
                'width_id' => '5',
                'rim_id' => '5',
                'tyre_profile_id'  => '5',
                'name' => 'Bette Ride',
                'description'  => 'desc',
                'rating'  => '3',
                'quantity'  => '70',
                'amount'  => '25000',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
