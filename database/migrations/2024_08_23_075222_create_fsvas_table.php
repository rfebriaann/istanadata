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
        Schema::create('fsvas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kec');
            $table->bigInteger('kode_kec');
            $table->bigInteger('kode_desa');
            $table->string('nama_desa');
            $table->bigInteger('lahan');
            $table->bigInteger('sarana');
            $table->bigInteger('tdk_sejah');
            $table->bigInteger('jalan');
            $table->bigInteger('no_water');
            $table->bigInteger('tenkes');
            $table->bigInteger('indeks_kom');
            $table->bigInteger('peringkat');
            $table->bigInteger('prio_komp');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fsvas');
    }
};
