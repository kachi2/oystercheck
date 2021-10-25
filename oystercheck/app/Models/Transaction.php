<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref' ,
        'user_id' ,
        'external_ref',
        'purpose' ,
         'service_type' ,
        'type' , 
        'amount' , 
       'prev_balance', 
       'avail_balance'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function moneyFormat($data, $currency){
        $data = number_format($data);
        $currency = '₦';
        $data = $currency.$data;
        return $data;
    }
}
