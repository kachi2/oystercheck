<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRefQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question','input_type'];
}
