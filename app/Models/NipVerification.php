<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NipVerification extends Model
{
    use HasFactory;

    protected $table = 'nip_verifications';


    protected $fillable = [
        'verification_id',
        'user_id',
        'service_reference',
        'validations',
        'ref',
        'status',
        'reason',
        'data_validation',
        'selfie_validation',
        'first_name',
        'middle_name',
        'last_name',
        'expired_date',
        'notify_when_id_expire',
        'image',
        'signature',
        'issued_at',
        'issued_date',
        'phone',
        'dob',
        'subject_consent',
        'pin',
        'type',
        'gender',
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
