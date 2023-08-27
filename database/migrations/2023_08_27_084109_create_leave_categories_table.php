<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leave_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        DB::table('leave_categories')->insert([
            ['name' => 'vacation_days'],
            ['name' => 'sick_leave_days'],
            ['name' => 'personal_leave_days'],
            ['name' => 'Maternity/Paternity_leave'],
            ['name' => 'Bereavement_leave'],
            ['name' => 'Public_Holidays_leave_days'],
            ['name' => 'Unpaid_leave_days'],
            ['name' => 'Family_Medical'],
            ['name' => 'Study_or_Exam_leave_days'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_categories');
    }
};
