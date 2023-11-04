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
        Schema::table('users', function (Blueprint $table) {
            $table->string('postnom', 50)->nullable()->after('name');
            $table->date('date_de_naissance')->nullable()->after('name');
            $table->string('sexe', 10)->nullable()->after('name');
            $table->string('profession', 50)->nullable()->after('name');
            $table->string('mdp', 60)->nullable()->after('name');
            $table->string('phone', 13)->nullable()->after('name');
            $table->binary('image')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
