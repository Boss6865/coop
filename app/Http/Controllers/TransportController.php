<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
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
            'nos_of_Goods_vehicle'=>'nullable|integer',
            'no_of_passenger_vehichle'=>'nullable|integer',
            'vehicle_type'=>'nullable|string',
            'vehicle_nos'=>'nullable|integer',
            'vehicle_value'=>'nullable|integer',
            'other_asset_name'=>'nullable|string',
            'other_asset_nos'=>'nullable|integer',
            'other_asset_value'=>'nullable|integer',
            'other_asset_income'=>'nullable|integer',
            'total_driver'=>'nullable|integer',
            'total_driver_wages'=>'nullable|integer',
            'total_helper'=>'nullable|integer',
            'total_helper_wages'=>'nullable|integer',
            'other_total'=>'nullable|integer',
            'others_wages_total'=>'nullable|integer',
        ]);
        Transport::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'TRANSPORT']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.transport')->with('Datas',$data);
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
