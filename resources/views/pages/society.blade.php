<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Capitals" />
       
<!--begin::App Main-->
<main class="app-main">
 
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-6">
          <!-- Default box -->
          <div class="card h-75 overflow-auto">
            <div class="card-header">
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
                <label for="" class="form-label fs-5 fw-bolder">
                  NAME OF THE SOCIETY:
                </label>
                <label for="" class="form-label fs-5 ">
                  {{ $Datas->Name_of_the_Society }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  REGISTRATION:
                </label>
                <label for="" class="form-label fs-5">
                  {{ $Datas->Registration_No }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  DATE OF REGISTRATION:
                </label>
                <label for="" class="form-label fs-5">
                  {{ $Datas->Date_of_registration }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  SECTOR TYPE:
                </label>
                <label for="" class="form-label fs-5">
                
                  {{ $Datas->Sector_Type }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  EMAIL:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Email }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  PAN:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Pan_of_Society }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  LOCATION:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Location_Area }}
                </label>
              </div>

              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  ADDRESS:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->District }}, {{ $Datas->Village }} - {{ $Datas->Pincode }}
                </label>
              </div>

              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  BLOCK:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Block }}
                </label>
              </div>

              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  CIRCLE:
                </label>
                  <label for="" class="form-label fs-5">
                {{ $Datas->Circle }}
                </label>
              </div>
             
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  POLICE STATION:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Police_Station }}
                </label>
              </div>
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  OPERATION AREA:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Operation_District }} - {{ $Datas->Operation_villages }},
                
                </label>
              </div>
               
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  AFFILIATION:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Affiliation }}
                </label>
              </div>
               
              <div class="col-md-12">
                <label for="" class="form-label fs-5 fw-bolder">
                  STATUS:
                </label>
                <label for="" class="form-label fs-5">
                {{ $Datas->Status }}
                </label>
              </div>

              
            </div>
           
          
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-6">
          <!-- Default box -->
          <div class="card h-75 overflow-auto">
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
            

            
      
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
        


      </div>
      <!--end::Row-->
       <!--begin::Row-->
       <div class="row">
        <div class="col-6">
          <!-- Default box -->
          <div class="card h-75 overflow-auto">
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
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-6">
          <!-- Default box -->
          <div class="card h-75 overflow-auto">
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
            

            
      
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
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