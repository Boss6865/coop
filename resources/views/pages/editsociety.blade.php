<x-layout>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                <form class="needs-validation" action="/basic/{{$Datas->id}}" method ="POST" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Name Of The Cooperative Society" Name="Name_of_the_Society" val="{{$Datas->Name_of_the_Society}}" div_class="col-md-4"/>
                                    <x-column_-input  title="Registration No." Name="Registration_No"  val="{{$Datas->Registration_No}}" div_class="col-md-4"/>
                                    <x-column_-input  title="Date Of Registration" Name="Date_of_registration" id="Date_of_registration" val="{{$Datas->Date_of_registration}}" div_class="col-md-4"/>
                                    
                                      
                                  </div>
                                  <input type="hidden" name="Board" value="Board">
                            
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
                                    <x-column_-input  title="PAN NO. of the Society" Name="Pan_of_Society"  val="{{$Datas->Pan_of_Society}}" div_class="col-md-4"/>
                                      
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
                                          
                                          <div class="col-md-6">
                                            @php
                                            $stringArray = explode(",",$Datas->Operation_villages);
                                            @endphp

                                            <select class="form-select js-example-basic-multiple"  name="Operation_villages1" id="js-example-basic-single">
                                              <option selected disabled value="">Choose Villages</option>
                                             @forEach($stringArray as $key => $data)
                                             <option selected>{{ $data}}</option>
                                             @endforeach
                                              
                                            </select>
                                            
                                            <input type="hidden" name="Operation_villages" id="villageselected" value="{{$Datas->Operation_villages}}"/>
                                          </div>
                                          <div class="col-md-1">
                                            <input type="text" class="form-control" placeholder="Toal No." id="GetTotal" disabled="false" value="{{$key+1}}"/>
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
                                               
                                                <option  @if($Datas->Status=="Function") selected  @endif value="Function">Function</option>
                                                <option  @if($Datas->Status=="Non-function") selected  @endif value="Non-function">Non-function</option>
                                                <option  @if($Datas->Status=="Under-Liquidation") selected  @endif value="Under-Liquidation">Under Liquidation</option>
                                              </select>
                                              <div class="valid-feedback">Looks good!</div>
                                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                                          </div>
                                          
                                        </div>
                                        <div class="card-body">
                                          
                                            <div class="row g-2" id="mydiv" @if($Datas->Status=="Function")  hidden @endif >
                                                <div class="row g-2">
                                                  <div class="col-md-4">
                                                    <label for="validationCustom01" class="form-label">Nos Of Years The Society Have Stop Functioning</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            value="{{$Datas->Years_of_Non_function}}"
                                                            name="Years_of_Non_function"
                                                         
                                                        />
                                                        <div class="valid-feedback">Looks good!</div>
                                                        <div class="invalid-feedback">Connot be empty</div>
                                                </div>
                                                 
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
            <form class="needs-validation" action="/updatemange1/{{$Datas->id}}" method ="POST" novalidate>
              @csrf
              @method("PUT")
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
                <x-column_-input Name="Date_of_LastAGM" title="Date Of Last Agm" id="Date_of_LastAGM" placeholder='eg.2/02/2025' div_class="col-md-4" val="{{$data->Date_of_LastAGM}}"/>
                
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
                  

                 
                  <form class="needs-validation" action="/updatemange2/{{$Datas->id}}" method ="POST"  novalidate>
                    @csrf
                         @method("PUT")
                          @forEach($Datas->committee as $data)
                          <div class="card-header"><div class="card-title">DETAILS OF THE CHAIRMAN/PRESIDENT</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Name" Name="President_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->President_Name}}"/>
                                    <x-column_-input  title="Date of Birth" Name="President_DOB" id="President_DOB" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->President_DOB}}"/>
                                    <x-column_-input  title="Contact No." Name="President_Contact" id="validationCustom09" placeholder="Eg-9856678090" div_class="col-md-3" val="{{$data->President_Contact}}"/>
                                    <x-column_-input  title="Email" Name="President_Email" id="validationCustom09" placeholder="Eg-johndeo@email.com" div_class="col-md-3" val="{{$data->President_Email}}"/>
      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">DETAILS OF THE SECRETARY</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Name" Name="Secretary_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->Secretary_Name}}"/>
                                    <x-column_-input  title="Date of Birth" Name="Secretary_DOB" id="Secretary_DOB" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->Secretary_DOB}}"/>
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
              {{-- capitals tabs begin here --}}
              <div class="tab-pane fade" id="capital" role="tabpanel" aria-labelledby="capital-tab">

                <!-- https://gijgo.com/datepicker/example/bootstrap-5 -->
                  
                <div class="card card-info card-outline mb-4">
                  
                  @foreach($Datas->capital as $data)
                 
                  <form class="needs-validation" action="/capital/{{$data->Society_Id}}" method ="POST" novalidate>
                    @csrf
                    @method('PUT')
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Admission Fee" Name="Admission_fee" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="old('Admission_fee',$data->Admission_fee)"/>
                                    <x-column_-input  title="Face Value Of Each Share" Name="Share_face_value" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="old('Share_face_value',$data->Share_face_value)"/>
                                    <x-column_-input  title="Authorized Share Capital" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Authorize_share_capital"/>
                                    
                                      
                                  </div>

                          </div>
                          <div class="card-header"><div class="card-title">SHARE CAPITAL CONTRIBUTION</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Individual" Name="Individual_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="old('Individual_share',$data->Individual_share)"/>
                                    <x-column_-input  title="Govt." Name="Govt_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Govt_share"/>
                                    <x-column_-input  title="Other Cooperative Institutions (State / Primary / Etc) Level" Name="Other_coop_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Other_coop_share"/>
                                    
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Primary Activitiy" Name="Primary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Primary_Activity"/>
                                    <x-column_-input  title="Secondary Activitiy" Name="Secondary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Secondary_Activity"/>
                                    <x-column_-input  title="Tertiary Activitiy" Name="Tertiary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Tertiary_Activity"/>
                                    <x-column_-input  title="Others (Mention in)" Name="Other_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Other_Activity"/>

                                  </div>
                          </div>

                          
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Society Undertaken Pds (Fair Price Shop)" Name="Society_Fair_Price_Shop" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Society_Fair_Price_Shop"/>
                                    <x-column_-input  title="Year Of Latest Audit Completed" Name="Latest_Audit_complete" id="Latest_Audit_complete" placeholder="Eg-100" div_class="col-md-3" :val="$data->Latest_Audit_complete"/>
                                      
                                      <!--begin::Col-->
                                      <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Category Of Audit / Audit Class</label>
                                            <select Name="Audit_Class" class="form-select target" id="selectid3" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($data->Audit_Class=="A") selected @endif>A</option>
                                                <option @if($data->Audit_Class=="B") selected @endif>B</option>
                                                <option @if($data->Audit_Class=="C") selected @endif>C</option>
                                                <option @if($data->Audit_Class=="D") selected @endif>D</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <x-column_-input  title="WORKING CAPITAL" Name="Working_Capitals" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Working_Capitals"/>
                                        <!--end::Col-->
                                      
                          </div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Business Turnover" Name="Business_turnover" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Business_turnover"/>
                                    <x-column_-input  title="Total Reserve" Name="Total_reserve" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Total_reserve"/>
                                    <x-column_-input  title="Whether The Society Is Making Profit/Loss" Name="Profit_loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Profit_loss"/>
                                    <x-column_-input  title="Net Profit(+)/Loss(-) Of The Society (Amount In)" Name="Net_Profit_Loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3" :val="$data->Net_Profit_Loss"/>
                                      
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACCUMULATED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Profit" Name="Profit" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Profit"/>
                                    <x-column_-input  title="Loss" Name="Loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Loss"/>
                                      
                                  </div>
                          </div>
                          <div class="card-body">
                                  <div id= "newinput1" class="row g-2">
                                     
                                      <!--begin::Col-->
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Whether Dividend Decleared By The Society</label>
                                            <select name="Declear_Dividen" class="form-select target" id="selectid" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($data->Declear_Dividen=="Yes") selected @endif>Yes</option>
                                                <option @if($data->Declear_Dividen=="No") selected @endif>No</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        @if($data->Declear_Dividen=="Yes")
                                        <div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Members</label>
                                          <input type="text" Name="Yes_Dividen_Amount_topaid" class="form-control" placeholder="Eg-1000"  value="{{$data->Yes_Dividen_Amount_topaid}}"> </div>
                                          <div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Govt.</label>
                                          <input type="text" Name="Yes_Dividen_Amount_topaid_Govt" class="form-control" placeholder="Eg-1000"  value="{{$data->Yes_Dividen_Amount_topaid_Govt}}"> </div>
                                          <div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Challan No. & Date To Govt.</label>
                                          <input type="text" Name="Yes_Dividen_Challan_date" id="Yes_Dividen_Challan_date" class="form-control mydate" placeholder="Eg-122"  value="{{$data->Yes_Dividen_Challan_date}}"> </div>
                                          @endif
                                        <!--end::Col-->
                                  </div>
                          </div>
                          <div class="card-body">
                                  <div id= "newinput2" class="row g-2">
                                     
                                      <!--begin::Col-->
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Whether  CDF Paid By The Society</label>
                                            <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($data->CDF_Paid=="Yes") selected @endif>Yes</option>
                                                <option @if($data->CDF_Paid=="No") selected @endif> No</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <!--end::Col-->
                                        @if($data->CDF_Paid=="Yes")
                                        <div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Amount Paid</label>
                                          <input type="text" Name="CDf_Yes_paidamount" class="form-control" placeholder="Eg-1000"  value="{{$data->CDf_Yes_paidamount}}"> </div>
                                          <div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Date  Paid</label>
                                          <input type="text" Name="CDf_Yes_paidDate" id="CDf_Yes_paidDate" class="form-control mydate" placeholder="Eg-12/12/2005"  value="{{$data->CDf_Yes_paidDate}}"> </div>
                                          @endif
                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A GRANT</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Types Of Grant" Name="Grant_Type" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Type"/>
                                    <x-column_-input  title="Year" Name="Grant_Year" id="Grant_Year" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Year"/>
                                    <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Deptt_Name"/>
                                    <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Sanctioned"/>
                                    <x-column_-input  title="Grant Release" Name="Grant_Release" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Release"/>
                                    <x-column_-input  title="Date Of Release" Name="Date_release" id="Date_release" placeholder="Eg-100" div_class="col-md-2" :val="$data->Date_release"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</div></div>
                          <div class="card-body">
                                  <div class="row g-2">

                                    <x-column_-input  title="Types Of Aid" Name="Aid_Type" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Aid_Type"/>
                                    <x-column_-input  title="Year" Name="Aid_Year" id="Aid_Year" placeholder="Eg-100" div_class="col-md-2" :val="$data->Aid_Year"/>
                                    <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Agencies_Name"/>
                                    <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Aid_Sanctioned"/>
                                    <x-column_-input  title="Grant Loan Release " Name="Aid_Grant_Release" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Aid_Grant_Release"/>
                                    <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Subsidies"/>

                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">REFUND OF AID SANCTIONED AS  LOAN</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Loan Sanctioned" Name="Loan_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Loan_Sanctioned"/>
                                    <x-column_-input  title="Loan Refunded " Name="Loan_Refunded" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Loan_Refunded"/>
                                    <x-column_-input  title="Loan Outstanding" Name="Loan_Outstanding" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->Loan_Outstanding"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">MANAGERIAL SUBSIDY RECEIVED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Year" Name="MANAGERIAL_SUBSIDY_RECEIVED_Year" id="MANAGERIAL_SUBSIDY_RECEIVED_Year" placeholder="Eg-100" div_class="col-md-4" :val="$data->MANAGERIAL_SUBSIDY_RECEIVED_Year"/>
                                    <x-column_-input  title="Amount" Name="MANAGERIAL_SUBSIDY_RECEIVED_Amount" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4" :val="$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount"/>
                                      
                                      
                                  </div>
                          </div>
                        
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Update</button>
                      </div>
                  </form>
                  @endforeach
          </div>
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
                      
                      $optGroup+='<option>'+data_filter2[j].Vill_Name+'</option>';
                        //$('#js-example-basic-single').append($('<option>').val(data_filter2[j].Vill_Name ).text(data_filter2[j].Vill_Name ));
                        
                    }
                  
                    
                    $('#js-example-basic-single').append($optGroup);
                      });
                    
  //console.log(bname)
}

$( "#js-example-basic-single" ).on( "change", function() {
      var valueof=$('#js-example-basic-single').val();
      //var valueof=$('#js-example-basic-single').select2('data');
    $("#GetTotal").val(valueof.length);
       
    $("#villageselected").val(valueof);
    console.log(valueof);
      
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
    {{-- capital jquery --}}

<script type="text/javascript">
  $( "#selectid" ).on( "change", function() {
   
      var singleValues = $( "#selectid" ).val();
      //console.log(singleValues);
    if(singleValues=='Yes'){
      newRowAdd =
                  '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Members</label>' +
                  '<input type="text" Name="Yes_Dividen_Amount_topaid" class="form-control" placeholder="Eg-1000" required> </div>'+
                  '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Govt.</label>' +
                  '<input type="text" Name="Yes_Dividen_Amount_topaid_Govt" class="form-control" placeholder="Eg-1000" required> </div>'+
                  '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Challan No. & Date To Govt.</label>' +
                  '<input type="text" Name="Yes_Dividen_Challan_date" id="Yes_Dividen_Challan_date" class="form-control" placeholder="Eg-122" required> </div>';
  
              $('#newinput1').append(newRowAdd);
  
              $('#Yes_Dividen_Challan_date').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });

  
  
    }
    else if(singleValues=='No'){
      $(".toremove").remove();
    }
    
  } );
  
  $( ".target2" ).on( "change", function() {
      var singleValues = $( "#selectid2" ).val();
    if(singleValues=='Yes'){
      newRowAdd =
                  '<div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Amount Paid</label>' +
                  '<input type="text" Name="CDf_Yes_paidamount" class="form-control" placeholder="Eg-1000" required> </div>'+
                  '<div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Date  Paid</label>' +
                  '<input type="text" Name="CDf_Yes_paidDate" id="CDf_Yes_paidDate" class="form-control mydate" placeholder="Eg-12/12/2005" required> </div>';
  
              $('#newinput2').append(newRowAdd);
  
              $('#CDf_Yes_paidDate').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });

  
  
    }
    else if(singleValues=='No'){
      $(".toremove2").remove();
    }
    
  } );
         
      </script>

<script>
  $('#Date_of_registration').datepicker({
      uiLibrary: 'bootstrap5',
      format: 'yyyy-mm-dd'
  });
  $('#Date_of_LastAGM').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd'
        });

        $('#President_DOB').datepicker({
      uiLibrary: 'bootstrap5',
      format: 'yyyy-mm-dd'
  });
  $('#Secretary_DOB').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });


      $('#Latest_Audit_complete').datepicker({
      uiLibrary: 'bootstrap5',
      format: 'yyyy-mm-dd'
  });
  $('#Grant_Year').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });
      $('#Aid_Year').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });
      $('#Date_release').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });
      $('#MANAGERIAL_SUBSIDY_RECEIVED_Year').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });

      $('.mydate').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });
</script>