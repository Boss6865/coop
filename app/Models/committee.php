<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class committee extends Model
{
    protected $fillable =[
        'Society_Id',
        'President_Name',
        'President_DOB',
        'President_Contact',
        'President_Email',
        'Secretary_Name',
        'Secretary_DOB',
        'Secretary_Contact',
        'Secretary_Email',
        'Member_Name',
        'Member_Contact',
  
    ];

protected $table ='committee';
}
