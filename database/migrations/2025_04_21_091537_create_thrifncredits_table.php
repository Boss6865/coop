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
        Schema::create('thrifncredits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('year_contribution')->nullable();
            $table->string('member_contributed')->nullable();
            $table->json('borrowing_loan')->nullable();
            $table->json('borrowing_loan_st')->nullable();
            $table->json('borrowing_loan_sc')->nullable();
            $table->json('borrowing_loan_GO')->nullable();
            $table->json('borrowing_loan_issues')->nullable();
            $table->json('recover_loan')->nullable();
            $table->json('recover_loan_st')->nullable();
            $table->json('recover_loan_sc')->nullable();
            $table->json('recover_loan_GO')->nullable();
            $table->json('recover_loan_principal')->nullable();
            $table->json('recover_loan_interest')->nullable();
            $table->json('outstanding_loan')->nullable();
            $table->json('outstanding_loan_st')->nullable();
            $table->json('outstanding_loan_sc')->nullable();
            $table->json('outstanding_loan_GO')->nullable();
            $table->json('outstanding_loan_principal')->nullable();
            $table->json('outstanding_loan_interest')->nullable();
            $table->json('outstanding_loan_defaulters_no')->nullable();
            $table->json('outstanding_laon_issues_defaulters_amount')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thrifncredits');
    }
};
