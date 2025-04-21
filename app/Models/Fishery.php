<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fishery extends Model
{
    use HasFactory;
    protected $table ='fisheries';
    protected $fillable=['Society_Id',
    'male_fisher',
    'female_fisher',
    'total_pond',
    'area_of_pond',
    'value_of_fish_pond',
    'nursery_pond',
    'area_of_nursery_pond',
    'value_of_nursery_pond',
     'type_of_fish_reared',
    'fish_quantity',
    'sales_of_fresh_fish',
    'dry_fish',
    'smoke_fish',
    'fishing_material_other',
    ];
}
