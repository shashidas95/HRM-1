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
        Schema::create('permission_lists', function (Blueprint $table) {
            $table->id();
            $table->string('permission_name');
            $table->string('read');
            $table->string('write');
            $table->string('create');
            $table->string('delete');
            $table->string('import');
            $table->string('export');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_lists');
    }
};
