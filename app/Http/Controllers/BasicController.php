<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\capital;
use App\Models\Basic;
use App\Models\Borrowing;
use App\Models\Investement;
use App\Models\Loan;
use App\Models\membersociety;
use Illuminate\Support\Facades\Auth;

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

    public function Viewsociety()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        // $users = DB::table('_societydata')->get();
        $users=Basic::all();
        // dd($users);
        return view('pages.letview', ['Societies' => $users]);
    }
    public function View_1()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        // $users = DB::table('_societydata')->get();
        $users=Basic::all();
        // dd($users);
        return view('pages.view_1', ['Societies' => $users]);
    }

    public function View_2()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $totmember=0;
           foreach($Districts as $district){
                $totmember=0;
                $share=0;
                $govtshare=0;
                $workingcapital=0;
                $Business_turnover=0;
                $profit=0;
                $loss=0;
               $users[]=Basic::where('District', $district->Dist_Name )->count();
               $users1[]=$district->Dist_Name;
               $function[]=Basic::where('District', $district->Dist_Name )->where('Status', "Function")->count();
               $Nonfunction[]=Basic::where('District', $district->Dist_Name )->where('Status', "Non-function")->count();
               $underliquidation[]=Basic::where('District', $district->Dist_Name )->where('Status', "Under-Liquidation")->count();

               $selectdist=Basic::where('District', $district->Dist_Name )->get();
               
               foreach($selectdist as $dis){
                $totalMember=membersociety::where('Society_Id', $dis->id )->get();
                foreach($totalMember as $tot){
                    $totmember=$tot->ST_Male + $tot->ST_Female + $totmember;
                    
                }
                $Getcapital=capital::where('Society_Id', $dis->id )->get();
                foreach($Getcapital as $capital){
                    
                    $share=$capital->Individual_share + $capital->Govt_share + $share+ $capital->Other_coop_share;
                    $govtshare=$capital->Govt_share+$govtshare;
                    $workingcapital= $workingcapital+$capital->Working_Capitals;
                    $Business_turnover=$Business_turnover+$capital->Business_turnover;
                    if($capital->Profit_loss=="Profit"){
                        $profit++;
                    }else{
                        $loss++;
                    }

                }
                
               }
            $finaltot[]=$totmember;
            $finalshare[]=$share;
            $totgovtshare[]=$govtshare;
            $totalworkingcapital[]=$workingcapital;
            $totBusiness_turnover[]=$Business_turnover;
            $totprofit[]=$profit;
            $totloss[]=$loss;


           }
       
        return view('pages.view_2', ['Data' => $users,'Data1' => $users1, "Fun"=>$function, "Nfun" => $Nonfunction, "nlqd" => $underliquidation,
         "Member" => $finaltot, "Share"=>$finalshare,"Govt_Share"=>$totgovtshare,"Wcapital"=>$totalworkingcapital, "Bturnover"=>$totBusiness_turnover, "Profit"=> $totprofit, "Loss"=>$totloss]);
    }
    public function View_3()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        // $users = DB::table('_societydata')->get();
        $selectdist=Basic::where('District', session('District_name') )->get();
        // dd($users);
        return view('pages.societylist', ['Societies' => $selectdist]);
    }

    public function Details_view(string $id)
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $data=Basic::find($id);
        // dd($data);
        return view('pages.detailsview')->with('Datas',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store1(Request $request): RedirectResponse
    {
           
        $validatedData=$request->validate([
                    'Society_Id'=> 'required|integer',
                    'Admission_fee'=> 'required|numeric|min:1|max:9999|decimal:2',
                    'Share_face_value'=> 'required|integer',
                    'Authorize_share_capital'=> 'required|integer',
                    'Individual_share'=> 'required|numeric|min:0|max:9999999999999999|decimal:2',
                    'Govt_share'=> 'required|numeric|min:0|max:9999999999999999|decimal:2',
                    'Other_coop_share'=> 'nullable|integer',
                    'Primary_Activity'=> 'required|string',
                    'Secondary_Activity'=> 'nullable|string',
                    'Tertiary_Activity'=> 'nullable|string',
                    'Other_Activity'=> 'nullable|string',
                    'Society_Fair_Price_Shop'=> 'nullable|string',
                    'Latest_Audit_complete'=> 'nullable|string',
                    'Audit_Class'=> 'nullable|string',
                    'Working_Capitals'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
                    'Business_turnover'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
                    'Total_reserve'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
                    'Profit_loss'=> 'nullable|string',
                    'Net_Profit_Loss'=> 'nullable|string',
                    'Profit'=> 'required|integer',
                    'Loss'=> 'required|integer',
                    'Declear_Dividen'=> 'required|string',
                    'Yes_Dividen_Amount_topaid'=> 'nullable|integer',
                    'Yes_Dividen_Amount_topaid_Govt'=> 'nullable|integer',
                    'Yes_Dividen_Challan_date'=> 'nullable|string',
                    'CDF_Paid'=> 'required|string',
                    'CDf_Yes_paidamount'=> 'nullable|integer',
                    'CDf_Yes_paidDate'=> 'nullable|string',
                    
                    'Grant_Type'=> 'nullable|bail',
                    'Grant_Year'=> 'nullable|bail',
                    'Deptt_Name'=> 'nullable|bail',
                    'Grant_Sanctioned'=> 'nullable|bail',
                    'Grant_Release'=> 'nullable|bail',
                    'Date_release'=> 'nullable|bail',
                    'Aid_Type'=> 'nullable|bail',
                    'Aid_Year'=> 'nullable|bail',
                    'Agencies_Name'=> 'nullable|bail',
                    'Aid_Sanctioned'=> 'nullable|bail',
                    'Aid_Grant_Release'=> 'nullable|bail',
                    'Grant_Subsidies'=> 'nullable|bail',

                    'Loan_Sanctioned'=> 'nullable|integer',
                    'Loan_Refunded'=> 'nullable|integer',
                    'Loan_Outstanding'=> 'nullable|integer',
                    'MANAGERIAL_SUBSIDY_RECEIVED_Year'=> 'nullable|string',
                    'MANAGERIAL_SUBSIDY_RECEIVED_Amount'=> 'nullable|integer',
   
                ]);
// $validatedData['Grant_Type']=json_encode($request->input('Grant_Type'));
        // $validatedData['Grant_Year']=json_encode($request->input('Grant_Year'));
        // $validatedData['Deptt_Name']=json_encode($request->input('Deptt_Name'));
        // $validatedData['Grant_Sanctioned']=json_encode($request->input('Grant_Sanctioned'));
        // $validatedData['Grant_Release']=json_encode($request->input('Grant_Release'));
        // $validatedData['Date_release']=json_encode($request->input('Date_release'));

        // $validatedData['Aid_Type']=json_encode($request->input('Aid_Type'));
        // $validatedData['Aid_Year']=json_encode($request->input('Aid_Year'));
        // $validatedData['Agencies_Name']=json_encode($request->input('Agencies_Name'));
        // $validatedData['Aid_Sanctioned']=json_encode($request->input('Aid_Sanctioned'));
        // $validatedData['Aid_Grant_Release']=json_encode($request->input('Aid_Grant_Release'));
        // $validatedData['Grant_Subsidies']=json_encode($request->input('Grant_Subsidies'));

                $Name_of_the_Society=$request->input('Society_Id');
                $id_of_society=$request->input('id_of_society252');
                //dd($validatedData);
                capital::create($validatedData);
                


                
            //return redirect()->route('pages.management1');
        //    return redirect()->action([BasicController::class, 'Viewsociety'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
        return redirect()->action([Investment::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            //return "success";
            
    }
    public function store(Request $request): RedirectResponse
    {
        $id_of_society=$request->input('id_of_society252');
            $Name_of_the_Society=$request->input('Society_Id');
            $Admission_fee=$request->input('Admission_fee');
            $Share_face_value=$request->input('Share_face_value');
            $Authorize_share_capital=$request->input('Authorize_share_capital');
            $Individual_share=$request->input('Individual_share');
            $Govt_share=$request->input('Govt_share');
            $Other_coop_share=$request->input('Other_coop_share');
            $Primary_Activity=$request->input('Primary_Activity');
            $Secondary_Activity=$request->input('Secondary_Activity');
            $Tertiary_Activity=$request->input('BoTertiary_Activityard');
            $Other_Activity=$request->input('Other_Activity');
            $Society_Fair_Price_Shop=$request->input('Society_Fair_Price_Shop');
            $Latest_Audit_complete=$request->input('Latest_Audit_complete');
            $Audit_Class=$request->input('Audit_Class');
            $Working_Capitals=$request->input('Working_Capitals');
            $Business_turnover=$request->input('Business_turnover');
            $Total_reserve=$request->input('Total_reserve');
            $Profit_loss=$request->input('Profit_loss');
            $Net_Profit_Loss=$request->input('Net_Profit_Loss');
            $Profit=$request->input('Profit');
            $Loss=$request->input('Loss');
            $Declear_Dividen=$request->input('Declear_Dividen');
            $Yes_Dividen_Amount_topaid=$request->input('Yes_Dividen_Amount_topaid');
            $Yes_Dividen_Amount_topaid_Govt=$request->input('Yes_Dividen_Amount_topaid_Govt');
            $Yes_Dividen_Challan_date=$request->input('Yes_Dividen_Challan_date');
            $CDF_Paid=$request->input('CDF_Paid');
            $CDf_Yes_paidamount=$request->input('CDf_Yes_paidamount');
            $CDf_Yes_paidDate=$request->input('CDf_Yes_paidDate');
            $Grant_Type=$request->input('Grant_Type');
            $Grant_Year=$request->input('Grant_Year');
             $Deptt_Name=$request->input('Deptt_Name');
            $Grant_Sanctioned=$request->input('Grant_Sanctioned');
            $Grant_Release=$request->input('Grant_Release');
            $Date_release=$request->input('Date_release');
            $Aid_Type=$request->input('Aid_Type');
            $Aid_Year=$request->input('Aid_Year');
            $Agencies_Name=$request->input('Agencies_Name');
            $Aid_Sanctioned=$request->input('Aid_Sanctioned');
            $Aid_Grant_Release=$request->input('Aid_Grant_Release');
            $Grant_Subsidies=$request->input('Grant_Subsidies');
            $Loan_Sanctioned=$request->input('Loan_Sanctioned');
            $Loan_Refunded=$request->input('Loan_Refunded');
            $Loan_Outstanding=$request->input('Loan_Outstanding');
            $MANAGERIAL_SUBSIDY_RECEIVED_Year=$request->input('MANAGERIAL_SUBSIDY_RECEIVED_Year');
            $MANAGERIAL_SUBSIDY_RECEIVED_Amount=$request->input('MANAGERIAL_SUBSIDY_RECEIVED_Amount');
          
            $society=capital::create([
        'Society_Id'=> $id_of_society,
        'Admission_fee'=>$Admission_fee,
        'Share_face_value'=>$Share_face_value,
        'Authorize_share_capital'=>$Authorize_share_capital,
        'Individual_share'=>$Individual_share,
        'Govt_share'=>$Govt_share,
        'Other_coop_share'=>$Other_coop_share,
        'Primary_Activity'=>$Primary_Activity,
        'Secondary_Activity'=>$Secondary_Activity,
        'Tertiary_Activity'=>$Tertiary_Activity,
        'Other_Activity'=>$Other_Activity,
        'Society_Fair_Price_Shop'=>$Society_Fair_Price_Shop,
        'Latest_Audit_complete'=>$Latest_Audit_complete,
        'Audit_Class'=>$Audit_Class,
        'Working_Capitals'=>$Working_Capitals,
        'Business_turnover'=>$Business_turnover,
        'Total_reserve'=>$Total_reserve,
        'Profit_loss'=>$Profit_loss,
        'Net_Profit_Loss'=>$Net_Profit_Loss,
        'Profit'=>$Profit,
        'Loss'=>$Loss,
        'Declear_Dividen'=>$Declear_Dividen,
        'Yes_Dividen_Amount_topaid'=>$Yes_Dividen_Amount_topaid,
        'Yes_Dividen_Amount_topaid_Govt'=>$Yes_Dividen_Amount_topaid_Govt,
        'Yes_Dividen_Challan_date'=>$Yes_Dividen_Challan_date,
        'CDF_Paid'=>$CDF_Paid,
        'CDf_Yes_paidamount'=>$CDf_Yes_paidamount,
        'CDf_Yes_paidDate'=>$CDf_Yes_paidDate,
        'Grant_Type'=>$Grant_Type,
        'Grant_Year'=>$Grant_Year,
        'Deptt_Name'=>$Deptt_Name,
        'Grant_Sanctioned'=>$Grant_Sanctioned,
        'Grant_Release'=>$Grant_Release,
        'Date_release'=>$Date_release,
        'Aid_Type'=>$Aid_Type,
        'Aid_Year'=>$Aid_Year,
        'Agencies_Name'=>$Agencies_Name,
        'Aid_Sanctioned'=>$Aid_Sanctioned,
        'Aid_Grant_Release'=>$Aid_Grant_Release,
        'Grant_Subsidies'=> $Grant_Subsidies,
        'Loan_Sanctioned'=>$Loan_Sanctioned,
        'Loan_Refunded'=> $Loan_Refunded,
        'Loan_Outstanding'=>$Loan_Outstanding,
        'MANAGERIAL_SUBSIDY_RECEIVED_Year'=>$MANAGERIAL_SUBSIDY_RECEIVED_Year,
        'MANAGERIAL_SUBSIDY_RECEIVED_Amount'=>$MANAGERIAL_SUBSIDY_RECEIVED_Amount,

            ]);
            
            //return redirect()->route('pages.management1');
            // return redirect()->action([BasicController::class, 'Viewsociety'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            return redirect()->action([Investment::class, 'index'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            //return "success";
            
    }

    public function store_Member(Request $request): RedirectResponse
    {
            $Name_of_the_Society=$request->input('Name_of_society2525');
            $id_of_society=$request->input('id_of_society');
            $ST_Male=$request->input('ST_Male');
            $ST_Female=$request->input('ST_Female');
            $ST_PG=$request->input('ST_PG');
            $ST_CoopSociety=$request->input('ST_CoopSociety');
            $ST_SHG=$request->input('ST_SHG');
            $SC_Male=$request->input('SC_Male');
            $SC_Female=$request->input('SC_Female');
            $SC_CoopSociety=$request->input('SC_CoopSociety');
            $SC_PG=$request->input('SC_PG');
            $SC_SHG=$request->input('SC_SHG');
            $Gen_Male=$request->input('Gen_Male');
            $Gen_Female=$request->input('Gen_Female');
            $Gen_CoopSociety=$request->input('Gen_CoopSociety');
            $Gen_PG=$request->input('Gen_PG');
            $Gen_SHG=$request->input('Gen_SHG');
            $Managing_Male=$request->input('Managing_Male');
            $Managing_Female=$request->input('Managing_Female');
            $Date_of_LastAGM=$request->input('Date_of_LastAGM');
            $Employee_Male=$request->input('Employee_Male');
            $Employee_Female=$request->input('Employee_Female');
            $Trained_Male=$request->input('Trained_Male');
            $Trained_Female=$request->input('Trained_Female');
            $Programme_Type=$request->input('Programme_Type');
            $Training_Program=$request->input('Training_Program');
            $Number_of_Trainee=$request->input('Number_of_Trainee');
            $Managemnt_Salary=$request->input('Managemnt_Salary');
            $Management_Expense=$request->input('Management_Expense');
            $Other_Expense=$request->input('Other_Expense');
            
            membersociety::create([
                'Society_Id'=> $id_of_society,
                'ST_Male'=> $ST_Male,
                'ST_Female' => $ST_Female,
                'ST_PG'=>$ST_PG,
                'ST_CoopSociety'=>$ST_CoopSociety,
                'ST_SHG'=> $ST_SHG,
                'SC_Male'=>$SC_Male,
                'SC_Female' => $SC_Female,
                'SC_CoopSociety'=>$SC_CoopSociety,
                'SC_PG'=>$SC_PG,
                'SC_SHG'=>$SC_SHG,
                'Gen_Male'=>$Gen_Male,
                'Gen_Female'=>$Gen_Female,
                'Gen_CoopSociety'=>$Gen_CoopSociety,
                'Gen_PG'=>$Gen_PG,
                'Gen_SHG'=>$Gen_SHG,
                'Managing_Male'=>$Managing_Male,
                'Managing_Female'=> $Managing_Female,
                'Date_of_LastAGM'=>$Date_of_LastAGM,
                'Employee_Male'=>$Employee_Male,
                'Employee_Female'=>$Employee_Female,
                'Trained_Male'=> $Trained_Male,
                'Trained_Female'=> $Trained_Female,
                'Programme_Type'=>$Programme_Type,
                'Training_Program'=>$Training_Program,
                'Number_of_Trainee'=>$Number_of_Trainee,
                'Managemnt_Salary'=> $Managemnt_Salary,
                'Management_Expense'=> $Management_Expense,
                'Other_Expense'=> $Other_Expense,

            ]);
            
            //return redirect()->route('pages.management1');
           return redirect()->action([HomeController::class, 'management_2'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            //return "success";
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
            // $data=Basic::find($id)->membersociety()
            // ->where('Society_Id',$id);
        //$data=membersociety::where('Society_Id', $id)->get();
        //$comments =$data->membersociety;
        $data=Basic::find($id);
        $investment=Investement::where('Society_Id', $id)->first();
        $borrowing_datas=Borrowing::where('Society_Id', $id)->first();
        $asset_datas=Asset::where('Society_Id', $id)->first();
         $loan_datas=Loan::where('Society_Id', $id)->first();
        return view('pages.society')->with(['Datas'=>$data, 'investment'=>$investment, 'borrowing_datas'=>$borrowing_datas,'asset_datas'=>$asset_datas,'loan_datas'=>$loan_datas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $id1)
    {
        $data=Basic::find($id);
        $investment=Investement::where('Society_Id', $id)->first();
        $borrowing_datas=Borrowing::where('Society_Id', $id)->first();
        $asset_datas=Asset::where('Society_Id', $id)->first();
        $loan_datas=Loan::where('Society_Id', $id)->first();
        return view('pages.editsociety')->with(['Datas'=>$data,'val'=>$id1,'investment_data'=> $investment,'borrowing_datas'=>$borrowing_datas, 'asset_datas'=>$asset_datas, 'loan_datas'=>$loan_datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            
        $validatedData=$request->validate([
           
            'Admission_fee'=> 'required|numeric|min:0|max:9999|decimal:2',
            'Share_face_value'=> 'required|integer',
            'Authorize_share_capital'=> 'required|integer',
            'Individual_share'=> 'required|numeric|min:0|max:9999999999999999|decimal:2',
            'Govt_share'=> 'required|numeric|min:0|max:9999999999999999|decimal:2',
            'Other_coop_share'=> 'nullable|integer',
            'Primary_Activity'=> 'required|string',
            'Secondary_Activity'=> 'nullable|string',
            'Tertiary_Activity'=> 'nullable|string',
            'Other_Activity'=> 'nullable|string',
            'Society_Fair_Price_Shop'=> 'nullable|string',
            'Latest_Audit_complete'=> 'nullable|string',
            'Audit_Class'=> 'nullable|string',
            'Working_Capitals'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
            'Business_turnover'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
            'Total_reserve'=> 'nullable|numeric|min:0|max:9999999999999999|decimal:2',
            'Profit_loss'=> 'nullable|string',
            'Net_Profit_Loss'=> 'nullable|string',
            'Profit'=> 'required|integer',
            'Loss'=> 'required|integer',
            'Declear_Dividen'=> 'required|string',
            'Yes_Dividen_Amount_topaid'=> 'nullable|integer',
            'Yes_Dividen_Amount_topaid_Govt'=> 'nullable|integer',
            'Yes_Dividen_Challan_date'=> 'nullable|string',
            'CDF_Paid'=> 'required|string',
            'CDf_Yes_paidamount'=> 'nullable|integer',
            'CDf_Yes_paidDate'=> 'nullable|string',

            'Grant_Type'=> 'nullable|bail',
            'Grant_Year'=> 'nullable|bail',
            'Deptt_Name'=> 'nullable|bail',
            'Grant_Sanctioned'=> 'nullable|bail',
            'Grant_Release'=> 'nullable|bail',
            'Date_release'=> 'nullable|bail',
            'Aid_Type'=> 'nullable|bail',
            'Aid_Year'=> 'nullable|bail',
            'Agencies_Name'=> 'nullable|bail',
            'Aid_Sanctioned'=> 'nullable|bail',
            'Aid_Grant_Release'=> 'nullable|bail',
            'Grant_Subsidies'=> 'nullable|bail',

            'Loan_Sanctioned'=> 'nullable|integer',
            'Loan_Refunded'=> 'nullable|integer',
            'Loan_Outstanding'=> 'nullable|integer',
            'MANAGERIAL_SUBSIDY_RECEIVED_Year'=> 'nullable|bail',
            'MANAGERIAL_SUBSIDY_RECEIVED_Amount'=> 'nullable|bail',

        ]);
        // $validatedData['Grant_Type']=json_encode($request->input('Grant_Type'));
        // $validatedData['Grant_Year']=json_encode($request->input('Grant_Year'));
        // $validatedData['Deptt_Name']=json_encode($request->input('Deptt_Name'));
        // $validatedData['Grant_Sanctioned']=json_encode($request->input('Grant_Sanctioned'));
        // $validatedData['Grant_Release']=json_encode($request->input('Grant_Release'));
        // $validatedData['Date_release']=json_encode($request->input('Date_release'));

        // $validatedData['Aid_Type']=json_encode($request->input('Aid_Type'));
        // $validatedData['Aid_Year']=json_encode($request->input('Aid_Year'));
        // $validatedData['Agencies_Name']=json_encode($request->input('Agencies_Name'));
        // $validatedData['Aid_Sanctioned']=json_encode($request->input('Aid_Sanctioned'));
        // $validatedData['Aid_Grant_Release']=json_encode($request->input('Aid_Grant_Release'));
        // $validatedData['Grant_Subsidies']=json_encode($request->input('Grant_Subsidies'));
  

            $finddata= capital::where('Society_Id', $id);
           
            $finddata->update($validatedData);

        $data=Basic::find($id);
        return view('pages.society')->with('Datas',$data);
    }
    public function updatemanagement_1(Request $request, string $id)
    {
        $validatedData=$request->validate([
            
                'ST_Male'=>'required|integer',
                'ST_Female' => 'required|integer',
                'ST_PG'=>'nullable|integer',
                'ST_CoopSociety'=>'nullable|integer',
                'ST_SHG'=> 'nullable|integer',
                'SC_Male'=>'nullable|integer',
                'SC_Female' => 'nullable|integer',
                'SC_CoopSociety'=>'nullable|integer',
                'SC_PG'=>'nullable|integer',
                'SC_SHG'=>'nullable|integer',
                'Gen_Male'=>'nullable|integer',
                'Gen_Female'=>'nullable|integer',
                'Gen_CoopSociety'=>'nullable|integer',
                'Gen_PG'=>'nullable|integer',
                'Gen_SHG'=>'nullable|integer',
                'Managing_Male'=>'nullable|integer',
                'Managing_Female'=> 'nullable|integer',
                'Date_of_LastAGM'=>'nullable|date',
                'Employee_Male'=>'nullable|integer',
                'Employee_Female'=>'nullable|integer',
                'Trained_Male'=> 'nullable|integer',
                'Trained_Female'=> 'nullable|integer',
                'Programme_Type'=>'nullable|string',
                'Training_Program'=>'nullable|string',
                'Number_of_Trainee'=>'nullable|integer',
                'Managemnt_Salary'=> 'nullable|integer',
                'Management_Expense'=> 'nullable|integer',
                'Other_Expense'=> 'nullable|integer',

        ]);

        $finddata= membersociety::where('Society_Id', $id);
        $finddata->update($validatedData);

        $data=Basic::find($id);
        return view('pages.society')->with('Datas',$data);
    }

   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
