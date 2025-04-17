<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farming extends Model
{
    /** @use HasFactory<\Database\Factories\FarmingFactory> */
    use HasFactory;
    protected $table ='farming';
    protected $fillable=['Society_Id',
    'st_male',
    'st_female',
    'sc_male',
    'sc_female',
    'which_landholder',
    'which_agriculture',
    'type_produce_agriorhorti',
    'production_quantity',
    'farming_activities_amount',
    'produce_quantity',
    'produce_amount',
    
    ];
}
