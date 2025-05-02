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
        Schema::create('pacs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('activity')->nullable();
            $table->integer('amount_sanctioned')->nullable();
            $table->integer('nos_of_member_loan_for')->nullable();
            $table->string('purpose_taken_for')->nullable();
            $table->integer('principal_amount')->nullable();
            $table->integer('interest_amount')->nullable();
            $table->string('defaulter_no')->nullable();
            $table->integer('defaulter_amount')->nullable();
            $table->integer('npa_principal')->nullable();
            $table->integer('npa_interest')->nullable();
            $table->json('outstandingloanee_male')->nullable();
            $table->json('outstandingloanee_female')->nullable();
            $table->json('outstandingloanee_clan')->nullable();
            $table->json('outstanding_interest')->nullable();
            $table->json('outstanding_p_amount')->nullable();
            $table->json('years')->nullable();
            $table->json('recovery_female_clan')->nullable();
            $table->json('recovery_male_clan')->nullable();
            $table->json('recovery_clan')->nullable();
            $table->json('female_clan')->nullable();
            $table->json('male_clan')->nullable();
            $table->json('clan')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacs');
    }
};
