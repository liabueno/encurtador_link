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
        Schema::create('recuperars', function (Blueprint $table) {
            $table->id();
            $table->string('email', 150);
            $table->string('codigo', 150);
            $table->datetime('tempo_limite');
            $table->unsignedBigInteger('user_id');
            $table->string('user_hash', 255);
            $table->timestamps();
        });

        Schema::table('recuperars', function (Blueprint $table) {
            $table->foreign(['user_id', 'user_hash'])->references(['id', 'hash'])->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recuperars', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'user_hash']);
            $table->dropColumn(['user_id', 'user_hash']);
        });

        Schema::table('recuperars', function (Blueprint $table) {
            $table->dropColumn(['email', 'codigo', 'tempo_limite']);
        });        

        Schema::dropIfExists('recuperars');
    }
};



