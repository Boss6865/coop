<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $table ='industries';
    protected $fillable=['Society_Id',
    'type_of_Business',
    'name_of_item_produced',
    'person_employed',
    'wages_paid',
    'sales_turnover',
    'course_offered',
    'nos_of_trainee',
    'nos_of_trainee',
    'course_fee',
    'teaching_staff',
    'non_teaching_staff',
    'salary'
    ];
}
