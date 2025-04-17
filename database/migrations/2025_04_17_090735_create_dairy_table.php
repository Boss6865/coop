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
        Schema::create('dairy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('Nos_of_milch_cow')->nullable();
            $table->integer('total_value_of_Milch_cow')->nullable();
            $table->Integer('no_of_cowshed')->nullable();
            $table->string('other_item')->nullable();
            $table->integer('other_no')->nullable();
            $table->integer('other_amount')->nullable();
            $table->Integer('produce_in_litre')->nullable();
            $table->integer('produce_value')->nullable();
            $table->integer('usold_litre')->nullable();
            $table->integer('unsold_value')->nullable();
            $table->string('dairy_product_item')->nullable();
            $table->integer('dairy_product_value')->nullable();
            $table->string('collection_facility')->nullable();
            $table->string('testing_facility')->nullable();
            $table->string('sale_of_feed_medicine')->nullable();
            $table->integer('sale_of_feed_medicine_value')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dairy');
    }
};
