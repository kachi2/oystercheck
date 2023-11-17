<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessVerificationDetail extends Model
{
    use HasFactory;

    protected $fillable = [

        'business_verification_id', 'ref', 'service_ref', 'user_id', 'fee', 'reg_no', 'reg_date', 'phone', 'website', 'address', 'state', 'lga', 'city', 'status'

    ];
}
