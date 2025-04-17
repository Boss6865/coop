<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Farming;
use Illuminate\Http\Request;

class FarmingController extends Controller
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
            'st_male'=>'nullable|integer',
            'st_female'=>'nullable|integer',
            'sc_male'=>'nullable|integer',
            'sc_female'=>'nullable|integer',
            'which_landholder'=>'nullable|integer',
            'which_agriculture'=>'nullable|integer',
            'type_produce_agriorhorti'=>'nullable|string',
            'production_quantity'=>'nullable|integer',
            'farming_activities_amount'=>'nullable|integer',
            'produce_quantity'=>'nullable|integer',
            'produce_amount'=>'nullable|integer',
        ]);
        Farming::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'FARMING']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.farming')->with('Datas',$data);
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
