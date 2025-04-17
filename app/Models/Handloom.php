<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handloom extends Model
{
    protected $table ='handloom';
    protected $fillable=['Society_Id',
    'no_of_looms_own',
    'natural_dykes',
    'dyeing_house_own',
    'item_produce',
    'total_handlom_sale',
    'total_powerloom_sale',
    'total_other_sale',
    'local_market',
    'local_market_amount',
    'export',
    'export_amount',
    'production_employee',
    'admin_employee',
    'other_employee',
    'wage_paid',
    'sale_deport',
    'workshed',
    'production_name',
    'production_quantity',
    'production_amount',
    'purchase_name',
    'purchase_quantity',
    'purchase_amount',
    'Equipments_Name',
    'Equipments_Nos',
    ];
}
