<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdverseMediaCategory;

class AdverseMediaCategorySeeder extends Seeder
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
            ['name' => 'fraud'], 
            ['name' => 'sanction-violations'], 
            ['name' => 'bribery-and-corruption'], 
            ['name' => 'money-laundering'], 
            ['name' => 'terrorism'], 
            ['name' => 'civil-lawsuit'], 
            ['name' => 'cybercrime'], 
            ['name' => 'organized-crime'], 
            ['name' => 'drug'], 
            ['name' => 'tax-evasion'], 
            ['name' => 'arms-trafficking'], 
            ['name' => 'embezzlement'], 
            ['name' => 'money-laundering'], 
            ['name' => 'securities-fraud'], 
            ['name' => 'pharmaceutical-product-trafficking'], 
            ['name' => 'theft'], 
            ['name' => 'extortion'], 
            ['name' => 'forgery'], 
            ['name' => 'falsifying-information-on-official-documents'], 
            ['name' => 'theft'], 
            ['name' => 'piracy'], 
            ['name' => 'antitrust-violations'],   
        ];

        foreach($data as $dd){
            AdverseMediaCategory::create($dd);
        }
    }
}
