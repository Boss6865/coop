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
        Schema::create('farming', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('st_male')->nullable();
            $table->integer('st_female')->nullable();
            $table->Integer('sc_male')->nullable();
            $table->integer('sc_female')->nullable();
            $table->integer('which_landholder')->nullable();
            $table->integer('which_agriculture')->nullable();
            $table->string('type_produce_agriorhorti')->nullable();
            $table->integer('production_quantity')->nullable();
            $table->integer('farming_activities_amount')->nullable();
            $table->integer('produce_quantity')->nullable();
            $table->string('produce_amount')->nullable();
           
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farming');
    }
};
