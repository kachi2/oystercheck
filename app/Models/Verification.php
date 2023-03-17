<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;

    protected $table = 'verifications';

    protected $fillable = ['slug','name','report_type','fee','discount', 'type'];
    
}
