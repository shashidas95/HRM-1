<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('performance_appraisals', function (Blueprint $table) {
            $table->id();
            $table->string('rec_id');
            $table->string('designation');
            $table->string('customer_eperience');
            $table->string('marketing');
            $table->string('management');
            $table->string('administration');
            $table->string('presentation_skill');
            $table->string('quality_of_Work');
            $table->string('efficiency');
            $table->string('integrity');
            $table->string('professionalism');
            $table->string('team_work');
            $table->string('critical_thinking');
            $table->string('conflict_management');
            $table->string('attendance');
            $table->string('ability_to_meet_deadline');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_appraisals');
    }
};
