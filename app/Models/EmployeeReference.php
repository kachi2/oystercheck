<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeReference extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'candidate_verification_id', 'company_name', 'company_address', 'company_contact', 'is_read', 'start_year', 'end_year', 'position'];
 
    public function user(){
        return $this->belongsTo(User::class);
    }

}
