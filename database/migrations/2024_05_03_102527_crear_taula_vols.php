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
        Schema::create('vols', function (Blueprint $table) {
            $table->string('Codi_vol')->primary();
            $table->string('Codi_model')->nullable();
            $table->string('Ciutat_origen');
            $table->string('Ciutat_desti');
            $table->string('Termina_origen');
            $table->string('Terminal_desti');
            $table->date('Data_sortida');
            $table->date('Data_arribada');
            $table->time('Hora_sortida');
            $table->time('Hora_arribada');
            $table->enum('Classe', ['Turista', 'Bussiness', 'Primera']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vols');
    }
};
