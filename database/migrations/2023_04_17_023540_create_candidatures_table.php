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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->string('description');
            $table->string('companyName');
            $table->date('datePostulation');
            $table->date('dateLimite');
            $table->string('requisPoste');
            $table->string('contactCampany');
            $table->string('emailRhCampany');
            $table->string('captureEcran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
