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
        Schema::create('achats', function (Blueprint $table) {
            $table->id();
            $table->integer('qtte')->nullable();
            $table->date('date')->nullable();
            $table->string('statut', 50)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('paiement_id')->constrained();
            $table->foreignId('devise_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats');
    }
};
