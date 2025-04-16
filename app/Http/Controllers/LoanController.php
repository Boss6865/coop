<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Loan;
use Illuminate\Http\Request;

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
        $Name_of_the_Society=$request->input('Name_of_society');
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
        
        Loan::create($validatedData);

        return redirect()->action([BasicController::class, 'View_1'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.sector')->with('Datas',$data);
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
