<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    /** @use HasFactory<\Database\Factories\AssetFactory> */
    use HasFactory;
    protected $table ='asset';
    protected $fillable=['Society_Id',
    'self_building',
     'rented_building',
     'rent_paid',
     'godown',
     'godown_area',
     'godown_capacity',
     'godown_types',
     'godown_type_agreement',
     'godown_type_per_annum',
     'storage',
     'storage_cold',
     'storage_dry',
     'land',
     'Land_area',
     'land_area_lease',
     'furniture',
     'furniture_total',
     'furniture_amount',
     'computers',
     'computers_total',
     'computers_amount',
     'item_name',
     'item_no',
     'item_amount',
    ];
    public function basic():BelongsTo {
        return $this->belongsTo(Basic::class);
    }
}
