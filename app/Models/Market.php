<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $table ='markets';
    protected $fillable=['Society_Id',
    'agriculture_input_type',
    'agriculture_input_quantity',
    'agriculture_input_value',
    'product_produce',
    'product_quantity',
    'product_value',
    ];
}
