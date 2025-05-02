<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacs extends Model
{
    use HasFactory;
    protected $table ='pacs';
    protected $fillable=['Society_Id',
    'activity',
    'amount_sanctioned',
    'nos_of_member_loan_for',
    'purpose_taken_for',
    'principal_amount',
    'interest_amount',
    'defaulter_no',
    'defaulter_amount',
    'npa_principal',
    'npa_interest',
    'outstandingloanee_male',
    'outstandingloanee_female',
    'outstandingloanee_clan',
    'outstanding_interest',
    'outstanding_p_amount',
    'years',
    'recovery_female_clan',
    'recovery_male_clan',
    'recovery_clan',
    'female_clan',
    'male_clan',
    'clan',
    ];
}
