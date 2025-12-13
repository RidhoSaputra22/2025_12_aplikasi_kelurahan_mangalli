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
        Schema::table('data_penduduks', function (Blueprint $table) {
            //
            $table->foreignId('status_keluarga_id')->nullable()->constrained('status_keluargas');
            $table->foreignId('status_kawin_id')->nullable()->constrained('status_kawins');
            $table->foreignId('agama_id')->nullable()->constrained('agamas');
            $table->foreignId('pendidikan_id')->nullable()->constrained('pendidikans');
            $table->foreignId('pekerjaan_id')->nullable()->constrained('pekerjaans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_penduduks', function (Blueprint $table) {
            //
        });
    }
};
