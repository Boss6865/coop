<x-layout>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-git.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <x-navigation title="{{ $Datas->Name_of_the_Society }}" Nav="Edit Society" />
    <div class="card card-info card-outline mb-4">
        <div class="card-body my-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">BASIC INFORMATION</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">MANAGEMENT - I</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">MANAGEMENT - II</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="capital-tab" data-bs-toggle="tab" data-bs-target="#capital" type="button" role="tab" aria-controls="capital" aria-selected="false">CAPITALS</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">INVESTMENT ETC</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">BORROWING</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">COMMON ASSETS</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">GOVT. LOAN</button>
              </li>
            </ul>
          
            <div class="tab-content mt-3" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form class="needs-validation" action="/letview" method ="POST" novalidate>
                    @csrf
                    <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                    <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}">
                    <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Name Of The Cooperative Society" Name="Name_of_the_Society" val="{{$Datas->Name_of_the_Society}}" div_class="col-md-4"/>
                                    <x-column_-input  title="Registration No." Name="Registration_No"  val="{{$Datas->Registration_No}}" div_class="col-md-4"/>
                                    <x-column_-input  title="Date Of Registration" Name="Date_of_registration"  val="{{$Datas->Date_of_registration}}" div_class="col-md-4"/>
                                    
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <label for="validationCustom02" class="form-label">Type / Sector</label>
                                        @php
                                            $sectors=json_decode(file_get_contents('assets/Sector_Name.json'));
                                        @endphp
                                        

                                      
                                        <select class="form-select" name="Sector_Type" id="Sector" required>
                                            
                                            
                                          <option selected disabled value="">Choose...</option>
                                            @forEach($sectors as $sector)
                            
                                            <option value="{{ $sector->Sector_Name}}" 
                                                @if($Datas->Sector_Type==$sector->Sector_Name)
                                                selected
                                                @endif
                                                
                                                >{{ $sector->Sector_Name}}</option>
                                           
                                            @endforeach


                                         
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <x-column_-input  title="E-MAIL ID of the Society" Name="Email" val="{{$Datas->Email}}" div_class="col-md-4"/>
                                    <x-column_-input  title="PAN NO. of the Society" Name="Registration_No"  val="{{$Datas->Pan_of_Society}}" div_class="col-md-4"/>
                                      
                                  </div>
                          </div>
                              <div class="card-header"><div class="card-title">Location of the Society</div></div>
                                <div class="card-body">
                                    <!--begin::Row-->
                                        <div class="row g-2">
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                              <label for="validationCustom01" class="form-label">Area</label>
                                              <select class="form-select" name="Location_Area" id="Select_Area" required>
                                                <option selected disabled value="">Choose...</option>
                                                @if($Datas->Location_Area=="Rural")
                                                <option selected>Rural</option>
                                                <option>Urban</option>
                                                @else
                                                <option >Rural</option>
                                                <option selected>Urban</option>
                                                @endif
                                                

                                              </select>
                                              <div class="valid-feedback">Looks good!</div>
                                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          <div class="col-md-3">
                                              <label for="validationCustom02" class="form-label">District</label>
                                                <select class="form-select"  name="District" id="Select_District" required>
                                                  <option selected disabled value="">District</option>
                                                  @forEach(json_decode(file_get_contents('assets/District.json')) as $sector)
                            
                                                <option value="{{ $sector->Dist_Name}}" 
                                                @if($Datas->District==$sector->Dist_Name)
                                                selected
                                                @endif
                                                
                                                >{{ $sector->Dist_Name}}</option>
                                           
                                            @endforeach

                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          <div class="col-md-3">
                                                <label for="validationCustom01" class="form-label">C&RD Block</label>
                                                @php
                                                  $Districts=json_decode(file_get_contents('assets/Dist_block.json'));
                                                  $Blocks = array();
                                                @endphp
                                               
                                                <select class="form-select" name="Block" id="Select_Block" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    @forEach($Districts as $District)
                                                    @if($Datas->District==$District->Dist_Name)
                                                    <option value="{{ $District->Block_Name}}" 
                                                      @if($Datas->Block==$District->Block_Name)
                                                      selected
                                                      @endif
                                                      
                                                      >{{ $District->Block_Name}}</option>
                                                    @endif
                                                    @endforeach

                                                    
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          <div class="col-md-3">
                                                <label for="validationCustom02" class="form-label">Circle</label>
                                                @php
                                                  $Districts=json_decode(file_get_contents('assets/Circle_Name.json'));
                                                  $Circle = array();
                                                @endphp
                                                  <select class="form-select" name="Circle" id="Select_Circle" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    @forEach($Districts as $District)
                                                    @if($Datas->District==$District->Dist_Name)
                                                    <option value="{{ $District->Circle_Name}}" 
                                                      @if($Datas->Circle==$District->Circle_Name)
                                                      selected
                                                      @endif
                                                      
                                                      >{{ $District->Circle_Name}}</option>
                                                    @endif
                                                    @endforeach
                                                  </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                      </div>
                                  </div>  

                                  <div class="card-header"><div class="card-title">Address of the Society</div></div>
                                  <div class="card-body">
                                    <!--begin::Row-->
                                        <div class="row g-2">
                                            <!--begin::Col-->
                                            <div class="col-md-3">
                                              <label for="validationCustom01" class="form-label">VILLAGE / LOCALITY / WARD</label>
                                              @php
                                              $Districts=json_decode(file_get_contents('assets/Dist_Block_Vill.json'));
                                              $Village = array();
                                            @endphp
                                              <select class="form-select" name="Village" id="Select_village" required>
                                                <option selected disabled value="">Choose...</option>
                                                @forEach($Districts as $District)
                                                @if($Datas->Block==$District->Block_Name)
                                                <option value="{{ $District->Vill_Name}}" 
                                                  @if($Datas->Village==$District->Vill_Name)
                                                  selected
                                                  @endif
                                                  
                                                  >{{ $District->Vill_Name}}</option>
                                                @endif
                                                @endforeach
                                              </select>
                                              <div class="valid-feedback">Looks good!</div>
                                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                         
                                            
                                                <x-column_-input  title="Post Office" Name="Post_office"  val="{{$Datas->Post_office}}" div_class="col-md-3"/>
                                                <x-column_-input  title="Police Station" Name="Police_Station"  val="{{$Datas->Police_Station}}" div_class="col-md-3"/>
                                                <x-column_-input  title="Pincode" Name="Pincode"  val="{{$Datas->Pincode}}" div_class="col-md-3"/>
                                      </div>


                                      <div class="card-header"><div class="card-title">Area of Operation</div></div>
                                      <div class="card-body">
                                        <div class="row g-2">
                                          <div class="col-md-5">
                                            <select class="form-select"  name="Operation_District" id="Select_District1" required>
                                              <option selected disabled value="">Choose District</option>
                                              @forEach(json_decode(file_get_contents('assets/District.json')) as $sector)
                                              
                                              <option value="{{ $sector->Dist_Name}}" 
                                                @if($Datas->Operation_District==$sector->Dist_Name)
                                                selected
                                                @endif
                                                
                                                >{{ $sector->Dist_Name}}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                          <div class="col-md-1">
                                            <input type="text" class="form-control" placeholder="Toal No." id="GetTotal" disabled="false" />
                                          </div>
                                          <div class="col-md-6">
                                            <select class="form-select js-example-basic-multiple"  name="Operation_villages1" id="js-example-basic-single">
                                              <option selected disabled value="">Choose Villages</option>
                                              <option selected>{{$Datas->Operation_villages}}</option>
                                            </select>
                                            
                                            <input type="hidden" name="Operation_villages" id="villageselected"/>
                                          </div>
                                          
                                        </div>

                                      </div>

                                      <div class="card-header"><div class="card-title">FUNCTIONING</div></div>
                                      <div class="card-body">
                                        <div class="row g-2">
                                          <div class="col-md-6">
                                            <label for="validationCustom01" class="form-label">Affiliation</label>
                                            <select class="form-select" name="Affiliation" id="Affiliation" required">
                                              <option selected disabled value="">Choose...</option>
                                              @forEach(json_decode(file_get_contents('assets/affiliation.json')) as $sector)
                            
                                                <option value="{{ $sector->Affiliation}}" 
                                                @if($Datas->Affiliation==$sector->Affiliation)
                                                selected
                                                @endif
                                                
                                                >{{ $sector->Affiliation}}</option>
                                           
                                            @endforeach
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          
                                          <div class="col-md-6">
                                              <label for="validationCustom02" class="form-label">Present Status Of The Society</label>
                                              <select class="form-select" name="Status" id="validationCustom04" required onchange="HideMe(this.value)">
                                                <option selected disabled value="">Choose...</option>
                                                @if($Datas->Status=="Function")
                                                <option selected value="Function">Function</option>
                                                <option value="Non-function">Non-function</option>
                                                <option value="Under Liquidation">Under Liquidation</option>
                                               
                                                @elseif($Datas->Status=="Non-function")
                                                <option value="Function">Function</option>
                                                <option slelected value="Non-function">Non-function</option>
                                                <option value="Under Liquidation">Under Liquidation</option>
                                                @else
                                                <option value="Function">Function</option>
                                                <option value="Non-function">Non-function</option>
                                                <option selected value="Under Liquidation">Under Liquidation</option>
                                                @endif
                                                
                                              </select>
                                              <div class="valid-feedback">Looks good!</div>
                                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          
                                        </div>
                                        <div class="card-body">
                                          
                                            <div class="row g-2" id="mydiv" @if($Datas->Status=="Function")  hidden @endif >
                                                <div class="row g-2">
                                                 <x-column_-input  title="Nos Of Years The Society Have Stop Functioning" Name="Years_of_Non_function"  val="{{$Datas->Years_of_Non_function}}" div_class="col-md-4"/>
                                                   <div class="col-md-4">
                                                       <label for="validationCustom01" class="form-label">Section 61/62 Conducted Or Not (Mentioned Date/Year)
                                                         <select class="form-select" name="" id="No1"  onchange="">
                                                           <option selected disabled value="">Choose...</option>
                                                           <option value="Yes">Yes</option>
                                                           <option value="No">No</option>
                                                         </select>
                                                         <input
                                                           type="text"
                                                           class="form-control col-md-6"
                                                           id="Section_Conducted"
                                                           value="{{$Datas->Section_Conducted}}"
                                                           name="Section_Conducted"
                                                           placeholder="Enter Here"
                                                           disabled
                                                         />
                                                       </label>
                                                       <div class="valid-feedback">Looks good!</div>
                                                       <div class="invalid-feedback">This field is required. Can't be empty</div>
                                                   </div>


                                                       <div class="col-md-4">
                                                         <label for="validationCustom02" class="form-label">Cancellation Under Section 66 Yes / No (Mentioned Date/Year)
                                                           <select class="form-select" name="" id="Yes1" onchange="">
                                                             <option selected disabled value="">Choose...</option>
                                                             <option value="Yes">Yes</option>
                                                             <option value="No">No</option>
                                                          
                                                           </select>
                                                           <input
                                                             type="text"
                                                             class="form-control col-md-6"
                                                             id="Cancellation_Section"
                                                             value="{{$Datas->Section_Cancellation}}"
                                                             name="Section_Cancellation"
                                                             placeholder="Enter Here"
                                                             disabled
                                                           />
                                                         </label>
                                                         <div class="valid-feedback">Looks good!</div>
                                                         <div class="invalid-feedback">This field is required. Can't be empty</div>
                                                       </div>
                                                    </div>
                                                  </div>
                                                 
                                            
                                        </div>

                                          
                                      </div>

                                </div>  
                                <div class="card-footer">
                                  <button class="btn btn-info" type="submit">Update</button>
                            </div>
                </form>
               
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
        <div class="card-header"><div class="card-title">NUMBER OF MEMBERS OF THE SOCIETY</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
            <form class="needs-validation" action="" method ="" novalidate>
              @csrf
                    <!--begin::Body-->
                    @forEach($Datas->membersociety as $data)
                <div class="card-body">
                      <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <!-- <x-column_-select title="Tribe" id="validationCustom17" div_class="col-md-2"/> -->
                        
                        <!--end::Col-->
                        <x-column_-input Name="ST_Male" title="Number Of ST Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->ST_Male}}"/>
                        <!--begin::Col-->
                        <x-column_-input Name="ST_Female" title="Number of ST Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->ST_Female}}"/>
                       
                        <!--end::Col-->
                        <x-column_-input Name="ST_CoopSociety" title="Number of ST Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->ST_CoopSociety}}" />
                        <x-column_-input Name="ST_PG" title="Number of ST Producer Groups" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->ST_PG}}"/>
                        <x-column_-input Name="ST_SHG" title="Number of ST SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->ST_SHG}}"/>
                    </div>
                       <!--end::Row-->
                       <div class="row g-2">
                       
                        <x-column_-input Name="SC_Male" title="Number Of SC Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->SC_Male}}"/>
                        <!--begin::Col-->
                        <x-column_-input Name="SC_Female" title="Number of SC Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->SC_Female}}"/>
                        <x-column_-input Name="SC_CoopSociety" title="Number of SC Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->SC_CoopSociety}}"/>
                        <x-column_-input Name="SC_PG" title="Number of SC Producer Groups" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->SC_PG}}"/>
                        <x-column_-input Name="SC_SHG" title="Number of SC SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->SC_SHG}}"/>
                    </div>
                       <!--end::Row-->
                       <div class="row g-2">
                        
                        <x-column_-input Name="Gen_Male" title="Number Of Gen/Others Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->Gen_Male}}"/>
                        <!--begin::Col-->
                        <x-column_-input Name="Gen_Female" title="Number of Gen/Others Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->Gen_Female}}"/>
                       
                        <!--end::Col-->
                        <x-column_-input Name="Gen_CoopSociety" title="Number of Gen/Others Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->Gen_CoopSociety}}"/>
                        <x-column_-input Name="Gen_PG" title="Number of Gen/Others P.G." id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->Gen_PG}}"/>
                        <x-column_-input Name="Gen_SHG" title="Number of Gen/Others SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers" val="{{$data->Gen_SHG}}"/>
                    </div>
                       <!--end::Row-->
                    <div class="card-header"><div class="card-title">NUMBER OF THE MANAGING COMMITTEE / BOARD OF DIRECTOR</div></div>
            <!--begin::Row-->
            <div class="row g-2">
                       
                        <!--begin:Col-->
                        <x-column_-input Name="Managing_Male" title="Number Of Male" id="validationCustom03" placeholder="Eg.2" div_class="col-md-4" inclass="numbers" val="{{$data->Managing_Male}}"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Managing_Female" title="Number Of Female" id="validationCustom04" placeholder="Eg.2" div_class="col-md-4" inclass="numbers" val="{{$data->Managing_Female}}"/>
                        
                        <!--end::Col-->
                         
                <!--begin::Col-->
                <x-column_-input Name="Date_of_LastAGM" title="Date Of Last Agm" id="validationCustom05" placeholder='eg.2/02/2025' div_class="col-md-4" val="{{$data->Date_of_LastAGM}}"/>
                
                        <!--end::Col-->
                      
              </div>
                       <!--end::Row-->
                       <div class="card-header"><div class="card-title">EMPLOYEES</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Employee_Male" title="Total Male" id="validationCustom06" placeholder="eg.2" div_class="col-md-3" inclass="numbers" val="{{$data->Employee_Male}}"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Employee_Female" title="Total Female" id="validationCustom07" placeholder="eg.2" div_class="col-md-3" inclass="numbers" val="{{$data->Employee_Female}}"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Trained_Male" title="Trained Male" id="validationCustom08" placeholder="eg.2" div_class="col-md-3" inclass="numbers" val="{{$data->Trained_Male}}"/>
                       
                        <!--end::Col-->
                         
                     <!--begin::Col-->
                     <x-column_-input Name="Trained_Female" title="Trained Female" id="validationCustom09" placeholder="eg.2" div_class="col-md-3" inclass="numbers" val="{{$data->Trained_Female}}"/>
                     
                        <!--end::Col-->
                      
                    </div>
                       <!--end::Row-->

                       <div class="card-header"><div class="card-title">TRAINING PROGRAMME ATTENDED</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Programme_Type" title="Type" id="validationCustom10" placeholder="eg.2" div_class="col-md-4" val="{{$data->Programme_Type}}"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Training_Program" title="Training Programme" id="validationCustom11" placeholder="eg.2" div_class="col-md-4" val="{{$data->Training_Program}}"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Number_of_Trainee" title="No. of Trainees" id="validationCustom12" placeholder="eg.2" div_class="col-md-4" inclass="numbers" val="{{$data->Number_of_Trainee}}"/>
                        
                        <!--end::Col-->
                         
                    
                      
                    </div>
                       <!--end::Row-->

                       <div class="card-header"><div class="card-title">Cost Management</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Managemnt_Salary" title="Salary" id="validationCustom13" placeholder="eg.10000" div_class="col-md-4" inclass="numbers" val="{{$data->Managemnt_Salary}}"/>
                       
                        <!--end::Col-->
                       
                        <!--begin::Col-->
                        <x-column_-input Name="Management_Expense" title="Management Expenses" id="validationCustom14" placeholder="eg.2000" div_class="col-md-4" inclass="numbers" val="{{$data->Management_Expense}}"/>
                        
                        <!--end::Col-->

                         <!--begin::Col-->
                         <x-column_-input Name="Other_Expense" title="Other Expenses" id="validationCustom15" placeholder="eg.10000" div_class="col-md-4" inclass="numbers" val="{{$data->Other_Expense}}"/>
                         
                        <!--end::Col-->
                         
                    
                      
                    </div>
                       <!--end::Row-->
                </div>
                <!--End::Body--> 
                    <!--begin::Footer-->
                <div class="card-footer">
                      <button class="btn btn-info" type="submit">Update</button>
                      
                </div>
                    <!--end::Footer-->
                    @endforeach
        </form>
                  <!--end::Form-->
               
</div>
                <!--end::Form Validation-->
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card card-info card-outline mb-4">
                  

                 
                  <form class="needs-validation" action="" method =""  novalidate>
                    @csrf
                         
                          @forEach($Datas->committee as $data)
                          <div class="card-header"><div class="card-title">DETAILS OF THE CHAIRMAN/PRESIDENT</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Name" Name="President_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->President_Name}}"/>
                                    <x-column_-input  title="Date of Birth" Name="President_DOB" id="validationCustom09" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->President_DOB}}"/>
                                    <x-column_-input  title="Contact No." Name="President_Contact" id="validationCustom09" placeholder="Eg-9856678090" div_class="col-md-3" val="{{$data->President_Contact}}"/>
                                    <x-column_-input  title="Email" Name="President_Email" id="validationCustom09" placeholder="Eg-johndeo@email.com" div_class="col-md-3" val="{{$data->President_Email}}"/>
      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">DETAILS OF THE SECRETARY</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Name" Name="Secretary_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->Secretary_Name}}"/>
                                    <x-column_-input  title="Date of Birth" Name="Secretary_DOB" id="validationCustom09" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->Secretary_DOB}}"/>
                                    <x-column_-input  title="Contact No." Name="Secretary_Contact" id="validationCustom09" placeholder="Eg-9856678090" div_class="col-md-3" val="{{$data->Secretary_Contact}}"/>
                                    <x-column_-input  title="Email" Name="Secretary_Email" id="validationCustom09" placeholder="Eg-johndeo@email.com" div_class="col-md-3" val="{{$data->Secretary_Email}}"/>
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">NAME OF THE MANAGING COMMITTEE MEMBERS / BOARD OF DIRECTOR</div></div>
                          <div class="card-body">
                                  <div id="newinput" class="row g-2">
                                      
                                    @forEach(json_decode($data->Member_Name) as $key =>$name)
                                      <div id="row" class="row g-2">
                                       
                                        <div class="col-md-4">
                                          <input name="Member_Name[]" type="text" class="form-control" placeholder="Eg-John-Deo" required value="{{$name}}"> 
                                        </div>
                                          <div class="col-md-4">
                                            <input name="Member_Contact[]" type="text" class="form-control" placeholder="Eg-9856678090" required value="{{json_decode($data->Member_Contact)[$key]}}"> 
                                          </div>
                                          @if($key==0)
                                          <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                          @else
                                          <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button>
                                          @endif
                                          
                                    </div>
                                    @endforeach
                          </div>
                          </div>
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Update</button>
                      </div>
                      @endforeach
                  </form>
                        <!--end::Form-->
                        
                        
                        <!--end::JavaScript-->
                </div>
              </div>
              <div class="tab-pane fade" id="capital" role="tabpanel" aria-labelledby="capital-tab">
                <h1>On monday</h1>
              </div>
            </div>
          </div>
    </div>

    </x-layout>



    <script type="text/javascript">
      $("#rowAdder").click(function () {
          newRowAdd =
              '<div id="row" class="row g-2"><div class="col-md-4">' +
              '<input name="Member_Name[]" type="text" class="form-control" placeholder="Eg-John-Deo" required> </div>'+
              '<div class="col-md-4">' +
              '<input name="Member_Contact[]" type="text" class="form-control" placeholder="Eg-9856678090" required> </div>'+
              '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

          $('#newinput').append(newRowAdd);
          
      });

      $("body").on("click", "#DeleteRow", function () {
          $(this).parents("#row").remove();
      })
  </script>

       <!--begin::JavaScript-->
       <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
          'use strict';

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation');

          // Loop over them and prevent submission
          Array.from(forms).forEach((form) => {
            form.addEventListener(
              'submit',
              (event) => {
                if (!form.checkValidity()) {
                  event.preventDefault();
                  event.stopPropagation();
                }

                form.classList.add('was-validated');
              },
              false,
            );
          });
        })();
        
      </script>
      <!--end::JavaScript-->
    <script>
      
      function HideMe(val)
      {
                        
        let element = document.getElementById("mydiv");
        let hidden = element.getAttribute("hidden");
        if (val=="Non-function") {
            element.removeAttribute("hidden");
            
         } else {
            element.setAttribute("hidden", "hidden");
        
        }
      }
      

    // end of sector json
    //start of rural and urban district json
    $( "#Select_Area" ).on( "change", function() {
      var Area= $( "#Select_Area" ).val();
      if(Area=="Rural"){
        $.getJSON("../assets/District.json", function(data){
          $("#Select_District").empty().append($('<option>', {
                  disabled: true,
                  value:"",
                  text: "Choose District",
                  Selected:true
                }));
                for(i=0;i<data.length;i++)
                {
                  $('#Select_District').append($('<option>').val(data[i].Dist_Name).text(data[i].Dist_Name));
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });
        
      } else if(Area=="Urban"){
        $.getJSON("../assets/Urban_District.json", function(data){
                $("#Select_District").empty().append($('<option>', {
                  disabled: true,
                  value:"",
                  text: "Choose District",
                  Selected:true
                }));

                for(i=0;i<data.length;i++)
                {
                  $('#Select_District').append($('<option>').val(data[i].Dist_Name).text(data[i].Dist_Name));
                  
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });
      }
      
    });

    //end of rural and urban district json

//start to add block district wise

$( "#Select_District" ).on( "change", function() {
      var Area= $( "#Select_District" ).val();

        $.getJSON("../assets/Dist_block.json", function(data){
          var data_filter = data.filter(element => element.Dist_Name ==Area);
         

          $("#Select_Block").empty().append($('<option>', {
                  disabled: true,
                  value:"",
                  text: "Choose Block",
                  Selected:true
                }));
                for(i=0;i<data_filter.length;i++)
                {
                  $('#Select_Block').append($('<option>').val(data_filter[i].Block_Name).text(data_filter[i].Block_Name));
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });
        $.getJSON("../assets/Circle_Name.json", function(data){
          
          var data_filter = data.filter(element => element.Dist_Name ==Area);
         

          $("#Select_Circle").empty().append($('<option>', {
                  disabled: true,
                  value:"",
                  text: "Choose...",
                  Selected:true
                }));
                //console.log(data_filter);
                for(i=0;i<data_filter.length;i++)
                {
                  $('#Select_Circle').append($('<option>').val(data_filter[i].Circle_Name).text(data_filter[i].Circle_Name));
                }
                if(data_filter.length==0){
                  console.log("Enter");
                  $('#Select_Circle').append($('<option>').val("Not Available").text("Not Available").attr('selected','selected'));
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });

      
    });


//end of select block

//start to add Village

$( "#Select_Block" ).on( "change", function() {
      var Area= $( "#Select_Block" ).val();

        $.getJSON("../assets/Dist_Block_Vill.json", function(data){
          var data_filter = data.filter(element => element.Block_Name ==Area);
         //console.log(data_filter);
            
          $("#Select_village").empty().append($('<option>', {
                  disabled: true,
                  value:"",
                  text: "Choose Village",
                  Selected:true
                }));
                for(i=0;i<data_filter.length;i++)
                {
                  $('#Select_village').append($('<option>').val(data_filter[i].Vill_Name).text(data_filter[i].Vill_Name));
                }
                
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });

      
    });


//end of village



    $('#js-example-basic-single').select2({
      tags: "true",
      placeholder: 'Choose Villages',
  multiple:true,
  width: '50%',
  style:null,
  allowClear: true
});


$('#Select_District1').on("change",function() {
  var Dist_name=$('#Select_District1').val();
  $("#js-example-basic-single").empty();
  $("#GetTotal").val("");
      //console.log(Dist_name);
      $.getJSON("../assets/Dist_block.json", function(data){
        
        var data_filter = data.filter(element => element.Dist_Name ==Dist_name);
              
              for(i=0;i<data_filter.length;i++)
              {
                //$('#js-example-basic-single').append($('<optgroup>').text(data_filter[i].Block_Name));
                //console.log(data_filter[i].Block_Name);
                var bname=data_filter[i].Block_Name;
                
                
                multiply(bname);
              }
        
          }).fail(function(){
          console.log("Fail to load Rural District");
      });

    //console.log($('#Select_District1').find(':selected').data('custom-attribute'));
  });


  function multiply(bname) {
    $.getJSON("../assets/Dist_Block_Vill.json", function(data2){
                  //console.log(bname);
                        var $optGroup = '<optgroup label ='+bname+'>';
                        var data_filter2 = data2.filter(element => element.Block_Name ==bname);
                        //console.log(data_filter2);
                        
                        for(j=0;j<data_filter2.length;j++)
                    {
                      
                      $optGroup+='<option value='+data_filter2[j].Vill_Name+'>'+data_filter2[j].Vill_Name+'</option>';
                        //$('#js-example-basic-single').append($('<option>').val(data_filter2[j].Vill_Name ).text(data_filter2[j].Vill_Name ));
                        
                    }
                  
                    
                    $('#js-example-basic-single').append($optGroup);
                      });
                    
  //console.log(bname)
}

$( "#js-example-basic-single" ).on( "change", function() {
      var valueof=$( "#js-example-basic-single" ).val();
    $("#GetTotal").val(valueof.length);
       
    $("#villageselected").val(valueof);
    //console.log(valueof);
      
    });



$( "#No1" ).on( "change", function() {
  var conceptName = $('#No1').find(":selected").val();

  if(conceptName=="Yes"){
    $("#Section_Conducted").prop('disabled', false);
  }else {
      $("#Section_Conducted").prop('disabled', true);
    }
  
  //console.log(conceptName);

});
$( "#Yes1" ).on( "change", function() {
  var conceptName = $('#Yes1').find(":selected").val();
  if(conceptName=="Yes"){
    $("#Cancellation_Section").prop('disabled', false);
  }else {
      $("#Cancellation_Section").prop('disabled', true);
    }
  //console.log(conceptName);

});

    </script>