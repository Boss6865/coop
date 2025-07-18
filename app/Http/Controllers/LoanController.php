<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Asset;
use App\Models\Basic;
use App\Models\Borrowing;
use App\Models\Investement;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.loan');
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
       
            'Society_Id'=> 'required|integer',
            'any_Govt_loan'=> 'required|string',
        ]);
        $validatedData['type_of_govt_loan']=json_encode($request->input('type_of_govt_loan'));
        $validatedData['Loan_issue_year']=json_encode($request->input('Loan_issue_year'));
        $validatedData['Loan_sanctioned_amount']=json_encode($request->input('Loan_sanctioned_amount'));
        $validatedData['Outstanding_Principal_amount']=json_encode($request->input('Outstanding_Principal_amount'));
        $validatedData['Outstanding_interest_amount']=json_encode($request->input('Outstanding_interest_amount'));
        $validatedData['other_mention']=json_encode($request->input('other_mention'));
        Loan::create($validatedData);

        return redirect()->action([BasicController::class, 'View_1'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $data=Basic::find($id);
        $activity=Activity::where('Society_Id', $id )->first();
        // dd($activity);
       
        return view('pages.sector')->with(['Datas'=>$data,'activity'=>$activity, 'id'=> $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data=Basic::find($id);
        // dd($data);
        return view('pages.loan')->with(['Datas'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
       
            
            'any_Govt_loan'=> 'required|string',
        ]);
        $validatedData['type_of_govt_loan']=json_encode($request->input('type_of_govt_loan'));
        $validatedData['Loan_issue_year']=json_encode($request->input('Loan_issue_year'));
        $validatedData['Loan_sanctioned_amount']=json_encode($request->input('Loan_sanctioned_amount'));
        $validatedData['Outstanding_Principal_amount']=json_encode($request->input('Outstanding_Principal_amount'));
        $validatedData['Outstanding_interest_amount']=json_encode($request->input('Outstanding_interest_amount'));
        $validatedData['other_mention']=json_encode($request->input('other_mention'));
         $finddata=Loan::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $investment=Investement::where('Society_Id', $id)->first();
        $borrowing=Borrowing::where('Society_Id', $id)->first();
        $asset_datas=Asset::where('Society_Id', $id)->first();
        $loan_datas=Loan::where('Society_Id', $id)->first();
        return view('pages.editsociety')->with(['Datas'=>$data,'val'=>"111",'borrowing_datas'=> $borrowing,'investment_data'=> $investment,'asset_datas'=>$asset_datas,'loan_datas'=>$loan_datas,'msg'=>"Successfull Updated!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
