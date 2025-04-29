<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Handloom;
use Illuminate\Http\Request;

class HandloomController extends Controller
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
    public function store(Request $request, string $sign)
    {
        $id_of_society=$request->input('Society_Id');
        $validatedData=$request->validate([
       
            'Society_Id'=> 'required|string|unique:handloom',
            'no_of_looms_own'=>'nullable|integer',
            'natural_dykes'=>'nullable|string',
            'dyeing_house_own'=>'nullable|integer',
            'item_produce'=>'nullable|string',
            'total_handlom_sale'=>'nullable|integer',
            'total_powerloom_sale'=>'nullable|integer',
            'total_other_sale'=>'nullable|integer',
            'local_market'=>'nullable|string',
            'local_market_amount'=>'nullable|integer',
            'export'=>'nullable|string',
            'export_amount'=>'nullable|integer',
            'production_employee'=>'nullable|string',
            'admin_employee'=>'nullable|string',
            'other_employee'=>'nullable|string',
            'wage_paid'=>'nullable|integer',
            'sale_deport'=>'nullable|integer',
            'workshed'=>'nullable|string',
            'production_name'=>'nullable|string',
            'production_quantity'=>'nullable|integer',
            'production_amount'=>'nullable|integer',
            'purchase_name'=>'nullable|string',
            'purchase_quantity'=>'nullable|integer',
            'purchase_amount'=>'nullable|integer'
        ]);
        $validatedData['Equipments_Name']=json_encode($request->input('Equipments_Name'));
        $validatedData['Equipments_Nos']=json_encode($request->input('Equipments_Nos'));

         Handloom::create($validatedData);
       
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'handloom']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Handloom::where('Society_Id', $id )->first();
        return view('pages.handloom')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'no_of_looms_own'=>'nullable|integer',
            'natural_dykes'=>'nullable|string',
            'dyeing_house_own'=>'nullable|integer',
            'item_produce'=>'nullable|string',
            'total_handlom_sale'=>'nullable|integer',
            'total_powerloom_sale'=>'nullable|integer',
            'total_other_sale'=>'nullable|integer',
            'local_market'=>'nullable|string',
            'local_market_amount'=>'nullable|integer',
            'export'=>'nullable|string',
            'export_amount'=>'nullable|integer',
            'production_employee'=>'nullable|string',
            'admin_employee'=>'nullable|string',
            'other_employee'=>'nullable|string',
            'wage_paid'=>'nullable|integer',
            'sale_deport'=>'nullable|integer',
            'workshed'=>'nullable|string',
            'production_name'=>'nullable|string',
            'production_quantity'=>'nullable|integer',
            'production_amount'=>'nullable|integer',
            'purchase_name'=>'nullable|string',
            'purchase_quantity'=>'nullable|integer',
            'purchase_amount'=>'nullable|integer'
        ]);
        $validatedData['Equipments_Name']=json_encode($request->input('Equipments_Name'));
        $validatedData['Equipments_Nos']=json_encode($request->input('Equipments_Nos'));
        $finddata= Handloom::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Handloom::where('Society_Id', $id )->first();
        return view('pages.handloom')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
