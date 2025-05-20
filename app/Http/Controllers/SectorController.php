<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\capital;
use App\Models\Consumer;
use App\Models\Dairy;
use App\Models\Farming;
use App\Models\Fishery;
use App\Models\Handicraft;
use App\Models\Handloom;
use App\Models\Housing;
use App\Models\Industry;
use App\Models\Ivcs;
use App\Models\Labour;
use App\Models\Livestock;
use App\Models\Mariangjingkienjri;
use App\Models\Market;
use App\Models\membersociety;
use App\Models\Other;
use App\Models\Pacs;
use App\Models\Processing;
use App\Models\Thrifncredit;
use App\Models\Tourism;
use App\Models\Transport;
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
    public function sector_with_details(string $id)
    {
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $Sectors=json_decode(file_get_contents('assets/Sector_Name.json'));
        $sector_name= array_column($Sectors, 'Sector_Name');
       
           foreach($Districts as $district){
            $total_sectorfinal=0;
            $plus_function=0;
            $plus_non_function=0;
            $totmember=0;
            $share=0;
            $govtshare=0;
            $workingcapital=0;
            $Business_turnover=0;
            $profit=0;
            $loss=0;
            $a=0;$b=0;$c=0;$d=0;
                
            $total_sector=Basic::where('District', $district->Dist_Name )->where('Sector_Type',  $sector_name[$id])->count();
            $function=Basic::where('District', $district->Dist_Name )->where('Sector_Type',  $sector_name[$id])->where('Status', "Function")->count();
            $Nonfunction=Basic::where('District', $district->Dist_Name )->where('Sector_Type',  $sector_name[$id])->where('Status', "Non-function")->count();

            $total_sectorfinal=$total_sector+$total_sectorfinal;
            $plus_function=$function+ $plus_function;
            $plus_non_function=$Nonfunction+ $plus_non_function;
               
            $total_district_sector[]= $total_sectorfinal;
            $total_function[]=$plus_function;
            $total_non_function[]=$plus_non_function;

            $selectdist=Basic::where('District', $district->Dist_Name)->where('Sector_Type',  $sector_name[$id])->get();
               
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
    //    dd($total_function);
    return view('pages.sector_details_view', ['total_sector' => $total_district_sector,'sector' => $sector_name[$id], "Fun"=>$total_function, "Nfun" =>  $total_non_function, 
    "Member" => $finaltot, "Share"=>$finalshare,"Govt_Share"=>$totgovtshare,"Wcapital"=>$totalworkingcapital, "Bturnover"=>$totBusiness_turnover, "Profit"=> $totprofit, "Loss"=>$totloss,"A"=>$final_a,"B"=> $final_b, "C"=> $final_c, "D"=> $final_d]);
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

     public function View_sector_activity(string $id)
    {
        $Basic_info=Basic::find($id);
        $activities=capital::where('Society_Id', $id)->first();
        if($activities->Primary_Activity=="fishery"){
            $activities1=Fishery::where('Society_Id', $id)->first();
        } elseif($activities->Primary_Activity=="tourism"){
             $activities1=Tourism::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="processing"){
            $activities1=Processing::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="transport"){
            $activities1=Transport::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="handicraft"){
            $activities1=Handicraft::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="other"){
            $activities1=Other::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="dairy"){
            $activities1=Dairy::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="market"){
            $activities1=Market::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="handloom"){
            $activities1=Handloom::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="industry"){
            $activities1=Industry::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="labour"){
            $activities1=Labour::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="tandc"){
            $activities1=Thrifncredit::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="farming"){
            $activities1=Farming::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="consumer"){
            $activities1=Consumer::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="livestock"){
            $activities1=Livestock::where('Society_Id', $id)->first();
        }elseif($activities->Primary_Activity=="jingkiengjri"){
            $activities1=Mariangjingkienjri::where('Society_Id', $id)->first();
        }else{
            $activities1="";
        }

        if($activities->Secondary_Activity=="fishery"){
            $activities2=Fishery::where('Society_Id', $id)->first();
        } elseif($activities->Secondary_Activity=="tourism"){
             $activities2=Tourism::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="processing"){
            $activities2=Processing::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="transport"){
            $activities2=Transport::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="handicraft"){
            $activities2=Handicraft::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="other"){
            $activities2=Other::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="dairy"){
            $activities2=Dairy::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="market"){
            $activities2=Market::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="handloom"){
            $activities2=Handloom::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="industry"){
            $activities2=Industry::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="labour"){
            $activities2=Labour::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="tandc"){
            $activities2=Thrifncredit::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="farming"){
            $activities2=Farming::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="consumer"){
            $activities2=Consumer::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="livestock"){
            $activities2=Livestock::where('Society_Id', $id)->first();
        }elseif($activities->Secondary_Activity=="jingkiengjri"){
            $activities2=Mariangjingkienjri::where('Society_Id', $id)->first();
        }else{
            $activities2="";
        }


        if($activities->Tertiary_Activity=="fishery"){
            $activities3=Fishery::where('Society_Id', $id)->first();
        } elseif($activities->Tertiary_Activity=="tourism"){
             $activities3=Tourism::where('Society_Id', $id)->first();
        } elseif($activities->Tertiary_Activity=="processing"){
            $activities3=Processing::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="transport"){
            $activities3=Transport::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="handicraft"){
            $activities3=Handicraft::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="other"){
            $activities3=Other::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="dairy"){
            $activities3=Dairy::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="market"){
            $activities3=Market::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="handloom"){
            $activities3=Handloom::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="industry"){
            $activities3=Industry::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="labour"){
            $activities3=Labour::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="tandc"){
            $activities3=Thrifncredit::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="farming"){
            $activities3=Farming::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="consumer"){
            $activities3=Consumer::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="livestock"){
            $activities3=Livestock::where('Society_Id', $id)->first();
        }elseif($activities->Tertiary_Activity=="jingkiengjri"){
            $activities3=Mariangjingkienjri::where('Society_Id', $id)->first();
        }else{
            $activities3="";
        }

        if($Basic_info->Sector_Type=="PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)"){
             $sector=Pacs::where('Society_Id', $id)->first();                                   
        }elseif($Basic_info->Sector_Type=="IVCS"){
            $sector=Ivcs::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="TOURISM"){
            $sector=Tourism::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="CONSUMER"){
            $sector=Consumer::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="DAIRY"){
            $sector=Dairy::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="HANDICRAFT"){
            $sector=Handicraft::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="TRANSPORT"){
            $sector=Transport::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="PROCESSING"){
            $sector=Processing::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="FISHERY"){
            $sector=Fishery::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="FARMING" || $Basic_info->Sector_Type=="HORTICULTURE"){
            $sector=Farming::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="MARKETTING"){
            $sector=Market::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="HANDLOOM WEAVERS"){
            $sector=Handloom::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="HOUSING"){
            $sector=Housing::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="LABOUR CONTRACT"){
            $sector=Labour::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="CREDIT AND THRIFT"){
            $sector=Thrifncredit::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="INDUSTRIAL"){
            $sector=Industry::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="PIGGERY POULTRY AND OTHER LIVESTOCK"){
            $sector=Livestock::where('Society_Id', $id)->first();  
        }elseif($Basic_info->Sector_Type=="MARIANG JINGKIENG JRI (LIVING ROOT BRIDGES)"){
            $sector=Mariangjingkienjri::where('Society_Id', $id)->first();  
        }else{
            $sector="";
        }
        //  dd($activities1);
        return view('pages.view_sector_activity', ['Datas' => $Basic_info, 'sector'=>$sector,'Activity'=>$activities,'Activity1'=>$activities1,'Activity2'=>$activities2,'Activity3'=>$activities3]);
    }

    public function all_sector()
    {

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
            return view('pages.all_sector', ['total_sector' => $total_sector, "Fun"=>$function, "Nfun" =>  $Nonfunction, 
    "Member" => $finaltot, "Share"=>$finalshare,"Govt_Share"=>$totgovtshare,"Wcapital"=>$totalworkingcapital, "Bturnover"=>$totBusiness_turnover, "Profit"=> $totprofit, "Loss"=>$totloss,"A"=>$final_a,"B"=> $final_b, "C"=> $final_c, "D"=> $final_d]);
    
    }
    public function all_function_societies()
    {
  
            
                $function=Basic::where('Status', "Function")->get();
            
        //   dd( $function);
            return view('pages.all_function', ['Societies' => $function]);
    
    }

    public function all_non_function_societies()
    {

                $function=Basic::where('Status', "Non-function")->get();
            
        //   dd( $function);
            return view('pages.all_function', ['Societies' => $function]);
    
    }
    public function all_profit()
    {

        $Getcapital=capital::select('Society_Id')->where('Profit_loss',"Profit")->get();
        
            
        foreach($Getcapital as $capital){
            $function[]=Basic::where('id', $capital->Society_Id)->first();
        }
        return view('pages.all_function', ['Societies' => $function]);
    
    }
    public function all_loss()
    {

        $Getcapital=capital::select('Society_Id')->where('Profit_loss',"Loss")->get();
        
            
        foreach($Getcapital as $capital){
            $function[]=Basic::where('id', $capital->Society_Id)->first();
        }
        return view('pages.all_function', ['Societies' => $function]);
    
    }
    public function all_class(string $id)
    {

        $Getcapital=capital::select('Society_Id')->where('Audit_Class',$id)->get();
        
            
        foreach($Getcapital as $capital){
            $function[]=Basic::where('id', $capital->Society_Id)->first();
        }
        return view('pages.all_function', ['Societies' => $function]);
    
    }
}
