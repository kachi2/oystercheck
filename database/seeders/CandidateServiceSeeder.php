<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CandidateService;

class CandidateServiceSeeder extends Seeder
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

            ['name'=> 'Education Check', 'fee'=> '200'],
            ['name'=> 'Police / Criminal Record Check', 'fee'=> '500'],
            ['name'=> 'Professional Certificate Verification Check', 'fee'=> '150'],
            ['name'=> 'Address Verification', 'fee'=> '200'],
            ['name'=> 'ID Verification / Right to Work/ Residency Check', 'fee'=> '200'],
            ['name'=> 'Driver\'s Licence Verification', 'fee'=> '200'],
            ['name'=> 'Employment Referencing Verification Check', 'fee'=> '200'],
            ['name'=> 'Guarantor', 'fee'=> '200'],
            ['name'=> 'Address Verification', 'fee'=> '500'],
            ['name'=> 'Political Exposed Persons (PEP) Check', 'fee'=> '200'],
        ];

        foreach($data as $dd){
            CandidateService::create($dd);
        }
    }
}
