<?php

use App\Width;
use Illuminate\Database\Seeder;

class WidthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $widths = [
            [ 'name' => '145' ],
            [ 'name' => '155' ],
            [ 'name' => '165' ],
            [ 'name' => '175' ],
            [ 'name' => '185' ],
            [ 'name' => '195' ],
            [ 'name' => '205' ],
            [ 'name' => '215' ],
            [ 'name' => '225' ],
            [ 'name' => '235' ],
            [ 'name' => '245' ],
            [ 'name' => '255' ],
            [ 'name' => '265' ],
            [ 'name' => '275' ],
            [ 'name' => '285' ],
            [ 'name' => '295' ],
            [ 'name' => '305' ],
            [ 'name' => '315' ],
            [ 'name' => '325' ],
            [ 'name' => '335' ],
            [ 'name' => '345' ]
            ];
        
        foreach ($widths as $width) {
            # 
            Width::create($width);
        }
    }
}
