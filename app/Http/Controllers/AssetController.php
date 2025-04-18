<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.asset');
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
            'self_building'=> 'required|string',
            'rented_building'=> 'required|string',
            'rent_paid'=> 'required|integer',
            'godown'=> 'nullable|string',
            'godown_area'=> 'nullable|string',
            'godown_capacity'=> 'nullable|string',
            'godown_types'=>'nullable|string',
            'godown_type_agreement'=> 'nullable|integer',
            'godown_type_per_annum'=> 'nullable|integer',
            'storage'=> 'nullable|string',
            'storage_cold'=>'nullable|string',
            'storage_dry'=> 'nullable|string',
            'land'=> 'nullable|string',
            'Land_area'=>'nullable|string',
            'land_area_lease'=> 'nullable|string',
            'furniture'=> 'nullable|string',
            'furniture_total'=> 'nullable|integer',
            'furniture_amount'=> 'nullable|integer',
            'computers'=> 'nullable|string',
            'computers_total'=> 'nullable|integer',
            'computers_amount'=> 'nullable|integer',
        ]);
        $validatedData['item_name']=json_encode($request->input('item_name'));
        $validatedData['item_no']=json_encode($request->input('item_no'));
        $validatedData['item_amount']=json_encode($request->input('item_amount'));
        
        Asset::create($validatedData);

        return redirect()->action([LoanController::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
    }
        
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
