<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    /** @use HasFactory<\Database\Factories\ConsumerFactory> */
    use HasFactory;
    protected $table ='consumer';
    protected $fillable=['Society_Id',
    'departmental_store',
    'retails_unit',
    'no_of_branch',
    'closing_stock',
    'purchase_date',
    'item',
    'total_sale',
    'Controll_wholesale',
    'controll_retail',
    'uncontroll_wholesale',
    'uncontroll_retail',
    ];
}
