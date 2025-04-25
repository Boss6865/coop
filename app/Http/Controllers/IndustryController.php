<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
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
            'Society_Id'=> 'required|string|unique:industries',
            'course_offered'=>'nullable|string',
            'nos_of_trainee'=>'nullable|integer',
            'course_fee'=>'nullable|integer',
            'teaching_staff'=>'nullable|integer',
            'non_teaching_staff'=>'nullable|integer',
            'salary'=>'nullable|integer',
        ]);
        $validatedData['type_of_Business']=json_encode($request->input('type_of_Business'));
        $validatedData['name_of_item_produced']=json_encode($request->input('name_of_item_produced'));
        $validatedData['person_employed']=json_encode($request->input('person_employed'));
        $validatedData['wages_paid']=json_encode($request->input('wages_paid'));
        $validatedData['sales_turnover']=json_encode($request->input('sales_turnover'));
       

        Industry::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'industry']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        $activity=Industry::where('Society_Id', $id )->first();
        return view('pages.industrial')->with(['Datas'=>$data,'activities'=>$activity]);
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
            'course_offered'=>'nullable|string',
            'nos_of_trainee'=>'nullable|integer',
            'course_fee'=>'nullable|integer',
            'teaching_staff'=>'nullable|integer',
            'non_teaching_staff'=>'nullable|integer',
            'salary'=>'nullable|integer',
        ]);
        $validatedData['type_of_Business']=json_encode($request->input('type_of_Business'));
        $validatedData['name_of_item_produced']=json_encode($request->input('name_of_item_produced'));
        $validatedData['person_employed']=json_encode($request->input('person_employed'));
        $validatedData['wages_paid']=json_encode($request->input('wages_paid'));
        $validatedData['sales_turnover']=json_encode($request->input('sales_turnover'));
        $finddata= Industry::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
        $activity=Industry::where('Society_Id', $id )->first();
        return view('pages.industrial')->with(['Datas'=>$data,'activities'=>$activity,'msg'=>"Sucessfully Update!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
