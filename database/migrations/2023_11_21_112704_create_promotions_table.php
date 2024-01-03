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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->nullable();
            $table->date('dateDebut')->nullable();
            $table->date('dateFin')->nullable();
            $table->string('type', 50)->nullable();
            $table->boolean('statut')->nullable();
            $table->integer('pourcentage')->nullable();
            $table->string('description', 225)->nullable();
            $table->integer('montantReduction')->nullable();
            $table->foreignId('article_id')->nullable()->constrained();
            $table->foreignId('boutique_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
