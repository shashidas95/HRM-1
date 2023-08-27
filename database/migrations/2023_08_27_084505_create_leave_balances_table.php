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
        Schema::create('leave_balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('role_type_user_id')->constrained('role_type_users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('designation_id')->constrained('designations')->cascadeOnUpdate()->restrictOnDelete();
            $table->integer('vacation_days')->default(0);
            $table->integer('sick_leave_days')->default(0);
            $table->integer('personal_leave_days')->default(0);
            $table->integer('Maternity/Paternity_leave_days')->default(0);
            $table->integer('Bereavement_leave_days')->default(0);
            $table->integer('Public_Holidays_leave_days')->default(0);
            $table->integer('Unpaid_leave_days')->default(0);
            $table->integer('Family_Medical _leave_days')->default(0);
            $table->integer('Study_or_Exam_leave_days')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_balances');
    }
};
