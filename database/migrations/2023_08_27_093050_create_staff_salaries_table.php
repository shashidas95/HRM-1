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
        Schema::create('staff_salaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rec_id');
            $table->string('salary');
            $table->string('basic');
            $table->string('da');
            $table->string('hra');
            $table->string('conveyance');
            $table->string('allowance');
            $table->string('medical_allowance');
            $table->string('tds');
            $table->string('esi');
            $table->string('pf');
            $table->unsignedBigInteger('leave_balance_id')->constrained('leave_balances')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('prof_tax');
            $table->string('labour_welfare');
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('department_id')->constrained('departments')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('designation_id')->constrained('designations')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_salaries');
    }
};
