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
            // $table->integer('Admission_fee');
            $table->decimal('Admission_fee',6,2);
            $table->integer('Share_face_value');
            $table->integer('Authorize_share_capital');
            $table->decimal('Individual_share',20,2);
            $table->decimal('Govt_share',20,2)->nullable();
            $table->integer('Other_coop_share')->nullable();
            $table->string('Primary_Activity');
            $table->string('Secondary_Activity')->nullable();
            $table->string('Tertiary_Activity')->nullable();
            $table->string('Other_Activity')->nullable();
            $table->string('Society_Fair_Price_Shop')->nullable();
            $table->string('Latest_Audit_complete')->nullable();
            $table->string('Audit_Class')->nullable();
            $table->string('Audit_score')->nullable();
            $table->decimal('Working_Capitals',20,2)->nullable();
            $table->decimal('Business_turnover',20,2)->nullable();
            $table->decimal('Total_reserve',20,2)->nullable();
            $table->string('Profit_loss')->nullable();
            $table->string('Net_Profit_Loss')->nullable();
            $table->integer('Profit');
            $table->integer('Loss');
            $table->string('Declear_Dividen');
            $table->integer('Yes_Dividen_Amount_topaid')->nullable();
            $table->integer('Yes_Dividen_Amount_topaid_Govt')->nullable();
            $table->string('Yes_Dividen_Challan_date')->nullable();
            $table->string('CDF_Paid');
            $table->integer('CDf_Yes_paidamount')->nullable();
            $table->string('CDf_Yes_paidDate')->nullable();
            $table->string('Grant_Type')->nullable();
            $table->string('Grant_Year')->nullable();
            $table->string('Deptt_Name')->nullable();
            $table->integer('Grant_Sanctioned')->nullable();
            $table->integer('Grant_Release')->nullable();
            $table->string('Date_release')->nullable();
            $table->string('Aid_Type')->nullable();
            $table->string('Aid_Year')->nullable();
            $table->string('Agencies_Name')->nullable();
            $table->integer('Aid_Sanctioned')->nullable();
            $table->integer('Aid_Grant_Release')->nullable();
            $table->integer('Grant_Subsidies')->nullable();
            $table->integer('Loan_Sanctioned')->nullable();
            $table->integer('Loan_Refunded')->nullable();
            $table->integer('Loan_Outstanding')->nullable();
            $table->string('MANAGERIAL_SUBSIDY_RECEIVED_Year')->nullable();
            $table->string('MANAGERIAL_SUBSIDY_RECEIVED_Amount')->nullable();

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
