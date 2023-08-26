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
        Schema::create('leaves_admins', function (Blueprint $table) {
            $table->id();
            $table->string('rec_id');
            $table->string('leave_type');
            $table->string('from_date');
            $table->string('to_date');
            $table->string('day');
            $table->string('leave_reason');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves_admins');
    }
};
