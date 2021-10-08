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
            ['slug' => 'individual_address', 'name'=>'house_number', 'placeholder'=>'Enter House Number', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'individual_address', 'name'=>'street', 'placeholder'=>'Enter Street', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'individual_address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'individual_address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'individual_address', 'name'=>'landmark', 'placeholder'=>'Enter nearest bustop', 'type'=>'text', 'is_required'=>'1'],
    
            ['slug' => 'reference_address', 'name'=>'first_name', 'placeholder'=>'Enter Guarantor First Name', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'reference_address', 'name'=>'last_name', 'placeholder'=>'Enter Guarantor Last Name', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'phone', 'placeholder'=>'Enter Guarantor Phone Number', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'reference_address', 'name'=>'email', 'placeholder'=>'Enter Guarantor Email', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'house_number', 'placeholder'=>'Enter House Number', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'reference_address', 'name'=>'street', 'placeholder'=>'Enter Street', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'reference_address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'landmark', 'placeholder'=>'Enter nearest bustop', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'reference_address', 'name'=>'country', 'placeholder'=>'Enter Country', 'type'=>'text', 'is_required'=>'1'],
    
    
            ['slug' => 'business_address', 'name'=>'name', 'placeholder'=>'Enter Contact Name', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'business_address', 'name'=>'registration_number', 'placeholder'=>'Registration Number', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'business_address', 'name'=>'email', 'placeholder'=>'Enter Contact Email', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'business_address', 'name'=>'phone', 'placeholder'=>'Enter Contact Phone', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'house_number', 'placeholder'=>'Enter House Number', 'type'=>'text', 'is_required'=>'1'], 
            ['slug' => 'reference_address', 'name'=>'street', 'placeholder'=>'Enter Street', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'reference_address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1'],  
            ['slug' => 'reference_address', 'name'=>'landmark', 'placeholder'=>'Enter nearest bustop', 'type'=>'text', 'is_required'=>'1'],
            ['slug' => 'reference_address', 'name'=>'country', 'placeholder'=>'Enter Country', 'type'=>'text', 'is_required'=>'1'],
    
       ];
        foreach($run as $data){
            FieldInput::create($data);
        }
    }

}
