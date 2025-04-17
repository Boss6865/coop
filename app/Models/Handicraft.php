<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handicraft extends Model
{
    /** @use HasFactory<\Database\Factories\HandicraftFactory> */
    use HasFactory;
    protected $table ='handicraft';
    protected $fillable=['Society_Id',
    'item_produce',
    'nos_of_craftsmen',
    'wages_paid',
    'sales_turnover',
    'other_item_produce',
    'other_nos_of_craftsmen',
    'other_wages_paid',
    'other_sales_turnover',
    ];
}
