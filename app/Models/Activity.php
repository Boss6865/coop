<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;
    protected $table ='activities';
    protected $fillable=['Society_Id',
    'activity_1',
    'activity_2',
    'activity_3',
    'activity_4',
    'activity_5',
    'activity_other',
    
    ];
    public function basic():BelongsTo{
        return $this->belongsTo(Basic::class);
    }
}
