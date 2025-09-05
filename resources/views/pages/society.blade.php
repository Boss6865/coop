<x-layout>
    <x-navigation title="{{ $Datas->Name_of_the_Society }}" Nav="View Society" />
   
      <style>
        .card{

height:600px;

overflow:scroll;
}

      </style>
<!--begin::App Main-->
<main class="app-main">
 
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row g-4 mb-4">
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">BASIC INFORMATION OF THE SOCIETY</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-12">
                
                
                
                  <table class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>
                     
                      <tr>
                        <th scope="row">NAME OF THE SOCIETY:</th>
                        <td> {{ ucwords($Datas->Name_of_the_Society) }}</td>
                      </tr>
                      <tr>
                        <th scope="row">REGISTRATION:</th>
                        <td> {{ $Datas->Registration_No }}</td>
                      </tr>
                      <tr>
                        <th scope="row">DATE OF REGISTRATION:</th>
                        <td>{{ $Datas->Date_of_registration }}</td> 
                      </tr>
                      <tr>
                        <th scope="row"> SECTOR TYPE:</th>
                        <td>
                          {{-- PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS) --}}
                          @if($Datas->Sector_Type=="PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)")
                          <a href="/pacs_edit/{{$Datas->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">{{ $Datas->Sector_Type }}</a>
                          @else
                           {{ $Datas->Sector_Type }}
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"> EMAIL:</th>
                        <td>  {{ $Datas->Email }}</td>
                      </tr>
                      <tr>
                        <th scope="row">  PAN:</th>
                        <td> {{ $Datas->Pan_of_Society }}</td>
                      </tr>
                      <tr>
                        <th scope="row"> LOCATION:</th>
                        <td>  {{ $Datas->Location_Area }}</td>
                      </tr>
                      <tr>
                        <th scope="row">  ADDRESS:</th>
                        <td>  {{ $Datas->District }}, {{ $Datas->Village }} - {{ $Datas->Pincode }}</td>
                      </tr>
                      <tr>
                        <th scope="row"> BLOCK:</th>
                        <td>{{ $Datas->Block }}</td>
                      </tr>
                      <tr>
                        <th scope="row"> CIRCLE:</th>
                        <td> {{ $Datas->Circle }}</td>
                      </tr>
                      <tr>
                        <th scope="row">POLICE STATION:</th>
                        <td> {{ $Datas->Police_Station }}</td>
                      </tr>
                      <tr>
                        @php
                          $stringArray = explode(",",$Datas->Operation_villages);
                        @endphp
                        <th scope="row">OPERATION AREA:</th>
                        <td> <p  class="fs-5"> {{ $Datas->Operation_District }}: ({{count($stringArray)}} @if(count($stringArray)>1) Villages @else Village  @endif) </p>{{ $Datas->Operation_villages }}</td>
                      </tr>
                      <tr>
                        <th scope="row">AFFILIATION:</th>
                        <td>{{ $Datas->Affiliation }}</td>
                      </tr>
                      <tr>
                        <th scope="row">STATUS:</th>
                        <td>{{ $Datas->Status }}</td>
                      </tr>
                   
                    </tbody>
                  </table>
                  
  
                </div>
                <div class="col-md-12">
              
                  @if($Datas->Status=="Non-function")
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="4" scope="col" class="text-center">NON-FUNCTIONING</th>
                      </tr>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">NOS OF YEARS THE SOCIETY HAVE STOP FUNCTIONING</th>
                        <th scope="col">SECTION 61/62 CONDUCTED OR NOT (MENTIONED DATE/YEAR)</th>
                        <th scope="col">CANCELLATION UNDER SECTION 66   YES / NO     (MENTIONED DATE/YEAR)</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr >
                        <th></th>
                        <td>{{$Datas->Years_of_Non_function}}</td>
                        <td>{{$Datas->Section_Conducted}}</td>
                        <td>{{$Datas->Section_Cancellation}}</td>
                      
                      </tr>
                      
                      
                    </tbody>
                  </table>
                 @endif
    
                </div>

              </div>
          
              
            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer">
             
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/444">Edit</a>
              
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header">
              <h3 class="card-title">MANAGEMENT - I</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                @foreach($Datas->membersociety as $data)
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">TRIBE</th>
                      <th scope="col">MALE</th>
                      <th scope="col">FEMALE</th>
                     <th scope="col">COOP. SOC.</th>
                      <th scope="col">PG</th>
                      <th scope="col">SHGs</th>
                      <th scope="col">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">ST</th>
                      <td>{{$data->ST_Male}}</td>
                      <td>{{$data->ST_Female}}</td>
                      <td>{{$data->ST_CoopSociety ? $data->ST_CoopSociety : 0}}</td>
                      <td>{{$data->ST_PG ? $data->ST_PG : 0}}</td>
                      <td>{{$data->ST_SHG ? $data->ST_SHG : 0}}</td>
                      <td>{{$data->ST_Male + $data->ST_Female + $data->ST_CoopSociety + $data->ST_PG + $data->ST_SHG}}</td>
                    </tr>
                    <tr>
                      <th scope="row">SC</th>
                      <td>{{$data->SC_Male ? $data->SC_Male : 0}}</td>
                      <td>{{$data->SC_Female ? $data->SC_Female : 0}}</td>
                      <td>{{$data->SC_CoopSociety ? $data->SC_CoopSociety : 0 }}</td>
                      <td>{{$data->SC_PG ? $data->SC_PG : 0}}</td>
                      <td>{{$data->SC_SHG ? $data->SC_SHG :0}}</td>
                      <td>{{$data->SC_Male + $data->SC_Female + $data->SC_CoopSociety + $data->SC_PG + $data->SC_SHG}}</td>
                    </tr>
                    <tr>
                      <th scope="row">GEN/OTHERS</th>
                      <td>{{$data->Gen_Male ? $data->Gen_Male : 0}}</td>
                      <td>{{$data->Gen_Female ? $data->Gen_Female : 0}}</td>
                      <td>{{$data->Gen_CoopSociety ? $data->Gen_CoopSociety : 0 }}</td>
                      <td>{{$data->Gen_PG ? $data->Gen_PG : 0}}</td>
                      <td>{{$data->Gen_SHG ? $data->Gen_SHG : 0}}</td>
                      <td>{{$data->Gen_Male + $data->Gen_Female + $data->Gen_CoopSociety + $data->Gen_PG + $data->Gen_Male}}</td>
                    </tr>
                  </tbody>
                </table>
                @endforeach

              </div>
              <div class="col-md-12">
              
            
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">NUMBER OF THE MANAGING COMMITTEE / BOARD OF DIRECTOR</th>
                    </tr>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">MALE</th>
                      <th scope="col">FEMALE</th>
                      <th scope="col">TOTAL</th>
                      <th scope="col">DATE OF LAST AGM</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->membersociety as $data)
                    <tr >
                      <td></td>
                      <td>{{$data->Managing_Male}}</td>
                      <td>{{$data->Managing_Female}}</td>
                      <td>{{$data->Managing_Male + $data->Managing_Female}}</td>
                      <td>{{$data->Date_of_LastAGM}}</td>
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
               
  
              </div>
              <div class="col-md-12">
              
            
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="6" scope="col" class="text-center">EMPLOYEES</th>
                    </tr>
                    <tr>
                      <th colspan="3" scope="col" class="text-center">TOTAL EMPLOYEE</th>
                      <th colspan="3" scope="col" class="text-center">TRAINED EMPLOYEE</th>
                     
                    </tr>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">MALE</th>
                      <th scope="col">FEMALE</th>
                      <th scope="col">TOTAL</th>
                      <th scope="col">MALE</th>
                      <th scope="col">FEMALE</th>
                      <th scope="col">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->membersociety as $data)
                    <tr >
                      <th scope="col"></th>
                      <td>{{$data->Employee_Male}}</td>
                      <td>{{$data->Employee_Female}}</td>
                      <td>{{$data->Employee_Male + $data->Employee_Female}}</td>
                      <td>{{$data->Trained_Male}}</td>
                      <td>{{$data->Trained_Female}}</td>
                      <td>{{$data->Trained_Male + $data->Trained_Female}}</td>
                      
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
               
  
              </div>
              <div class="col-md-12">
              
            
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="6" scope="col" class="text-center">PROGRAMME</th>
                    </tr>
                    <tr>
                      <th colspan="3" scope="col" class="text-center">TRAINING PROGRAMME</th>
                      <th colspan="3" scope="col" class="text-center">COST OF MANAGEMENT</th>
                     
                    </tr>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">TYPE</th>
                      <th scope="col">TRAINING INSTITUTE</th>
                      <th scope="col">NO. OF TRAINEES</th>
                      <th scope="col">SALARY</th>
                      <th scope="col">OTHERS MANAGERIAL INCENTIVES</th>
                      <th scope="col">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->membersociety as $data)
                    <tr >
                      <th scope="col"></th>
                      <td>{{$data->Programme_Type}}</td>
                      <td>{{$data->Training_Program}}</td>
                      <td>{{$data->Number_of_Trainee}}</td>
                      <td>{{$data->Managemnt_Salary}}</td>
                      <td>{{$data->Other_Expense}}</td>
                      <td>{{$data->Managemnt_Salary + $data->Management_Expense + $data->Other_Expense}}</td>
                      
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
               
  
              </div>
            
            </div>
           
            <div class="card-footer">
              
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/555">Edit</a>
              
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header">
              <h3 class="card-title">MANAGEMENT - II</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">DETAILS OF THE CHAIRMAN/PRESIDENT</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="col">NAME</th>
                      <th scope="col">AGE/DATE OF BIRTH</th>
                      <th scope="col">CONTACT NO.</th>
                      <th scope="col">EMAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->committee as $data)
                    <tr>
                      <th scope="row"></th>
                      <td>{{$data->President_Name}}</td>
                      <td>{{$data->President_DOB}}</td>
                      <td>{{$data->President_Contact}}</td>
                      <td>{{$data->President_Email}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">DETAILS OF THE SECRETARY</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="col">NAME</th>
                      <th scope="col">AGE/DATE OF BIRTH</th>
                      <th scope="col">CONTACT NO.</th>
                      <th scope="col">EMAIL</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->committee as $data)
                    <tr>
                      <th scope="row"></th>
                      <td>{{$data->Secretary_Name}}</td>
                      <td>{{$data->Secretary_DOB}}</td>
                      <td>{{$data->Secretary_Contact}}</td>
                      <td>{{$data->Secretary_Email}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="4" scope="col" class="text-center">NAME OF THE MANAGING COMMITTEE MEMBERS / BOARD OF DIRECTOR</th>
                    </tr>
                    <tr>
                     
                      <th scope="col">SL.NO</th>
                      <th scope="col">NAME</th>
                      <th scope="col">Contact NO.</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($Datas->committee as $data)
                    
                    
                    @if(is_array(json_decode($data->Member_Name)))
                    @foreach (json_decode($data->Member_Name) as $key => $crew) 
                    <tr>
                    
                    <td>{{$key+1}}</td>
                    <td>{{$crew}}</td>
                    
                    <td>{{json_decode($data->Member_Contact)[$key]}}</td>
                   
                    </tr>
                    @endforeach
                    @else
                    
                  
                    @php $MemberName=explode(",", $data->Member_Name); $MemberContact=explode(",", $data->Member_Contact); @endphp
                   
                  
                    @foreach ($MemberName as $key => $crew) 
                    <tr>
                    
                    <td>{{$key+1}}</td>
                    <td>{{$crew}}</td>
                    
                    @if(isset($MemberContact[$key])) <td>{{$MemberContact[$key]}}</td>@else <td>Not Given</td> @endif
                   {{-- <td>wait</td> --}}
                    </tr>
                    @endforeach
                   
                    @endif

                    @endforeach
                  </tbody>
                </table>
                

              </div>
              
            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/666">Edit</a>
              </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header">
              <h3 class="card-title">CAPITALS</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                
                
                
                <table class="table table-bordered">
                  <thead>
                    
                    
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">ADMISSION FEES</th>
                      <td>Rs: {{$data->Admission_fee}}/-</td>
                      <th scope="row">FACE VALUE OF EACH SHARE</th>
                      <td>Rs: {{$data->Share_face_value}} /-</td>
                      
                    </tr>
                    <tr>
                      <th scope="row">AUTHORIZED SHARE CAPITAL</th>
                      <td>Rs: {{$data->Authorize_share_capital}} /-</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">SHARE CAPITAL CONTRIBUTION</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="col">INDIVIDUAL</th>
                      <th scope="col">GOVERNMENT</th>
                      <th scope="col">OTHER COOP. INSTITUTIONS (STATE / PRIMARY / ETC) LEVEL</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row"></th>
                      <td>Rs: {{$data->Individual_share}}/-</td>
                      <td>Rs: {{$data->Govt_share}}/-</td>
                      <td>Rs: {{$data->Other_coop_share}}/-</td>
                      <td>Rs: {{$data->Individual_share +  $data->Govt_share+ $data->Other_coop_share}}/-</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="row">PRIMARY ACTIVITIY</th>
                      <th scope="col">SECONDARY ACTIVITY</th>
                      <th scope="col">TERTIARY ACTIVITIES</th>
                      <th scope="col">OTHERS (MENTIONED IN DETAILS)</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    
                    <th scope="row"></th>
                      <td>{{$data->Primary_Activity}}</td>
                      <td>{{$data->Secondary_Activity}}</td>
                      <td>{{$data->Tertiary_Activity}}</td>
                      <td>{{$data->Other_Activity}}</td>
                      
                     

                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table table-bordered">
                  <thead>
                    
                    
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">SOCIETY UNDERTAKEN PDS (FAIR PRICE SHOP)</th>
                      <td>{{$data->Society_Fair_Price_Shop}}</td>
                      <th scope="row">YEAR OF LATEST AUDIT COMPLETED</th>
                      <td>{{$data->Latest_Audit_complete}}</td>
                      
                    </tr>
                    <tr>
                      <th scope="row">CATEGORY OF AUDIT / AUDIT CLASS</th>
                      <td>{{$data->Audit_Class}}</td>
                      <th scope="row">WORKING CAPITAL</th>
                      <td>Rs: {{$data->Working_Capitals}}/-</td>
                     
                    </tr>
                    <tr>
                      <th scope="row">AUDIT SCORE</th>
                      <td>{{$data->audit_score}}</td>
                  
                     
                    </tr>
                    <tr>
                      <th scope="row">BUSINESS TURNOVER</th>
                      <td>Rs: {{$data->Business_turnover}}/-</td>
                      <th scope="row">TOTAL RESERVE</th>
                      <td>Rs: {{$data->Total_reserve}}/-</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table table-bordered">
                  <thead>
                    
                    
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">WHETHER THE SOCIETY IS MAKING PROFIT / LOSS</th>
                      <td>Rs: {{$data->Profit_loss}}/-</td>
                      <th scope="row">NET PROFIT (+) / LOSS (-) OF THE SOCIETY (AMOUNT IN)</th>
                      <td>Rs: {{$data->Net_Profit_Loss}}/-</td>
                      
                    </tr>
            
                    
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="3" scope="col" class="text-center">ACCUMULATE</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="col">PROFIT</th>
                      <th scope="col">LOSS</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row"></th>
                      <td>Rs: {{$data->Profit}}/-</td>
                      <td>Rs: {{$data->Loss}}/-</td>
                      
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table table-bordered">
                  <thead>
                    
                    
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">WHETHER DIVIDEND DECLEARED BY THE SOCIETY</th>
                      <td>{{$data->Declear_Dividen}}</td>
                      
                    </tr>
        
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              @foreach($Datas->capital as $data)
              @if($data->Declear_Dividen=="Yes")
              <div class="col-md-12">
                
                
               
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="4" scope="col" class="text-center"> DIVIDEND PAID BY THE SOCIETY</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="row">AMOUNT PAID TO MEMBERS</th>
                      <th scope="row"> TO GOVT.</th>
                      <th scope="row"> CHALLAN NO. & DATE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <th scope="row"></th>
                    <td>{{$data->Yes_Dividen_Amount_topaid}}</td>
                    <td>{{$data->Yes_Dividen_Amount_topaid_Govt}}</td>
                    <td>{{$data->Yes_Dividen_Challan_date}}</td>
                    
                    
                  </tbody>
                </table>
                
               
              </div>
              @endif
              @endforeach

              <div class="col-md-12">
                
                
                
                <table class="table table-bordered">
                  <thead>
                    
                    
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">WHETHER  CDF PAID BY THE SOCIETY</th>
                      <td>{{$data->CDF_Paid}}</td>
                      
                    </tr>
        
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              @foreach($Datas->capital as $data)
              @if($data->CDF_Paid=="Yes")
              <div class="col-md-12">
                
                
               
                <table class="table">
                  <thead>
                  
                    <tr>
                      <th scope="row"></th>
                      <th scope="row">AMOUNT PAID</th>
                      <th scope="row"> DATE  PAID</th>
                    </tr>
                  </thead>
                  <tbody>
                    <th scope="row"></th>
                    <td>{{$data->CDf_Yes_paidamount}}</td>
                    <td>{{$data->CDf_Yes_paidDate}}</td>
                    
                    
                    
                  </tbody>
                </table>
                
               
              </div>
              @endif
              @endforeach

              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="6" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A GRANT</th>
                    </tr>
                    <tr>
                      <th scope="row">TYPES OF GRANT</th>
                      <th scope="row">YEAR</th>
                      <th scope="row">NAME OF THE DEPTT.</th>
                      <th scope="row">TOTAL GRANT SANCTIONED</th>
                      <th scope="row">GRANT RELEASE</th>
                      <th scope="row">DATE OF RELEASE</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    @if(is_array(json_decode($data->Grant_Type)))
                       @foreach (json_decode($data->Grant_Type) as $key => $crew) 
                        <tr>
                    
                        {{-- <td>{{$key+1}}</td> --}}
                          <td>{{$crew}}</td>
                          
                    
                          {{-- <td>{{json_decode($data->Grant_Year)[$key]}}</td> --}}
                             <td>@isset(json_decode($data->Grant_Year)[$key]) {{json_decode($data->Grant_Year)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Deptt_Name)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Deptt_Name)[$key]) {{json_decode($data->Deptt_Name)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Grant_Sanctioned)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Grant_Sanctioned)[$key]) {{json_decode($data->Grant_Sanctioned)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Grant_Release)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Grant_Release)[$key]) {{json_decode($data->Grant_Release)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Date_release)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Date_release)[$key]) {{json_decode($data->Date_release)[$key]}} @endisset</td>
                        {{-- <td>{{json_decode($data->Member_Contact)[$key]}}</td> --}}
                   
                        </tr>
                    @endforeach
                    @else
                    <tr>
                      
                      <td>{{$data->Grant_Type}}</td>
                    
                      <td>{{$data->Grant_Year}}</td>
                    
                      <td>{{$data->Deptt_Name}}</td>
                    
                      <td>{{$data->Grant_Sanctioned}}</td>
                    
                      <td>{{$data->Grant_Release}}</td>
                    
                      <td>{{$data->Date_release}}</td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="6" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</th>
                    </tr>
                   <tr>
                    <th scope="row">TYPES OF AID</th>
                    <th scope="row">YEAR</th>
                    <th scope="row">NAME OF THE AGENCIES</th>
                    <th scope="row">TOTAL AID SANCTIONED</th>
                    <th scope="row" >GRANT LOAN RELEASE</th>
                    <th scope="row" >GRANT SUBSIDIES</th>
                   </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    @if(is_array(json_decode($data->Aid_Type)))

                      @foreach (json_decode($data->Aid_Type) as $key => $crew) 
                        <tr>
                    
                        {{-- <td>{{$key+1}}</td> --}}
                          <td>{{$crew}}</td>
                          {{-- <td>{{json_decode($data->Aid_Year)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Aid_Year)[$key]) {{json_decode($data->Aid_Year)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Agencies_Name)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Agencies_Name)[$key]) {{json_decode($data->Agencies_Name)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Aid_Sanctioned)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Aid_Sanctioned)[$key]) {{json_decode($data->Aid_Sanctioned)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Aid_Grant_Release)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Aid_Grant_Release)[$key]) {{json_decode($data->Aid_Grant_Release)[$key]}} @endisset</td>
                          {{-- <td>{{json_decode($data->Grant_Subsidies)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->Grant_Subsidies)[$key]) {{json_decode($data->Grant_Subsidies)[$key]}} @endisset</td>
                        {{-- <td>{{json_decode($data->Member_Contact)[$key]}}</td> --}}
                   
                        </tr>
                      @endforeach
                    @else
                    <tr>
                      <td>{{$data->Aid_Type}}</td>
                   
                      <td>{{$data->Aid_Year}}</td>
                    
                      <td>{{$data->Agencies_Name}}</td>
                    
                      <td>{{$data->Aid_Sanctioned}}</td>
                  
                      <td>{{$data->Aid_Grant_Release}}</td>
                      <td>{{$data->Grant_Subsidies}}</td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="4" scope="col" class="text-center">REFUND OF AID SANCTIONED AS  LOAN</th>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th scope="row">LOAN SANCTIONED</th>
                      <th scope="col">LOAN REFUNDED</th>
                      <th scope="col">LOAN OUTSTANDING </th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    
                    <th scope="row"></th>
                      <td>{{$data->Loan_Sanctioned}}</td>
                      <td>{{$data->Loan_Refunded}}</td>
                      <td>{{$data->Loan_Outstanding}}</td>


                    @endforeach
                  </tbody>
                </table>
                

              </div>

              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="4" scope="col" class="text-center">MANAGERIAL SUBSIDY RECEIVED</th>
                    </tr>
                    <tr>
                      <th> Sl. No.</th>
                      <th scope="row">YEAR</th>
                      <th scope="col">AMOUNT</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                     @if(is_array(json_decode($data->MANAGERIAL_SUBSIDY_RECEIVED_Year)))

                      @foreach (json_decode($data->MANAGERIAL_SUBSIDY_RECEIVED_Year) as $key => $crew) 
                        
                      <tr>
                        {{-- <td>{{$key+1}}</td> --}}
                        <th>{{$key+1}}</th>
                          <td>{{$crew}}</td>
                          {{-- <td>{{json_decode($data->Aid_Year)[$key]}}</td> --}}
                          <td>@isset(json_decode($data->MANAGERIAL_SUBSIDY_RECEIVED_Amount)[$key]) {{json_decode($data->MANAGERIAL_SUBSIDY_RECEIVED_Amount)[$key]}} @endisset</td>
                         
                      </tr>
                        
                   
                      @endforeach
                    @else
                    <tr>
                      <th>1</th>
                      <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Year}}</td>
                      <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount}}</td>
                    </tr>
                      
                      
                    
                    @endif
                    



                    @endforeach
                  </tbody>
                </table>
                

              </div>

            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/777">Edit</a>
             
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
        @if(!empty($investment))
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">INVESTMENT</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">

                <table class="table">
                  <tbody>
                    <tr>
                    <th>Investment of the Society</th>
                    <td>{{$investment->investment_Status}}</td>
                    </tr>
                  </tbody>
                 
                </table>
                <table class="table">
                   <thead>
                    <tr>
                      <th>SL. No</th>
                      <th>Type of Govt. Loan</th>
                      <th>Investment Amount</th>
                    </tr>
                  </thead>
                  @php
                  $jan1=json_decode($investment->loan_investment_amount);
                  $jan2=json_decode($investment->other_mention);
                  @endphp
                  @if(json_decode($investment->type_of_govt_loan)!=null)
                  @foreach(json_decode($investment->type_of_govt_loan) as $key => $data1)
                  <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$data1}} @if($data1=="OTHER") : @isset($jan2[$key]) {{$jan2[$key]}} @else Not Mentioned @endisset  @endif</td>
                    <td>{{$jan1[$key]}}</td>
                  </tr>
                  @endforeach
                  @endif
                </table>
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/888">Edit</a>
             
            </div>
          </div>
          
        </div>
        @endif
        @if(!empty($borrowing_datas)) 
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">BORROWING</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                <table class="table">
                  <tbody>
                    <tr>
                    <th>Borrowing From Govt.</th>
                    <td>{{$borrowing_datas->Govt_loan}}</td>
                    </tr>
                  </tbody>
                 
                </table>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Sl. No.</th>
                      <th>Borrowing From</th>
                      <th>Types</th>
                      <th>Amount</th>
                      <th>Refunded</th>
                      <th>Outstanding</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                  $jan1=json_decode($borrowing_datas->borrowing_type);
                  $jan2=json_decode($borrowing_datas->borrowing_amount);
                  $jan3=json_decode($borrowing_datas->borrowing_refunded);
                  $jan4=json_decode($borrowing_datas->borrowing_outstanding);

                  @endphp
                  @if(json_decode($borrowing_datas->borrowing_from)!=null)
                  @foreach(json_decode($borrowing_datas->borrowing_from) as $key => $data1)
                    <tr>
                      <th>{{$key+1}}</th>
                      <td>{{$data1}}</td>
                      <td>{{$jan1[$key]}}</td>
                      <td>{{$jan2[$key]}}</td>
                      <td>{{$jan3[$key]}}</td>
                      <td>{{$jan4[$key]}}</td>
                     
                    </tr>
                  @endforeach
                  @endif
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>Bank SB A/C</th>
                        <td>{{$borrowing_datas->bank_sb_ac}}</td>
                      </tr>
                       <tr>
                        <th>Bank FD A/C</th>
                        <td>{{$borrowing_datas->bank_fd_ac}}</td>
                      </tr>
                       <tr>
                        <th>Bank RD A/C</th>
                        <td>{{$borrowing_datas->bank_rd_ac}}</td>
                      </tr>
                       <tr>
                        <th>Bank CD A/C</th>
                        <td>{{$borrowing_datas->bank_cd_ac}}</td>
                      </tr>
                       <tr>
                        <th>Thrift A/C</th>
                        <td>{{$borrowing_datas->bank_thrift_ac}}</td>
                      </tr>
                      <tr>
                        <th>Others A/C</th>
                        <td>{{$borrowing_datas->any_other_ac}}</td>
                      </tr>
                      @php
                      $other_ac=json_decode($borrowing_datas->ac_amount);
                     
                    @endphp
                     @if(json_decode($borrowing_datas->ac_name)!=null)
                      @foreach(json_decode($borrowing_datas->ac_name) as $key => $data1)
                        <tr>
                          <th>{{$data1}}</th>
                          <td>{{$other_ac[$key]}}</td>
                        </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                  </tbody>
                </table>

              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/999">Edit</a>
             
            </div>
          </div>
        </div>
        @endif
        @if(!empty($asset_datas->self_building))
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">COMMON ASSETS</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                
                <table class="table">
                  <tbody>
                    <tr>
                    <th>Own Building</th>
                    <td>{{$asset_datas->self_building}}</td>
                    </tr>
                    @if($asset_datas->self_building=="Yes")
                    <tr> 
                    <th>Rented Building</th>
                    <td>{{$asset_datas->rented_building}}</td>
                    </tr>
                   
                    <tr>
                    <th>Rent Paid Per Annum</th>
                    <td>{{$asset_datas->rent_paid}}</td>
                    </tr>
                     @endif
                    <tr>
                    <th>Do You Have Godown</th>
                    <td>{{$asset_datas->godown}}</td>
                    </tr>
                    @if($asset_datas->godown=="Yes")
                    <tr>
                    <th>Area Of The Godown In Sq.Ft. / Arce</th>
                    <td>{{$asset_datas->godown_area}}</td>
                    </tr>
                    <tr>
                    <th>Capacity In Mt</th>
                    <td>{{$asset_datas->godown_capacity}}</td>
                    </tr>
                    <tr>
                    <th>Types of Godown</th>
                    <td>{{$asset_datas->godown_types}}</td>
                    </tr>
                    <tr>
                    <th>Terms Of Agreement</th>
                    <td>{{$asset_datas->godown_type_agreement}}</td>
                    </tr>
                    <tr>
                    <th>Amount Paid Per Annum</th>
                    <td>{{$asset_datas->godown_type_per_annum}}</td>
                    </tr>
                    @endif
                    <tr>
                    <th>Storage Available</th>
                    <td>{{$asset_datas->storage}}</td>
                    </tr>
                     @if($asset_datas->storage=="Yes")
                    <tr>
                    <th>Cold Storage Available</th>
                    <td>{{$asset_datas->storage_cold}}</td>
                    </tr>
                    <tr>
                    <th>Dry Storage Available</th>
                    <td>{{$asset_datas->storage_dry}}</td>
                    </tr>
                    @endif
                    <tr>
                    <th>Land Available</th>
                    <td>{{$asset_datas->land}}</td>
                    </tr>
                    @if($asset_datas->land=="Yes")
                    <tr>
                    <th>Land Area in Sq. Ft./Acre</th>
                    <td>{{$asset_datas->Land_area}}</td>
                    </tr>
                    <tr>
                    <th>If Lease Term Agreement and Area in Sq. Ft./Acre</th>
                    <td>{{$asset_datas->land_area_lease}}</td>
                    </tr>
                    @endif
                    <tr>
                    <th>Furniture Available</th>
                    <td>{{$asset_datas->furniture}}</td>
                    </tr>
                    @if($asset_datas->furniture=="Yes")
                    <tr>
                    <th>Total Nos. of Furniture</th>
                    <td>{{$asset_datas->furniture_total}}</td>
                    </tr>
                    <tr>
                    <th>Furniture Value</th>
                    <td>{{$asset_datas->furniture_amount}}</td>
                    </tr>
                    @endif
                    <tr>
                    <th>Computers Available</th>
                    <td>{{$asset_datas->computers}}</td>
                    </tr>
                    @if($asset_datas->computers=="Yes")
                    <tr>
                    <th>Total Nos. of Computers</th>
                    <td>{{$asset_datas->computers_total}}</td>
                    </tr>
                    <tr>
                    <th>Computers Value</th>
                    <td>{{$asset_datas->computers_amount}}</td>
                    </tr>
                    @endif
                    {{-- <tr>
                    <th>Terms Of Agreement</th>
                    <td>{{$asset_datas->godown_type_agreement}}</td>
                    </tr> --}}

                  </tbody>
                 
                </table>
                <table class="table">
                  <thead>
                    <tr><th colspan="4" style="text-align:center;">OTHERS ASSETS</th></tr>
                    <tr>
                      <th>Sl. No.</th>
                      <th>Name of Item</th>
                      <th>Nos./ Area</th>
                      <th>it's Value</th>
                    </tr>

                  </thead>
                  <tbody>
                    @php
                  $jan1=json_decode($asset_datas->item_no);
                  $jan2=json_decode($asset_datas->item_amount);
                  
                  @endphp
                   @if(json_decode($asset_datas->item_name)!=null)
                  @foreach(json_decode($asset_datas->item_name) as $key => $data1)

                  <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$data1}}</td>
                    <td>{{$jan1[$key]}}</td>
                    <td>{{$jan2[$key]}}</td>
                  </tr>
                  @endforeach
                  @endif
                  </tbody>
                </table>
                
                
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/000">Edit</a>
             
            </div>
          </div>
        </div>
        @endif
        @if(!empty($loan_datas))
        <div class="col-6 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">GOVERNMENT LOANS</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                <table class="table">
                <tbody>
                  <tr>
                    <th>Any Government Loan</th>
                    <td>{{$loan_datas->any_Govt_loan}}</td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead>
                  <tr>
                  <th>Sl. Nos.</th>
                  <th>Type of Govt. Loan</th>
                  <th>Loan Issue Year</th>
                  <th>Loan Sanctioned Amount</th>
                  <th>Outstanding Principal Amount</th>
                  <th>Outstanding Interest Amount</th>
                  </tr>
                </thead>
                <tbody>
                   @php
                  $jan1=json_decode($loan_datas->Loan_issue_year);
                  $jan2=json_decode($loan_datas->Loan_sanctioned_amount);
                  $jan3=json_decode($loan_datas->Outstanding_Principal_amount);
                  $jan4=json_decode($loan_datas->Outstanding_interest_amount);
                  $jan5=json_decode($loan_datas->other_mention);
                  
                  @endphp
                   @if(json_decode($loan_datas->type_of_govt_loan)!=null)
                  @foreach(json_decode($loan_datas->type_of_govt_loan) as $key => $data1)
                  <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$data1}} @isset($jan5[$key])( {{$jan5[$key]}} ) @endisset</td>
                    <td>{{$jan1[$key]}}</td>
                    <td>{{$jan2[$key]}}</td>
                    <td>{{$jan3[$key]}}</td>
                    <td>{{$jan4[$key]}}</td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>

              </table>
              </div>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="/edit/{{$Datas->id}}/111">Edit</a>
              
            </div>
          </div>
        </div>
        
      </div>
      @endif
      <!--end::Row-->


      
    </div>
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->



    </x-layout>