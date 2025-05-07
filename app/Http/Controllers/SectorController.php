<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use Illuminate\Http\Request;

class SectorController extends Controller
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
        //
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
    public function Sector_view()
    {
        // $users = DB::table('_societydata')->get();
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $Sectors=json_decode(file_get_contents('assets/Sector_Name.json') );
        $totmember=0;
        foreach($Districts as $district){
            $total_sector=(array) null;
            foreach($Sectors as $sector){
                $total_sector[]=Basic::where('District', $district->Dist_Name )->where('Sector_Type', $sector->Sector_Name)->count();
            }
            $total_district_sector[]= $total_sector;
        }
        //  $users=Basic::all();
        //   dd($total_district_sector);
        return view('pages.sectorview', ['total_sectors' => $total_district_sector]);
    }
    public function Sector_activity()
    {
        // $users = DB::table('_societydata')->get();
        $users=Basic::all();
        //  dd($users);
        return view('pages.sector_activities', ['Societies' => $users]);
    }
}
