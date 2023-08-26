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
        Schema::create('position_types', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('position_types')->insert([
            ['position' => 'CEO'],
            ['position' => 'CFO'],
            ['position' => 'Manager'],
            ['position' => 'Web Designer'],
            ['position' => 'Web Developer'],
            ['position' => 'Android Developer'],
            ['position' => 'IOS Developer'],
            ['position' => 'Team Leader'],
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
