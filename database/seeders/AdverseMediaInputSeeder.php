<?php

namespace Database\Seeders;
use App\Models\FieldInput;
use Illuminate\Database\Seeder;

class AdverseMediaInputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            ['slug' => 'adverse-media-intelligence', 'name' => 'search_query', 'placeholder' => 'Enter Search Query', 'type' => 'text', 'is_required' => '1', 'label' => 'Search Query'],
        ];

        foreach($data as $ss){
            FieldInput::create($ss);
        }
    }
}
