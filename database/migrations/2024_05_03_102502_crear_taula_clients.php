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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('Passaport_client')->primary();
            $table->string('Nom');
            $table->integer('Edat');
            $table->string('Telèfon');
            $table->string('Adreça');
            $table->string('Ciutat');
            $table->string('País');
            $table->string('Email');
            $table->enum('Tipus_targeta', ['Dèbit', 'Crèdit']);
            $table->string('Número_targeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
