<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fee', 'is_adminUpload', 'sampled_doc'];
}
