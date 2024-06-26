<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'client_id', 'phone', 'role', 'company', 'city', 'address', 'state', 'country', 'email', 'is_sandbox', 'status', 'review'
    ];
    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function UserCandidate(){
        return $this->hasManyThrough(CandidateVerification::class, User::class);
    }
}
