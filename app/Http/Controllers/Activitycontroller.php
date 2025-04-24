<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class Activitycontroller extends Controller
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
            'Society_Id'=> 'required|string|unique:activities',
            'activity_1'=>'nullable|string',
            'activity_2'=>'nullable|string',
            'activity_3'=>'nullable|string',
            'activity_4'=>'nullable|string',
            'activity_5'=>'nullable|string',
            'activity_other'=>'nullable|string',
            
        ]);
        $validatedData['activity_1']=strtok(ltrim($request->input('activity_1'),1),"/");
        if($request->input('activity_2')!=null){
            $validatedData['activity_2']=strtok(ltrim($request->input('activity_2'),1),"/");
        }
        if($request->input('activity_3')!=null){ $validatedData['activity_3']=strtok(ltrim($request->input('activity_3'),1),"/");}
        if($request->input('activity_4')!=null){$validatedData['activity_4']=strtok(ltrim($request->input('activity_4'),1),"/");}
        if($request->input('activity_5')!=null){$validatedData['activity_5']=strtok(ltrim($request->input('activity_5'),1),"/");}
        if($request->input('activity_other')!=null){$validatedData['activity_other']=strtok(ltrim($request->input('activity_other'),1),"/");}
        Activity::create($validatedData);
        return redirect()->action([BasicController::class,'show'],[$id_of_society]);
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
