<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessVerification extends Model
{
    use HasFactory;

    protected $fillable = [

        'verification_id', 'ref', 'service_ref', 'user_id', 'fee', 'discount', 'status'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verification(){
        return $this->belongsTo(Verification::class, 'verification_id', 'id');
    }
}
