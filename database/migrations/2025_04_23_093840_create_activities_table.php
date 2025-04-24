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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id')->unique();
            $table->string('activity_1')->nullable();
            $table->string('activity_2')->nullable();
            $table->string('activity_3')->nullable();
            $table->string('activity_4')->nullable();
            $table->string('activity_5')->nullable();
            $table->string('activity_other')->nullable();
           
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
