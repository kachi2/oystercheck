<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    protected $guard = "admin";
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
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
