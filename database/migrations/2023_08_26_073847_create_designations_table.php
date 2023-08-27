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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('designations')->insert([
            ['designation' => 'CEO'],
            ['designation' => 'CFO'],
            ['designation' => 'Manager'],
            ['designation' => 'Web Designer'],
            ['designation' => 'Web Developer'],
            ['designation' => 'Android Developer'],
            ['designation' => 'IOS Developer'],
            ['designation' => 'Team Leader'],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_types');
    }
};
