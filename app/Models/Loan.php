<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    /** @use HasFactory<\Database\Factories\LoanFactory> */
    use HasFactory;
    protected $table ='govtloan';
    protected $fillable=['Society_Id',
    'any_Govt_loan',
    'type_of_govt_loan',
    'Loan_issue_year',
    'Loan_sanctioned_amount',
    'Outstanding_Principal_amount',
    'Outstanding_interest_amount',
    
    ];
    public function basic():BelongsTo {
        return $this->belongsTo(Basic::class);
    }
}
