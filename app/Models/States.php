<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{

    protected $fillable = ['name', 'id'];
    protected $table = 'states';
    use HasFactory;
}
