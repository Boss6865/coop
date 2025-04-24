<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Housing;
use Illuminate\Http\Request;

class HousingController extends Controller
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
            'Society_Id'=> 'required|string|unique:housings',
            'borrowing_government'=>'nullable|integer',
            'central_finance_agency'=>'nullable|integer',
            'housing_urban_development_cor'=>'nullable|integer',
            'state_fianance_society'=>'nullable|integer',
            'national_housing_bank'=>'nullable|integer',
            'other_financial_inst'=>'nullable|integer',
            'land_asset'=>'nullable|string',
            'building_asset'=>'nullable|string',
             'other_asset'=>'nullable|string',
            'adavance_year'=>'nullable|string',
            'advance_amount'=>'nullable|string',
            'recovery_principal'=>'nullable|integer',
            'recovery_interest'=>'nullable|integer',
            'outstanding_principal'=>'nullable|integer',
            'outstanding_interest'=>'nullable|integer',
            'overdue_principal'=>'nullable|integer',
             'overdue_interest'=>'nullable|integer',
            'society_house_construct_number'=>'nullable|string',
            'society_house_construct_value'=>'nullable|integer',
            'member_house_construct_number'=>'nullable|string',
            'member_house_construct_value'=>'nullable|integer',
            'independent_house_construct_no'=>'nullable|string',
            'independent_house_construct_value'=>'nullable|integer',
            'independent_house_construct_earn'=>'nullable|integer',
        ]);
        Housing::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'housing']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.housing')->with('Datas',$data);
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
