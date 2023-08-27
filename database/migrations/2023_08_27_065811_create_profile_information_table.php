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
        Schema::create('profile_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rec_id');
            $table->string('email');
            $table->string('birth_date');
            $table->string('gender');
            $table->string('address');
            $table->string('state');
            $table->string('country');
            $table->string('pin_code');
            $table->string('phone_number');
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('designation_id')->constrained('designations')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('reportsto_id')->nullable()->constrained('profile_information')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_information');
    }
};
