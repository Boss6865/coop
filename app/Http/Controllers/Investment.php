<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use Illuminate\Http\Request;
use App\Models\Investement;

class Investment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.investment');
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
            'investment_Status'=> 'required|String',
        ]);
        
        $validatedData['type_of_govt_loan']=json_encode($request->input('type_of_govt_loan'));
        $validatedData['loan_investment_amount']=json_encode($request->input('loan_investment_amount'));
        investement::create($validatedData);
        

        return redirect()->action([BorrowingController::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $data=Basic::find($id);
        // dd($data);
        return view('pages.investment')->with(['Datas'=>$data]);
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
           
            
            'investment_Status'=> 'required|String',
        ]);
        
        $validatedData['type_of_govt_loan']=json_encode($request->input('type_of_govt_loan'));
        $validatedData['loan_investment_amount']=json_encode($request->input('loan_investment_amount'));

         $finddata=Investement::where('Society_Id', $id);
           
            $finddata->update($validatedData);
        $data=Basic::find($id);
        $investment=Investement::where('Society_Id', $id)->first();
        return view('pages.editsociety')->with(['Datas'=>$data,'val'=>"888",'investment_data'=> $investment,'msg'=>"Successfull Updated!!"]);
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
