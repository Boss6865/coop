<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
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
            'course_offered'=>'nullable|string',
            'nos_of_student'=>'nullable|integer',
            'course_fee'=>'nullable|integer',
            'no_of_teaching_staff'=>'nullable|integer',
            'no_of_non_teaching_staff'=>'nullable|integer',
            'salary_to_staff'=>'nullable|integer',
            'service_provided'=>'nullable|string',
            'employee'=>'nullable|integer',
            'wage_paid'=>'nullable|integer',
             'turn_over'=>'nullable|integer',
            
        ]);
        Other::create($validatedData);
        return redirect()->action([LoanController::class, 'show'],[$id_of_society])->with(['sector'=>'other']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Basic::find($id);
        // dd($data);
        return view('pages.other')->with('Datas',$data);
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
