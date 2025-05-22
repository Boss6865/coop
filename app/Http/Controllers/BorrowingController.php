<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Basic;
use App\Models\Borrowing;
use App\Models\Investement;
use App\Models\Loan;
use Illuminate\Http\Request;


class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.borrow');
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
        $Name_of_the_Society=$request->input('Name_of_the_Society');
        $id_of_society=$request->input('Society_Id');
    $validatedData=$request->validate([
       
        'Society_Id'=> 'required|string|unique:borowing',
        'Govt_loan'=> 'required|string',
        'bank_sb_ac'=> 'nullable|integer',
        'bank_fd_ac'=> 'nullable|integer',
        'bank_rd_ac'=> 'nullable|integer',
        'bank_cd_ac'=>'nullable|integer',
        'bank_thrift_ac'=> 'nullable|integer',
    ]);
    $validatedData['borrowing_from']=json_encode($request->input('borrowing_from'));
    $validatedData['borrowing_type']=json_encode($request->input('borrowing_type'));
    $validatedData['borrowing_amount']=json_encode($request->input('borrowing_amount'));
    $validatedData['borrowing_refunded']=json_encode($request->input('borrowing_refunded'));
    $validatedData['borrowing_outstanding']=json_encode($request->input('borrowing_outstanding'));

    Borrowing::create($validatedData);

    return redirect()->action([AssetController::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data=Basic::find($id);
        // dd($data);
        return view('pages.borrow')->with(['Datas'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
       
      
        'Govt_loan'=> 'required|string',
        'bank_sb_ac'=> 'nullable|integer',
        'bank_fd_ac'=> 'nullable|integer',
        'bank_rd_ac'=> 'nullable|integer',
        'bank_cd_ac'=>'nullable|integer',
        'bank_thrift_ac'=> 'nullable|integer',
         ]);
         $validatedData['borrowing_from']=json_encode($request->input('borrowing_from'));
         $validatedData['borrowing_type']=json_encode($request->input('borrowing_type'));
         $validatedData['borrowing_amount']=json_encode($request->input('borrowing_amount'));
         $validatedData['borrowing_refunded']=json_encode($request->input('borrowing_refunded'));
         $validatedData['borrowing_outstanding']=json_encode($request->input('borrowing_outstanding'));
        $finddata=Borrowing::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $investment=Investement::where('Society_Id', $id)->first();
        $borrowing=Borrowing::where('Society_Id', $id)->first();
        $asset_datas=Asset::where('Society_Id', $id)->first();
        $loan_datas=Loan::where('Society_Id', $id)->first();
        return view('pages.editsociety')->with(['Datas'=>$data,'val'=>"000",'borrowing_datas'=> $borrowing,'investment_data'=> $investment,'asset_datas'=>$asset_datas,'loan_datas'=>$loan_datas,'msg'=>"Successfull Updated!!"]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
