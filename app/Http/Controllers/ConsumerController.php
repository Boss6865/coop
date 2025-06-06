<?php

namespace App\Http\Controllers;


use App\Models\Basic;
use App\Models\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
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
            'Society_Id'=> 'required|string|unique:consumer',
            'departmental_store'=>'nullable|string',
            'retails_unit'=>'nullable|string',
            'no_of_branch'=>'nullable|integer',
            'closing_stock'=>'nullable|integer',
            'purchase_date'=>'nullable|string',
            'item'=>'nullable|string',
            'total_sale'=>'nullable|integer',
            'Controll_wholesale'=>'nullable|integer',
            'controll_retail'=>'nullable|integer',
            'uncontroll_wholesale'=>'nullable|integer',
            'uncontroll_retail'=>'nullable|integer'
        ]);
        Consumer::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'consumer']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Consumer::where('Society_Id', $id )->first();
        
        return view('pages.consumer')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'Society_Id'=> 'required|string',
            'departmental_store'=>'nullable|string',
            'retails_unit'=>'nullable|string',
            'no_of_branch'=>'nullable|integer',
            'closing_stock'=>'nullable|integer',
            'purchase_date'=>'nullable|string',
            'item'=>'nullable|string',
            'total_sale'=>'nullable|integer',
            'Controll_wholesale'=>'nullable|integer',
            'controll_retail'=>'nullable|integer',
            'uncontroll_wholesale'=>'nullable|integer',
            'uncontroll_retail'=>'nullable|integer'
        ]);
        $finddata= Consumer::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Consumer::where('Society_Id', $id )->first();
        
        return view('pages.consumer')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
