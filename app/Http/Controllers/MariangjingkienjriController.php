<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Mariangjingkienjri;
use Illuminate\Http\Request;

class MariangjingkienjriController extends Controller
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
       
            'Society_Id'=> 'required|string|unique:mariangjingkienjris',
            'lrb_source'=>'required|string',
            'lrb_amount_recieved'=>'nullable|integer',
            'lrb_amount_utilized'=>'nullable|integer',
            'lrb_amount_unutilized'=>'nullable|integer',
            'purpose_of_grant_recieve'=>'nullable|string',
            'shared_investment'=>'nullable|string',
            'fee_collection'=>'nullable|integer',
            
        ]);

         Mariangjingkienjri::create($validatedData);
       
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'handloom']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Mariangjingkienjri::where('Society_Id', $id )->first();
        return view('pages.jingkiengjri')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'lrb_source'=>'required|string',
            'lrb_amount_recieved'=>'nullable|integer',
            'lrb_amount_utilized'=>'nullable|interger',
            'lrb_amount_unutilized'=>'nullable|interger',
            'purpose_of_grant_recieve'=>'nullable|string',
            'shared_investment'=>'nullable|string',
            'fee_collection'=>'nullable|integer',
            
        ]);
        $finddata= Mariangjingkienjri::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Mariangjingkienjri::where('Society_Id', $id )->first();
        return view('pages.jingkiengjri')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
