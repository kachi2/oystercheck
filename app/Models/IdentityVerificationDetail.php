<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityVerificationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'identity_verification_id', 'external_ref', 'first_name', 'middle_name', 'last_name', 'dob', 'phone', 'image_path', 'payload', 'reference', 'slug', 'expires_at',
                'payload',
                'place_of_issue' ,
                'issue_date',
                'expiry_date', 
                'country',
                'educational_level',
                'marital_status',
                'gender' ,
                'document_number' ,
                'address',
                'profession' ,
                'birth_state',
                'residence_state', 
                'tracking_id','user_id', 'tax_identification_number','first_state_of_issuance'
    ];
    public function identityVerification(){
        return $this->belongsTo('App\Models\IdentityVerification', 'id', 'identity_verification_id');
    }
}
