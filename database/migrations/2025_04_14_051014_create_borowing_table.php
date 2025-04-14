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
        Schema::create('borowing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('Govt_loan');
            $table->json('borrowing_from')->nullable();
            $table->json('borrowing_type')->nullable();
            $table->json('borrowing_amount')->nullable();
            $table->json('borrowing_refunded')->nullable();
            $table->json('borrowing_outstanding')->nullable();
            $table->string('bank_sb_ac')->nullable();
            $table->string('bank_fd_ac')->nullable();
            $table->string('bank_rd_ac')->nullable();
            $table->string('bank_cd_ac')->nullable();
            $table->string('bank_thrift_ac')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borowing');
    }
};
