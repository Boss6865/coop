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
        Schema::create('mariangjingkienjris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('lrb_source')->nullable();
            $table->integer('lrb_amount_recieved')->nullable();
            $table->integer('lrb_amount_utilized')->nullable();
            $table->integer('lrb_amount_unutilized')->nullable();
            $table->string('purpose_of_grant_recieve')->nullable();
            $table->string('shared_investment')->nullable();
            $table->integer('fee_collection')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mariangjingkienjris');
    }
};
