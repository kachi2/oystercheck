<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressVerification extends Model
{
    use HasFactory;

    protected $fillable = [
        'verification_id',
        'slug',
        'service_reference',
        'ref',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verification(){
        return $this->belongsTo(Verification::class, 'verification_id', 'id');
    }
}
