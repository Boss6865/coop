<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Basic;


class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.management1');
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
    public function store(Request $request): RedirectResponse
    {
           
        $Name_of_the_Society=$request->input('Name_of_the_Society');
        $Registration_No=$request->input('Registration_No');
        $Date_of_registration=$request->input('Date_of_registration');
        $Sector_Type=$request->input('Sector_Type');
        $Email=$request->input('Email');
        $Pan_of_Society=$request->input('Pan_of_Society');
        $Location_Area=$request->input('Location_Area');
        $Pan=$request->input('Pan');
        $District=$request->input('District');
        $Block=$request->input('Block');
        $Board=$request->input('Board');
        $Circle=$request->input('Circle');
        $Village=$request->input('Village');
        $Post_office=$request->input('Post_office');
        $Police_Station=$request->input('Police_Station');
        $Pincode=$request->input('Pincode');
        $Operation_District=$request->input('Operation_District');
        $Operation_villages=$request->input('Operation_villages');
        $Affiliation=$request->input('Affiliation');
        $Status=$request->input('Status');
        $Years_of_Non_function=$request->input('Years_of_Non_function');
        $Section_Conducted=$request->input('Section_Conducted');
        $Section_Cancellation=$request->input('Section_Cancellation');
        
        Basic::create([
            'Name_of_the_Society'=> $Name_of_the_Society,
            'Registration_No' => $Registration_No,
            'Date_of_registration'=>$Date_of_registration,
            'Sector_Type'=>$Sector_Type,
            'Email'=> $Email,
            'Pan_of_Society'=>$Pan_of_Society,
            'Location_Area' => $Location_Area,
            'District'=>$District,
            'Block'=>$Block,
            'Board'=>$Board,
            'Circle'=>$Circle,
            'Village'=>$Village,
            'Post_office'=>$Post_office,
            'Police_Station'=>$Police_Station,
            'Pincode'=>$Pincode,
            'Operation_District'=>$Operation_District,
            'Operation_villages'=> $Operation_villages,
            'Affiliation'=>$Affiliation,
            'Status'=>$Status,
            'Years_of_Non_function'=>$Years_of_Non_function,
            'Section_Conducted'=> $Section_Conducted,
            'Section_Cancellation'=> $Section_Cancellation,

        ]);
        
        return redirect()->route('pages.management1');
        //return redirect()->action([HomeController::class, 'management_1'])->with('Sooos','iw');
        //return "success";
            
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
