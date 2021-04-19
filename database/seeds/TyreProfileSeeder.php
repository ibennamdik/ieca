<?php

use App\TyreProfile;
use Illuminate\Database\Seeder;

class TyreProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $profiles = [
            [ 'name' => '20' ],
            [ 'name' => '25' ],
            [ 'name' => '30' ],
            [ 'name' => '35' ],
            [ 'name' => '40' ],
            [ 'name' => '45' ],
            [ 'name' => '50' ],
            [ 'name' => '55' ],
            [ 'name' => '60' ],
            [ 'name' => '65' ],
            [ 'name' => '70' ],
            [ 'name' => '75' ],
            [ 'name' => '80' ],
            [ 'name' => '85' ],
            [ 'name' => '90' ],
            [ 'name' => '95' ],
            ];
        
        foreach ($profiles as $profile) {
            # 
            TyreProfile::create($profile);
        }
    }
}
