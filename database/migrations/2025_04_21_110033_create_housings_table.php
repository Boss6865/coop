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
            $table->integer('borrowing_government')->nullable();
            $table->integer('central_finance_agency')->nullable();
            $table->integer('housing_urban_development_cor')->nullable();
            $table->integer('state_fianance_society')->nullable();
            $table->integer('national_housing_bank')->nullable();
            $table->integer('other_financial_inst')->nullable();
            $table->string('land_asset')->nullable();
            $table->string('building_asset')->nullable();
            $table->string('other_asset')->nullable();
            $table->string('adavance_year')->nullable();
            $table->decimal('advance_amount',total: 8, places: 2)->nullable();
            $table->integer('recovery_principal')->nullable();
            $table->integer('recovery_interest')->nullable();
            $table->integer('outstanding_principal')->nullable();
            $table->integer('outstanding_interest')->nullable();
            $table->integer('overdue_principal')->nullable();
            $table->integer('overdue_interest')->nullable();
            $table->string('society_house_construct_number')->nullable();
            $table->integer('society_house_construct_value')->nullable();
            $table->string('member_house_construct_number')->nullable();
            $table->integer('member_house_construct_value')->nullable();
            $table->string('independent_house_construct_no')->nullable();
            $table->integer('independent_house_construct_value')->nullable();
            $table->integer('independent_house_construct_earn')->nullable();
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
