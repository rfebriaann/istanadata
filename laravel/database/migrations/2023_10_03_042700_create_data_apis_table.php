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
        Schema::create('data_apis', function (Blueprint $table) {
            $table->id();
            $table->string('kodeindikator');
            $table->string('bidangurusan');
            $table->string('indikator');
            $table->string('unit');
            $table->string('tahun1');
            $table->string('tahun2');
            $table->string('tahun3');
            $table->string('tahun4');
            $table->string('tahun5');
            $table->string('tahun6');
            $table->string('tahun7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_apis');
    }
};
