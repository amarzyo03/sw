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
        Schema::create('ganjil_nilai_murni', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id');
            $table->string('agm');
            $table->string('panc');
            $table->string('indo');
            $table->string('pjok');
            $table->string('sej');
            $table->string('sbd');
            $table->string('jwa');
            $table->string('mtk');
            $table->string('ingg');
            $table->string('info');
            $table->string('pipas');
            $table->string('ddk1');
            $table->string('ddk2');
            $table->string('ddk3');
            $table->string('ddk4');
            $table->string('kka');
            $table->string('jml');
            $table->string('rerata');
            $table->string('rank');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ganjil_nilai_murni');
    }
};
