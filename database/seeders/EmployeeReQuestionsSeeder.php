<?php

namespace Database\Seeders;

use App\Models\EmployeeRefQuestion;
use Illuminate\Database\Seeder;

class EmployeeReQuestionsSeeder extends Seeder
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
            ['question' => 'What is/was your relationship with the above named', 'input_type' => 'text'],
            ['question' => 'How long have you known him/her', 'input_type' => 'text'],
            ['question' => 'In what capacity did you know him/her', 'input_type' => 'text'],
            ['question' => 'If you were a previous employer, what was his/her last position at the Organization', 'input_type' => 'text'],
            ['question' => 'Would you recommend him/her for employment?', 'input_type' => 'text'],
            ['question' => 'Would you re-employ him/her if given the opportunity', 'input_type' => 'text'],
            ['question' => 'Please comment on his/her character and capabilities', 'input_type' => 'text'],
            ['question' => 'Based on your knowledge and interaction with him/her, please the following parameters', 'input_type' => 'hidden'],
            ['question' => 'Honesty', 'input_type' => 'select'],
            ['question' => 'Reliability', 'input_type' => 'select'],
            ['question' => 'Resourcefulness', 'input_type' => 'select'],
            ['question' => 'Team spirit', 'input_type' => 'select'],
            ['question' => 'What would you regard as his/her areas of weakness:', 'input_type' => 'text'],
            ['question' => 'Kindly state any other useful information:', 'input_type' => 'text'],
            ['question' => 'REFEREES PERSONAL', 'input_type' => 'hidden'],
            ['question' => 'Name', 'input_type' => 'text'],
            ['question' => 'Profession/Status', 'input_type' => 'text'],
            ['question' => 'Address', 'input_type' => 'text'],
            ['question' => 'Telephone', 'input_type' => 'text'],
            ['question' => 'Email', 'input_type' => 'text'],
        ];

        foreach($data as $dd){
            EmployeeRefQuestion::create($dd);
        }
    }

}
