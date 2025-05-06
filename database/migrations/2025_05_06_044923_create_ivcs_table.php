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
        Schema::create('ivcs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('activity')->nullable();
            $table->string('household_covered')->nullable();
            
            $table->integer('share_holder_member_name')->nullable();
            $table->integer('nos_of_share_subscribe')->nullable();
            $table->string('amount_share_capitals')->nullable();

            $table->integer('nos_saving_account')->nullable();
            $table->integer('total_saving_mobilised')->nullable();
            $table->integer('nos_rd_account')->nullable();
            $table->integer('total_rd_mobilised')->nullable();
            $table->integer('nos_fd_account')->nullable();
            $table->integer('total_fd_mobilised')->nullable();

            $table->string('corpus_fund')->nullable();

            $table->integer('nos_loanorborrower_account')->nullable();
            $table->integer('total_loan_disbured')->nullable();
            $table->string('outstanding_borrower')->nullable();
            $table->string('outstanding_amount')->nullable();

            $table->string('product_cmc')->nullable();
            $table->string('machinery_tool_CHC')->nullable();
            $table->string('agriculture_item')->nullable();
            $table->string('agriculture_area')->nullable();
            $table->string('horticulture_item')->nullable();
            $table->string('horticulture_area')->nullable();
            $table->string('livestock')->nullable();

            $table->string('marketing_trading')->nullable();
            $table->string('consumer_store')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ivcs');
    }
};
