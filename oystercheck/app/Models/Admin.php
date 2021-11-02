<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'name', 'company_name', 'company_email', 'company_phone', 'role_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function role(){
        return $this->BelongsTo(Role::class);
    }
}
