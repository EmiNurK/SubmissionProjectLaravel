<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->string('nidn', 10)->unique();
            $table->string('nama');
            $table->string('email')->unique();
        });
    }

    public function down(): void
    {
        Schema::table('dosens', function (Blueprint $table) {
            $table->dropUnique(['nidn']);
            $table->dropUnique(['email']);
            $table->dropColumn(['nidn', 'nama', 'email']);
        });
    }
};
