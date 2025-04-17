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
        Schema::create('handloom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Society_Id');
            $table->Integer('no_of_looms_own')->nullable();
            $table->string('natural_dykes')->nullable();
            $table->Integer('dyeing_house_own')->nullable();
            $table->string('item_produce')->nullable();
            $table->Integer('total_handlom_sale')->nullable();
            $table->Integer('total_powerloom_sale')->nullable();
            $table->Integer('total_other_sale')->nullable();
            $table->string('local_market')->nullable();
            $table->Integer('local_market_amount')->nullable();
            $table->string('export')->nullable();
            $table->Integer('export_amount')->nullable();
            $table->string('production_employee')->nullable();
            $table->string('admin_employee')->nullable();
            $table->string('other_employee')->nullable();
            $table->Integer('wage_paid')->nullable();
            $table->Integer('sale_deport')->nullable();
            $table->string('workshed')->nullable();
            $table->string('production_name')->nullable();
            $table->Integer('production_quantity')->nullable();
            $table->Integer('production_amount')->nullable();
            $table->string('purchase_name')->nullable();
            $table->Integer('purchase_quantity')->nullable();
            $table->Integer('purchase_amount')->nullable();
            $table->json('Equipments_Name')->nullable();
            $table->json('Equipments_Nos')->nullable();
            $table->timestamps();
            $table->foreign('Society_Id')->references('id')->on('_societydata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handloom');
    }
};
