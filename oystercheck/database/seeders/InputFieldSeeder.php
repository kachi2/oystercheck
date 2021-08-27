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
            ['slug' => 'NIN', 'name'=>'last_name', 'placeholder'=>'Enter Last Name', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'NIP', 'name'=>'last_name', 'placeholder'=>'Enter Last Name', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'PVc', 'name'=>'last_name', 'placeholder'=>'Enter Last Name', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'BVN', 'name'=>'last_name', 'placeholder'=>'Enter Last Name', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'NIN', 'name'=>'first_name', 'placeholder'=>'Enter  First Name', 'type'=>'text', 'is_required'=>'0'],  
            ['slug' => 'NIP', 'name'=>'first_name', 'placeholder'=>'Enter  First Name ', 'type'=>'text', 'is_required'=>'0'],
            ['slug' => 'PVc', 'name'=>'first_name', 'placeholder'=>'Enter First Namer', 'type'=>'text', 'is_required'=>'0'],
            ['slug' => 'BVN', 'name'=>'first_name', 'placeholder'=>'Enter First Name', 'type'=>'text', 'is_required'=>'0']   
       
        ];

        foreach($run as $data){
            FieldInput::create($data);
        }
    }

}
