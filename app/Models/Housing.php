<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    use HasFactory;
    protected $table ='housings';
    protected $fillable=['Society_Id',
    'borrowing_government',
    'central_finance_agency',
    'housing_urban_development_cor',
    'state_fianance_society',
    'national_housing_bank',
    'other_financial_inst',
    'land_asset',
    'building_asset',
    'other_asset',
    'adavance_year',
    'advance_amount',
    'recovery_principal',
    'recovery_interest',
    'outstanding_principal',
    'outstanding_interest',
    'overdue_principal',
    'overdue_interest',
    'society_house_construct_number',
    'society_house_construct_value',
    'member_house_construct_number',
    'member_house_construct_value',
    'independent_house_construct_no',
    'independent_house_construct_value',
    'independent_house_construct_earn',
    ];
}
