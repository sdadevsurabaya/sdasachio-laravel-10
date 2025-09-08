<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('ina_title')->nullable()->after('status');
            $table->string('eng_title')->nullable()->after('ina_title');
            $table->text('ina_desc')->nullable()->after('eng_title');
            $table->text('eng_desc')->nullable()->after('ina_desc');
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn(['ina_title', 'eng_title', 'ina_desc', 'eng_desc']);
        });
    }
};
