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
        Schema::create('asset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->string('self_building');
            $table->string('rented_building');
            $table->string('rent_paid');
            $table->string('godown');
            $table->string('godown_area')->nullable();
            $table->string('godown_capacity')->nullable();
            $table->string('godown_types');
            $table->string('godown_type_agreement')->nullable();
            $table->string('godown_type_per_annum')->nullable();
            $table->string('storage');
            $table->string('storage_cold')->nullable();
            $table->string('storage_dry')->nullable();
            $table->string('land');
            $table->string('Land_area')->nullable();
            $table->string('land_area_lease')->nullable();
            $table->string('furniture');
            $table->string('furniture_total')->nullable();
            $table->string('furniture_amount')->nullable();
            $table->string('computers');
            $table->string('computers_total')->nullable();
            $table->string('computers_amount')->nullable();

            $table->json('item_name');
            $table->json('item_no');
            $table->json('item_amount');
            
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset');
    }
};
