<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\AddressVerificationDetail;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
class HandleVerificationsYouVerify extends SpatieProcessWebhookJob
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // public $webhookCall;


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $webhookCallData = json_decode($this->webhookCall,true)['payload'];
        // logger($webhookCallData);
        if (in_array($webhookCallData['data']['type'], ['individual', 'guarantor', 'business'])) {
            $get_verification_details = AddressVerificationDetail::where('reference_id', $webhookCallData['data']['referenceId'])->first();

            $get_verification_details->agent = json_encode($webhookCallData['data']['agent']);
            $get_verification_details->status = $webhookCallData['data']['status'];
            $get_verification_details->task_status = $webhookCallData['data']['taskStatus'];
            $get_verification_details->start_date = $webhookCallData['data']['startDate'];
            $get_verification_details->end_date = $webhookCallData['data']['endDate'];
            $get_verification_details->submitted_at = $webhookCallData['data']['submittedAt'];
            $get_verification_details->execution_date = $webhookCallData['data']['executionDate'];
            $get_verification_details->completed_at = $webhookCallData['data']['completedAt'];
            $get_verification_details->accepted_at = $webhookCallData['data']['acceptedAt'];
            $get_verification_details->revalidation_date = $webhookCallData['data']['revalidationDate'];
            $get_verification_details->notes = json_encode($webhookCallData['data']['notes']);
            $get_verification_details->is_flagged = $webhookCallData['data']['isFlagged'];
            $get_verification_details->agent_submitted_longitude = $webhookCallData['data']['agentSubmittedLongitude'];
            $get_verification_details->agent_submitted_latitude = $webhookCallData['data']['agentSubmittedLatitude'];
            $get_verification_details->report_geolocation_url = $webhookCallData['data']['reportGeolocationUrl'];
            $get_verification_details->map_address_url = $webhookCallData['data']['mapAddressUrl'];
            $get_verification_details->submission_distance_in_meters = $webhookCallData['data']['submissionDistanceInMeters'];
            $get_verification_details->reasons = $webhookCallData['data']['reasons'];
            $get_verification_details->signature = $webhookCallData['data']['signature'];
            $get_verification_details->images = json_encode($webhookCallData['data']['images']);
            $get_verification_details->building_type = $webhookCallData['data']['buildingType'];
            $get_verification_details->building_color = $webhookCallData['data']['buildingColor'];
            $get_verification_details->gate_present = $webhookCallData['data']['gatePresent'];
            $get_verification_details->gate_color = $webhookCallData['data']['gateColor'];
            $get_verification_details->availability_confirmed_by = $webhookCallData['data']['availabilityConfirmedBy'];
            $get_verification_details->closest_landmark = $webhookCallData['data']['closestLandmark'];
            $get_verification_details->additional_info = $webhookCallData['data']['additionalInfo'];
            $get_verification_details->report_agent_access = $webhookCallData['data']['reportAgentAccess'];
            $get_verification_details->incident_report = $webhookCallData['data']['incidentReport'];
            $get_verification_details->download_url = $webhookCallData['data']['downloadUrl'];
            $get_verification_details->save();
    
        }
    
    }
}
