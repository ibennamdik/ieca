<?php

use App\Forms;
use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $forms = [

            [
                'name' => 'Lock-up shops', //1
                'amount' => '100000',
                'description' => ''
            ],
            [
                'name' => 'Workshops', //2
                'amount' => '100000',
                'description' => 'Automobile mechanic workshops or garages'
            ],
            [
                'name' => 'Open Market Space', //3
                'amount' => '100000',
                'description' => 'Open Market Space for foodstuff'
            ],
            [
                'name' => 'Residential Plots', //4
                'amount' => '100000',
                'description' => 'Residential plots for small and medium income'
            ],
            [
                'name' => 'Luxurious Buildings', //5
                'amount' => '250000',
                'description' => 'Luxurious Buildings, Upscale highrise apartments and residences'
            ],
            [
                'name' => 'Industrial Plots', //6
                'amount' => '250000',
                'description' => ''
            ],
            [
                'name' => 'Offices', //7
                'amount' => '250000',
                'description' => 'Offices, Banks, Hotels, Departmental stores, schools, etc'
            ],
        ];

        foreach ($forms as $form) {
            # code...
            Forms::create([

                'name' => $form['name'],
                'amount' => $form['amount'],
                'description' => $form['description']

            ]);
        }
    }
}
