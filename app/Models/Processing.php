<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing extends Model
{
    use HasFactory;
    protected $table ='processings';
    protected $fillable=['Society_Id',
    'item_name',
    'item_value',
    'process_machine_name',
    'process_item_Nos',
    'process_item_value',
    'sale_of_item_name',
    'sale_of_item_quantity',
    'sale_of_item_amount',
    'packing',
    'packaging_type'
    ];
}
