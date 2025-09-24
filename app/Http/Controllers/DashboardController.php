<?php

namespace App\Http\Controllers;


use App\Models\capital;
use App\Models\Basic;
use App\Models\membersociety;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function view()
    {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));
       
           foreach($Districts as $district){
             
               $users[]=Basic::where('District', $district->Dist_Name )->count();
               $users1[]=$district->Dist_Name;
               $function[]=Basic::where('District', $district->Dist_Name )->where('Status', "Function")->count();
               $Nonfunction[]=Basic::where('District', $district->Dist_Name )->where('Status', "Non-function")->count();
            
           }
       
        return view('pages.dashboardview', ['Data' => $users,'Data1' => $users1, "Fun"=>$function, "Nfun" => $Nonfunction]);
    
    }
    public function show_status(string $id, string $id2)
    {
        $staus="";
        if($id2==1){
           $staus="Non-function"; 
        }else{
            $staus="Function";
        }
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));

        
        $district_name= array_column($Districts, 'Dist_Name');

        $get_district_society=Basic::where('District', $district_name[$id] )->where('Status',$staus )->get();
        return view('pages.society_status', ['Societies' =>  $get_district_society, 'District'=> $district_name[$id], 'Status'=> $staus]);
    }

    public function view_member()
    {
        $Districts=json_decode(file_get_contents('assets/District.json'));
        $totmember=0;
           foreach($Districts as $district){
                $totmember=0;
              
               $users[]=Basic::where('District', $district->Dist_Name )->count();
               $users1[]=$district->Dist_Name;
              
               $selectdist=Basic::where('District', $district->Dist_Name )->get();
               
               foreach($selectdist as $dis){
                $totalMember=membersociety::where('Society_Id', $dis->id )->get();
                foreach($totalMember as $tot){
                    $totmember=$tot->ST_Male + $tot->ST_Female + $totmember;
                    
                }
               }
            $finaltot[]=$totmember;
           }
       
        return view('pages.view_member', ['Data' => $users,'Data1' => $users1,"Member" => $finaltot]);
   
        // return view('pages.view_member', ['Societies' => $users]);
    }
    public function show_member(string $id)
    {
         $Districts=json_decode(file_get_contents('assets/District.json'));

        
        $district_name= array_column($Districts, 'Dist_Name');

        $get_district_society_member=Basic::where('District', $district_name[$id] )->get();
        return view('pages.society_district_member', ['Societies' =>  $get_district_society_member, 'District'=> $district_name[$id]]);
    }
    public function show_class()
    {
       if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));
        
         foreach($Districts as $district){
             
                $a=0;$b=0;$c=0;$d=0;$e=0;
               

                $selectdist=Basic::where('District', $district->Dist_Name )->get();
                foreach($selectdist as $dis){
               
                $Getcapital=capital::where('Society_Id', $dis->id )->get();
                foreach($Getcapital as $capital){
                   
                    if($capital->Audit_Class=="A"){
                        $a++;
                    }elseif($capital->Audit_Class=="B"){
                        $b++;
                    }elseif($capital->Audit_Class=="C"){
                        $c++;
                    }elseif($capital->Audit_Class=="D"){
                        $d++;
                    }elseif($capital->Audit_Class=="Not Yet Audited"){
                        $e++;
                    }

                }
            }
            $district_name[]=$district->Dist_Name;
            $final_a[]=$a; $final_b[]=$b; $final_c[]=$c; $final_d[]=$d;$final_e[]=$e;
            }
           
            // dd($final_d);
            return view('pages.view_district_class', ["districts"=>$district_name,"A"=>$final_a,"B"=> $final_b, "C"=> $final_c, "D"=> $final_d, "E"=>$final_e]);
        }
        public function show_class_details(string $id, string $id2)
        {
             if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }

        if($id2=="E"){
            $id2="Not Yet Audited";
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));

        
        $district_name= array_column($Districts, 'Dist_Name');
            $select_society=Basic::where('District', $district_name[$id])
            ->join('societycapitals','societycapitals.Society_Id','=','_societydata.id')
            ->where('Audit_Class', $id2)
            ->get();
        // dd( $select_society);
        return view('pages.society_class_details', ['Societies' =>  $select_society, 'District'=> $district_name[$id], 'Class'=> $id2]);
        }
    public function show_society(string $id) {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/District.json'));
       
            $district_name= array_column($Districts, 'Dist_Name');

        $get_district_society_member=Basic::where('District', $district_name[$id] )->get();
        return view('pages.district_view_all', ['Societies' => $get_district_society_member,'District'=> $district_name[$id]]);
    }
    public function show_sector(string $id) {
        if(!Auth::check()){
           
            return redirect()->action([AdminloginController::class, 'login']);
        }
        $Districts=json_decode(file_get_contents('assets/Sector_Name.json'));
       
            $sector_name= array_column($Districts, 'Sector_Name');

        $get_district_society=Basic::where('Sector_Type', $sector_name[$id] )->get();
        return view('pages.sector_view_all', ['Societies' => $get_district_society,'Sector'=> $sector_name[$id]]);
    }

}
