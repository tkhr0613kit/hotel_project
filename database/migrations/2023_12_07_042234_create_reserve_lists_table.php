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
        Schema::create('reserve_lists', function (Blueprint $table) {
            $table->increments('reserve_list_id');
            $table->integer('reservation_id');
            $table->integer('room_id');
            $table->integer('stay_day');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_lists');
    }
};
