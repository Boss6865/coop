<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class capital extends Model
{
    /** @use HasFactory<\Database\Factories\CapitalFactory> */
    use HasFactory;
    protected $fillable =[
        'Society_Id',
        'Admission_fee',
        'Share_face_value',
        'Authorize_share_capital',
        'Individual_share',
        'Govt_share',
        'Other_coop_share',
        'Primary_Activity',
        'Secondary_Activity',
        'Tertiary_Activity',
        'Other_Activity',
        'Society_Fair_Price_Shop',
        'Latest_Audit_complete',
        'Audit_Class',
        'Working_Capitals',
        'Business_turnover',
        'Total_reserve',
        'Profit_loss',
        'Net_Profit_Loss',
        'Profit',
        'Loss',
        'Declear_Dividen',
        'Yes_Dividen_Amount_topaid',
        'Yes_Dividen_Amount_topaid_Govt',
        'Yes_Dividen_Challan_date',
        'CDF_Paid',
        'CDf_Yes_paidamount',
        'CDf_Yes_paidDate',
        'Grant_Type',
        'Grant_Year',
        'Deptt_Name',
        'Grant_Sanctioned',
        'Grant_Release',
        'Date_release',
        'Aid_Type',
        'Aid_Year',
        'Agencies_Name',
        'Aid_Sanctioned',
        'Aid_Grant_Release',
        'Grant_Subsidies',
        'Loan_Sanctioned',
        'Loan_Refunded',
        'Loan_Outstanding',
        'MANAGERIAL_SUBSIDY_RECEIVED_Year',
        'MANAGERIAL_SUBSIDY_RECEIVED_Amount',
  
    ];

protected $table ='societycapitals';
public function basic():BelongsTo {
    return $this->belongsTo(Basic::class);
}
}
