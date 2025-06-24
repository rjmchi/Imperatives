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
        Schema::create('verbs', function (Blueprint $table) {
            $table->id();
            $table->string('verb')->unique();
            $table->string('informal');
            $table->string('neginformal');
            $table->string('formal');
            $table->string('negformal');
            $table->string('plural');
            $table->string('negplural');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verbs');
    }
};
