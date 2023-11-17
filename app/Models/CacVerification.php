<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CacVerification extends Model
{
    use HasFactory;

    protected $table = 'cac_verifications';

    protected $fillable = [
        'verification_id',
        'user_id',
        'ref',
        'service_reference',
        'subject_consent',
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
        'company_status',
        'phone',
        'type_of_entity',
        'activity',
        'registration_date',
        'address',
        'state',
        'lga',
        'city',
        'website_email',
        'key_personnel',
        'branch_address',
        'head_office_address',
        'objectives',
        'status',
        'requested_at',
        'last_modified_at',
        'country'
    ];

    protected $casts = [
        'key_personnel' => 'array'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verification(){
        return $this->belongsTo(Verification::class, 'verification_id');
    }
}
