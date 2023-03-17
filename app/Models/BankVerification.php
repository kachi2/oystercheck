<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankVerification extends Model
{
    use HasFactory;

    protected $table = 'bank_account_verifications';


    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'status',
        'reason',
        'data_validation',
        'selfie_validation',
        'account_number',
        'bank_code',
        'bank_name',
        'bank_details',
        'subject_consent',
        'all_validation_passed',
        'requested_at',
        'last_modified_at',
        'fee',
        'type',
        'country',
        
    ];

    protected $casts = [
        'bank_details' => 'object',
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function verification(){
        return $this->belongsTo(Verification::class, 'user_id');
    }
}
