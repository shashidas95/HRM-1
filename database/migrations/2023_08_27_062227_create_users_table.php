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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name');
            $table->string('rec_id')->unique(); // Unique custom ID
            $table->string('email')->unique();
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('join_date');
            $table->string('phone_number');
            $table->string('status');
            $table->string('role_name');
            $table->string('avatar');
            $table->string('position');
            $table->string('department');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        // Generate and update rec_id for existing records
        $users = \App\Models\User::all();
        foreach ($users as $user) {
            $user->rec_id = "SHA_" . str_pad($user->id, 10, "0", STR_PAD_LEFT);
            $user->save();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
