<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketingController extends Controller
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
            'Society_Id'=> 'required|string|unique:markets',
            'agriculture_input_type'=>'nullable|string',
            'agriculture_input_quantity'=>'nullable|integer',
            'agriculture_input_value'=>'nullable|integer',
        ]);
        $validatedData['product_produce']=json_encode($request->input('product_produce'));
        $validatedData['product_quantity']=json_encode($request->input('product_quantity'));
        $validatedData['product_value']=json_encode($request->input('product_value'));
        Market::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'market']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Market::where('Society_Id', $id )->first();
        return view('pages.market')->with(['Datas'=>$data,'activities'=>$activity]);
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
        $id_of_society=$request->input('Society_Id');
        $validatedData=$request->validate([
            'Society_Id'=> 'required|string',
            'agriculture_input_type'=>'required|string',
            'agriculture_input_quantity'=>'nullable|integer',
            'agriculture_input_value'=>'nullable|integer',
        ]);
        $validatedData['product_produce']=json_encode($request->input('product_produce'));
        $validatedData['product_quantity']=json_encode($request->input('product_quantity'));
        $validatedData['product_value']=json_encode($request->input('product_value'));
        $finddata= Market::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Market::where('Society_Id', $id )->first();
        return view('pages.market')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
