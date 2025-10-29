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
        Schema::create('nilai_murni_psts_ganjil', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id');
            $table->string('agm');
            $table->string('pnc');
            $table->string('ind');
            $table->string('pjk');
            $table->string('sej');
            $table->string('sbd');
            $table->string('jwa');
            $table->string('mtk');
            $table->string('ing');
            $table->string('inf');
            $table->string('pps');
            $table->string('pdk1');
            $table->string('pdk2');
            $table->string('pdk3');
            $table->string('pdk4');
            $table->string('kka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_murni_psts_ganjil');
    }
};
