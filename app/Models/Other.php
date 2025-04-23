<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $table ='others';
    protected $fillable=['Society_Id',
    'course_offered',
    'nos_of_student',
    'course_fee',
    'no_of_teaching_staff',
    'no_of_non_teaching_staff',
    'salary_to_staff',
    'service_provided',
    'employee',
    'wage_paid',
    'turn_over',
    
    ];
}
