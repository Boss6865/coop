<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Investement extends Model
{
    /** @use HasFactory<\Database\Factories\InvestementFactory> */
    use HasFactory;

    protected $table ='investment';

    protected $fillable=['Society_Id',
    'investment_Status',
    'type_of_govt_loan',
    'loan_investment_amount',
    ];
    public function basic():BelongsTo {
        return $this->belongsTo(Basic::class);
    }
}
