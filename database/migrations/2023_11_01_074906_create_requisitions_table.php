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
        Schema::create('requisitions', function (Blueprint $table) {
            $table->id();
            $table->integer('qtte')->nullable();
            $table->integer('prix')->nullable();
            $table->string('statut', 50)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('devise_id')->constrained();
            $table->foreignId('fournisseur_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
