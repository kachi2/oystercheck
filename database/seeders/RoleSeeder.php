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
            ['name' => 'Super Admin'],
            ['name' => 'Moderator'],
            ['name' => 'Quality Assurance']
        ];
        foreach($data as $datum){
            Role::create($datum);
        }
    }
}
