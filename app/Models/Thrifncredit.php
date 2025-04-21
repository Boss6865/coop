<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thrifncredit extends Model
{
    use HasFactory;
    protected $table ='thrifncredits';
    protected $fillable=['Society_Id',
    'year_contribution',
    'member_contributed',
    'borrowing_loan',
    'borrowing_loan_st',
    'borrowing_loan_sc',
    'borrowing_loan_GO',
    'borrowing_loan_issues',
    'recover_loan',
    'recover_loan_st',
    'recover_loan_sc',
    'recover_loan_GO',
    'recover_loan_principal',
    'recover_loan_interest',
    'outstanding_loan',
    'outstanding_loan_st',
    'outstanding_loan_sc',
    'outstanding_loan_GO',
    'outstanding_loan_principal',
    'outstanding_loan_interest',
    'outstanding_loan_defaulters_no',
    'outstanding_laon_issues_defaulters_amount'
    ];
}
