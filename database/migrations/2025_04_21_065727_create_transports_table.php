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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->integer('nos_of_Goods_vehicle')->nullable();
            $table->integer('no_of_passenger_vehichle')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->integer('vehicle_nos')->nullable();
            $table->integer('vehicle_value')->nullable();
            $table->string('other_asset_name')->nullable();
            $table->integer('other_asset_nos')->nullable();
            $table->integer('other_asset_value')->nullable();
            $table->integer('other_asset_income')->nullable();
            $table->integer('total_driver')->nullable();
            $table->integer('total_driver_wages')->nullable();
            $table->integer('total_helper')->nullable();
            $table->integer('total_helper_wages')->nullable();
            $table->integer('other_total')->nullable();
            $table->integer('others_wages_total')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
