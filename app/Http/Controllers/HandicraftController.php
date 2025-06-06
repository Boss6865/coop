<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Handicraft;
use Illuminate\Http\Request;

class HandicraftController extends Controller
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
            'Society_Id'=> 'required|string|unique:handicraft',
            'item_produce'=>'nullable|string',
            'nos_of_craftsmen'=>'nullable|integer',
            'wages_paid'=>'nullable|integer',
            'sales_turnover'=>'nullable|integer',
            'other_item_produce'=>'nullable|string',
            'other_nos_of_craftsmen'=>'nullable|integer',
            'other_wages_paid'=>'nullable|integer',
            'other_sales_turnover'=>'nullable|integer'
        ]);
        Handicraft::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'handicraft']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Handicraft::where('Society_Id', $id )->first();
        return view('pages.handicraft')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'item_produce'=>'nullable|string',
            'nos_of_craftsmen'=>'nullable|integer',
            'wages_paid'=>'nullable|integer',
            'sales_turnover'=>'nullable|integer',
            'other_item_produce'=>'nullable|string',
            'other_nos_of_craftsmen'=>'nullable|integer',
            'other_wages_paid'=>'nullable|integer',
            'other_sales_turnover'=>'nullable|integer'
        ]);
        $finddata= Handicraft::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Handicraft::where('Society_Id', $id )->first();
        return view('pages.handicraft')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
