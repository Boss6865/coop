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
                        <th style="width: 30%">ADMISSION FEES</th>
                        <td>
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                
                                <td>Rs: {{$data->Admission_fee}}/-</td>
                                
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        </tr>
                      
                      <tr class="align-middle">
                        <th >FACE VALUE OF EACH SHARE</th>
                        <td>
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                
                                <td>Rs: {{$data->Share_face_value}} /-</td>
                                
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr class="align-middle">
                        <th>AUTHORIZED SHARE CAPITAL</th>
                        <td>
                          <table class="table table-bordered">
                            <tbody>
                              <tr>
                                
                                <td>Rs: {{$data->Authorize_share_capital}} /-</td>
                                
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        </tr>
                        <tr class="align-middle">
                            <th>SHARE CAPITAL CONTRIBUTION</th>
                            <td>
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th style="width: 50%">Individual</th>
                                            <td>Rs: {{$data->Individual_share}}/-</td>
                                        </tr>
                                        <tr>
                                            <th>Government</th>
                                            <td>Rs: {{$data->Govt_share}}/-</td>
                                        </tr>
                                        <tr>
                                            <th>Othr Coop.</th>
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
                                            <th style="width: 50%">Primary Activity</th>
                                            <td>{{$data->Primary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Secondary Activity</th>
                                            <td>{{$data->Secondary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tertiary Activity</th>
                                            <td>{{$data->Tertiary_Activity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Others Activity</th>
                                            <td>{{$data->Other_Activity}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="align-middle">
                          <th>SOCIETY UNDERTAKEN PDS (FAIR PRICE SHOP)</th>
                          <td>
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  
                                  <td>{{$data->Society_Fair_Price_Shop}}</td>
                                  
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>AUDIT</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Latest Audit completed</th>
                              <td>{{$data->Latest_Audit_complete}}</td>
                              </tr>
                              <tr>
                                <th> Audit Class</th>
                                <td>{{$data->Audit_Class}}</td>
                              </tr>
                              <tr>
                                <th> Audit Score</th>
                                <td>to be added</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>CAPITALS</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Working Capitals</th>
                                <td>Rs: {{$data->Working_Capitals}}/-</td>
                              </tr>
                              <tr>
                                <th>Businness Turn Over</th>
                                <td>Rs: {{$data->Business_turnover}}/-</td>
                              </tr>
                              <tr>
                                <th> Total Reserve</th>
                                <td>Rs: {{$data->Total_reserve}}/-</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>PROFIT/LOSS</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Net Profit</th>
                               <td>Rs: {{$data->Profit_loss}}/-</td>
                              </tr>
                              <tr>
                                <th>Net Loss</th>
                                <td>Rs: {{$data->Net_Profit_Loss}}/-</td>
                              </tr>
                              
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>ACCUMULATE</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Profit</th>
                                <td>Rs: {{$data->Profit}}/-</td>
                              </tr>
                              <tr>
                                <th>Loss</th>
                                <td>Rs: {{$data->Loss}}/-</td>
                              </tr>
                              
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>WHETHER DIVIDEND DECLEARED BY THE SOCIETY</th>
                          <td>
                            @if($data->Declear_Dividen=="Yes")
                            <table class="table table-sm">
                              <thead>
                                <th colspan="3">{{$data->Declear_Dividen}}</th>
                              </thead>
                              <tr>
                                <th style="width: 50%">AMOUNT PAID TO MEMBERS</th>
                                <td>{{$data->Yes_Dividen_Amount_topaid}}</td>
                              </tr>
                              <tr>
                                <th> TO GOVT.</th>
                                <td>{{$data->Yes_Dividen_Amount_topaid_Govt}}</td>
                              </tr>
                              <tr>
                                <th> CHALLAN NO. & DATE</th>
                                <td>{{$data->Yes_Dividen_Challan_date}}</td>
                              </tr>
                            </table>
                            @else
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  
                                  <td>{{$data->Declear_Dividen}}</td>
                                  
                                </tr>
                              </tbody>
                            </table>
                            @endif
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>WHETHER  CDF PAID BY THE SOCIETY</th>
                          <td>
                            @if($data->CDF_Paid=="Yes")
                            <table class="table table-sm">
                              <thead>
                                <th colspan="2">{{$data->CDF_Paid}}</th>
                              </thead>
                              <tr>
                                <th style="width: 50%">AMOUNT PAID</th>
                                <td>{{$data->CDf_Yes_paidamount}}</td>
                              </tr>
                              <tr>
                                <th>DATE  PAID</th>
                                <td>{{$data->CDf_Yes_paidDate}}</td>
                              </tr>
                            </table>
                            @else
                            <table class="table table-bordered">
                              <tbody>
                                <tr>
                                  
                                  <td>{{$data->CDF_Paid}}</td>
                                  
                                </tr>
                              </tbody>
                            </table>
                            @endif
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>GOVERNMENT AID, IN THE FORM OF A GRANT</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Types Of Grant</th>
                                <td>{{$data->Grant_Type}}</td>
                              </tr>
                              <tr>
                                <th>Year</th>
                                <td>{{$data->Grant_Year}}</td>
                              </tr>
                              <tr>
                                <th>Name Of The Deptt.</th>
                                <td>{{$data->Deptt_Name}}</td>
                              </tr>
                              <tr>
                                <th>Total Grant Sanctioned</th>
                                <td>{{$data->Grant_Sanctioned}}</td>
                              </tr>
                              <tr>
                                <th>Grant Release</th>
                                <td>{{$data->Grant_Release}}</td>
                              </tr>
                              <tr>
                                <th>Date of Release</th>
                                <td>{{$data->Date_release}}</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Types of AID</th>
                                <td>{{$data->Aid_Type}}</td>
                              </tr>
                              <tr>
                                <th>Year</th>
                                <td>{{$data->Aid_Year}}</td>
                              </tr>
                              <tr>
                                <th>Name of the Agencies</th>
                                <td>{{$data->Agencies_Name}}</td>
                              </tr>
                              <tr>
                                <th>Total AID Sanctioned</th>
                                <td>{{$data->Aid_Sanctioned}}</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>GRANT RELEASE</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Loan</th>
                                <td>{{$data->Aid_Grant_Release}}</td>
                              </tr>
                              <tr>
                                <th>Subsidies</th>
                                <td>{{$data->Grant_Subsidies}}</td>
                              </tr>
                              
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th>REFUND OF AID SANCTIONED AS  LOAN</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Loan Sanctioned</th>
                                <td>{{$data->Loan_Sanctioned}}</td>
                              </tr>
                              <tr>
                                <th>Loan Refunded</th>
                                <td>{{$data->Loan_Refunded}}</td>
                              </tr>
                              <tr>
                                <th>Loan Outstanding </th>
                                <td>{{$data->Loan_Outstanding}}</td>
                              </tr>
                              
                            </table>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <th >MANAGERIAL SUBSIDY RECEIVED</th>
                          <td>
                            <table class="table table-sm">
                              <tr>
                                <th style="width: 50%">Year</th>
                                <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Year}}</td>
                              </tr>
                              <tr>
                                <th>Amount</th>
                                <td>{{$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount}}</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        
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