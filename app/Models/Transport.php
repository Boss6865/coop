<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $table ='transports';
    protected $fillable=['Society_Id',
    'nos_of_Goods_vehicle',
    'no_of_passenger_vehichle',
    'vehicle_type',
    'vehicle_nos',
    'vehicle_value',
    'other_asset_name',
    'other_asset_nos',
    'other_asset_value',
    'other_asset_income',
    'total_driver',
    'total_driver_wages',
    'total_helper',
    'total_helper_wages',
    'other_total',
    'others_wages_total'
    ];
}
