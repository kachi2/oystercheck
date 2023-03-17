<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateVerification extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', 'candidate_services_id', 'status', 'is_paid', 'doc', 'QA_approved', 'QA_review', 'user_id'
    ];
    public function service(){
        return $this->belongsTo(CandidateService::class,  'candidate_services_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
}
