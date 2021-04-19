<?php

use App\DeliveryMethod;
use Illuminate\Database\Seeder;

class DeliveryMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $methods = [
            [
                'name' => 'Office Pickup',
                'cost' => '1000',
                'image' => 'public/delivery/office.jpg'
            ],
            [
                'name' => 'Home Delivery',
                'cost' => '0',
                'image' => 'public/delivery/home.jpg'
            ],
            [
                'name' => 'Request for Technician',
                'cost' => '3000',
                'image' => 'public/delivery/technician.jpg'
            ]
            ];

        foreach ($methods as $method) {
            #
            DeliveryMethod::create($method);
        }
    }
}
