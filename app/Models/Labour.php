<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labour extends Model
{
    use HasFactory;
    protected $table ='labours';
    protected $fillable=['Society_Id',
    'society_operation',
    'ST',
    'SC',
    'of_which_borrower',
    'other_specify',
    'no_of_worker',
    'Govt_body',
    'local_body',
    'other',
    'income_earned',
    ];
}
