<x-layout>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="DetailsView" />
 <!--begin::App Main-->
 <main class="app-main">
    
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-md-6">
            
            <!-- /.card -->
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Basic Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
               
                    
                  <tbody>
                    <tr class="align-middle">
                        {{-- <th style="width: 10px">#</th> --}}
                        <th>Name of the Society:</th>
                        <td>{{$Datas->Name_of_the_Society;}}</td>
                        
                      </tr>
                    
                    <tr class="align-middle">
                      <th>Registration No:</th>
                      <td>{{$Datas->Registration_No;}}</td>
                    
                    </tr>
                    <tr class="align-middle">
                        <th>Date of Registration:</th>
                        <td>{{$Datas->Date_of_registration;}}</td>
                      
                      </tr>
                      <tr class="align-middle"><th>Sector Type:</th><td>{{$Datas->Sector_Type;}}</td></tr>
                      <tr class="align-middle"><th>Email:</th><td>{{$Datas->Email;}}</td></tr>
                      <tr class="align-middle"><th>Area:</th><td>{{$Datas->Location_Area;}}</td></tr>
                      <tr class="align-middle"><th>District:</th><td>{{$Datas->District;}}</td></tr>
                      <tr class="align-middle"><th>Block:</th><td>{{$Datas->Block;}}</td></tr>
                      <tr class="align-middle"><th>Circle:</th><td>{{$Datas->Circle;}}</td></tr>
                      <tr class="align-middle"><th>Village:</th><td>{{$Datas->Village;}}</td></tr>
                      <tr class="align-middle"><th>Post Office:</th><td>{{$Datas->Post_office;}}</td></tr>
                      <tr class="align-middle"><th>Police Station:</th><td>{{$Datas->Police_Station;}}</td></tr>
                      <tr class="align-middle"><th>Pincode:</th><td>{{$Datas->Pincode;}}</td></tr>
                      <tr class="align-middle"><th>Operation District:</th><td>{{$Datas->Operation_District;}}</td></tr>
                      <tr class="align-middle"><th>Operation Villages:</th><td>{{$Datas->Operation_villages;}}</td></tr>
                      <tr class="align-middle"><th>Affiliation:</th><td>{{$Datas->Affiliation;}}</td></tr>
                      <tr class="align-middle"><th>Status:</th><td>{{$Datas->Status;}}</td></tr>
                      @if($Datas->Status=="Non-function")
                      <tr class="align-middle"><th>Year of Non Function:</th><td>{{$Datas->Years_of_Non_function;}}</td></tr>
                      <tr class="align-middle"><th>Section Conducted:</th><td>{{$Datas->Section_Conducted;}}</td></tr>
                      <tr class="align-middle"><th>Section Cancellation:</th><td>{{$Datas->Section_Cancellation;}}</td></tr>
                      @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-header">
                <h3 class="card-title">Management-I</h3>
              </div>
              <div class="card-body p-0">
                @foreach($Datas->membersociety as $data)
                <table class="table table-sm"> 
                    
                  <tbody>
                    <tr class="align-middle"><th>Total Number of Society:</th>
                        <td>
                            <table class="table table-sm">
                                <thead>
                                    <th>Tribe</th>
                                    <th>Male</th>
                                    <th>Female</th>
                                    <th>SHG</th>
                                    <th>PG</th>
                                    <th>Coop</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>ST</th>
                                    <td>{{$data->ST_Male}}</td>
                                    <td>{{$data->ST_Female}}</td>
                                    <td>{{$data->ST_SHG}}</td>
                                    <td>{{$data->ST_PG}}</td>
                                    <td>{{$data->ST_CoopSociety}}</td>
                                    <td>{{$data->ST_Male + $data->ST_Female+$data->ST_SHG+$data->ST_PG+$data->ST_CoopSociety}}</td>
                                    </tr>
                                    <tr>
                                        <th>SC</th>
                                    <td>{{$data->SC_Male}}</td>
                                    <td>{{$data->SC_Female}}</td>
                                    <td>{{$data->SC_SHG}}</td>
                                    <td>{{$data->SC_PG}}</td>
                                    <td>{{$data->SC_CoopSociety}}</td>
                                    <td>{{$data->SC_Male + $data->SC_Female+$data->SC_SHG+$data->SC_PG+$data->SC_CoopSociety}}</td>
                                    </tr>
                                    <th>Gen./Others</th>
                                    <td>{{$data->Gen_Male}}</td>
                                    <td>{{$data->Gen_Female}}</td>
                                    <td>{{$data->Gen_SHG}}</td>
                                    <td>{{$data->Gen_PG}}</td>
                                    <td>{{$data->Gen_CoopSociety}}</td>
                                    <td>{{$data->Gen_Male + $data->Gen_Female+$data->Gen_SHG+$data->Gen_PG+$data->Gen_CoopSociety}}</td>
                                    </tr>
                                    <tr>
                                    <th>Grand Total</th>
                                    <td>{{$data->Gen_Male+$data->ST_Male+$data->SC_Male}}</td>
                                    <td>{{$data->Gen_Female+$data->ST_Female+$data->Gen_Female}}</td>
                                    <td>{{$data->Gen_SHG+$data->ST_SHG+$data->SC_SHG}}</td>
                                    <td>{{$data->Gen_PG+$data->SC_PG+$data->ST_PG}}</td>
                                    <td>{{$data->Gen_CoopSociety+$data->SC_CoopSociety+$data->ST_CoopSociety}}</td>
                                    <td>{{$data->Gen_Male + $data->Gen_Female+$data->Gen_SHG+$data->Gen_PG+$data->Gen_CoopSociety+$data->SC_Male + $data->SC_Female+$data->SC_SHG+$data->SC_PG+$data->SC_CoopSociety+$data->ST_Male + $data->ST_Female+$data->ST_SHG+$data->ST_PG+$data->ST_CoopSociety}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </td> 
                    </tr>
                    <tr class="align-middle"><th>Managing</th><td><table class="table table-sm"><tr><th>Male</th><td>{{$data->Managing_Male}}</td></tr><tr><th>Female</th><td>{{$data->Managing_Female}}</td></tr></table></td></tr>
                    <tr class="align-middle"><th>Lastest AGM</th><td>{{$data->Date_of_LastAGM;}}</td> </tr>
                    <tr class="align-middle"><th>Employee</th><td><table class="table table-sm"><tr><th>Male</th><td>{{$data->Employee_Male}}</td></tr><tr><th>Female</th><td>{{$data->Employee_Female}}</td></tr></table></td></tr>
                    <tr class="align-middle"><th>Trained</th><td><table class="table table-sm"><tr><th>Male</th><td>{{$data->Trained_Male}}</td></tr><tr><th>Female</th><td>{{$data->Trained_Female}}</td></tr></table></td></tr>
                    <tr class="align-middle"><th>TRAINING PROGRAMME ATTENDED</th><td><table class="table table-sm"><thead><tr><th>Programe Name</th><th> Type</th><th>NO. Of Trainee</th></tr></thead><tr><td>{{$data->Training_Program}}</td><td>{{$data->Programme_Type}}</td><td>{{$data->Number_of_Trainee}}</td></tr></table></td></tr>
                    <tr class="align-middle"><th>Cost Management</th><td><table class="table table-sm"><thead><tr><th>Salary</th><th>Management Expenses</th><th>Other Expenses</th></tr></thead><tr><td>{{$data->Managemnt_Salary}}</td><td>{{$data->Management_Expense}}</td><td>{{$data->Other_Expense}}</td></tr></table></td></tr>
                   
                  </tbody>
                </table>
                @endforeach
              </div>
              <div class="card-header">
                <h3 class="card-title">Management - II</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                @foreach($Datas->committee as $data)
                <table class="table table-sm">
               
                    
                  <tbody>
                    <tr class="align-middle">
                        {{-- <th style="width: 10px">#</th> --}}
                        <th>President</th>
                        <td>
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <td>{{$data->President_Name;}}</td>
                                    </tr>

                                    <tr>
                                        <th>Date of Birth</th>
                                        <td>{{$data->President_DOB;}}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact No.</th>
                                        <td>{{$data->President_Contact;}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$data->President_Email;}}</td>
                                    </tr>
                                 
                                </tbody>
                               
                                
                            </table>
                        </td>
                        
                      </tr>

                             
                      <tr>
                    <tr class="align-middle">
                      <th>Secretary </th>
                      <td>

                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    
                                    <th>Name</th>
                                    <td>{{$data->Secretary_Name;}}</td>
                                </tr>

                                <tr>
                                    <th>Date of Birth</th>
                                    <td>{{$data->Secretary_DOB;}}</td>
                                </tr>
                                <tr>
                                    <th>Contact No.</th>
                                    <td>{{$data->Secretary_Contact;}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$data->Secretary_Email;}}</td>
                                </tr>
                             
                            </tbody>
                        </table>
                      </td>
                    
                    </tr>
                    <tr class="align-middle">
                        <th>Member:</th>
                        <td>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Datas->committee as $data)
                    
                    
                      
                                    @foreach (json_decode($data->Member_Name) as $key => $crew) 
                                    <tr>
                                    
                                    <td>{{$key+1}}</td>
                                    <td>{{$crew}}</td>
                                    
                                    <td>{{json_decode($data->Member_Contact)[$key]}}</td>
                                   
                                  </tr>
                                  @endforeach
                                  @endforeach
                                 
                                </tbody>
                            </table>

                        </td>
                      
                      </tr>
                     
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
           
            <!-- /.card -->
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Capitals</h3>
              </div>
              @foreach($Datas->capital as $data)
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                    
                    <tbody>
                      <tr class="align-middle">
                        <th>ADMISSION FEES</th>
                        <td>Rs: {{$data->Admission_fee}}/-</td>
                        </tr>
                      
                      <tr class="align-middle">
                        <th >FACE VALUE OF EACH SHARE</th>
                        <td>Rs: {{$data->Share_face_value}} /-</td>
                      </tr>
                      <tr class="align-middle">
                        <th>AUTHORIZED SHARE CAPITAL</th>
                        <td>Rs: {{$data->Authorize_share_capital}} /-</td>
                        </tr>
                        <tr class="align-middle">
                            <th>SHARE CAPITAL CONTRIBUTION</th>
                            <td>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th>INDIVIDUAL</th>
                                            <td>Rs: {{$data->Individual_share}}/-</td>
                                        </tr>
                                        <tr>
                                            <th>GOVERNMENT</th>
                                            <td>Rs: {{$data->Govt_share}}/-</td>
                                        </tr>
                                        <tr>
                                            <th>OTHER COOP.</th>
                                            <td>Rs: {{$data->Other_coop_share}}/-</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>Rs: {{$data->Individual_share +  $data->Govt_share+ $data->Other_coop_share}}/-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="align-middle">
                            <th>ACTIVITIES OF THE SOCIETY</th>
                            <td>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th>PRIMARY ACTIVITIY</th>
                                            <td>{{$data->Primary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>SECONDARY ACTIVITY</th>
                                            <td>{{$data->Secondary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>TERTIARY ACTIVITIES</th>
                                            <td>{{$data->Tertiary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>OTHERS</th>
                                            <td>{{$data->Other_Activity}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr class="align-middle"><th>Sector Type:</th><td>{{$Datas->Sector_Type;}}</td></tr>
                        <tr class="align-middle"><th>Email:</th><td>{{$Datas->Email;}}</td></tr>
                        <tr class="align-middle"><th>Area:</th><td>{{$Datas->Location_Area;}}</td></tr>
                        <tr class="align-middle"><th>District:</th><td>{{$Datas->District;}}</td></tr>
                        <tr class="align-middle"><th>Block:</th><td>{{$Datas->Block;}}</td></tr>
                        <tr class="align-middle"><th>Circle:</th><td>{{$Datas->Circle;}}</td></tr>
                        <tr class="align-middle"><th>Village:</th><td>{{$Datas->Village;}}</td></tr>
                        <tr class="align-middle"><th>Post Office:</th><td>{{$Datas->Post_office;}}</td></tr>
                        <tr class="align-middle"><th>Police Station:</th><td>{{$Datas->Police_Station;}}</td></tr>
                        <tr class="align-middle"><th>Pincode:</th><td>{{$Datas->Pincode;}}</td></tr>
                        <tr class="align-middle"><th>Operation District:</th><td>{{$Datas->Operation_District;}}</td></tr>
                        <tr class="align-middle"><th>Operation Villages:</th><td>{{$Datas->Operation_villages;}}</td></tr>
                        <tr class="align-middle"><th>Affiliation:</th><td>{{$Datas->Affiliation;}}</td></tr>
                        <tr class="align-middle"><th>Status:</th><td>{{$Datas->Status;}}</td></tr>
                        @if($Datas->Status=="Non-function")
                        <tr class="align-middle"><th>Year of Non Function:</th><td>{{$Datas->Years_of_Non_function;}}</td></tr>
                        <tr class="align-middle"><th>Section Conducted:</th><td>{{$Datas->Section_Conducted;}}</td></tr>
                        <tr class="align-middle"><th>Section Cancellation:</th><td>{{$Datas->Section_Cancellation;}}</td></tr>
                        @endif
                    </tbody>
                  </table>
              
              <div class="card-body p-0">
                
                <table class="table table-bordered">
                    
                    <tbody>
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
                    </tbody>
                  </table>
              </div>
              <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">WHETHER THE SOCIETY IS MAKING PROFIT / LOSS</th>
                        <td>Rs: {{$data->Profit_loss}}/-</td>
                        <th scope="row">NET PROFIT (+) / LOSS (-) OF THE SOCIETY (AMOUNT IN)</th>
                        <td>Rs: {{$data->Net_Profit_Loss}}/-</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="card-body p-0">
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
                     
                      <tr>
                        <th scope="row"></th>
                        <td>Rs: {{$data->Profit}}/-</td>
                        <td>Rs: {{$data->Loss}}/-</td>
                        
                     
                    </tbody>
                  </table>
              </div>
              <div class="card-body p-0">
                <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">WHETHER DIVIDEND DECLEARED BY THE SOCIETY</th>
                        <td>{{$data->Declear_Dividen}}</td>
                        
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="card-body p-0">
                
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
              </div>
               
  
                <div class="card-body p-0">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th scope="row">WHETHER  CDF PAID BY THE SOCIETY</th>
                        <td>{{$data->CDF_Paid}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
               
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
               
              </div>
              <div  class="card-body p-0">
                <table class="table">
                    <thead>
                      <tr>
                        <th colspan="5" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A GRANT</th>
                      </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                  </table>
              </div>
              <div  class="card-body p-0">
                <table class="table">
                    <thead>
                      <tr>
                        <th colspan="5" scope="col" class="text-center">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</th>
                      </tr>
                     
                    </thead>
                    <tbody>
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
                    </tbody>
                  </table>
              </div>
              <div  class="card-body p-0">
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
                      <th scope="row"></th>
                        <td>{{$data->Loan_Sanctioned}}</td>
                        <td>{{$data->Loan_Refunded}}</td>
                        <td>{{$data->Loan_Outstanding}}</td>
                    </tbody>
                  </table>
              </div>
              <div class="card-body p-0">
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
                      <th scope="row"></th>
                        <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Year}}</td>
                        <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount}}</td>
                    </tbody>
                  </table>
              </div>
              @endforeach
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->

</x-layout>