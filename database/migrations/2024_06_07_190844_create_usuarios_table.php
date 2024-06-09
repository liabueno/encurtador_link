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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('hash', 255);
            $table->string('email', 150);
            $table->string('senha', 255);
            $table->timestamps();

            $table->primary(['id', 'hash']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn(['id', 'hash', 'email', 'senha']);
        });        

        Schema::dropIfExists('usuarios');
    }
};