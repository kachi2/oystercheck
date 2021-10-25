<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'company_name', 'company_email', 'company_address', 'company_phone'
    ];

    public function candidate(){
        return $this->hasMany(Candidate::class, 'client_id', 'id');

    }
}
