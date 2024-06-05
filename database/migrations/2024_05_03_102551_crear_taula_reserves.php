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
        Schema::create('reserva', function (Blueprint $table) {
            $table->string('Passaport_client');
            $table->foreign('Passaport_client')->references('Passaport_client')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Codi_vol');
            $table->foreign('Codi_vol')->references('Codi_vol')->on('vols')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['Passaport_client', 'Codi_vol']);
            $table->string('Localitzador');
            $table->string('Num_seient');
            $table->boolean('Equipatge_ma');
            $table->boolean('Equipatge_cabina_fins_20kg');
            $table->string('Quantitat_equipatge_mes_20kg');
            $table->enum('Tipus_checking', ['on-line', 'mostrador', 'quiosc']);
            $table->decimal('Preu_vol');
            $table->enum('Tipus_assegurança', ['Franquícia_fins_a_1000_Euros', 'Franquíca_fins_500_Euros', 'Sense_franquícia']);
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
