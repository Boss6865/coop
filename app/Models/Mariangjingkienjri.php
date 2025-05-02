<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mariangjingkienjri extends Model
{
    use HasFactory;
    protected $table ='mariangjingkienjris';
    protected $fillable=['Society_Id',
    'lrb_source',
    'lrb_amount_recieved',
    'lrb_amount_recieved',
    'lrb_amount_utilized',
    'lrb_amount_unutilized',
    'purpose_of_grant_recieve',
    'shared_investment',
    'fee_collection',
    ];
}
