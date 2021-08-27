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

            ['slug' => 'passport', 'name'=>'Nigeria International Passport', 'report_type'=>'identity', 'slug'=>'NIP'], 
            ['slug' => 'inec', 'name'=>'Permanent Voters Card', 'report_type'=>'identity', 'slug'=>'PVC'], 
            ['slug' => 'ibvn', 'name'=>'Bank Verification Number', 'report_type'=>'identity', 'slug'=>'BVN'], 
            ['slug' => 'nin', 'name'=>'National Identity Number', 'report_type'=>'identity', 'slug'=>'NIN']
        ];

    foreach($data as $daa){
        Verification::create($daa);
    }
    }

}
