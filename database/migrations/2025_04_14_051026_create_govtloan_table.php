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
        Schema::create('govtloan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('any_Govt_loan');
            $table->json('type_of_govt_loan')->nullable();
            $table->json('Loan_issue_year')->nullable();
            $table->json('Loan_sanctioned_amount')->nullable();
            $table->json('Outstanding_Principal_amount')->nullable();
            $table->json('Outstanding_interest_amount')->nullable();
            $table->json('other_mention')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govtloan');
    }
};
