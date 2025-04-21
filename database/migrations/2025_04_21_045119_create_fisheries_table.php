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
        Schema::create('fisheries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('male_fisher')->nullable();
            $table->integer('female_fisher')->nullable();
            $table->Integer('total_pond')->nullable();
            $table->integer('area_of_pond')->nullable();
            $table->integer('value_of_fish_pond')->nullable();
            $table->integer('nursery_pond')->nullable();
            $table->integer('area_of_nursery_pond')->nullable();
            $table->integer('value_of_nursery_pond')->nullable();
            $table->string('type_of_fish_reared')->nullable();
            $table->integer('fish_quantity')->nullable();
            $table->integer('sales_of_fresh_fish')->nullable();
            $table->integer('dry_fish')->nullable();
            $table->integer('smoke_fish')->nullable();
            $table->integer('fishing_material_other')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fisheries');
    }
};
