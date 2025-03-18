<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Basic extends Model
{
    protected $fillable = ['Name_of_the_Society','Registration_No','Date_of_registration','Sector_Type','Email','Pan_of_Society','Location_Area','Pan','District','Block','Board','Circle','Village','Post_office','Police_Station','Pincode','Operation_District','Operation_villages','Affiliation','Status','Years_of_Non_function','Section_Conducted','Section_Cancellation'];  
    protected $table ='_societydata';

    public function membersociety():HasMany {
        return $this->hasMany(membersociety::class,'Society_Id');
    }
    public function committee():HasMany {
        return $this->hasMany(committee::class,'Society_Id');
    }
    public function capital():HasMany {
        return $this->hasMany(capital::class,'Society_Id');
    }

}
