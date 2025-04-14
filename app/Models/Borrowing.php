<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Borrowing extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowingFactory> */
    use HasFactory;
    protected $table ='borowing';

    protected $fillable=['Society_Id',
    'borrowing_from',
    'borrowing_type',
    'borrowing_amount',
    'borrowing_refunded',
    'borrowing_outstanding',
    'Govt_loan',
    'bank_sb_ac',
    'bank_fd_ac',
    'bank_rd_ac',
    'bank_cd_ac',
    'bank_thrift_ac',
    ];

    public function basic():BelongsTo {
        return $this->belongsTo(Basic::class);
    }
}
