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
        Schema::create('tourisms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('deomestic_tourist')->nullable();
            $table->integer('foreign_tourist')->nullable();
            $table->integer('entry_fee_annually')->nullable();
            $table->integer('parking_fee_annually')->nullable();
            $table->integer('other_fee_annually')->nullable();
            $table->integer('total_guest_house_or_lodge')->nullable();
            $table->integer('income_from_guest_house_or_lodge')->nullable();
            $table->integer('other_source')->nullable();
            $table->integer('other_value')->nullable();
            $table->integer('male_guide')->nullable();
            $table->integer('female_guide')->nullable();
            $table->string('product_promotion')->nullable();
            $table->integer('sale_of_product_annually')->nullable();
            $table->json('Equipments_Name')->nullable();
            $table->json('Equipments_Nos')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourisms');
    }
};
