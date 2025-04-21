<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourism extends Model
{
    use HasFactory;
    protected $table ='tourisms';
    protected $fillable=['Society_Id',
    'deomestic_tourist',
    'foreign_tourist',
    'entry_fee_annually',
    'parking_fee_annually',
    'other_fee_annually',
    'total_guest_house_or_lodge',
    'income_from_guest_house_or_lodge',
    'other_source',
    'other_value',
    'male_guide',
    'female_guide',
    'product_promotion',
    'sale_of_product_annually',
    'Equipments_Name',
    'Equipments_Nos'
    ];
}
