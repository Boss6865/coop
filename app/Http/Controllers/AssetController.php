<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Basic;
use App\Models\Borrowing;
use App\Models\Investement;
use App\Models\Loan;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.asset');
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
        $Name_of_the_Society=$request->input('Name_of_the_Society');
        $id_of_society=$request->input('Society_Id');
        $validatedData=$request->validate([
       
            'Society_Id'=> 'required|integer',
            'self_building'=> 'required|string',
            'rented_building'=> 'required|string',
            'rent_paid'=> 'required|integer',
            'godown'=> 'nullable|string',
            'godown_area'=> 'nullable|string',
            'godown_capacity'=> 'nullable|string',
            'godown_types'=>'nullable|string',
            'godown_type_agreement'=> 'nullable|integer',
            'godown_type_per_annum'=> 'nullable|integer',
            'storage'=> 'nullable|string',
            'storage_cold'=>'nullable|string',
            'storage_dry'=> 'nullable|string',
            'land'=> 'nullable|string',
            'Land_area'=>'nullable|string',
            'land_area_lease'=> 'nullable|string',
            'furniture'=> 'nullable|string',
            'furniture_total'=> 'nullable|integer',
            'furniture_amount'=> 'nullable|integer',
            'computers'=> 'nullable|string',
            'computers_total'=> 'nullable|integer',
            'computers_amount'=> 'nullable|integer',
        ]);
        $validatedData['item_name']=json_encode($request->input('item_name'));
        $validatedData['item_no']=json_encode($request->input('item_no'));
        $validatedData['item_amount']=json_encode($request->input('item_amount'));
        
        Asset::create($validatedData);

        return redirect()->action([LoanController::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
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
       $data=Basic::find($id);
        // dd($data);
        return view('pages.asset')->with(['Datas'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
       
            
            'self_building'=> 'required|string',
            'rented_building'=> 'required|string',
            'rent_paid'=> 'required|integer',
            'godown'=> 'nullable|string',
            'godown_area'=> 'nullable|string',
            'godown_capacity'=> 'nullable|string',
            'godown_types'=>'nullable|string',
            'godown_type_agreement'=> 'nullable|integer',
            'godown_type_per_annum'=> 'nullable|integer',
            'storage'=> 'nullable|string',
            'storage_cold'=>'nullable|string',
            'storage_dry'=> 'nullable|string',
            'land'=> 'nullable|string',
            'Land_area'=>'nullable|string',
            'land_area_lease'=> 'nullable|string',
            'furniture'=> 'nullable|string',
            'furniture_total'=> 'nullable|integer',
            'furniture_amount'=> 'nullable|integer',
            'computers'=> 'nullable|string',
            'computers_total'=> 'nullable|integer',
            'computers_amount'=> 'nullable|integer',
        ]);
        $validatedData['item_name']=json_encode($request->input('item_name'));
        $validatedData['item_no']=json_encode($request->input('item_no'));
        $validatedData['item_amount']=json_encode($request->input('item_amount'));

        $finddata=Asset::where('Society_Id', $id);
        $finddata->update($validatedData);
        $data=Basic::find($id);
         $investment=Investement::where('Society_Id', $id)->first();
        $borrowing=Borrowing::where('Society_Id', $id)->first();
        $asset_datas=Asset::where('Society_Id', $id)->first();
        $loan_datas=Loan::where('Society_Id', $id)->first();
        return view('pages.editsociety')->with(['Datas'=>$data,'val'=>"000",'borrowing_datas'=> $borrowing,'investment_data'=> $investment,'asset_datas'=>$asset_datas,'loan_datas'=>$loan_datas,'msg'=>"Successfull Updated!!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
