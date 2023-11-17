<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PepSactionVerification extends Model
{
    use HasFactory;


    protected $table = 'pep_saction_verifications';
    protected $fillable = ['verification_id', 'user_id', 'ref','is_sandbox', 'status', 'first_name', 'middle_name', 'last_name', 'pepList', 'sanctionList'];
}
