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
        Schema::create('societycapitals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('Admission_fee');
            $table->integer('Share_face_value');
            $table->integer('Authorize_share_capital');
            $table->integer('Individual_share');
            $table->integer('Govt_share')->nullable();
            $table->integer('Other_coop_share')->nullable();
            $table->string('Primary_Activity');
            $table->string('Secondary_Activity')->nullable();
            $table->string('Tertiary_Activity')->nullable();
            $table->string('Other_Activity')->nullable();
            $table->string('Society_Fair_Price_Shop')->nullable();
            $table->date('Latest_Audit_complete')->nullable();
            $table->string('Audit_Class')->nullable();
            $table->integer('Working_Capitals')->nullable();
            $table->integer('Business_turnover')->nullable();
            $table->integer('Total_reserve')->nullable();
            $table->integer('Profit_loss')->nullable();
            $table->integer('Net_Profit_Loss')->nullable();
            $table->integer('Profit');
            $table->integer('Loss');
            $table->string('Declear_Dividen');
            $table->integer('Yes_Dividen_Amount_topaid')->nullable();
            $table->integer('Yes_Dividen_Amount_topaid_Govt')->nullable();
            $table->date('Yes_Dividen_Challan_date')->nullable();
            $table->string('CDF_Paid');
            $table->integer('CDf_Yes_paidamount')->nullable();
            $table->date('CDf_Yes_paidDate')->nullable();
            $table->string('Grant_Type')->nullable();
            $table->date('Grant_Year')->nullable();
            $table->string('Deptt_Name')->nullable();
            $table->integer('Grant_Sanctioned')->nullable();
            $table->integer('Grant_Release')->nullable();
            $table->date('Date_release')->nullable();
            $table->string('Aid_Type')->nullable();
            $table->date('Aid_Year')->nullable();
            $table->string('Agencies_Name')->nullable();
            $table->integer('Aid_Sanctioned')->nullable();
            $table->integer('Aid_Grant_Release')->nullable();
            $table->integer('Grant_Subsidies')->nullable();
            $table->integer('Loan_Sanctioned')->nullable();
            $table->integer('Loan_Refunded')->nullable();
            $table->integer('Loan_Outstanding')->nullable();
            $table->date('MANAGERIAL_SUBSIDY_RECEIVED_Year')->nullable();
            $table->integer('MANAGERIAL_SUBSIDY_RECEIVED_Amount')->nullable();

            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('societycapitals');
    }
};
