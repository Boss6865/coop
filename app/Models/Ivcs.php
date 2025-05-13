<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ivcs extends Model
{
    use HasFactory;
    protected $table ='ivcs';
    protected $fillable=['Society_Id',
    'activity',
    'household_covered',
    'share_holder_member_name',
    'nos_of_share_subscribe',
    'amount_share_capitals',
    'nos_saving_account',
    'total_saving_mobilised',
    'nos_rd_account',
    'total_rd_mobilised',
    'nos_fd_account',
    'total_fd_mobilised',
    'corpus_fund',
    'nos_loanorborrower_account',
    'total_loan_disbured',
    'outstanding_borrower',
    'outstanding_amount',
    'product_cmc',
    'machinery_tool_CHC',
    'agriculture_item',
    'agriculture_area',
    'horticulture_item',
    'horticulture_area',
    'livestock',
    'marketing_trading',
    'consumer_store',
    ];
    
}
