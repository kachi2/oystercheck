<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressVerificationDetail extends Model
{
    use HasFactory;


    protected $fillable = [
        'address_verification_id',
        'reference_id',
        'candidate',
        'guarantor',
        'business',
        'agent',
        'address',
        'status',
        'task_status',
        'subject_consent',
        'start_date',
        'end_date',
        'submitted_at',
        'execution_date',
        'completed_at',
        'accepted_at',
        'revalidation_date',
        'notes',
        'is_flagged',
        'agent_submitted_longitude',
        'agent_submitted_latitude',
        'report_geolocation_url',
        'map_address_url',
        'submission_distance_in_meters',
        'reasons',
        'signature',
        'images',
        'building_type',
        'building_color',
        'gate_present',
        'availability_confirmed_by',
        'closest_landmark',
        'additional_info',
        'report_agent_access',
        'incident_report',
        'description',
        'report_id',
        'download_url',
        'business_type',
        'business_id',
        'yv_user_id',
        'type',
        'yv_id',
        'links',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'candidate' => 'array',
        'business' => 'array',
        'agent' => 'array',
        'address' => 'array',
        'notes' => 'array',
        'images' => 'array',
        'links' => 'array'
    ];


    public function addressVerification()
    {
        return $this->belongsTo(AddressVerification::class, 'address_verification_id');
    }
}
