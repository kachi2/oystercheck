<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\States;

class StatesSeeder extends Seeder
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
           ['name' => 'Abia'],
           ['name' => 'Adamawa'],
           ['name' => 'Akwa Ibom'],
           ['name' => 'Anambra'],
           ['name' => 'Bayelsa'],
           ['name' => 'Benue'],
           ['name' => 'Borno'],
           ['name' => 'Cross'],
           ['name' => 'River'],

           ['name' => 'Delta'],
           ['name' => 'Ebonyi'],
           ['name' => 'Edo'],
           ['name' => 'Ekiti'],
           ['name' => 'Enugu'],
           ['name' => 'Gombe'],
           ['name' => 'Jigawa'],
           ['name' => 'Kaduna'],
           ['name' => 'Kano'],

           ['name' => 'Katsina'],
           ['name' => 'Kebbi'],
           ['name' => 'Kogi'],
           ['name' => 'Kwara'],
           ['name' => 'Lagos'],
           ['name' => 'Nasarawa'],
           ['name' => 'Niger'],
           ['name' => 'Ogun'],
           ['name' => 'Osun'],
           ['name' => 'Oyo'],
           ['name' => 'Plateau'],
           ['name' => 'Sokoto'],
           ['name' => 'Taraba'],
           ['name' => 'Lagos'],
           ['name' => 'Yobe'],
           ['name' => 'Zamfara'],
        ];

        foreach($data as $dd){
            States::create($dd);
        }
    }

    
}
