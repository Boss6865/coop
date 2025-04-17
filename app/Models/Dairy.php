<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dairy extends Model
{
    /** @use HasFactory<\Database\Factories\DairyFactory> */
    use HasFactory;
    protected $table ='dairy';
    protected $fillable=['Society_Id',
    'Nos_of_milch_cow',
    'total_value_of_Milch_cow',
    'no_of_cowshed',
    'other_item',
    'other_no',
    'other_amount',
    'produce_in_litre',
    'produce_value',
    'usold_litre',
    'unsold_value',
    'dairy_product_item',
    'dairy_product_value',
    'collection_facility',
    'testing_facility',
    'sale_of_feed_medicine',
    'sale_of_feed_medicine_value',
    ];
}
