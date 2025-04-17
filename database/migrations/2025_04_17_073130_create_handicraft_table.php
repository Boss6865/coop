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
        Schema::create('handicraft', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('item_produce')->nullable();
            $table->integer('nos_of_craftsmen')->nullable();
            $table->Integer('wages_paid')->nullable();
            $table->integer('sales_turnover')->nullable();
            $table->string('other_item_produce')->nullable();
            $table->Integer('other_nos_of_craftsmen')->nullable();
            $table->Integer('other_wages_paid')->nullable();
            $table->integer('other_sales_turnover')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handicraft');
    }
};
