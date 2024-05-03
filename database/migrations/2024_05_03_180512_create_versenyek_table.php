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
        Schema::create('versenyek', function (Blueprint $table) {
            $table->id();
            $table->string('megnevezes');
            $table->date('datum');
            $table->string('nyelvek');
            $table->integer('jopontok');
            $table->integer('rosszpontok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versenyek');
    }
};
