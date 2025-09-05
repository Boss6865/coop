<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Basic;
use App\Models\membersociety;
use App\Models\committee;
use App\Models\capital;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
         $Sectors=json_decode(file_get_contents('assets/Sector_Name.json') );
        
         foreach($Sectors as $sector){
                $totmember=0;
                $share=0;
                $govtshare=0;
                $workingcapital=0;
                $Business_turnover=0;
                $profit=0;
                $loss=0;
                $a=0;$b=0;$c=0;$d=0;
                $total_sector[]=Basic::where('Sector_Type', $sector->Sector_Name)->count();
                $function[]=Basic::where('Sector_Type',  $sector->Sector_Name)->where('Status', "Function")->count();
                $Nonfunction[]=Basic::where('Sector_Type',  $sector->Sector_Name)->where('Status', "Non-function")->count();

                $selectdist=Basic::where('Sector_Type',  $sector->Sector_Name)->get();
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
                    if($capital->Audit_Class=="A"){
                        $a++;
                    }elseif($capital->Audit_Class=="B"){
                        $b++;
                    }elseif($capital->Audit_Class=="C"){
                        $c++;
                    }elseif($capital->Audit_Class=="D"){
                        $d++;
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
            $final_a[]=$a; $final_b[]=$b; $final_c[]=$c; $final_d[]=$d;
            }
           
            // dd($finaltot);
            return view('pages.home', ['total_sector' => $total_sector, "Fun"=>$function, "Nfun" =>  $Nonfunction, 
    "Member" => $finaltot, "Share"=>$finalshare,"Govt_Share"=>$totgovtshare,"Wcapital"=>$totalworkingcapital, "Bturnover"=>$totBusiness_turnover, "Profit"=> $totprofit, "Loss"=>$totloss,"A"=>$final_a,"B"=> $final_b, "C"=> $final_c, "D"=> $final_d]);
    
        // return view('pages.home');
    }


    public function basic_info()
    {
        return view('pages.basic_info');
    }
    
    public function management_1()
    {
        //return $Sooos;
        return view('pages.management1');
    }
    public function management_2()
    {
        return view('pages.management2');
    }
    public function capital()
    {
        return view('pages.capital');
    }
    public function capital_show(string $id)
    {
         $data=Basic::find($id);
        // dd($data);
        return view('pages.capital')->with(['Datas'=>$data]);
    }

    public function management_2_edit(string $id)
    {
         $data=Basic::find($id);
        // dd($data);
        return view('pages.management2')->with(['Datas'=>$data]);
    }
     public function management_1_edit(string $id)
    {
         $data=Basic::find($id);
        // dd($data);
        return view('pages.management1')->with(['Datas'=>$data]);
    }
    public function store(Request $request): RedirectResponse
    {
            $Name_of_the_Society=$request->input('Name_of_the_Society');
            $Registration_No=$request->input('Registration_No');
            $Date_of_registration=$request->input('Date_of_registration');
            $Sector_Type=$request->input('Sector_Type');
            $Email=$request->input('Email');
            $Pan_of_Society=$request->input('Pan_of_Society');
            $Location_Area=$request->input('Location_Area');
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
            
            
            $society=Basic::create([
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
            
            //return redirect()->route('pages.management1');
           return redirect()->action([HomeController::class, 'management_1'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$society->id]);
            //return "success";
            
    }

    public function store_Member(Request $request): RedirectResponse
    {
            $Name_of_the_Society=$request->input('Name_of_society2525');
            $id_of_society=$request->input('id_of_society2525');
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
            if( $Name_of_the_Society==""|| $id_of_society==""){

            }else{
                
            }
           return redirect()->action([HomeController::class, 'management_2'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            //return "success";
            
    }
    public function Society_Member(Request $request): RedirectResponse
    {
            
            $Name_of_the_Society=$request->input('Name_of_society2525');
            $id_of_society=$request->input('id_of_society2525');
            $President_Name=$request->input('President_Name');
            $President_DOB=$request->input('President_DOB');
            $President_Contact=$request->input('President_Contact');
            $President_Email=$request->input('President_Email');
            $Secretary_Name=$request->input('Secretary_Name');
            $Secretary_DOB=$request->input('Secretary_DOB');
            $Secretary_Contact=$request->input('Secretary_Contact');
            $Secretary_Email=$request->input('Secretary_Email');
            $Member_Name = json_encode($request->input('Member_Name'));
            $Member_Contact = json_encode($request->input('Member_Contact'));
            

            committee::create([
                'Society_Id'=> $id_of_society,
                'President_Name'=> $President_Name,
                'President_DOB' => $President_DOB,
                'President_Contact'=>$President_Contact,
                'President_Email'=>$President_Email,
                'Secretary_Name'=> $Secretary_Name,
                'Secretary_DOB'=>$Secretary_DOB,
                'Secretary_Contact' => $Secretary_Contact,
                'Secretary_Email'=>$Secretary_Email,
                'Member_Name' => $Member_Name,
                'Member_Contact'=>$Member_Contact
               

            ]);
            //return redirect()->route('pages.management1');
           return redirect()->action([HomeController::class, 'capital'])->with(['Sooos' => $Name_of_the_Society,'id_key'=>$id_of_society]);
            //return "success";
    
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        
        $validatedData=$request->validate([
            'Name_of_the_Society'=> 'required|string',
            'Registration_No' => 'required|string',
            'Date_of_registration'=>'required|string',
            'Sector_Type'=>'required|string',
            'Email'=> 'required|string',
            'Pan_of_Society'=>'required|string',
            'Location_Area' => 'required|string',
            'District'=>'required|string',
            'Block'=>'required|string',
            'Board'=>'required|string',
            'Circle'=>'required|string',
            'Village'=>'required|string',
            'Post_office'=>'required|string',
            'Police_Station'=>'required|string',
            'Pincode'=>'required|string',
            'Operation_District'=>'required|string',
            'Operation_villages'=> 'required|string',
            'Affiliation'=>'nullable|string',
            'Status'=>'required|string',
            'Years_of_Non_function'=>'nullable|string',
            'Section_Conducted'=> 'nullable|string',
            'Section_Cancellation'=> 'nullable|string',

        ]);
        $finddata= Basic::find($id);
        
        $finddata->update($validatedData);
        

        $data=Basic::find($id);
        return view('pages.society')->with('Datas',$data);
    }
    public function updatemanagement_2(Request $request, string $id)
    {
    
            $President_Name=$request->input('President_Name');
            $President_DOB=$request->input('President_DOB');
            $President_Contact=$request->input('President_Contact');
            $President_Email=$request->input('President_Email');
            $Secretary_Name=$request->input('Secretary_Name');
            $Secretary_DOB=$request->input('Secretary_DOB');
            $Secretary_Contact=$request->input('Secretary_Contact');
            $Secretary_Email=$request->input('Secretary_Email');
            $Member_Name = json_encode($request->input('Member_Name'));
            $Member_Contact = json_encode($request->input('Member_Contact'));
            
            $finddata= committee::where('Society_Id', $id);
            $finddata->update([
                'President_Name'=> $President_Name,
                'President_DOB' => $President_DOB,
                'President_Contact'=>$President_Contact,
                'President_Email'=>$President_Email,
                'Secretary_Name'=> $Secretary_Name,
                'Secretary_DOB'=>$Secretary_DOB,
                'Secretary_Contact' => $Secretary_Contact,
                'Secretary_Email'=>$Secretary_Email,
                'Member_Name' => $Member_Name,
                'Member_Contact'=>$Member_Contact
               

            ]);
        $data=Basic::find($id);
        return view('pages.society')->with('Datas',$data);
    }
   
}
