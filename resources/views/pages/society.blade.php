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
                        <td> {{ $Datas->Name_of_the_Society }}</td>
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
                        <td> {{ $Datas->Sector_Type }}</td>
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
                        <th scope="row">OPERATION AREA:</th>
                        <td>  {{ $Datas->Operation_District }} - {{ $Datas->Operation_villages }}</td>
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
              <a class="btn btn-primary btn-sm" href="">Edit</a>
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
                      <th scope="col">TOTALS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">ST</th>
                      <td>{{$data->ST_Male}}</td>
                      <td>{{$data->ST_Female}}</td>
                      <td>{{$data->ST_Male + $data->ST_Female}}</td>
                    </tr>
                    <tr>
                      <th scope="row">SC</th>
                      <td>{{$data->SC_Male}}</td>
                      <td>{{$data->SC_Female}}</td>
                      <td>{{$data->SC_Male + $data->SC_Female}}</td>
                    </tr>
                    <tr>
                      <th scope="row">GEN/OTHERS</th>
                      <td>{{$data->Gen_Male}}</td>
                      <td>{{$data->Gen_Female}}</td>
                      <td>{{$data->Gen_Male + $data->Gen_Female}}</td>
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
                      <td>{{$data->Trained_Female}}</td>
                      <td>{{$data->Managemnt_Salary + $data->Management_Expense}}</td>
                      
                    </tr>
                    
                    @endforeach
                  </tbody>
                </table>
               
  
              </div>
            
            </div>
           
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="">Edit</a>
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
                      <th scope="row"></th>
                      <th scope="col">SL.NO</th>
                      <th scope="col">NAME</th>
                      <th scope="col">Contact NO.</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->committee as $data)
                    
                    
                      
                      @foreach (json_decode($data->Member_Name) as $key => $crew) 
                      <tr>
                      <th scope="row"></th>
                      <td>{{$key+1}}</td>
                      <td>{{$crew}}</td>
                      
                      <td>{{json_decode($data->Member_Contact)[$key]}}</td>
                     
                    </tr>
                    @endforeach

                    @endforeach
                  </tbody>
                </table>
                

              </div>
              
            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer"><a class="btn btn-primary btn-sm" href="">Edit</a></div>
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
                      <th colspan="5" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A GRANT</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">TYPES OF GRANT</th>
                      <td>{{$data->Grant_Type}}</td>
                    </tr>
                    <tr>
                      <th scope="row">YEAR</th>
                      <td>{{$data->Grant_Year}}</td>
                    </tr>
                    <tr>
                      <th scope="row">NAME OF THE DEPTT.</th>
                      <td>{{$data->Deptt_Name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">TOTAL GRANT SANCTIONED</th>
                      <td>{{$data->Grant_Sanctioned}}</td>
                    </tr>
                    <tr>
                      <th scope="row">GRANT RELEASE</th>
                      <td>{{$data->Grant_Release}}</td>
                    </tr>
                    <tr>
                      <th scope="row">DATE OF RELEASE</th>
                      <td>{{$data->Date_release}}</td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
                

              </div>
              <div class="col-md-12">
                
                
                
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="5" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</th>
                    </tr>
                   
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    <tr>
                      <th scope="row">TYPES OF AID</th>
                      <td>{{$data->Aid_Type}}</td>
                    </tr>
                    <tr>
                      <th scope="row">YEAR</th>
                      <td>{{$data->Aid_Year}}</td>
                    </tr>
                    <tr>
                      <th scope="row">NAME OF THE AGENCIES</th>
                      <td>{{$data->Agencies_Name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">TOTAL AID SANCTIONED</th>
                      <td>{{$data->Aid_Sanctioned}}</td>
                    </tr>
                    <tr>
                      <th colspan="2" scope="col" class="text-center">GRANT RELEASE</th>
                    </tr>
                    <tr>
                      
                      <th scope="row">LOAN</th>
                      <th scope="col">SUBSIDIES</th>
                    </tr>
                    <tr>
                      <td>{{$data->Aid_Grant_Release}}</td>
                      <td>{{$data->Grant_Subsidies}}</td>
                    </tr>

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
                      <th scope="row"></th>
                      <th scope="row">YEAR</th>
                      <th scope="col">AMOUNT</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Datas->capital as $data)
                    
                    <th scope="row"></th>
                      <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Year}}</td>
                      <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount}}</td>



                    @endforeach
                  </tbody>
                </table>
                

              </div>

            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer"><a class="btn btn-primary btn-sm" href=""><i class="fas fa-edit"></i>Edit</a></div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <!--end::Row-->


      
    </div>
  </div>
  <!--end::App Content-->
</main>
<!--end::App Main-->



    </x-layout>