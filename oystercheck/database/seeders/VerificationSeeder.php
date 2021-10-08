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

            ['slug' => 'individual_address', 'name'=>'Individual Address verification', 'report_type'=>'addree'], 
        ];

    foreach($data as $daa){
        Verification::create($daa);
    }
    }

}
