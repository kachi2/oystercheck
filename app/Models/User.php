<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

const ADMIN_VERIFIED = 1;
const ADMIN_SUSPENDED = -1;
const ADMIN_PENDING = 0;

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'email_verified',
        'email_verified_at',
        'password',
        'role_id',
        'user_type'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallet(){
        return $this->hasOne(Wallet::class);
    }

    public function client(){
        return $this->hasOne(Client::class, 'user_id', 'id');
    }

    // public function UserType(){

    //     if(User::where('user_type' == 2)){
    //         $type = 'CLIENT';
    //     }
    // }
 
    public function activities(){
        return $this->hasOne(ActivityLog::class)->latest();
    }

    public function candidate(){
        return $this->hasOne(Candidate::class, 'user_id', 'id');
    }

    public function getNameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
