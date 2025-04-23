<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Thrifncredit;
use Illuminate\Http\Request;

class ThrifandcreditController extends Controller
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
            'Society_Id'=> 'required|integer',
            'year_contribution'=>'nullable|string',
            'member_contributed'=>'nullable|string',
        ]);
        $validatedData['borrowing_loan']=json_encode($request->input('borrowing_loan'));
        $validatedData['borrowing_loan_st']=json_encode($request->input('borrowing_loan_st'));
        $validatedData['borrowing_loan_sc']=json_encode($request->input('borrowing_loan_sc'));
        $validatedData['borrowing_loan_GO']=json_encode($request->input('borrowing_loan_GO'));
        $validatedData['borrowing_loan_issues']=json_encode($request->input('borrowing_loan_issues'));
        $validatedData['recover_loan']=json_encode($request->input('recover_loan'));
        $validatedData['recover_loan_st']=json_encode($request->input('recover_loan_st'));
        $validatedData['recover_loan_sc']=json_encode($request->input('recover_loan_sc'));
        $validatedData['recover_loan_GO']=json_encode($request->input('recover_loan_GO'));
        $validatedData['recover_loan_principal']=json_encode($request->input('recover_loan_principal'));
        $validatedData['recover_loan_interest']=json_encode($request->input('recover_loan_interest'));
        $validatedData['outstanding_loan']=json_encode($request->input('outstanding_loan'));
        $validatedData['outstanding_loan_st']=json_encode($request->input('outstanding_loan_st'));
        $validatedData['outstanding_loan_sc']=json_encode($request->input('outstanding_loan_sc'));
        $validatedData['outstanding_loan_GO']=json_encode($request->input('outstanding_loan_GO'));
        $validatedData['outstanding_loan_principal']=json_encode($request->input('outstanding_loan_principal'));
        $validatedData['outstanding_loan_interest']=json_encode($request->input('outstanding_loan_interest'));
        $validatedData['outstanding_loan_defaulters_no']=json_encode($request->input('outstanding_loan_defaulters_no'));
        $validatedData['outstanding_laon_issues_defaulters_amount']=json_encode($request->input('outstanding_laon_issues_defaulters_amount'));

        Thrifncredit::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'tandc']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.thrifncredit')->with('Datas',$data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
