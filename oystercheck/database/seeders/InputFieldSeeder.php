<?php

namespace Database\Seeders;
use App\Models\FieldInput;
use Illuminate\Database\Seeder;

class InputFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $run = [
            ['slug' => 'NIN', 'name'=>'reference', 'placeholder'=>'Enter NIN number', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'NIP', 'name'=>'reference', 'placeholder'=>'Enter NIP number', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'PVc', 'name'=>'reference', 'placeholder'=>'Enter PVC number', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'BVN', 'name'=>'reference', 'placeholder'=>'Enter BVN number', 'type'=>'text', 'is_required'=>'1']   
         
       
        ];

        foreach($run as $data){
            FieldInput::create($data);
        }
    }

}
