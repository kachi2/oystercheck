<?php

namespace Database\Seeders;

use App\Models\Verification;
use Illuminate\Database\Seeder;

class AmlVerificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = json_encode(array('firstName' => 'Ahmed', 'lastName' => 'Al Khalid'));
        $dat = json_encode(array('query' => 'Jon Snow', 'type' => 'individual'));

        $data = [
            ['slug' => 'pep-sanction-list', 'name' => 'Sanction & PEP Screening', 'report_type' => 'aml', 'test_data' => $datas],
            ['slug' => 'adverse-media-intelligence', 'name' => 'Adverse Media Intelligence', 'report_type' => 'aml', 'test_data' => $dat]
        ];

        foreach($data as $ss){
            Verification::create($ss);
        }
    }
}
