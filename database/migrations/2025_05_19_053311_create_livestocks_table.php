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
        Schema::create('livestocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('no_of_piggery_shed')->nullable();
            $table->integer('value_of_piggery_shed')->nullable();
            $table->string('piggery_activities')->nullable();
            $table->integer('total_sale')->nullable();
         
            $table->integer('no_of_goatery_shed')->nullable();
            $table->integer('value_of_goatery_shed')->nullable();
            $table->string('goatery_item')->nullable();
            $table->integer('goatery_total_sale')->nullable();

            $table->integer('no_of_poultry_shed')->nullable();
            $table->integer('value_of_poultry_shed')->nullable();
            $table->string('poultry_item')->nullable();
            $table->integer('poultry_total_sale')->nullable();

             $table->integer('no_of_duckery_shed')->nullable();
            $table->integer('value_of_duckery_shed')->nullable();
            $table->string('duckery_item')->nullable();
            $table->integer('duckery_total_sale')->nullable();

             $table->integer('no_of_cattle_farming_shed')->nullable();
            $table->integer('value_of_cattle_farming_shed')->nullable();
            $table->string('cattle_farming_item')->nullable();
            $table->integer('cattle_farming_total_sale')->nullable();

            $table->string('livestock_name')->nullable();
            $table->integer('livestock_no')->nullable();
            $table->integer('livestock_value')->nullable();

            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livestocks');
    }
};
