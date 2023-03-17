<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldInput extends Model
{
    use HasFactory;

    protected $table='field_inputs';

    protected $fillable = ['slug','name','placeholder','type','is_required','label','inputid'];
}
