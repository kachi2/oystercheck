<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundRequest extends Model
{
    use HasFactory;

    protected $fillable = [

        'reference','user_id', 'tax', 'approved_by', 'is_approved', 'amount', 'total_amount', 'payment_method'
    ];
}
