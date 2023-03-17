<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'company_name', 'company_email', 'company_address', 'company_phone', 'image'
    ];

    public function candidate(){
        return $this->hasMany(Candidate::class, 'client_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
