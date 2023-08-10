<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdverseMedia extends Model
{
    use HasFactory;

    protected $table = 'adverse_media';
    protected $fillable = ['verification_id', 'user_id', 'ref', 'query', 'reason', 'weightedScore', 'status', 'queryTags', 'queryStartDate', 'queryEndDate', 'total', 'media', 'tagsAnalysis', 'type', 'metadata', 'links'];
}
