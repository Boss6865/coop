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
        Schema::create('labours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('society_operation')->nullable();
            $table->integer('ST')->nullable();
            
            $table->integer('SC')->nullable();
            $table->string('of_which_borrower')->nullable();
            $table->string('other_specify')->nullable();

            $table->integer('no_of_worker')->nullable();
            $table->string('Govt_body')->nullable();
            $table->string('local_body')->nullable();
            $table->string('other')->nullable();
            $table->string('income_earned')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labours');
    }
};
