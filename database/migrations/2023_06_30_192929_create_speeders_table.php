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
        Schema::create('speeders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("song_id")->constrained();
            $table->text("desc");
            $table->integer("og_speed");
            $table->integer("cur_speed");
            $table->foreignId("user_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('speeders');
    }
};
