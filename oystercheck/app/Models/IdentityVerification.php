<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityVerification extends Model
{
    use HasFactory;


    protected $fillable = [

        'verification_id', 'ref', 'service_reference', 'user_id', 'fee', 'discount', 'status'
    ];

    public function user(){

        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function verification(){
        return $this->belongsTo(Verification::class, 'verification_id', 'id');
    }
}
