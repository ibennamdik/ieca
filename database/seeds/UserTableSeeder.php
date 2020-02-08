<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $director = User::create([
            'name' => 'Super User',
            'email' => 'super@ieca.com.ng',
            'password' => Hash::make('admin123'),
        ]);

        $director->profile()->create(['status_id' => 11, 'phone_number' => '00000000000']);

        $director->assignRole('Level 1');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@ieca.com.ng',
            'password' => Hash::make('admin123'),
        ]);

        $admin->profile()->create(['status_id' => 11, 'phone_number' => '00000000001']);

        $admin->assignRole('Level 2');

        $agent = User::create([
            'name' => 'Agent',
            'email' => 'agent@ieca.com.ng',
            'password' => Hash::make('admin123'),
        ]);

        $agent->profile()->create(['status_id' => 11, 'phone_number' => '00000000002']);

        $agent->assignRole('Level 3');

        $customer = User::create([
            'name' => 'Customer',
            'email' => 'customer@ieca.com.ng',
            'password' => Hash::make('customer123'),
        ]);

        $customer->profile()->create([
            'phone_number' =>'08169311714',
            'address' => 'zaramaganda rayfield rd',
            'status_id' => 7
        ]);

        $customer->assignRole('Level 4');
    }
}
