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
        $input_fields = [
            ['slug' => 'nin', 'name'=>'pin', 'placeholder'=>'Enter NIN number', 'type'=>'text', 'is_required'=>true, 'label'=>'NIN Number', 'inputid'=>'pin'], 
            ['slug' => 'nin', 'name'=>'validate_data', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Validate Data', 'inputid'=>'validateData'], 
            ['slug' => 'nin', 'name'=>'compare_image', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Compare Image', 'inputid'=>'compareImage'],

            ['slug' => 'nip', 'name'=>'pin', 'placeholder'=>'Enter NIP number', 'type'=>'text', 'is_required'=>true, 'label'=>'NIP Number', 'inputid'=>'pin'], 
            ['slug' => 'nip', 'name'=>'last_name', 'placeholder'=>'Enter Last Name', 'type'=>'text', 'is_required'=>true, 'label'=>'Last Name', 'inputid'=>'last_name'], 
            ['slug' => 'nip', 'name'=>'validate_data', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Validate Data', 'inputid'=>'validateData'], 
            ['slug' => 'nip', 'name'=>'compare_image', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Compare Image', 'inputid'=>'compareImage'], 
            
            ['slug' => 'pvc', 'name'=>'pin', 'placeholder'=>'Enter PVC number', 'type'=>'text', 'is_required'=>true, 'label'=>'PVC Number', 'inputid'=>'pin'], 
            ['slug' => 'pvc', 'name'=>'validate_data', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Validate Data', 'inputid'=>'validateData'], 
            
            ['slug' => 'compare-images', 'name'=>'first_image', 'type'=>'file', 'is_required'=>true, 'label'=>'First Image', 'inputid'=>'firstImage'], 
            ['slug' => 'compare-images', 'name'=>'second_image', 'type'=>'file', 'is_required'=>true, 'label'=>'Second Image', 'inputid'=>'secondImage'], 
            
            ['slug' => 'bank-account', 'name'=>'account_number', 'placeholder'=>'Enter Account Number', 'type'=>'text', 'is_required'=>true, 'label'=>'Account Number', 'inputid'=>'accountNumber'],
            ['slug' => 'bank-account', 'name'=>'bank', 'placeholder'=>'Select Bank', 'type'=>'select', 'is_required'=>true, 'label'=>'Bank', 'inputid'=>'bank'],
            ['slug' => 'bank-account', 'name'=>'bank_name', 'type'=>'hidden', 'is_required'=>true, 'inputid'=>'bank_name'],

            ['slug' => 'phone-number', 'name'=>'phone_number', 'placeholder'=>'Enter Phone Number', 'type'=>'text', 'is_required'=>true, 'label'=>'Phone Number', 'inputid'=>'phoneNumber'],
            ['slug' => 'phone-number', 'name'=>'advance_search', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Advance Search', 'inputid'=>'advanceSearch'],
            
            ['slug' => 'bvn', 'name'=>'pin', 'placeholder'=>'Enter BVN number', 'type'=>'text', 'is_required'=>true, 'label'=>'BVN Number', 'inputid'=>'pin'], 
            ['slug' => 'bvn', 'name'=>'validate_data', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Validate Data', 'inputid'=>'validateData'], 
            ['slug' => 'bvn', 'name'=>'compare_image', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Compare Image', 'inputid'=>'compareImage'], 
            ['slug' => 'bvn', 'name'=>'advance_search', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Advance Search', 'inputid'=>'advanceSearch'],
            
            ['slug' => 'ndl', 'name'=>'pin', 'placeholder'=>'Enter NDL number', 'type'=>'text', 'is_required'=>true, 'label'=>'NDL number', 'inputid'=>'pin'], 
            ['slug' => 'ndl', 'name'=>'validate_data', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Validate Data', 'inputid'=>'validateData'], 
            ['slug' => 'ndl', 'name'=>'compare_image', 'type'=>'checkbox', 'is_required'=>false, 'label'=>'Compare Image', 'inputid'=>'compareImage'], 
            
            ['slug' => 'cac', 'name'=>'search_term', 'placeholder'=>'Select a Search Term', 'type'=>'select', 'is_required'=>true, 'label'=>'Search Term', 'inputid'=>'searchTerm'],
            ['slug' => 'cac', 'name'=>'search_value', 'placeholder'=>'Enter a Search Value', 'type'=>'text', 'is_required'=>true, 'label'=>'Search Value', 'inputid'=>'searchValue'],
            
            ['slug' => 'tin', 'name'=>'pin', 'placeholder'=>'', 'type'=>'text', 'is_required'=>true, 'label'=>'Tax Identification Number', 'inputid'=>'pin'], 
             
            ['slug' => 'candidate', 'name'=>'first_name', 'placeholder'=>'Enter Candidate\'s First Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'First Name', 'inputid'=>'first_name'], 
            ['slug' => 'candidate', 'name'=>'middle_name', 'placeholder'=>'Enter Candidate\'s Middle Name', 'type'=>'text', 'is_required'=>'0', 'label'=>'Middle Name', 'inputid'=>'middle_name'],
            ['slug' => 'candidate', 'name'=>'last_name', 'placeholder'=>'Enter Candidate\'s Last Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'Last Name', 'inputid'=>'last_name'], 
            ['slug' => 'candidate', 'name'=>'phone', 'placeholder'=>'Enter Candidate\'s Phone', 'type'=>'text', 'is_required'=>'1', 'label'=>'Phone', 'inputid'=>'phone'], 
            ['slug' => 'candidate', 'name'=>'dob', 'placeholder'=>'Enter Candidate\'s Date of Birth e.g. 1900-03-31', 'type'=>'text', 'is_required'=>'0', 'label'=>'Date of Birth', 'inputid'=>'dob'], 
            ['slug' => 'candidate', 'name'=>'email', 'placeholder'=>'Enter Candidate\'s Email', 'type'=>'email', 'is_required'=>'0', 'label'=>'Email', 'inputid'=>'email'],  
            ['slug' => 'candidate', 'name'=>'image', 'placeholder'=>'Upload Candidate\'s Picture', 'type'=>'file', 'is_required'=>'1', 'label'=>'Image', 'inputid'=>'image'],
            
            ['slug' => 'individual-address', 'name'=>'flat_number', 'placeholder'=>'E.g. 1st floor', 'type'=>'text', 'is_required'=>'0', 'label'=>'Candidate\'s Flat Number', 'inputid'=>'flat_number'],
            ['slug' => 'individual-address', 'name'=>'building_name', 'placeholder'=>'Enter Building Name', 'type'=>'text', 'is_required'=>'0', 'label'=>'Candidate\'s Building Name', 'inputid'=>'building_name'], 
            ['slug' => 'individual-address', 'name'=>'building_number', 'placeholder'=>'E.g. 6 or Number 6 or No. 6', 'type'=>'text', 'is_required'=>'1', 'label'=>'Candidate\'s Building Number', 'inputid'=>'building_number'], 
            ['slug' => 'individual-address', 'name'=>'landmark', 'placeholder'=>'Enter nearest Landmark or bustop', 'type'=>'text', 'is_required'=>'1', 'label'=>'Nearest Landmark', 'inputid'=>'landmark'],
            ['slug' => 'individual-address', 'name'=>'street', 'placeholder'=>'Enter Street Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'Candidate\'s Street', 'inputid'=>'street'],  
            ['slug' => 'individual-address', 'name'=>'Sub_street', 'placeholder'=>'Enter Sub-Street Name', 'type'=>'text', 'is_required'=>'0', 'label'=>'Candidate\'s sub-Street', 'inputid'=>'sub_street'],
            ['slug' => 'individual-address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1', 'label'=>'Candidate\'s State', 'inputid'=>'state'],
            ['slug' => 'individual-address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1', 'label'=>'Candidate\'s City', 'inputid'=>'city'],
            ['slug' => 'individual-address', 'name'=>'lga', 'placeholder'=>'Enter LGA', 'type'=>'text', 'is_required'=>'0', 'label'=>'Candidate\'s LGA', 'inputid'=>'lga'],
        
            ['slug' => 'reference-address', 'name'=>'first_name', 'placeholder'=>'Enter Guarantor\'s First Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'First Name', 'inputid'=>'first_name'], 
            ['slug' => 'reference_address', 'name'=>'last_name', 'placeholder'=>'Enter Guarantor\'s Last Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'Last Name', 'inputid'=>'last_name'],  
            ['slug' => 'reference-address', 'name'=>'phone', 'placeholder'=>'Enter Guarantor\'s Phone Number', 'type'=>'text', 'is_required'=>'1', 'label'=>'Phone', 'inputid'=>'phone'],
            ['slug' => 'reference-address', 'name'=>'email', 'placeholder'=>'Enter Guarantor\'s Email', 'type'=>'text', 'is_required'=>'1', 'label'=>'Email', 'inputid'=>'email'],  
            ['slug' => 'reference-address', 'name'=>'image', 'placeholder'=>'Upload Guarantor\'s Picture', 'type'=>'file', 'is_required'=>'1', 'label'=>'Image', 'inputid'=>'image'],
            
            ['slug' => 'reference-address', 'name'=>'flat_number', 'placeholder'=>'E.g. 1st floor', 'type'=>'text', 'is_required'=>'0', 'label'=>'Flat Number', 'inputid'=>'flat_number'],
            ['slug' => 'reference-address', 'name'=>'building_name', 'placeholder'=>'Enter Building Name', 'type'=>'text', 'is_required'=>'0', 'label'=>'Building Name', 'inputid'=>'building_name'], 
            ['slug' => 'reference-address', 'name'=>'building_number', 'placeholder'=>'E.g. 6 or Number 6 or No. 6', 'type'=>'text', 'is_required'=>'1', 'label'=>'Building Number', 'inputid'=>'building_number'], 
            ['slug' => 'reference-address', 'name'=>'landmark', 'placeholder'=>'Enter nearest Landmark or bustop', 'type'=>'text', 'is_required'=>'1', 'label'=>'Nearest Landmark', 'inputid'=>'landmark'],
            ['slug' => 'reference-address', 'name'=>'street', 'placeholder'=>'Enter Street', 'type'=>'text', 'is_required'=>'1', 'label'=>'Street', 'inputid'=>'street'],  
            ['slug' => 'reference-address', 'name'=>'Sub_street', 'placeholder'=>'Enter Sub-Street', 'type'=>'text', 'is_required'=>'0', 'label'=>'Sub-street', 'inputid'=>'sub_street'],
            ['slug' => 'reference-address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1', 'label'=>'State', 'inputid'=>'state'],
            ['slug' => 'reference-address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1', 'label'=>'City', 'inputid'=>'city'],
            ['slug' => 'reference-address', 'name'=>'lga', 'placeholder'=>'Enter LGA', 'type'=>'text', 'is_required'=>'0', 'label'=>'LGA', 'inputid'=>'lga'],
    
            ['slug' => 'business-address', 'name'=>'name', 'placeholder'=>'Enter Contact Person\'s Name', 'type'=>'text', 'is_required'=>'1', 'label'=>'Name', 'inputid'=>'name'], 
            ['slug' => 'business-address', 'name'=>'email', 'placeholder'=>'Enter Contact\'s Email', 'type'=>'text', 'is_required'=>'1', 'label'=>'Email', 'inputid'=>'email'],
            ['slug' => 'business-address', 'name'=>'phone', 'placeholder'=>'Enter Contact\'s Phone', 'type'=>'text', 'is_required'=>'1', 'label'=>'Phone', 'inputid'=>'phone'],  
            ['slug' => 'business-address', 'name'=>'registration_number', 'placeholder'=>'Registration Number', 'type'=>'text', 'is_required'=>'1', 'label'=>'Registration Number', 'inputid'=>'registration_number'],
            ['slug' => 'business-address', 'name'=>'flat_number', 'placeholder'=>'E.g. 1st floor', 'type'=>'text', 'is_required'=>'0', 'label'=>'Flat Number', 'inputid'=>'flat_number'],
            ['slug' => 'business-address', 'name'=>'building_name', 'placeholder'=>'Enter Building Name', 'type'=>'text', 'is_required'=>'0', 'label'=>'Building Name', 'inputid'=>'building_name'], 
            ['slug' => 'business-address', 'name'=>'building_number', 'placeholder'=>'E.g. 6 or Number 6 or No. 6', 'type'=>'text', 'is_required'=>'1', 'label'=>'Building Number', 'inputid'=>'building_number'], 
            ['slug' => 'business-address', 'name'=>'landmark', 'placeholder'=>'Enter nearest Landmark or bustop', 'type'=>'text', 'is_required'=>'1', 'label'=>'Nearest Landmark', 'inputid'=>'landmark'],
            ['slug' => 'business-address', 'name'=>'street', 'placeholder'=>'Enter Street', 'type'=>'text', 'is_required'=>'1', 'label'=>'Street', 'inputid'=>'street'],  
            ['slug' => 'business-address', 'name'=>'Sub_street', 'placeholder'=>'Enter Sub-Street', 'type'=>'text', 'is_required'=>'0', 'label'=>'Sub-street', 'inputid'=>'sub_street'],
            ['slug' => 'business-address', 'name'=>'state', 'placeholder'=>'Enter State', 'type'=>'text', 'is_required'=>'1', 'label'=>'State', 'inputid'=>'state'],
            ['slug' => 'business-address', 'name'=>'city', 'placeholder'=>'Enter City', 'type'=>'text', 'is_required'=>'1', 'label'=>'City', 'inputid'=>'city'],
            ['slug' => 'business-address', 'name'=>'lga', 'placeholder'=>'Enter LGA', 'type'=>'text', 'is_required'=>'0', 'label'=>'LGA', 'inputid'=>'lga'],
    
       ];
        foreach($input_fields as $input_field){
            FieldInput::create($input_field);
        }
    }

}
