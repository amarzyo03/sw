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
        Schema::create('genap_rapor', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id');
            $table->string('agm');
            $table->string('panc');
            $table->string('indo');
            $table->string('pjok');
            $table->string('sej');
            $table->string('mtk');
            $table->string('ingg');
            $table->string('info');
            $table->string('pipas');
            $table->string('ddk');;
            $table->string('kka');
            $table->string('jwa');
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
        Schema::dropIfExists('genap_rapor');
    }
};
