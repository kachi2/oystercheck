<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Events\AddressVerificationCreated;
use App\Models\AddressVerificationDetail;

class InsertAddressVerificationPayload implements ShouldQueue
{
    public $connection='';
    public $queue='';
    public $delay='';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(AddressVerificationCreated $event)
    {
        $res = $event->res;
        $get_address_verification_id = $event->address_verification_id;
        AddressVerificationDetail::create([
            'address_verification_id' => $get_address_verification_id,
            'reference_id' => $res['data']['referenceId'],
            'candidate' => json_encode($res['data']['candidate']),
            'guarantor' => isset($res['data']['guarantor']) ? json_encode($res['data']['guarantor']) : null,
            'business' => isset($res['data']['business']) ? json_encode($res['data']['business']) : null,
            'agent' => json_encode($res['data']['agent']),
            'address' => json_encode($res['data']['address']),
            'status' => $res['data']['status'],
            'task_status' => $res['data']['taskStatus'],
            'subject_consent' => $res['data']['subjectConsent'] == "true" ? true : false,
            'start_date' => $res['data']['startDate'],
            'end_date' => $res['data']['endDate'],
            'submitted_at' => $res['data']['submittedAt'],
            'execution_date' => $res['data']['executionDate'],
            'completed_at' => $res['data']['completedAt'],
            'accepted_at' => $res['data']['acceptedAt'],
            'revalidation_date'=> $res['data']['revalidationDate'],
            'notes'=> json_encode($res['data']['notes']),
            'is_flagged'=> $res['data']['isFlagged'],
            'agent_submitted_longitude' => $res['data']['agentSubmittedLongitude'],
            'agent_submitted_latitude' => $res['data']['agentSubmittedLatitude'],
            'report_geolocation_url' => $res['data']['reportGeolocationUrl'],
            'map_address_url' => $res['data']['mapAddressUrl'],
            'submission_distance_in_meters'=> $res['data']['submissionDistanceInMeters'],
            'reasons' => $res['data']['reasons'],
            'signature' => $res['data']['signature'],
            'images' => json_encode($res['data']['images']),
            'building_type' => $res['data']['buildingType'],
            'building_color' => $res['data']['buildingColor'],
            'gate_present' => $res['data']['gatePresent'],
            'gate_color' => $res['data']['gateColor'],
            'availability_confirmed_by' => $res['data']['availabilityConfirmedBy'],
            'closest_landmark' => $res['data']['closestLandmark'],
            'additional_info'=> $res['data']['additionalInfo'],
            'report_agent_access' => $res['data']['reportAgentAccess'],
            'incident_report' => $res['data']['incidentReport'],
            'description' => $res['data']['description'],
            'report_id' => $res['data']['reportId'],
            'download_url' => $res['data']['downloadUrl'],
            'business_type' => $res['data']['businessType'],
            'business_id' => $res['data']['businessId'],
            'yv_user_id' => $res['data']['userId'],
            'type' => $res['data']['type'],
            'yv_id' => $res['data']['id'],
            'links' => json_encode($res['links']),
          ]);
    }
}
