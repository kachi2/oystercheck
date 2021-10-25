<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [

            ['name' => 'Candidate'],
            ['name' => 'Client'],
            ['name' => 'Admin'],
            ['name' => 'SuperAdmin']

        ];
        foreach($data as $dd){
            Role::create($dd);
        }
    }
}
