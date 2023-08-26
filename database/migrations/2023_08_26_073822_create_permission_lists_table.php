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

        DB::table('permission_lists')->insert([
            ['permission_name' => 'Holidays', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'Y', 'import' => 'Y', 'export' => 'N'],
            ['permission_name' => 'Leaves', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'N', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Clients', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'N', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Projects', 'read' => 'Y', 'write' => 'N', 'create' => 'Y', 'delete' => 'N', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Tasks', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'Y', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Chats', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'Y', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Assets', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'Y', 'import' => 'N', 'export' => 'N'],
            ['permission_name' => 'Timing Sheets', 'read' => 'Y', 'write' => 'Y', 'create' => 'Y', 'delete' => 'Y', 'import' => 'N', 'export' => 'N']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permission_lists');
    }
};
