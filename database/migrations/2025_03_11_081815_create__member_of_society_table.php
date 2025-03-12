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
        Schema::create('_member_of_society', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->Integer('ST_Male')->nullable();
            $table->Integer('ST_Female')->nullable();
            $table->Integer('ST_CoopSociety')->nullable();
            $table->Integer('ST_PG')->nullable();
            $table->Integer('ST_SHG')->nullable();
            $table->Integer('SC_Male')->nullable();
            $table->Integer('SC_Female')->nullable();
            $table->Integer('SC_CoopSociety')->nullable();
            $table->Integer('SC_PG')->nullable();
            $table->Integer('SC_SHG')->nullable();
            $table->Integer('Gen_Male')->nullable();
            $table->Integer('Gen_Female')->nullable();
            $table->Integer('Gen_CoopSociety')->nullable();
            $table->Integer('Gen_PG')->nullable();
            $table->Integer('Gen_SHG')->nullable();
            $table->Integer('Managing_Male');
            $table->Integer('Managing_Female');
            $table->date('Date_of_LastAGM');
            $table->Integer('Employee_Male');
            $table->Integer('Employee_Female');
            $table->Integer('Trained_Male');
            $table->Integer('Trained_Female');
            $table->String('Programme_Type');
            $table->String('Training_Program');
            $table->Integer('Number_of_Trainee');
            $table->bigInteger('Managemnt_Salary');
            $table->bigInteger('Management_Expense');
            $table->bigInteger('Other_Expense');
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_member_of_society');
    }
};
