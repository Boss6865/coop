<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Tourism;
use Illuminate\Http\Request;

class TourismController extends Controller
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
            'Society_Id'=> 'required|string|unique:tourisms',
            'deomestic_tourist'=>'nullable|integer',
            'foreign_tourist'=>'nullable|integer',
            'entry_fee_annually'=>'nullable|integer',
            'parking_fee_annually'=>'nullable|integer',
            'other_fee_annually'=>'nullable|integer',
            'total_guest_house_or_lodge'=>'nullable|integer',
            'income_from_guest_house_or_lodge'=>'nullable|integer',
            'other_source'=>'nullable|integer',
            'other_value'=>'nullable|integer',
            'male_guide'=>'nullable|integer',
            'female_guide'=>'nullable|integer',
            'product_promotion'=>'nullable|string',
            'sale_of_product_annually'=>'nullable|integer',
        ]);
        $validatedData['Equipments_Name']=json_encode($request->input('Equipments_Name'));
        $validatedData['Equipments_Nos']=json_encode($request->input('Equipments_Nos'));
        Tourism::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'tourism']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Tourism::where('Society_Id', $id )->first();
        return view('pages.tourism')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'deomestic_tourist'=>'nullable|integer',
            'foreign_tourist'=>'nullable|integer',
            'entry_fee_annually'=>'nullable|integer',
            'parking_fee_annually'=>'nullable|integer',
            'other_fee_annually'=>'nullable|integer',
            'total_guest_house_or_lodge'=>'nullable|integer',
            'income_from_guest_house_or_lodge'=>'nullable|integer',
            'other_source'=>'nullable|integer',
            'other_value'=>'nullable|integer',
            'male_guide'=>'nullable|integer',
            'female_guide'=>'nullable|integer',
            'product_promotion'=>'nullable|string',
            'sale_of_product_annually'=>'nullable|integer',
        ]);
        $validatedData['Equipments_Name']=json_encode($request->input('Equipments_Name'));
        $validatedData['Equipments_Nos']=json_encode($request->input('Equipments_Nos'));

        $finddata= Tourism::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Tourism::where('Society_Id', $id )->first();
        return view('pages.tourism')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
