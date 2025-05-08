<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\capital;
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
    public function show(string $id, string $id2)
    {
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $Sectors=json_decode(file_get_contents('assets/Sector_Name.json'));
        
        $district_name= array_column($Districts, 'Dist_Name');
        $sector_name= array_column($Sectors, 'Sector_Name');
        $get_district_sector=Basic::where('District', $district_name[$id] )->where('Sector_Type',  $sector_name[$id2])->get();
        return view('pages.district_sectorview', ['Societies' =>  $get_district_sector, 'District'=> $district_name[$id], 'Sector'=>$sector_name[$id2]]);
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
    public function sector_with_details()
    {
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $Sectors=json_decode(file_get_contents('assets/Sector_Name.json'));
        $totalsector=0;
           foreach($Districts as $district){
            $total_sectorfinal=0;
            $plus_function=0;
            $plus_non_function=0;
                foreach($Sectors as $sector){
                    $total_sector=Basic::where('District', $district->Dist_Name )->where('Sector_Type', $sector->Sector_Name)->count();
                    $function=Basic::where('District', $district->Dist_Name )->where('Sector_Type', $sector->Sector_Name)->where('Status', "Function")->count();
                    $Nonfunction=Basic::where('District', $district->Dist_Name )->where('Sector_Type', $sector->Sector_Name)->where('Status', "Non-function")->count();

                    $total_sectorfinal=$total_sector+$total_sectorfinal;
                    $plus_function=$function+ $plus_function;
                    $plus_non_function=$Nonfunction+ $plus_non_function;
                }
                $total_district_sector[]= $total_sectorfinal;
                $total_function[]=$plus_function;
                $total_non_function[]=$plus_non_function;

           }
       dd($total_district_sector);
        return view('pages.view_2', ['Data' => $total_district_sector]);
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
