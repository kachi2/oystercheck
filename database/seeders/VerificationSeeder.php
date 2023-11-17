<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Verification;

class VerificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $data = [
            ['slug' => 'nip', 'name'=>'Nigeria International Passport', 'report_type'=>'passport','fee'=>1000], 
            ['slug' => 'pvc', 'name'=>'Permanent Voters Card', 'report_type'=>'pvc','fee'=>250], 
            ['slug' => 'bvn', 'name'=>'Bank Verification Number', 'report_type'=>'bvn','fee'=>500], 
            ['slug' => 'nin', 'name'=>'National Identity Number', 'report_type'=>'nin','fee'=>900], 
            ['slug' => 'ndl', 'name'=>'Nigerian Driver\'s License', 'report_type'=>'drivers-license','fee'=>200], 
            ['slug' => 'phone-number', 'name'=>'Phone Number', 'report_type'=>'phone-number','fee'=>500],
            ['slug'=>'bank-account', 'name'=>'Bank Account', 'report_type'=>'bank-account','fee'=>400],
            ['slug'=>'compare-images', 'name'=>'Compare Images', 'report_type'=>'compare-images','fee'=>400],
            ['slug' => 'cac', 'name'=>'Company Search (CAC)', 'report_type'=>'business','fee'=>200],
            ['slug' => 'tin', 'name'=>'Tax Identification Number', 'report_type'=>'business','fee'=>200],
            ['slug' => 'individual-address', 'name'=>'Individual Address Verification', 'report_type'=>'address','fee'=>1000], 
            ['slug' => 'reference-address', 'name'=>'Reference Address Verification', 'report_type'=>'address','fee'=>1000], 
            ['slug' => 'business-address', 'name'=>'Business Address Verification', 'report_type'=>'address','fee'=>1000],  
        ];

    foreach($data as $datum){
        Verification::create($datum);
    }
    }

}
