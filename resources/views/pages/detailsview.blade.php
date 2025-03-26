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
                <table class="table table-sm">
               
                    
                  <tbody>
                    <tr class="align-middle">
                        {{-- <th style="width: 10px">#</th> --}}
                        <th>President</th>
                        <td>
                            <table class="table table-sm">
                                <tr>
                                    <th>Name</th>
                                    <td></td>
                                </tr>
                                
                            </table>
                        </td>
                        
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
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
           
            <!-- /.card -->
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Striped Full Width Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle">
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div
                            class="progress-bar progress-bar-danger"
                            style="width: 55%"
                          ></div>
                        </div>
                      </td>
                      <td><span class="badge text-bg-danger">55%</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar text-bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge text-bg-warning">70%</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar text-bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge text-bg-primary">30%</span></td>
                    </tr>
                    <tr class="align-middle">
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar text-bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge text-bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
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