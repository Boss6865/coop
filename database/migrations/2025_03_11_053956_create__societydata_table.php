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
        Schema::create('_societydata', function (Blueprint $table) {
            $table->id();
            $table->mediumText('Name_of_the_Society');
            $table->string('Registration_No');
            $table->string('Date_of_registration');
            $table->string('Sector_Type');
            $table->text('Email');
            $table->string('Pan_of_Society');
            $table->string('Location_Area');
            $table->string('District');
            $table->text('Block');
            $table->string('Board');
            $table->string('Circle');
            $table->string('Village');
            $table->string('Post_office');
            $table->string('Police_Station');
            $table->string('Pincode');
            $table->string('Operation_District');
            $table->string('Operation_villages');
            $table->string('Affiliation');
            $table->string('Status');
            $table->string('Years_of_Non_function')->nullable();
            $table->string('Section_Conducted')->nullable();
            $table->string('Section_Cancellation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_societydata');
    }
};
