<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BvnVerification extends Model
{
    use HasFactory;

    protected $table = 'bvn_verifications';


    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'validations',
        'status',
        'reason',
        'data_validation',
        'selfie_validation',
        'first_name',
        'middle_name',
        'last_name',
        'image',
        'enrollment_branch',
        'enrollment_institution',
        'phone',
        'dob',
        'should_retrieve_nin',
        'gender',
        'pin',
        'subject_consent',
        'type',
        'country',
        'all_validation_passed',
        'requested_at',
        'last_modified_at',
        'fee'
    ];

    protected $casts = [
        'validations' => 'object',
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function verification(){
        return $this->belongsTo(Verification::class, 'user_id');
    }
}