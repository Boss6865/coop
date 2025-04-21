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
        Schema::create('housings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('borrowing_government')->nullable();
            $table->string('central_finance_agency')->nullable();
            $table->json('housing_urban_development_cor')->nullable();
            $table->json('state_fianance_society')->nullable();
            $table->json('national_housing_bank')->nullable();
            $table->json('other_financial_inst')->nullable();
            $table->json('land_asset')->nullable();
            $table->json('building_asset')->nullable();
            $table->json('other_asset')->nullable();
            $table->json('adavance_year')->nullable();
            $table->json('advance_amount')->nullable();
            $table->json('recovery_principal')->nullable();
            $table->json('recovery_interest')->nullable();
            $table->json('outstanding_principal')->nullable();
            $table->json('outstanding_interest')->nullable();
            $table->json('overdue_principal')->nullable();
            $table->json('overdue_interest')->nullable();
            $table->json('society_house_construct_number')->nullable();
            $table->json('society_house_construct_value')->nullable();
            $table->json('member_house_construct_number')->nullable();
            $table->json('member_house_construct_value')->nullable();
            $table->json('independent_house_construct_no')->nullable();
            $table->json('independent_house_construct_value')->nullable();
            $table->json('independent_house_construct_earn')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housings');
    }
};
