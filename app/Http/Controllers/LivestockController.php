<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Livestock;
use Illuminate\Http\Request;

class LivestockController extends Controller
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
            'Society_Id'=> 'required|string|unique:livestocks',
            'no_of_piggery_shed'=>'nullable|integer',
            'value_of_piggery_shed'=>'nullable|integer',
            'piggery_activities'=>'nullable|string',
            'total_sale'=>'nullable|string',
            'no_of_goatery_shed'=>'nullable|integer',
            'value_of_goatery_shed'=>'nullable|integer',
            'goatery_item'=>'nullable|string',
            'goatery_total_sale'=>'nullable|integer',
            'no_of_poultry_shed'=>'nullable|integer',
            'value_of_poultry_shed'=>'nullable|integer',
            'poultry_item'=>'nullable|string',
            'poultry_total_sale'=>'nullable|integer',
            'no_of_duckery_shed'=>'nullable|integer',
            'value_of_duckery_shed'=>'nullable|integer',
            'duckery_item'=>'nullable|string',
            'duckery_total_sale'=>'nullable|integer',
            'no_of_cattle_farming_shed'=>'nullable|integer',
            'value_of_cattle_farming_shed'=>'nullable|integer',
            'cattle_farming_item'=>'nullable|string',
            'cattle_farming_total_sale'=>'nullable|integer',
            'livestock_name'=>'nullable|string',
            'livestock_no'=>'nullable|integer',
            'livestock_value'=>'nullable|integer',
           
        ]);
       

         Livestock::create($validatedData);
        //  return view('pages.ivcs');
        // return redirect()->action([BasicController::class,'Sector_view']);
        $data=Basic::find($id_of_society);
        $activity=Livestock::where('Society_Id', $id_of_society )->first();
        return view('pages.livestock')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Save!!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Livestock::where('Society_Id', $id )->first();
        return view('pages.livestock')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'no_of_piggery_shed'=>'nullable|integer',
            'value_of_piggery_shed'=>'nullable|integer',
            'piggery_activities'=>'nullable|string',
            'total_sale'=>'nullable|string',
            'no_of_goatery_shed'=>'nullable|integer',
            'value_of_goatery_shed'=>'nullable|integer',
            'goatery_item'=>'nullable|string',
            'goatery_total_sale'=>'nullable|integer',
            'no_of_poultry_shed'=>'nullable|integer',
            'value_of_poultry_shed'=>'nullable|integer',
            'poultry_item'=>'nullable|string',
            'poultry_total_sale'=>'nullable|integer',
            'no_of_duckery_shed'=>'nullable|integer',
            'value_of_duckery_shed'=>'nullable|integer',
            'duckery_item'=>'nullable|string',
            'duckery_total_sale'=>'nullable|integer',
            'no_of_cattle_farming_shed'=>'nullable|integer',
            'value_of_cattle_farming_shed'=>'nullable|integer',
            'cattle_farming_item'=>'nullable|string',
            'cattle_farming_total_sale'=>'nullable|integer',
            'livestock_name'=>'nullable|string',
            'livestock_no'=>'nullable|integer',
            'livestock_value'=>'nullable|integer',
           
        ]);
        $finddata= Livestock::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Livestock::where('Society_Id', $id )->first();
        return view('pages.livestock')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
