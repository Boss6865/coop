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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->json('type_of_Business')->nullable();
            $table->json('name_of_item_produced')->nullable();
            $table->json('person_employed')->nullable();
            $table->json('wages_paid')->nullable();
            $table->json('sales_turnover')->nullable();
            $table->string('course_offered')->nullable();
            $table->integer('nos_of_trainee')->nullable();
            $table->integer('course_fee')->nullable();
            $table->integer('teaching_staff')->nullable();
            $table->integer('non_teaching_staff')->nullable();
            $table->string('salary')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
