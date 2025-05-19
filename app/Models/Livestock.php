<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    use HasFactory;
    protected $table ='livestocks';
    protected $fillable=['Society_Id',
    'no_of_piggery_shed',
    'value_of_piggery_shed',
    'piggery_activities',
    'total_sale',
    'no_of_goatery_shed',
    'value_of_goatery_shed',
    'goatery_item',
    'goatery_total_sale',
    'no_of_poultry_shed',
    'value_of_poultry_shed',
    'poultry_item',
    'poultry_total_sale',
    'no_of_duckery_shed',
    'value_of_duckery_shed',
    'duckery_item',
    'duckery_total_sale',
    'poultry_total_sale',
    'no_of_cattle_farming_shed',
    'value_of_cattle_farming_shed',
    'cattle_farming_item',
    'cattle_farming_total_sale',
    'livestock_name',
    'livestock_no',
    'livestock_value',
    ];
}
