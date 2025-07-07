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
        Schema::create('investment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('investment_Status');
            $table->json('type_of_govt_loan')->nullable();
            $table->json('loan_investment_amount')->nullable();
             $table->json('item_amount');
              $table->json('item_amount');
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment');
    }
};
