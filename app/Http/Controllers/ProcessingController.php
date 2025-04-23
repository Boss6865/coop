<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Processing;
use Illuminate\Http\Request;

class ProcessingController extends Controller
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
            'item_name'=>'nullable|string',
            'item_value'=>'nullable|integer',
            'process_machine_name'=>'nullable|string',
            'process_item_Nos'=>'nullable|integer',
            'process_item_value'=>'nullable|integer',
            'sale_of_item_name'=>'nullable|string',
            'sale_of_item_quantity'=>'nullable|integer',
            'sale_of_item_amount'=>'nullable|integer',
            'packing'=>'nullable|string',
            'packaging_type'=>'nullable|string',
        ]);
        Processing::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'processing']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.processing')->with('Datas',$data);
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
