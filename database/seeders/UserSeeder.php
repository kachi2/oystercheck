<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            ['firstname' => 'Morgans','lastname'=>'Admin', 'email'=>'support@oysterchecks.com', 'password'=>Hash::make('oysterchecks_admin'),'user_type'=>3, 'role_id'=>1],
            
        ];
        foreach($data as $datum){
            User::create($datum);
        }
    }
}
