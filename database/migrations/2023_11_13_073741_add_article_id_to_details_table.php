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
        Schema::table('descriptions', function (Blueprint $table) {
            $table->foreignId('article_id')->nullable()->onDelete('cascade')->after('valeur')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('descriptions', function (Blueprint $table) {
            //
        });
    }
};
