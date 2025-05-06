<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Ivcs;
use Illuminate\Http\Request;

class IvcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_of_society=$request->input('Society_Id');
        $validatedData=$request->validate([
            'Society_Id'=> 'required|string|unique:pacs',
            'activity'=>'nullable|string',
            'household_covered'=>'nullable|string',
            'share_holder_member_name'=>'nullable|string',
            'nos_of_share_subscribe'=>'nullable|integer',
            'amount_share_capitals'=>'nullable|string',
            'nos_saving_account'=>'nullable|integer',
            'total_saving_mobilised'=>'nullable|integer',
            'nos_rd_account'=>'nullable|integer',
            'total_rd_mobilised'=>'nullable|integer',
            'nos_fd_account'=>'nullable|integer',
            'total_fd_mobilised'=>'nullable|integer',
            'corpus_fund'=>'nullable|integer',
            'nos_loanorborrower_account'=>'nullable|string',
            'total_loan_disbured'=>'nullable|integer',
            'outstanding_borrower'=>'nullable|string',
            'outstanding_amount'=>'nullable|integer',
            'product_cmc'=>'nullable|string',
            'machinery_tool_CHC'=>'nullable|string',
            'agriculture_item'=>'nullable|string',
            'agriculture_area'=>'nullable|string',
            'horticulture_item'=>'nullable|string',
            'horticulture_area'=>'nullable|string',
            'livestock'=>'nullable|string',
            'marketing_trading'=>'nullable|string',
            'consumer_store'=>'nullable|string',
           
        ]);
       

         Ivcs::create($validatedData);
        //  return view('pages.ivcs');
        return redirect()->action([BasicController::class,'Sector_view']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
         $activity=Ivcs::where('Society_Id', $id )->first();
        return view('pages.ivcs')->with(['Datas'=>$data,'activities'=>$activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id_of_society=$request->input('Society_Id');
        $validatedData=$request->validate([
            'Society_Id'=> 'required|string|unique:pacs',
            'activity'=>'nullable|string',
            'household_covered'=>'nullable|string',
            'share_holder_member_name'=>'nullable|string',
            'nos_of_share_subscribe'=>'nullable|integer',
            'amount_share_capitals'=>'nullable|string',
            'nos_saving_account'=>'nullable|integer',
            'total_saving_mobilised'=>'nullable|integer',
            'nos_rd_account'=>'nullable|integer',
            'total_rd_mobilised'=>'nullable|integer',
            'nos_fd_account'=>'nullable|integer',
            'total_fd_mobilised'=>'nullable|integer',
            'corpus_fund'=>'nullable|integer',
            'nos_loanorborrower_account'=>'nullable|string',
            'total_loan_disbured'=>'nullable|integer',
            'outstanding_borrower'=>'nullable|string',
            'outstanding_amount'=>'nullable|integer',
            'product_cmc'=>'nullable|string',
            'machinery_tool_CHC'=>'nullable|string',
            'agriculture_item'=>'nullable|string',
            'agriculture_area'=>'nullable|string',
            'horticulture_item'=>'nullable|string',
            'horticulture_area'=>'nullable|string',
            'livestock'=>'nullable|string',
            'marketing_trading'=>'nullable|string',
            'consumer_store'=>'nullable|string',
           
        ]);
        $finddata= Ivcs::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Ivcs::where('Society_Id', $id )->first();
        return view('pages.ivcs')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
