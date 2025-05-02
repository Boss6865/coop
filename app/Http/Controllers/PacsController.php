<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Pacs;
use Illuminate\Http\Request;

class PacsController extends Controller
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
            'amount_sanctioned'=>'nullable|string',
            'nos_of_member_loan_for'=>'nullable|integer',
            'purpose_taken_for'=>'nullable|string',
            'principal_amount'=>'nullable|integer',
            'interest_amount'=>'nullable|integer',
            'defaulter_no'=>'nullable|integer',
            'defaulter_amount'=>'nullable|string',
            'npa_principal'=>'nullable|integer',
            'npa_interest'=>'nullable|string'
           
        ]);
        $validatedData['outstandingloanee_male']=json_encode($request->input('outstandingloanee_male'));
        $validatedData['outstandingloanee_female']=json_encode($request->input('outstandingloanee_female'));
        $validatedData['outstandingloanee_clan']=json_encode($request->input('outstandingloanee_clan'));
        $validatedData['outstanding_interest']=json_encode($request->input('outstanding_interest'));
        $validatedData['outstanding_p_amount']=json_encode($request->input('outstanding_p_amount'));
        $validatedData['years']=json_encode($request->input('years'));
        $validatedData['recovery_female_clan']=json_encode($request->input('recovery_female_clan'));
        $validatedData['recovery_male_clan']=json_encode($request->input('recovery_male_clan'));
        $validatedData['recovery_clan']=json_encode($request->input('recovery_clan'));
        $validatedData['female_clan']=json_encode($request->input('female_clan'));
        $validatedData['male_clan']=json_encode($request->input('male_clan'));
        $validatedData['clan']=json_encode($request->input('clan'));

         Pacs::create($validatedData);
       
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'handloom']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Pacs::where('Society_Id', $id )->first();
        return view('pages.pacs')->with(['Datas'=>$data,'activities'=>$activity]);
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
        $validatedData=$request->validate([
            'Society_Id'=> 'required|string',
            'activity'=>'nullable|string',
            'amount_sanctioned'=>'nullable|string',
            'nos_of_member_loan_for'=>'nullable|integer',
            'purpose_taken_for'=>'nullable|string',
            'principal_amount'=>'nullable|integer',
            'interest_amount'=>'nullable|integer',
            'defaulter_no'=>'nullable|integer',
            'defaulter_amount'=>'nullable|string',
            'npa_principal'=>'nullable|integer',
            'npa_interest'=>'nullable|string'
           
        ]);
        $validatedData['outstandingloanee_male']=json_encode($request->input('outstandingloanee_male'));
        $validatedData['outstandingloanee_female']=json_encode($request->input('outstandingloanee_female'));
        $validatedData['outstandingloanee_clan']=json_encode($request->input('outstandingloanee_clan'));
        $validatedData['outstanding_interest']=json_encode($request->input('outstanding_interest'));
        $validatedData['outstanding_p_amount']=json_encode($request->input('outstanding_p_amount'));
        $validatedData['years']=json_encode($request->input('years'));
        $validatedData['recovery_female_clan']=json_encode($request->input('recovery_female_clan'));
        $validatedData['recovery_male_clan']=json_encode($request->input('recovery_male_clan'));
        $validatedData['recovery_clan']=json_encode($request->input('recovery_clan'));
        $validatedData['female_clan']=json_encode($request->input('female_clan'));
        $validatedData['male_clan']=json_encode($request->input('male_clan'));
        $validatedData['clan']=json_encode($request->input('clan'));

        $finddata= Pacs::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Pacs::where('Society_Id', $id )->first();
        return view('pages.pacs')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
