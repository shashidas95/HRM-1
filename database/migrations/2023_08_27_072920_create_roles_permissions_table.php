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
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('permissions_name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('roles_permissions')->insert(
            [
                ['permissions_name' => 'Administrator'],
                ['permissions_name' => 'CEO'],
                ['permissions_name' => 'Manager'],
                ['permissions_name' => 'Team Leader'],
                ['permissions_name' => 'Accountant'],
                ['permissions_name' => 'Web Developer'],
                ['permissions_name' => 'Web Designer'],
                ['permissions_name' => 'HR'],
                ['permissions_name' => 'UI/UX Developer'],
                ['permissions_name' => 'SEO Analyst'],
            ]
        );
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_permissions');
    }
};
