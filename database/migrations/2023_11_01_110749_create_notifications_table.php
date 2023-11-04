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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('message', 225)->nullable();
            $table->string('statut', 50)->nullable();
            $table->string('url', 225)->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('article_id')->constrained();
            $table->foreignId('requisition_id')->constrained();
            $table->foreignId('achat_id')->constrained();
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('vente_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
