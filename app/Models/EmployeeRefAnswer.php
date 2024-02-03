<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRefAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'candidate_verification_id', 'employee_reference_id', 'employee_ref_question_id', 'answer'];


    public function ReferenceAnswers(){
        return $this->belongsTo(EmployeeRefQuestion::class, 'employee_ref_question_id', 'id');
    }
}
