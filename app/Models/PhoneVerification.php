<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneVerification extends Model
{
    use HasFactory;

    protected $table = 'phone_number_verifications';


    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'address',
        'validations',
        'status',
        'reason',
        'data_validation',
        'selfie_validation',
        'phone_details',
        'first_name',
        'middle_name',
        'last_name',
        'image',
        'email',
        'nin',
        'birth_state',
        'religion',
        'birth_lga',
        'birth_country',
        'dob',
        'gender',
        'phone_number',
        'subject_consent',
        'type',
        'country',
        'all_validation_passed',
        'advance_search',
        'requested_at',
        'last_modified_at',
        'fee'
    ];

    protected $casts = [
        'validations' => 'object',
        'address' => 'object',
        'phone_details' => 'array'
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function verification(){
        return $this->belongsTo(Verification::class, 'user_id');
    }
}
