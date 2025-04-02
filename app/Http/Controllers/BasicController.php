<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\capital;
use App\Models\Basic;
use App\Models\membersociety;

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
        // $users = DB::table('_societydata')->get();
        $users=Basic::all();
        // dd($users);
        return view('pages.letview', ['Societies' => $users]);
    }
    public function View_1()
    {
        // $users = DB::table('_societydata')->get();
        $users=Basic::all();
        // dd($users);
        return view('pages.view_1', ['Societies' => $users]);
    }

    public function Details_view(string $id)
    {
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
                    'Admission_fee'=> 'required|integer',
                    'Share_face_value'=> 'required|integer',
                    'Authorize_share_capital'=> 'required|integer',
                    'Individual_share'=> 'required|integer',
                    'Govt_share'=> 'required|integer',
                    'Other_coop_share'=> 'nullable|integer',
                    'Primary_Activity'=> 'required|string',
                    'Secondary_Activity'=> 'nullable|string',
                    'Tertiary_Activity'=> 'nullable|string',
                    'Other_Activity'=> 'nullable|string',
                    'Society_Fair_Price_Shop'=> 'nullable|string',
                    'Latest_Audit_complete'=> 'nullable|string',
                    'Audit_Class'=> 'nullable|string',
                    'Working_Capitals'=> 'nullable|integer',
                    'Business_turnover'=> 'nullable|integer',
                    'Total_reserve'=> 'nullable|integer',
                    'Profit_loss'=> 'nullable|integer',
                    'Net_Profit_Loss'=> 'nullable|integer',
                    'Profit'=> 'required|integer',
                    'Loss'=> 'required|integer',
                    'Declear_Dividen'=> 'required|string',
                    'Yes_Dividen_Amount_topaid'=> 'nullable|integer',
                    'Yes_Dividen_Amount_topaid_Govt'=> 'nullable|integer',
                    'Yes_Dividen_Challan_date'=> 'nullable|string',
                    'CDF_Paid'=> 'required|string',
                    'CDf_Yes_paidamount'=> 'nullable|integer',
                    'CDf_Yes_paidDate'=> 'nullable|string',
                    'Grant_Type'=> 'nullable|string',
                    'Grant_Year'=> 'nullable|string',
                    'Deptt_Name'=> 'nullable|string',
                    'Grant_Sanctioned'=> 'nullable|integer',
                    'Grant_Release'=> 'nullable|integer',
                    'Date_release'=> 'nullable|string',
                    'Aid_Type'=> 'nullable|string',
                    'Aid_Year'=> 'nullable|string',
                    'Agencies_Name'=> 'nullable|string',
                    'Aid_Sanctioned'=> 'nullable|integer',
                    'Aid_Grant_Release'=> 'nullable|integer',
                    'Grant_Subsidies'=> 'nullable|integer',
                    'Loan_Sanctioned'=> 'nullable|integer',
                    'Loan_Refunded'=> 'nullable|integer',
                    'Loan_Outstanding'=> 'nullable|integer',
                    'MANAGERIAL_SUBSIDY_RECEIVED_Year'=> 'nullable|string',
                    'MANAGERIAL_SUBSIDY_RECEIVED_Amount'=> 'nullable|integer',
   
                ]);
                $Name_of_the_Society=$request->input('Society_Id');
                $id_of_society=$request->input('id_of_society252');
                //dd($validatedData);
                capital::create($validatedData);
                


                
            //return redirect()->route('pages.management1');
           return redirect()->action([BasicController::class, 'Viewsociety'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
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
            return redirect()->action([BasicController::class, 'Viewsociety'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
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
            // $data=Basic::find($id)->membersociety()
            // ->where('Society_Id',$id);
        //$data=membersociety::where('Society_Id', $id)->get();
        //$comments =$data->membersociety;
        $data=Basic::find($id);
        // dd($data);
        return view('pages.society')->with('Datas',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Basic::find($id);
        return view('pages.editsociety')->with('Datas',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            
        $validatedData=$request->validate([
           
            'Admission_fee'=> 'required|integer',
            'Share_face_value'=> 'required|integer',
            'Authorize_share_capital'=> 'required|integer',
            'Individual_share'=> 'required|integer',
            'Govt_share'=> 'required|integer',
            'Other_coop_share'=> 'nullable|integer',
            'Primary_Activity'=> 'required|string',
            'Secondary_Activity'=> 'nullable|string',
            'Tertiary_Activity'=> 'nullable|string',
            'Other_Activity'=> 'nullable|string',
            'Society_Fair_Price_Shop'=> 'nullable|string',
            'Latest_Audit_complete'=> 'nullable|string',
            'Audit_Class'=> 'nullable|string',
            'Working_Capitals'=> 'nullable|integer',
            'Business_turnover'=> 'nullable|integer',
            'Total_reserve'=> 'nullable|integer',
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
            'Grant_Type'=> 'nullable|string',
            'Grant_Year'=> 'nullable|date',
            'Deptt_Name'=> 'nullable|string',
            'Grant_Sanctioned'=> 'nullable|integer',
            'Grant_Release'=> 'nullable|integer',
            'Date_release'=> 'nullable|string',
            'Aid_Type'=> 'nullable|string',
            'Aid_Year'=> 'nullable|string',
            'Agencies_Name'=> 'nullable|string',
            'Aid_Sanctioned'=> 'nullable|integer',
            'Aid_Grant_Release'=> 'nullable|integer',
            'Grant_Subsidies'=> 'nullable|integer',
            'Loan_Sanctioned'=> 'nullable|integer',
            'Loan_Refunded'=> 'nullable|integer',
            'Loan_Outstanding'=> 'nullable|integer',
            'MANAGERIAL_SUBSIDY_RECEIVED_Year'=> 'nullable|string',
            'MANAGERIAL_SUBSIDY_RECEIVED_Amount'=> 'nullable|integer',

        ]);

  

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
                'ST_PG'=>'required|integer',
                'ST_CoopSociety'=>'required|integer',
                'ST_SHG'=> 'required|integer',
                'SC_Male'=>'required|integer',
                'SC_Female' => 'required|integer',
                'SC_CoopSociety'=>'required|integer',
                'SC_PG'=>'required|integer',
                'SC_SHG'=>'required|integer',
                'Gen_Male'=>'required|integer',
                'Gen_Female'=>'required|integer',
                'Gen_CoopSociety'=>'required|integer',
                'Gen_PG'=>'required|integer',
                'Gen_SHG'=>'required|integer',
                'Managing_Male'=>'required|integer',
                'Managing_Female'=> 'required|integer',
                'Date_of_LastAGM'=>'required|date',
                'Employee_Male'=>'required|integer',
                'Employee_Female'=>'required|integer',
                'Trained_Male'=> 'required|integer',
                'Trained_Female'=> 'required|integer',
                'Programme_Type'=>'nullable|string',
                'Training_Program'=>'nullable|string',
                'Number_of_Trainee'=>'required|integer',
                'Managemnt_Salary'=> 'required|integer',
                'Management_Expense'=> 'required|integer',
                'Other_Expense'=> 'required|integer',

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
