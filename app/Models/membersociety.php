<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membersociety extends Model
{
    /** @use HasFactory<\Database\Factories\MembersocietyFactory> */
    use HasFactory;
    protected $fillable =[
                            'Society_Id',
                            'ST_Male',
                            'ST_Female',
                            'ST_PG',
                            'ST_CoopSociety',
                            'ST_SHG',
                            'SC_Male',
                            'SC_Female',
                            'SC_CoopSociety',
                            'SC_PG',
                            'SC_SHG',
                            'Gen_Male',
                            'Gen_Female',
                            'Gen_CoopSociety',
                            'Gen_PG',
                            'Gen_SHG',
                            'Managing_Male',
                            'Managing_Female',
                            'Date_of_LastAGM',
                            'Employee_Male',
                            'Employee_Female',
                            'Trained_Male',
                            'Trained_Female',
                            'Programme_Type',
                            'Training_Program',
                            'Number_of_Trainee',
                            'Managemnt_Salary',
                            'Management_Expense',
                            'Other_Expense'
                        ];

    protected $table ='_member_of_society';
}
