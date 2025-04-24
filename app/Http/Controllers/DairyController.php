<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Dairy;
use Illuminate\Http\Request;

class DairyController extends Controller
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
            'Society_Id'=> 'required|string|unique:dairy',
            'Nos_of_milch_cow'=>'nullable|integer',
            'total_value_of_Milch_cow'=>'nullable|integer',
            'no_of_cowshed'=>'nullable|integer',
            'other_item'=>'nullable|string',
            'other_no'=>'nullable|integer',
            'other_amount'=>'nullable|integer',
            'produce_in_litre'=>'nullable|integer',
            'produce_value'=>'nullable|integer',
            'usold_litre'=>'nullable|integer',
            'unsold_value'=>'nullable|integer',
            'dairy_product_item'=>'nullable|string',
            'dairy_product_value'=>'nullable|integer',
            'collection_facility'=>'nullable|string',
            'testing_facility'=>'nullable|string',
            'sale_of_feed_medicine'=>'nullable|string',
            'sale_of_feed_medicine_value'=>'nullable|integer',
        ]);
        Dairy::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'dairy']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.dairy')->with('Datas',$data);
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
