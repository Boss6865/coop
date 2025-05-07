<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Labour;
use Illuminate\Http\Request;

class LabourcontractController extends Controller
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
            'Society_Id'=> 'required|string|unique:pacs',
            'society_operation'=>'nullable|string',
            'ST'=>'nullable|integer',
            'SC'=>'nullable|integer',
            'of_which_borrower'=>'nullable|string',
            'other_specify'=>'nullable|string',
            'no_of_worker'=>'nullable|integer',
            'Govt_body'=>'nullable|string',
            'local_body'=>'nullable|string',
            'other'=>'nullable|string',
            'income_earned'=>'nullable|string',
           
        ]);
       

         Labour::create($validatedData);
        //  return view('pages.ivcs');
        // return redirect()->action([BasicController::class,'Sector_view']);
        $data=Basic::find($id_of_society);
        $activity=Labour::where('Society_Id', $id_of_society )->first();
        return view('pages.labour')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Save!!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Labour::where('Society_Id', $id )->first();
        return view('pages.labour')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'Society_Id'=> 'required|string|unique:pacs',
            'society_operation'=>'nullable|string',
            'ST'=>'nullable|integer',
            'SC'=>'nullable|integer',
            'of_which_borrower'=>'nullable|string',
            'other_specify'=>'nullable|string',
            'no_of_worker'=>'nullable|integer',
            'Govt_body'=>'nullable|string',
            'local_body'=>'nullable|string',
            'other'=>'nullable|string',
            'income_earned'=>'nullable|string',
           
        ]);
        $finddata= Labour::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Labour::where('Society_Id', $id )->first();
        return view('pages.labour')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
