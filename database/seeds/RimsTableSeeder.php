<?php

use App\Rim;
use Illuminate\Database\Seeder;

class RimsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rims = [
            [  'name' => '10' ],
            [  'name' => '12' ],
            [  'name' => '14' ],
            [  'name' => '15' ],
            [  'name' => '16' ],
            [  'name' => '17' ],
            [  'name' => '18' ],
            [  'name' => '19' ],
            [  'name' => '20' ],
            [  'name' => '21' ],
            [  'name' => '22' ],
            [  'name' => '23' ],
            [  'name' => '24' ],
            [  'name' => '25' ],
            [  'name' => '26' ],
            [  'name' => '27' ],
            [  'name' => '28' ],
            [  'name' => '29' ],
            [  'name' => '30' ],
            [  'name' => '31' ],
            [  'name' => '32' ]
            ];
        
        foreach ($rims as $rim) {
            # 
            Rim::create($rim);
        }
       
    }
}
