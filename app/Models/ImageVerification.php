<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageVerification extends Model
{
    use HasFactory;

    protected $table = 'image_verifications';


    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'status',
        'reason',
        'selfie_validation',
        'image_comparison',
        'subject_consent',
        'all_validation_passed',
        'requested_at',
        'last_modified_at',
        'fee',
        'type',
        'country',
        
    ];

    protected $casts = [
        'image_comparison' => 'object',
        
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function verification(){
        return $this->belongsTo(Verification::class, 'user_id');
    }
}
