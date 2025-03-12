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
        Schema::create('committee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('President_Name');
            $table->date('President_DOB');
            $table->Integer('President_Contact');
            $table->string('President_Email');
            $table->string('Secretary_Name');
            $table->date('Secretary_DOB');
            $table->Integer('Secretary_Contact');
            $table->Integer('Secretary_Email');
            $table->text('Member_Name');
            $table->text('Member_Contact');
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee');
    }
};
