<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Fishery;
use Illuminate\Http\Request;

class FisheryController extends Controller
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
            'male_fisher'=>'nullable|integer',
            'female_fisher'=>'nullable|integer',
            'total_pond'=>'nullable|integer',
            'area_of_pond'=>'nullable|integer',
            'value_of_fish_pond'=>'nullable|integer',
            'nursery_pond'=>'nullable|integer',
            'area_of_nursery_pond'=>'nullable|integer',
            'value_of_nursery_pond'=>'nullable|integer',
             'type_of_fish_reared'=>'nullable|string',
            'fish_quantity'=>'nullable|integer',
            'sales_of_fresh_fish'=>'nullable|integer',
            'dry_fish'=>'nullable|integer',
            'smoke_fish'=>'nullable|integer',
            'fishing_material_other'=>'nullable|integer',
        ]);
        Fishery::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'fishery']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.fishery')->with('Datas',$data);
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
