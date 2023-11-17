<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinVerification extends Model
{
    use HasFactory;

    protected $table = 'tin_verifications';
    
    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'subject_consent',
        'status',
        'type',
        'fee',
        'search_term',
        'search_value',
        'name',
        'registration_number',
        'tin',
        'jtb_tin',
        'tax_office',
        'email',
        'phone',
        'requested_at',
        'last_modified_at',
        'country'
    ];

    protected $casts = [
        
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verification(){
        return $this->belongsTo(Verification::class, 'verification_id');
    }
}
