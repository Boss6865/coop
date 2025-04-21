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
        Schema::create('processings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('item_name')->nullable();
            $table->integer('item_value')->nullable();
            $table->string('process_machine_name')->nullable();
            $table->integer('process_item_Nos')->nullable();
            $table->integer('process_item_value')->nullable();
            $table->string('sale_of_item_name')->nullable();
            $table->integer('sale_of_item_quantity')->nullable();
            $table->integer('sale_of_item_amount')->nullable();
            $table->string('packing')->nullable();
            $table->string('packaging_type')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processings');
    }
};
