<?php

namespace Database\Seeders;

use App\Models\FieldInput;
use Illuminate\Database\Seeder;

class PepSanctionInputSeeder extends Seeder
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

            // ['slug' => 'pep-sanction-list', 'name' => 'first_name', 'placeholder' => 'Enter First Name', 'type' => 'text', 'is_required' => '1', 'label' => 'First Name'],
            // ['slug' => 'pep-sanction-list', 'name' => 'last_name', 'placeholder' => 'Enter Last Name', 'type' => 'text', 'is_required' => '1', 'label' => 'Last Name'],
            ['slug' => 'pep-sanction-list', 'name' => 'middle_name', 'placeholder' => 'Enter Middle Name', 'type' => 'text', 'is_required' => null, 'label' => 'Middle Name']
        ];

        foreach($data as $ss){
            FieldInput::create($ss);
        }
    }

}
