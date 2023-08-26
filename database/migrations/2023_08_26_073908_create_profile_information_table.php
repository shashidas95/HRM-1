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
            $table->string('name')->nullable();
            $table->string('rec_id')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('reports_to')->nullable();
            $table->timestamps();
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
