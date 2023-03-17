<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressVerificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_verification_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('address_verification_id')->constrained();
            $table->string('reference_id');
            $table->text('candidate');
            $table->text('guarantor')->nullable();
            $table->text('business')->nullable();
            $table->text('agent');
            $table->text('address');
            $table->string('status');
            $table->string('task_status');
            $table->string('subject_consent');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('submitted_at')->nullable();
            $table->string('execution_date')->nullable();
            $table->string('completed_at')->nullable();
            $table->string('accepted_at')->nullable();
            $table->string('revalidation_date')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('is_flagged')->default(false);
            $table->string('agent_submitted_longitude')->nullable();
            $table->string('agent_submitted_latitude')->nullable();
            $table->string('report_geolocation_url')->nullable();
            $table->string('map_address_url')->nullable();
            $table->string('submission_distance_in_meters')->nullable();
            $table->string('reasons')->nullable();
            $table->string('signature')->nullable();
            $table->text('images')->nullable();
            $table->string('building_type')->nullable();
            $table->string('building_color')->nullable();
            $table->string('gate_present')->nullable();
            $table->string('gate_color')->nullable();
            $table->string('availability_confirmed_by')->nullable();
            $table->string('closest_landmark')->nullable();
            $table->string('additional_info')->nullable();
            $table->string('report_agent_access')->nullable();
            $table->string('incident_report')->nullable();
            $table->string('description');
            $table->string('report_id');
            $table->string('download_url')->nullable();
            $table->string('business_type');
            $table->string('business_id');
            $table->string('yv_user_id');
            $table->string('type');
            $table->string('yv_id');
            $table->text('links');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address_verification_details');
    }
}
