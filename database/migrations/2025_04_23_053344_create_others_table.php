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
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('course_offered')->nullable();
            $table->integer('nos_of_student')->nullable();
            $table->integer('course_fee')->nullable();
            $table->integer('no_of_teaching_staff')->nullable();
            $table->integer('no_of_non_teaching_staff')->nullable();
            $table->integer('salary_to_staff')->nullable();
            $table->string('service_provided')->nullable();
            $table->integer('employee')->nullable();
            $table->integer('wage_paid')->nullable();
            $table->integer('turn_over')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('others');
    }
};
