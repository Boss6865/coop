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
        Schema::create('consumer_tablel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('departmental_store')->nullable();
            $table->string('retails_unit')->nullable();
            $table->Integer('no_of_branch')->nullable();
            $table->integer('closing_stock')->nullable();
            $table->string('purchase_date')->nullable();
            $table->string('item')->nullable();
            $table->Integer('total_sale')->nullable();
            $table->integer('Controll_wholesale')->nullable();
            $table->integer('controll_retail')->nullable();
            $table->integer('uncontroll_wholesale')->nullable();
            $table->integer('uncontroll_retail')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumer_tablel');
    }
};
