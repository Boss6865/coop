<x-layout>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <x-navigation title="{{ $Datas->Name_of_the_Society }}" Nav="Edit Society" />
     <style>
      .offshow{
  display: none;
}
     </style>
    <div class="card card-info card-outline mb-4">
        <div class="card-body my-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==444) active @endif " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">BASIC INFORMATION</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==555)  active @endif" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">MANAGEMENT - I</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==666)  active @endif" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">MANAGEMENT - II</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==777)  active @endif" id="capital-tab" data-bs-toggle="tab" data-bs-target="#capital" type="button" role="tab" aria-controls="capital" aria-selected="false">CAPITALS</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==888)  active @endif" id="investment-tab" data-bs-toggle="tab" data-bs-target="#investment" type="button" role="tab" aria-controls="investment" aria-selected="false">INVESTMENT ETC</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==999)  active @endif" id="borrowing-tab" data-bs-toggle="tab" data-bs-target="#borrowing" type="button" role="tab" aria-controls="borrowing" aria-selected="false">BORROWING</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==000)  active @endif" id="asset-tab" data-bs-toggle="tab" data-bs-target="#asset" type="button" role="tab" aria-controls="asset" aria-selected="false">COMMON ASSETS</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link @if($val==111)  active @endif" id="loan-tab" data-bs-toggle="tab" data-bs-target="#loan" type="button" role="tab" aria-controls="loan" aria-selected="false">GOVT. LOAN</button>
              </li>
            </ul>
           
            <div class="tab-content mt-3" id="myTabContent">
              <div class="tab-pane fade @if($val==444) show  active @endif " id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                         @error('Sector_Type')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                              @error('Location_Area')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                                @error('District')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                               @error('Block')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                                 @error('Circle')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                              @error('Village')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
                                          </div>
                                         
                                            
                                                <x-column_-input  title="Post Office" Name="Post_office"  val="{{$Datas->Post_office}}" div_class="col-md-3"/>
                                                <x-column_-input  title="Police Station" Name="Police_Station"  val="{{$Datas->Police_Station}}" div_class="col-md-3"/>
                                                <x-column_-input  title="Pincode" Name="Pincode"  val="{{$Datas->Pincode}}" div_class="col-md-3"/>
                                      </div>


                                      <div class="card-header"><div class="card-title">Area of Operation</div></div>
                                      <div class="card-body">
                                        <div class="row g-2">
                                          <div class="col-md-3">
                                            <select class="form-select"  name="Operation_District" id="Select_District1" required >
                                              <option selected disabled value="">Choose District</option>
                                              @forEach(json_decode(file_get_contents('assets/District.json')) as $sector)
                                              
                                              <option value="{{ $sector->Dist_Name}}" 
                                                @if($Datas->Operation_District==$sector->Dist_Name)
                                                selected="selected"
                                                @endif
                                                
                                                >{{ $sector->Dist_Name}}</option>
                                              @endforeach
                                            </select>
                                             @error('Operation_District')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
                                          </div>
                                          
                                          <div class="col-md-8">
                                            @php
                                            $stringArray = explode(",",$Datas->Operation_villages);
                                            @endphp

                                            <select class="form-select js-example-basic-multiple"  name="Operation_villages1" id="js-example-basic-single" multiple="multiple" tyle="width: 100%">
                                             
                                             @forEach($stringArray as $key => $data)
                                             <option selected>{{ $data}}</option>
                                             @endforeach
                                              
                                            </select>
                                            @error('Operation_villages1')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                            <select class="form-select" name="Affiliation" id="Affiliation">
                                              
                                              @if($Datas->Affiliation =="No")
                                              <option value="Yes">Yes</option>
                                              <option selected value="No">No</option>
                                              @else
                                              @forEach(json_decode(file_get_contents('assets/affiliation.json')) as $sector)
                            
                                                <option value="{{$sector->Affiliation}}" 
                                                @if($Datas->Affiliation === $sector->Affiliation)
                                                selected
                                                @endif
                                                
                                                >{{$sector->Affiliation}}</option>
                                           
                                              @endforeach
                                              @endif
                                              
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                            @error('Affiliation')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                               @error('Status')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
                                                       @error('Status')
                                          <div style="color:red">{{$message}}</div>
                                        @enderror
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
              <div class="tab-pane fade @if($val==555) show  active @endif " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  @if(!empty($Datas->membersociety->count()))
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
                     <x-column_-input Name="Trained_Female" title="Trained Female" id="" placeholder="eg.2" div_class="col-md-3" inclass="numbers" val="{{$data->Trained_Female}}"/>
                     
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
                         @else
                  <div style="color:red">
                         <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                      <a href="/management1/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                      </div>
                  @endif
                
           
                  <!--end::Form-->
               
</div>
                <!--end::Form Validation-->
              </div>
              <div class="tab-pane fade @if($val==666) show  active @endif " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="card card-info card-outline mb-4">
                  
                  @if(!empty($Datas->committee->count()))
                 
                  <form class="needs-validation" action="/updatemange2/{{$Datas->id}}" method ="POST"  novalidate>
                    @csrf
                         @method("PUT")
                          @forEach($Datas->committee as $data)
                          <div class="card-header"><div class="card-title">DETAILS OF THE CHAIRMAN/PRESIDENT</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Name" Name="President_Name" id="" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->President_Name}}"/>
                                    <x-column_-input  title="Age/Date of Birth" Name="President_DOB" id="President_DOB" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->President_DOB}}"/>
                                    <x-column_-input  title="Contact No." Name="President_Contact" id="" placeholder="Eg-9856678090" div_class="col-md-3" val="{{$data->President_Contact}}"/>
                                    <x-column_-input  title="Email" Name="President_Email" id="" placeholder="Eg-johndeo@email.com" div_class="col-md-3" val="{{$data->President_Email}}"/>
      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">DETAILS OF THE SECRETARY</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Name" Name="Secretary_Name" id="" placeholder="Eg-John-Deo" div_class="col-md-3" val="{{$data->Secretary_Name}}"/>
                                    <x-column_-input  title="Age/Date of Birth" Name="Secretary_DOB" id="Secretary_DOB" placeholder="2003-11-19" div_class="col-md-3" val="{{$data->Secretary_DOB}}"/>
                                    <x-column_-input  title="Contact No." Name="Secretary_Contact" id="" placeholder="Eg-9856678090" div_class="col-md-3" val="{{$data->Secretary_Contact}}"/>
                                    <x-column_-input  title="Email" Name="Secretary_Email" id="" placeholder="Eg-johndeo@email.com" div_class="col-md-3" val="{{$data->Secretary_Email}}"/>
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">NAME OF THE MANAGING COMMITTEE MEMBERS / BOARD OF DIRECTOR</div></div>
                          <div class="card-body">
                                  <div id="newinput" class="row g-2">
                                    @if(is_array(json_decode($data->Member_Name)))
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
                                     @else
                                     @php $MemberName=explode(",", $data->Member_Name); $MemberContact=explode(",", $data->Member_Contact); @endphp
                   
                                          
                                     @foreach ($MemberName as $key => $name)
                                     <div id="row" class="row g-2">
                                          
                                      <div class="col-md-4">
                                        <input name="Member_Name[]" type="text" class="form-control" placeholder="Eg-John-Deo" required value="{{$name}}"> 
                                      </div>
                                        <div class="col-md-4">
                                          <input name="Member_Contact[]" type="text" class="form-control" placeholder="Eg-9856678090" required value="@if(isset($MemberContact[$key])) {{$MemberContact[$key]}} @endif"> 
                                        </div>
                                        @if($key==0)
                                        <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                        @else
                                        <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button>
                                        @endif

                                    </div>
                                     @endforeach

                                    @endif
                                    
                          </div>
                          </div>
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Update</button>
                      </div>
                      @endforeach
                  </form>
                        <!--end::Form-->
                        
                        
                        <!--end::JavaScript-->
                         @else
                  <div style="color:red">
                         <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                      <a href="/management2/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                      </div>
                  @endif
                </div>
              </div>
              {{-- capitals tabs begin here --}}
              <div class="tab-pane fade @if($val==777) show  active @endif " id="capital" role="tabpanel" aria-labelledby="capital-tab">

                <!-- https://gijgo.com/datepicker/example/bootstrap-5 -->
                  
                <div class="card card-info card-outline mb-4">
                  @if(!empty($Datas->capital->count()))
                 
                  @foreach($Datas->capital as $data)
               
                  <form class="needs-validation" action="/capital/{{$Datas->id}}" method ="POST" novalidate>
                    @csrf
                    @method('PUT')
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Admission Fee" Name="Admission_fee" id="" placeholder="Eg-100" div_class="col-md-4" :val="old('Admission_fee',$data->Admission_fee)"/>
                                    <x-column_-input  title="Face Value Of Each Share" Name="Share_face_value" id="" placeholder="Eg-100" div_class="col-md-4" :val="old('Share_face_value',$data->Share_face_value)"/>
                                    <x-column_-input  title="Authorized Share Capital" Name="Authorize_share_capital" id="" placeholder="Eg-100" div_class="col-md-4" :val="$data->Authorize_share_capital"/>
                                    
                                      
                                  </div>

                          </div>
                          <div class="card-header"><div class="card-title">SHARE CAPITAL CONTRIBUTION</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Individual" Name="Individual_share" id="" placeholder="Eg-100" div_class="col-md-4" :val="old('Individual_share',$data->Individual_share)"/>
                                    <x-column_-input  title="Govt." Name="Govt_share" id="" placeholder="Eg-100" div_class="col-md-4" :val="$data->Govt_share"/>
                                    <x-column_-input  title="Other Cooperative Institutions (State / Primary / Etc) Level" Name="Other_coop_share" id="" placeholder="Eg-100" div_class="col-md-4" :val="$data->Other_coop_share"/>
                                    
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Primary Activitiy" Name="Primary_Activity" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Primary_Activity"/>
                                    <x-column_-input  title="Secondary Activitiy" Name="Secondary_Activity" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Secondary_Activity"/>
                                    <x-column_-input  title="Tertiary Activitiy" Name="Tertiary_Activity" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Tertiary_Activity"/>
                                    
                                        {{-- <div class="col-md-3">
                                          <label for="validationCustom01" class="form-label">Primary Activitiy</label>
                                          <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                            <option  @if($data->Primary_Activity=="credit") selected @endif>CREDIT</option>
                                      <option   @if($data->Primary_Activity=="handloom") selected @endif>HANDLOOM</option>
                                      <option   @if($data->Primary_Activity=="handicraft") selected @endif>HANDICRAFT</option>
                                      <option  @if($data->Primary_Activity=="consumer") selected @endif>CONSUMER</option>
                                      <option  @if($data->Primary_Activity=="dairy") selected @endif>DAIRY</option>
                                      <option   @if($data->Primary_Activity=="farming") selected @endif>FARMING</option>
                                      <option  @if($data->Primary_Activity=="fishery") selected @endif>FISHERIES</option>
                                      <option   @if($data->Primary_Activity=="market") selected @endif>MARKETING</option>
                                      <option   @if($data->Primary_Activity=="processing") selected @endif>PROCESSING</option>
                                      <option   @if($data->Primary_Activity=="transport") selected @endif>TRANSPORT</option>
                                      <option   @if($data->Primary_Activity=="livestock") selected @endif>LIVESTOCK</option>
                                      <option   @if($data->Primary_Activity=="tourism") selected @endif>TOURISM</option>
                                      <option   @if($data->Primary_Activity=="jingkiengjri") selected @endif>TOURISM</option>
                                      <option  @if($data->Primary_Activity=="industry") selected @endif>INDUSTRIAL</option>
                                      <option  @if($data->Primary_Activity=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                      <option @if($data->Primary_Activity=="labour") selected @endif>LABOUR CONTRACT</option>
                                      <option  @if($data->Primary_Activity=="housing") selected @endif>HOUSING</option>
                                      <option  @if($data->Primary_Activity=="lrb") selected @endif>Mariang Jingkieng Jri</option>
                                      <option  @if($data->Primary_Activity=="Banking") selected @endif>Banking Service</option>
                                      <option  @if($data->Primary_Activity=="other") selected @endif>OTHERS TYPES</option>
                                          </select>
                                          <div class="valid-feedback">Looks good!</div>
                                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                                      </div>
                                      <div class="col-md-3">
                                        <label for="validationCustom01" class="form-label">Secondary Activitiy</label>
                                        <select Name="Secondary_Activity" class="form-select target" id="selectid3">
                                          <option selected disabled value="">Choose...</option>
                                             <option value="credit"  @if($data->Secondary_Activity=="credit") selected @endif>CREDIT</option>
                                      <option value="handloom"  @if($data->Secondary_Activity=="handloom") selected @endif>HANDLOOM</option>
                                      <option value="handicraft"  @if($data->Secondary_Activity=="handicraft") selected @endif>HANDICRAFT</option>
                                      <option value="consumer"  @if($data->Secondary_Activity=="consumer") selected @endif>CONSUMER</option>
                                      <option value="dairy"  @if($data->Secondary_Activity=="dairy") selected @endif>DAIRY</option>
                                      <option value="farming"  @if($data->Secondary_Activity=="farming") selected @endif>FARMING</option>
                                      <option value="fishery" @if($data->Secondary_Activity=="fishery") selected @endif>FISHERIES</option>
                                      <option value="market"  @if($data->Secondary_Activity=="market") selected @endif>MARKETING</option>
                                      <option value="processing"  @if($data->Secondary_Activity=="processing") selected @endif>PROCESSING</option>
                                      <option value="transport"  @if($data->Secondary_Activity=="transport") selected @endif>TRANSPORT</option>
                                      <option value="livestock"  @if($data->Secondary_Activity=="livestock") selected @endif>LIVESTOCK</option>
                                      <option value="tourism"  @if($data->Secondary_Activity=="tourism") selected @endif>TOURISM</option>
                                      <option value="jingkiengjri"  @if($data->Secondary_Activity=="jingkiengjri") selected @endif>TOURISM</option>
                                      <option value="industry"  @if($data->Secondary_Activity=="industry") selected @endif>INDUSTRIAL</option>
                                      <option value="tandc"  @if($data->Secondary_Activity=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                      <option value="labour" @if($data->Secondary_Activity=="labour") selected @endif>LABOUR CONTRACT</option>
                                      <option value="housing" @if($data->Secondary_Activity=="housing") selected @endif>HOUSING</option>
                                       <option  @if($data->Secondary_Activity=="lrb") selected @endif>Mariang Jingkieng Jri</option>
                                      <option  @if($data->Secondary_Activity=="Banking") selected @endif>Banking Service</option>
                                      <option value="other" @if($data->Secondary_Activity=="other") selected @endif>OTHERS TYPES</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                      <div class="col-md-3">
                                  <label for="validationCustom01" class="form-label">Tertiary Activitiy</label>
                                  <select Name="Tertiary_Activity" class="form-select target" id="selectid3" >
                                     <option selected disabled value="">Choose...</option>
                                       <option value="credit"  @if($data->Tertiary_Activity=="credit") selected @endif>CREDIT</option>
                                      <option value="handloom"  @if($data->Tertiary_Activity=="handloom") selected @endif>HANDLOOM</option>
                                      <option value="handicraft"  @if($data->Tertiary_Activity=="handicraft") selected @endif>HANDICRAFT</option>
                                      <option value="consumer"  @if($data->Tertiary_Activity=="consumer") selected @endif>CONSUMER</option>
                                      <option value="dairy"  @if($data->Tertiary_Activity=="dairy") selected @endif>DAIRY</option>
                                      <option value="farming"  @if($data->Tertiary_Activity=="farming") selected @endif>FARMING</option>
                                      <option value="fishery" @if($data->Tertiary_Activity=="fishery") selected @endif>FISHERIES</option>
                                      <option value="market"  @if($data->Tertiary_Activity=="market") selected @endif>MARKETING</option>
                                      <option value="processing"  @if($data->Tertiary_Activity=="processing") selected @endif>PROCESSING</option>
                                      <option value="transport"  @if($data->Tertiary_Activity=="transport") selected @endif>TRANSPORT</option>
                                      <option value="livestock"  @if($data->Tertiary_Activity=="livestock") selected @endif>LIVESTOCK</option>
                                      <option value="tourism"  @if($data->Tertiary_Activity=="tourism") selected @endif>TOURISM</option>
                                      <option value="jingkiengjri"  @if($data->Tertiary_Activity=="jingkiengjri") selected @endif>TOURISM</option>
                                      <option value="industry"  @if($data->Tertiary_Activity=="industry") selected @endif>INDUSTRIAL</option>
                                      <option value="tandc"  @if($data->Tertiary_Activity=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                      <option value="labour" @if($data->Tertiary_Activity=="labour") selected @endif>LABOUR CONTRACT</option>
                                      <option value="housing" @if($data->Tertiary_Activity=="housing") selected @endif>HOUSING</option>
                                      <option  @if($data->Tertiary_Activity=="lrb") selected @endif>Mariang Jingkieng Jri</option>
                                      <option  @if($data->Tertiary_Activity=="Banking") selected @endif>Banking Service</option>
                                      <option value="other" @if($data->Tertiary_Activity=="other") selected @endif>OTHERS TYPES</option>
                                     
                                          
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div> --}}
                                    <x-column_-input  title="Others (Mention in)" Name="Other_Activity" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Other_Activity"/>

                                  </div>
                          </div>

                          
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    {{-- <x-column_-input  title="Society Undertaken Pds (Fair Price Shop)" Name="Society_Fair_Price_Shop" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Society_Fair_Price_Shop"/> --}}
                                    <div class="col-md-3">
                                      <label for="" class="form-label">Society Undertaken Pds (Fair Price Shop)</label>
                                      <select Name="Society_Fair_Price_Shop" class="form-select target" id="selectid3" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option @if($data->Society_Fair_Price_Shop=="Yes") selected @endif>Yes</option>
                                          <option @if($data->Society_Fair_Price_Shop=="No") selected @endif>No</option>
                                         
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div>
                                    
                                      {{-- <x-column_-input  title="Year Of Latest Audit Completed" Name="Latest_Audit_complete" id="Latest_Audit_complete" placeholder="Eg-100" div_class="col-md-3" :val="$data->Latest_Audit_complete"/> --}}
                                      <div class="col-md-3">
                                        <label for="validationCustom01" class="form-label">Year Of Latest Audit Completed</label>
                                        <select Name="Latest_Audit_complete" class="form-select target" id="Latest_Audit_complete" required>
                                          <option @if($data->Audit_Class=="Not Yet Audited") selected @endif>Not Yet Audited</option>
                                            <option selected disabled value="{{$data->Latest_Audit_complete}}">{{$data->Latest_Audit_complete}}</option>
                                            
                                           
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                      <!--begin::Col-->
                                      <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Category Of Audit / Audit Class</label>
                                            <select Name="Audit_Class" class="form-select target" id="selectid3" required>
                                                
                                                <option @if($data->Audit_Class=="Not Yet Audited") selected @endif>Not Yet Audited</option>
                                                <option @if($data->Audit_Class=="A") selected @endif>A</option>
                                                <option @if($data->Audit_Class=="B") selected @endif>B</option>
                                                <option @if($data->Audit_Class=="C") selected @endif>C</option>
                                                <option @if($data->Audit_Class=="D") selected @endif>D</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <x-column_-input  title="WORKING CAPITAL" Name="Working_Capitals" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Working_Capitals"/>
                                        <!--end::Col-->
                                      
                          </div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Business Turnover" Name="Business_turnover" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Business_turnover"/>
                                    <x-column_-input  title="Total Reserve" Name="Total_reserve" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Total_reserve"/>
                                    {{-- <x-column_-input  title="Whether The Society Is Making Profit/Loss" Name="Profit_loss" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Profit_loss"/> --}}
                                      <div class="col-md-3">
                                      <label for="validationCustom01" class="form-label">Whether The Society Is Making Profit/Loss</label>
                                      <select Name="Profit_loss" class="form-select target" id="selectid3" required>
                                         
                                          <option @if($data->Profit_loss=="Profit") selected @endif>Profit</option>
                                          <option @if($data->Profit_loss=="Loss") selected @endif>Loss</option>
                                          <option @if($data->Profit_loss=="Neither Profit/Loss") selected @endif>Neither Profit/Loss</option>
                                          
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div>
                                    <x-column_-input  title="Net Profit(+)/Loss(-) Of The Society (Amount In)" Name="Net_Profit_Loss" id="" placeholder="Eg-100" div_class="col-md-3" :val="$data->Net_Profit_Loss"/>
                                      
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACCUMULATED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Profit" Name="Profit" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Profit"/>
                                    <x-column_-input  title="Loss" Name="Loss" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Loss"/>
                                      
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
                                  <div class="row g-2" id="newinput_grand_aid">
                                    @if(is_array(json_decode($data->Grant_Type)))
                                    @foreach (json_decode($data->Grant_Type) as $key => $crew)
                                      @if($key==0)
                                        <x-column_-input  title="Types Of Grant" Name="Grant_Type[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="$crew"/>
                                        @isset(json_decode($data->Grant_Year)[$key])
                                       <x-column_-input  title="Year" Name="Grant_Year[]" id="Grant_Year" placeholder="Eg-100" div_class="col-md-1" :val="json_decode($data->Grant_Year)[$key]"/>
                                          @else
                                          <x-column_-input  title="Year" Name="Grant_Year[]" id="Grant_Year" placeholder="Eg-100" div_class="col-md-1" />
                                        @endisset

                                        @isset(json_decode($data->Deptt_Name)[$key])
                                       <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="json_decode($data->Deptt_Name)[$key]"/>
                                          @else
                                          <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name[]" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                        @endisset

                                         @isset(json_decode($data->Grant_Sanctioned)[$key])
                                       <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="json_decode($data->Grant_Sanctioned)[$key]"/>
                                          @else
                                          <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned[]" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                        @endisset
                                        
                                         @isset(json_decode($data->Grant_Release)[$key])
                                        <x-column_-input  title="Grant Release" Name="Grant_Release[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="json_decode($data->Grant_Release)[$key]"/>
                                          @else
                                          <x-column_-input  title="Grant Release" Name="Grant_Release[]" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                        @endisset
                                        
                                        @isset(json_decode($data->Date_release)[$key])
                                        <x-column_-input  title="Date Of Release" Name="Date_release[]" id="Date_release" placeholder="Eg-100" div_class="col-md-2" :val="json_decode($data->Date_release)[$key]"/>
                                          @else
                                        <x-column_-input  title="Date Of Release" Name="Date_release[]" id="Date_release" placeholder="Eg-100" div_class="col-md-2"/>
                                        @endisset
                                       
                                        
                                       <div class="col-md-1">
                                      <button type="button" id="rowAdder_grand_aid" class="btn btn-secondary"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                    </div>
                                          @else
                                          <div id="row" class="row g-2">
                                           
                                          <div class="col-md-2">
                                          <input name="Grant_Type[]" type="text" class="form-control numbers" value="{{$crew}}" required> </div>
                                          <div class="col-md-1">
                                            
                                          <input name="Grant_Year[]" type="text" class="form-control numbers" value="{{json_decode($data->Grant_Year)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Deptt_Name[]" type="text" class="form-control numbers" value="{{json_decode($data->Deptt_Name)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Grant_Sanctioned[]" type="text" class="form-control numbers" value="{{json_decode($data->Grant_Sanctioned)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Grant_Release[]" type="text" class="form-control numbers" value="{{json_decode($data->Grant_Release)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Date_release[]" type="text" class="form-control numbers" value="{{json_decode($data->Date_release)[$key]}}" required> </div>
                                          <button type="button" id="Delete_loan_aid_Row" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                      @endif
                                    @endforeach
                                    @else
                                    <x-column_-input  title="Types Of Grant" Name="Grant_Type[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Type"/>
                                    <x-column_-input  title="Year" Name="Grant_Year[]" id="Grant_Year" placeholder="Eg-100" div_class="col-md-1" :val="$data->Grant_Year"/>
                                    <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Deptt_Name"/>
                                    <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Sanctioned"/>
                                    <x-column_-input  title="Grant Release" Name="Grant_Release[]" id="" placeholder="Eg-100" div_class="col-md-2" :val="$data->Grant_Release"/>
                                    <x-column_-input  title="Date Of Release" Name="Date_release[]" id="Date_release" placeholder="Eg-100" div_class="col-md-2" :val="$data->Date_release"/>
                                      <div class="col-md-1">
                                      <button type="button" id="rowAdder_grand_aid" class="btn btn-secondary"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                    </div>
                                    @endif
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</div></div>
                          <div class="card-body">
                                  <div class="row g-2" id="newinput_loan_aid">
                                    @if(is_array(json_decode($data->Aid_Type)))
                                      @foreach (json_decode($data->Aid_Type) as $key => $crew)
                                      @if($key==0)
                                        <x-column_-input  title="Types Of Aid" Name="Aid_Type[]" id=""  div_class="col-md-2" :val="$crew"/>
                                        @isset(json_decode($data->Aid_Year)[$key])
                                        <x-column_-input  title="Year" Name="Aid_Year[]" id=""  div_class="col-md-1" :val="json_decode($data->Aid_Year)[$key]"/>
                                          @else
                                           <x-column_-input  title="Year" Name="Aid_Year[]" id=""  div_class="col-md-1"/>
                                        @endisset
                                        
                                        @isset(json_decode($data->Agencies_Name)[$key])
                                        <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name[]" id=""  div_class="col-md-2" :val="json_decode($data->Agencies_Name)[$key]"/>
                                          @else
                                           <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name[]" id=""  div_class="col-md-2"/>
                                        @endisset
                                        
                                         @isset(json_decode($data->Aid_Sanctioned)[$key])
                                        <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned[]" id=""  div_class="col-md-2" :val="json_decode($data->Aid_Sanctioned)[$key]"/>
                                          @else
                                           <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned[]" id=""  div_class="col-md-2"/>
                                        @endisset
                                         @isset(json_decode($data->Aid_Grant_Release)[$key])
                                         <x-column_-input  title="Grant Loan Release" Name="Aid_Grant_Release[]" id=""  div_class="col-md-2" :val="json_decode($data->Aid_Grant_Release)[$key]"/>
                                          @else
                                            <x-column_-input  title="Grant Loan Release" Name="Aid_Grant_Release[]" id=""  div_class="col-md-2"/>
                                        @endisset
                                        @isset(json_decode($data->Grant_Subsidies)[$key])
                                         <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies[]"  div_class="col-md-2" :val="json_decode($data->Grant_Subsidies)[$key]"/>
                                          @else
                                            <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies[]"  div_class="col-md-2"/>
                                        @endisset
                                       
                                        
                                          <div class="col-md-1">
                                      <button type="button" id="rowAdder_loan_aid" class="btn btn-secondary"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                    </div>
                                      @else
                                          <div id="row" class="row g-2">
                                          <div class="col-md-2">
                                          <input name="Aid_Type[]" type="text" class="form-control numbers" value="{{$crew}}" required> </div>
                                          <div class="col-md-1">
                                          <input name="Aid_Year[]" type="text" class="form-control numbers" value="{{json_decode($data->Aid_Year)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Agencies_Name[]" type="text" class="form-control numbers" value="{{json_decode($data->Agencies_Name)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Aid_Sanctioned[]" type="text" class="form-control numbers" value="{{json_decode($data->Aid_Sanctioned)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Aid_Grant_Release[]" type="text" class="form-control numbers" value="{{json_decode($data->Aid_Grant_Release)[$key]}}" required> </div>
                                          <div class="col-md-2">
                                          <input name="Grant_Subsidies[]" type="text" class="form-control numbers" value="{{json_decode($data->Grant_Subsidies)[$key]}}" required> </div>
                                          <button type="button" id="Delete_loan_aid_Row" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                      @endif
                                    @endforeach
                                    @else
                                    <x-column_-input  title="Types Of Aid" Name="Aid_Type[]" id=""  div_class="col-md-2" :val="$data->Aid_Type"/>
                                    <x-column_-input  title="Year" Name="Aid_Year[]" id="Aid_Year"  div_class="col-md-1" :val="$data->Aid_Year"/>
                                    <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name[]" id=""  div_class="col-md-2" :val="$data->Agencies_Name"/>
                                    <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned[]" id=""  div_class="col-md-2" :val="$data->Aid_Sanctioned"/>
                                    <x-column_-input  title="Grant Loan Release " Name="Aid_Grant_Release[]" id=""  div_class="col-md-2" :val="$data->Aid_Grant_Release"/>
                                    <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies[]" id=""  div_class="col-md-2" :val="$data->Grant_Subsidies"/>
                                      <div class="col-md-1">
                                      <button type="button" id="rowAdder_loan_aid" class="btn btn-secondary"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                    </div>
                                     @endif
                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">REFUND OF AID SANCTIONED AS  LOAN</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Loan Sanctioned" Name="Loan_Sanctioned" id=""  div_class="col-md-4" :val="$data->Loan_Sanctioned"/>
                                    <x-column_-input  title="Loan Refunded " Name="Loan_Refunded" id=""  div_class="col-md-4" :val="$data->Loan_Refunded"/>
                                    <x-column_-input  title="Loan Outstanding" Name="Loan_Outstanding" id=""  div_class="col-md-4" :val="$data->Loan_Outstanding"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">MANAGERIAL SUBSIDY RECEIVED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Year" Name="MANAGERIAL_SUBSIDY_RECEIVED_Year" id="MANAGERIAL_SUBSIDY_RECEIVED_Year"  div_class="col-md-4" :val="$data->MANAGERIAL_SUBSIDY_RECEIVED_Year"/>
                                    <x-column_-input  title="Amount" Name="MANAGERIAL_SUBSIDY_RECEIVED_Amount" id=""  div_class="col-md-4" :val="$data->MANAGERIAL_SUBSIDY_RECEIVED_Amount"/>
                                      
                                      
                                  </div>
                          </div>
                        
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Update</button>
                      </div>
                  </form>
                  @endforeach
                  @else
                  <div style="color:red">
                         <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                      <a href="/capitals/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                      </div>
                  @endif
          </div>
              </div>
            </div>

                {{-- investment tab start --}}
                <div class="tab-pane fade @if($val==888) show  active @endif " id="investment" role="tabpanel" aria-labelledby="investment-tab">
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  @if($investment_data!=null)
                <form class="needs-validation" action="/investment/{{$Datas->id}}" method ="POST" novalidate>
                            @csrf
                    @method('PUT')
                          <div class="card-header"><div class="card-title">INVESTMENT
                           @if(($msg ?? '')!="")
                          <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                          @endif  
                          </div></div>

                              <div class="card-header"><div class="card-title">INVESTMENT OF THE SOCIETY 
                                <select Name="investment_Status" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option @if($investment_data->investment_Status=="Yes") selected @endif>Yes</option>
                                <option @if($investment_data->investment_Status=="No") selected @endif>No</option>
                             
                            </select></div></div>
                            @error('investment_Status')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="card-body">
                              <div class="row g-2" id="newinput_investment">
                                @if(!empty($investment_data->type_of_govt_loan))
                                @php
                                $jan1=json_decode($investment_data->loan_investment_amount);
                                 $jan2=json_decode($investment_data->other_mention);
                                @endphp
                                @if(json_decode($investment_data->type_of_govt_loan)!=null)
                                @forEach(json_decode($investment_data->type_of_govt_loan) as $key => $data1)
                                @if($key==0)
                                <div class="col-md-4">
                                  <label for="type_of_govt_loan" class="form-label">Type of Investment</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="selectid3" required>
                                      <option selected disabled value="">Choose...</option>
                                      <option @if($data1=="MCAB") selected @endif>MCAB</option>
                                      <option @if($data1=="MECOFED") selected @endif>MECOFED</option>
                                      <option @if($data1=="MRTCF") selected @endif>MRTCF</option>
                                      <option @if($data1=="MSHFCS") selected @endif>MSHFCS</option>
                                      <option @if($data1=="MSFCF") selected @endif>MSFCF</option>
                                      <option @if($data1=="MEGHALOOM") selected @endif>MEGHALOOM</option>
                                      <option @if($data1=="MSD&LCF") selected @endif>MSD&LCF</option>
                                      <option @if($data1=="MJJSF") selected @endif>MJJSF</option>
                                      <option @if($data1=="SUB-AREA MARKETING") selected @endif>SUB-AREA MARKETING</option>
                                      <option @if($data1=="OTHER") selected @endif>OTHER</option>
                                      
                                  </select>
                                   @if($data1=="OTHER") 
                                <div class="col-md-12" id="other_mention_here">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      @isset($jan2[$key])
                                          value="{{$jan2[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                                  @else
                                  <div class="col-md-12" id="other_mention_here" style="display: none">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      value=""
                                      name="other_mention[]"
                                    />
                                  </div>
                                @endif
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                              </div>
                                <x-column_-input  title="Investment Amount" Name="loan_investment_amount[]" id="validationCustom09" placeholder="Eg-2025" div_class="col-md-4" inclass="numbers" val="{{$jan1[$key]}}"/>
                               
                                <button type="button" id="rowAdder_investment" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row" class="row g-2">
                                <div class="col-md-4">
                                <select Name="type_of_govt_loan[]" class="form-select target" id="type_of_govt_loan">
                                      <option selected disabled value="">Choose...</option>
                                      <option @if($data1=="MCAB") selected @endif>MCAB</option>
                                      <option @if($data1=="MECOFED") selected @endif>MECOFED</option>
                                      <option @if($data1=="MRTCF") selected @endif>MRTCF</option>
                                      <option @if($data1=="MSHFCS") selected @endif>MSHFCS</option>
                                      <option @if($data1=="MSFCF") selected @endif>MSFCF</option>
                                      <option @if($data1=="MEGHALOOM") selected @endif>MEGHALOOM</option>
                                      <option @if($data1=="MSD&LCF") selected @endif>MSD&LCF</option>
                                      <option @if($data1=="MJJSF") selected @endif>MJJSF</option>
                                      <option @if($data1=="SUB-AREA MARKETING") selected @endif>SUB-AREA MARKETING</option>
                                      <option @if($data1=="OTHER") selected @endif>OTHER</option>           
                                  </select>
                                @if($data1=="OTHER") 
                                <div class="col-md-12" id="other_mention_here">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      @isset($jan2[$key])
                                          value="{{$jan2[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                                  @else
                                  <div class="col-md-12" id="other_mention_here" style="display: none">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      value=""
                                      name="other_mention[]"
                                    />
                                  </div>
                                @endif
                                </div>
                                <div class="col-md-4">
                                <input name="loan_investment_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required value="{{$jan1[$key]}}"> </div>
                                <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                @endif
                                @endforeach
                                @else
                                <div class="col-md-4">
                                  <label for="validationCustom01" class="form-label">Type of Investment</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="type_of_govt_loan" >
                                      <option selected disabled value="">Choose...</option>
                                      <option >MCAB</option>
                                      <option>MECOFED</option>
                                      <option>MRTCF</option>
                                      <option>MSHFCS</option>
                                      <option>MSFCF</option>
                                      <option>MEGHALOOM</option>
                                      <option>MSD&LCF</option>
                                      <option>MJJSF</option>
                                      <option>SUB-AREA MARKETING</option>
                                      <option>OTHER</option>
                                      
                                  </select>
                                 <div class="col-md-12 " id="other_mention_here" style="display: none">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      value=""
                                      name="other_mention[]"
                                    />
                                  </div>
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                              </div>
                              <div class="col-md-4">
                                        <label for="loan_investment_amount1" class="form-label">Investment Amount</label>
                                        <input
                                          type="text"
                                          class="form-control numbers"
                                          id="loan_investment_amount1"
                                          value=""
                                          name="loan_investment_amount[]"
                                          placeholder="Investment Amount"
                                          required
                                        />
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <button type="button" id="rowAdder_investment" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @endif
                                @else
                                <div class="col-md-4">
                                  <label for="validationCustom01" class="form-label">Type of Investment</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="type_of_govt_loan">
                                      <option selected disabled value="">Choose...</option>
                                      <option >MCAB</option>
                                      <option>MECOFED</option>
                                      <option>MRTCF</option>
                                      <option>MSHFCS</option>
                                      <option>MSFCF</option>
                                      <option>MEGHALOOM</option>
                                      <option>MSD&LCF</option>
                                      <option>MJJSF</option>
                                      <option>SUB-AREA MARKETING</option>
                                      <option>OTHER</option>
                                      
                                  </select>
                                  <div class="col-md-12" style="display:none" id="other_mention_here">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention"
                                      value=""
                                      name="other_mention[]"
                                    />
                                  </div>
                                  
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                              </div>
                                {{-- <x-column_-input  title="Investment Amount" Name="loan_investment_amount[]" id="validationCustom09" placeholder="Eg-2025" div_class="col-md-4" inclass="numbers" /> --}}
                               
                                <div class="col-md-4">
                                        <label for="loan_investment_amount1" class="form-label">Investment Amount</label>
                                        <input
                                          type="text"
                                          class="form-control numbers"
                                          id="loan_investment_amount1"
                                          value=""
                                          name="loan_investment_amount[]"
                                          placeholder="Investment Amount"
                                          required
                                        />
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <button type="button" id="rowAdder_investment" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @endif
                            </div>
                      </div>
                              
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Update</button> 
                                <a href="/society/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Back</button></a>
                          </div>
                      </form>
                      @else
                      <div style="color:red">
                         <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                      <a href="/investment/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                      </div>
                     
                      @endif
                </div>
                </div>
                {{-- investment tab end --}}

                {{-- borrowing tab start --}}
                <div class="tab-pane fade @if($val==999) show  active @endif " id="borrowing" role="tabpanel" aria-labelledby="borrowing-tab">
                <div class="card card-info card-outline mb-4"> 
                  <!--begin::Header-->
                  @if($borrowing_datas!=null)
                     <form class="needs-validation" action="/borrow/{{$Datas->id}}" method ="POST" novalidate>
                        @csrf
                        @method('PUT')
                          <div class="card-header"><div class="card-title">
                           @if(($msg ?? '')!="")
                          <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                          @endif  
                          </div></div>

                        <div class="card-header"><div class="card-title">BORROWINGS 
                          <select Name="Govt_loan" class="form-select target" id="selectid3" required>
                          <option selected disabled value="">Choose...</option>
                          <option @if($borrowing_datas->Govt_loan=="Yes") selected @endif>Yes</option>
                          <option @if($borrowing_datas->Govt_loan=="No") selected @endif>No</option>
                       
                      </select></div></div>
                      @error('Govt_loan')
                      <div style="color:red">{{$message}}</div>
                      @enderror

                      <div class="card-body">
                        <div class="row g-2" id="newinput_borrowing">
                          @if(!empty($borrowing_datas->borrowing_from))
                                @php
                                $jan1=json_decode($borrowing_datas->borrowing_type);
                                $jan2=json_decode($borrowing_datas->borrowing_amount);
                                $jan3=json_decode($borrowing_datas->borrowing_refunded);
                                $jan4=json_decode($borrowing_datas->borrowing_outstanding);
                                $jan5=json_decode($borrowing_datas->other_mention);
                                @endphp
                                @if(json_decode($borrowing_datas->borrowing_from)!=null)
                                @forEach(json_decode($borrowing_datas->borrowing_from) as $key => $data1)
                                @if($key==0)
                                <div class="col-md-2">
                                   <label for="borrowing_from" class="form-label">Borrowing from</label>
                                   <select Name="borrowing_from[]" class="form-select target" id="borrowing_from" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option @if($data1=="GOVT.") selected @endif>GOVT.</option>
                                       <option @if($data1=="MCAB LTD.") selected @endif>MCAB LTD.</option>
                                       <option @if($data1=="OTHER FINANCIAL INSTITUTION") selected @endif>OTHER FINANCIAL INSTITUTION</option>
                                       <option @if($data1=="OTHER(Mentioned)") selected @endif>OTHER(Mentioned)</option>
                                   </select>
                                   <div class="col-md-12" @if($data1!="OTHER(Mentioned)") style="display:none" @endif id="other_mention_here2">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                      @isset($jan5[$key])
                                          value="{{$jan5[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                                   @error('borrowing_from')
                                   <div style="color:red">{{$message}}</div>
                                   @enderror
                                   <div class="valid-feedback">Looks good!</div>
                                   <div class="invalid-feedback">This field is required. Can't be empty</div>
                               </div>
                               <x-column_-input  title="Types (Specify)" Name="borrowing_type[]" id="" placeholder="Eg- Loan Name" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                               <x-column_-input  title="Amount" Name="borrowing_amount[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$jan2[$key]}}"/>
                               <x-column_-input  title="Refunded" Name="borrowing_refunded[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$jan3[$key]}}"/>
                               <x-column_-input  title="Outstanding" Name="borrowing_outstanding[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$jan4[$key]}}"/>
                             
                                 <button type="button" id="rowAdder_borrowing" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                          @else
                          <div id="row" class="row g-2">
                              <div class="col-md-2">
                              <select Name="borrowing_from[]" class="form-select target" id="borrowing_from" required>
                                    <option selected disabled value="">Choose...</option>
                                      <option @if($data1=="GOVT.") selected @endif>GOVT.</option>
                                       <option @if($data1=="MCAB LTD.") selected @endif>MCAB LTD.</option>
                                       <option @if($data1=="OTHER FINANCIAL INSTITUTION") selected @endif>OTHER FINANCIAL INSTITUTION</option>
                                       <option @if($data1=="OTHER(Mentioned)") selected @endif>OTHER(Mentioned)</option>

                                </select>
                                <div class="col-md-12" @if($data1!="OTHER(Mentioned)") style="display:none" @endif id="other_mention_here2">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                      @isset($jan5[$key])
                                          value="{{$jan5[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                              </div>
                            <div class="col-md-2">
                            <input name="borrowing_type[]" type="text" class="form-control" placeholder="Loan Name" required value="{{$jan1[$key]}}"> </div>
                            <div class="col-md-2">
                            <input name="borrowing_amount[]" type="text" class="form-control" placeholder="Eg-20000" required value="{{$jan2[$key]}}"> </div>
                            <div class="col-md-2">
                            <input name="borrowing_refunded[]" type="text" class="form-control numbers" placeholder="Eg-10000" required value="{{$jan3[$key]}}"> </div>
                            <div class="col-md-2">
                            <input name="borrowing_outstanding[]" type="text" class="form-control numbers" placeholder="Eg-10000" required value="{{$jan4[$key]}}"> </div>
                            <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>

                          @endif
                          @endforeach
                          @else
                                <div class="col-md-2">
                            <label for="validationCustom01" class="form-label">Borrowing from</label>
                            <select Name="borrowing_from[]" class="form-select target" id="borrowing_from" >
                                <option selected disabled value="">Choose...</option>
                                '<option >GOVT.</option>'+
                                '<option>MCAB LTD.</option>'+
                                '<option>OTHER FINANCIAL INSTITUTION</option>'+
                                '<option>OTHER(Mentioned)</option>'+
                                
                                
                            </select>
                            <div class="col-md-12"  style="display:none" id="other_mention_here2">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                      @isset($jan5[$key])
                                          value="{{$jan5[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                            @error('borrowing_from')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                        </div>
                        <x-column_-input  title="Types (Specify)" Name="borrowing_type[]" id="" placeholder="Eg- Loan Name" div_class="col-md-2"/>
                        <x-column_-input  title="Amount" Name="borrowing_amount[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input  title="Refunded" Name="borrowing_refunded[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input  title="Outstanding" Name="borrowing_outstanding[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                       
                          <button type="button" id="rowAdder_borrowing" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
              

                          @endif
                          @endif
                      </div>
                </div>
                              <div class="card-header"><div class="card-title">TOTAL DEPOSIT</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Bank SB A/C" Name="bank_sb_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$borrowing_datas->bank_sb_ac}}"/>
                                        <x-column_-input  title="Bank FD A/C" Name="bank_fd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$borrowing_datas->bank_fd_ac}}"/>
                                        <x-column_-input  title="Bank RD A/C" Name="bank_rd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$borrowing_datas->bank_rd_ac}}"/>
                                        <x-column_-input  title="Bank CD A/C" Name="bank_cd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$borrowing_datas->bank_cd_ac}}"/>
                                        <x-column_-input  title="Thrift A/C" Name="bank_thrift_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$borrowing_datas->bank_thrift_ac}}"/>
                                        
                                    </div>
                              </div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="card-title col-md-2">Any Others A/C
                                        <select Name="any_other_ac" class="form-select target" id="any_other_ac" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option  @if($borrowing_datas->any_other_ac=="Yes") selected @endif >Yes</option>
                                        <option @if($borrowing_datas->any_other_ac=="No") selected @endif>No</option>
                                        </select>
                                      </div>
                                          @if($borrowing_datas->any_other_ac=="Yes")
                                          <div class="row g-2" id="other_ac">
                                            @php
                                            $other_amount=json_decode($borrowing_datas->ac_amount);
                                            @endphp
                                            @isset($borrowing_datas->ac_name)
                                            @forEach(json_decode($borrowing_datas->ac_name) as $key => $data1)
                                            @if($key==0)
                                            <x-column_-input  title="Account Name" Name="ac_name[]" id="" placeholder="Eg- Special Ac Name" div_class="col-md-2" val="{{$data1}}"/>
                                            <x-column_-input  title="Amount" Name="ac_amount[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers" val="{{$other_amount[$key]}}"/>
                                            <button type="button" id="rowAdder_other_ac" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                            @else
                                              <div id="other_row" class="row g-2">
                                                <div class="col-md-2">
                                                <input name="ac_name[]" type="text" class="form-control" placeholder="Eg-Special Ac Name" value="{{$data1}}"> </div>
                                                <div class="col-md-2">
                                                <input name="ac_amount[]" type="text" class="form-control" placeholder="Eg-1000" value="{{$other_amount[$key]}}" > </div>
                                                <button type="button" id="delete_other" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button>
                                              </div>
                                            @endif
                                            @endforeach
                                            @endisset
                                            
                                        </div>
                                          @else
                                            <div class="row g-2" id="other_ac" style="display:none">
                                              <x-column_-input  title="Account Name" Name="ac_name[]" id="" placeholder="Eg- Special Ac Name" div_class="col-md-2"/>
                                            <x-column_-input  title="Amount" Name="ac_amount[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                          <button type="button" id="rowAdder_other_ac" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                        </div>
                                          @endif
                                        
                                           
                                      </div>
                              </div>
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Update</button> 
                                <a href="/society/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Back</button></a>
                          </div>
                      </form>
                

                  @else
                  <div style="color:red">
                     <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                  <a href="/borrow/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                  </div>
                  @endif
                </div>
                </div>
                {{-- borrowing tab end --}}


                 {{-- borrowing tab start --}}
                <div class="tab-pane fade @if($val==000) show  active @endif " id="asset" role="tabpanel" aria-labelledby="asset-tab">
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  @if($asset_datas!=null)

                  <form class="needs-validation" action="/asset/{{$Datas->id}}" method ="POST" novalidate>
                        @csrf
                         @method('PUT')
                         
                              <div class="card-header"><div class="card-title">OFFICE BUILDINGS
                                 @if(($msg ?? '')!="")
                          <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                          @endif 
                              </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="col-md-3">
                                            <label for="" class="form-label">Own Building</label>
                                            <select Name="self_building" class="form-select target" id="self_building" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->self_building=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->self_building=="No") selected @endif>No</option>
                                             
                                            </select>
                                            @error('self_building')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <div class="col-md-3" id="" >
                                            <label for="" class="form-label">Rented Building</label>
                                            <select Name="rented_building" class="form-select target" id="rented_building" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->rented_building=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->rented_building=="No") selected @endif>No</option>
                                             
                                            </select>
                                            @error('rented_building')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback" >Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Rent Paid Per Annum" Name="rent_paid" div_id="rent_paid" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers" val="{{$asset_datas->rent_paid}}"/> --}}
                                       <div class="col-md-3 {{$asset_datas->rented_building=="No" ? 'offshow': ''}}" id="rent_paid">
                                          <label for="rent_paid" class="form-label">Rent Paid Per Annum</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id="rent_paid"
                                            value="{{$asset_datas->rent_paid}}"
                                            name="rent_paid"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">GODOWN</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Do You Have Gowdown</label>
                                            <select Name="godown" class="form-select target" id="godown" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->godown=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->godown=="No") selected @endif>No</option>
                                             
                                            </select>
                                            @error('godown')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        {{-- <x-column_-input  title="AREA OF THE GODOWN IN SQ.FT. / ARCE" Name="godown_area" id="" placeholder="Eg- 1000" div_class="col-md-4" val="{{$asset_datas->godown_area}}"/>
                                        <x-column_-input  title="CAPACITY IN MT" Name="godown_capacity" id="" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers" val="{{$asset_datas->godown_capacity}}"/> --}}
                                        <div class="col-md-4 {{$asset_datas->godown=="No" ? 'offshow': ''}}" id="godown_area">
                                          <label for="rent_paid" class="form-label">AREA OF THE GODOWN IN SQ.FT. / ARCE</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->godown_area}}"
                                            name="godown_area"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-4 {{$asset_datas->godown=="No" ? 'offshow': ''}}" id="godown_capacity">
                                          <label for="rent_paid" class="form-label">CAPACITY IN MT</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->godown_capacity}}"
                                            name="godown_capacity"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                        
                                          <div class="col-md-4 {{$asset_datas->godown=="No" ? 'offshow': ''}}" id="godown_types_div">
                                            <label for="" class="form-label">Types</label>
                                            <select Name="godown_types" class="form-select target">
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->godown_types=="Owned") selected @endif>Owned</option>
                                                <option @if($asset_datas->godown_types=="Lease") selected @endif>Lease</option>
                                                <option @if($asset_datas->godown_types=="Rented") selected @endif>Rented</option>
                                            </select>
                                            @error('godown_types')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Terms Of Agreement" Name="godown_type_agreement" id="" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers" val="{{$asset_datas->godown_type_agreement}}"/>
                                        <x-column_-input  title="Amount Paid Per Annum" Name="godown_type_per_annum" id="" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers" val="{{$asset_datas->godown_type_per_annum}}"/> --}}
                                       <div class="col-md-4 {{$asset_datas->godown=="No" ? 'offshow': ''}}" id="godown_type_agreement">
                                          <label for="rent_paid" class="form-label">Terms Of Agreement</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->godown_type_agreement}}"
                                            name="godown_type_agreement"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-4 {{$asset_datas->godown=="No" ? 'offshow': ''}}" id="godown_type_per_annum">
                                          <label for="rent_paid" class="form-label">Amount Paid Per Annum</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->godown_type_per_annum}}"
                                            name="godown_type_per_annum"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                      </div>
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Storage</label>
                                            <select Name="storage" class="form-select target" id="storage" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->storage=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->storage=="No") selected @endif>No</option>
                                            </select>
                                            @error('storage')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Cold (in number)" Name="storage_cold" div_id="storage_cold" placeholder="Eg- 1000" div_class="col-md-4" val="{{$asset_datas->storage_cold}}"/>
                                        <x-column_-input  title="Dry (in number)" Name="storage_dry" div_id="storage_dry" placeholder="Eg- 1000" div_class="col-md-4" val="{{$asset_datas->storage_dry}}"/> --}}
                                      <div class="col-md-4 {{$asset_datas->storage=="No" ? 'offshow': ''}}" id="storage_cold">
                                          <label for="rent_paid" class="form-label">Cold (in number)</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->storage_cold}}"
                                            name="storage_cold"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-4 {{$asset_datas->storage=="No" ? 'offshow': ''}}" id="storage_dry">
                                          <label for="rent_paid" class="form-label">Dry (in number)</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->storage_dry}}"
                                            name="storage_dry"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                      
                                        </div>
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Land</label>
                                            <select Name="land" class="form-select target" id="land" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->land=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->land=="No") selected @endif>No</option>
                                            </select>
                                            @error('land')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Land Area in Sq. Ft./Acre" Name="Land_area" div_id="Land_area" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4" val="{{$asset_datas->Land_area}}"/>
                                        <x-column_-input  title="If Lease Term Agreement and Area in Sq. Ft./Acre" Name="land_area_lease" div_id="land_area_lease" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4" val="{{$asset_datas->land_area_lease}}"/>
                                         --}}
                                        <div class="col-md-4 {{$asset_datas->land=="No" ? 'offshow': ''}}" id="Land_area">
                                          <label for="rent_paid" class="form-label">Land Area in Sq. Ft./Acre</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->Land_area}}"
                                            name="Land_area"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-4 {{$asset_datas->land=="No" ? 'offshow': ''}}" id="land_area_lease">
                                          <label for="rent_paid" class="form-label">If Lease Term Agreement and Area in Sq. Ft./Acre</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->land_area_lease}}"
                                            name="land_area_lease"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                        </div>
                                      <div class="row g-2">
                                          <div class="col-md-2">
                                            <label for="" class="form-label">Furniture</label>
                                            <select Name="furniture" class="form-select target" id="furniture" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->furniture=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->furniture=="No") selected @endif>No</option>
                                            </select>
                                            @error('furniture')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Total Nos." Name="furniture_total" div_id="furniture_total" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers" val="{{$asset_datas->furniture_total}}"/>
                                        <x-column_-input  title="Value" Name="furniture_amount" div_id="furniture_amount" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers" val="{{$asset_datas->furniture_amount}}"/> --}}
                                       <div class="col-md-2 {{$asset_datas->furniture=="No" ? 'offshow': ''}}" id="furniture_total">
                                          <label for="rent_paid" class="form-label">Total Nos.</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->furniture_total}}"
                                            name="furniture_total"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-2 {{$asset_datas->furniture=="No" ? 'offshow': ''}}" id="furniture_amount">
                                          <label for="rent_paid" class="form-label">Value</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->furniture_amount}}"
                                            name="furniture_amount"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                       
                                        </div>
                                      <div class="row g-2">
                                          <div class="col-md-2">
                                            <label for="" class="form-label">Computers</label>
                                            <select Name="computers" class="form-select target" id="computers" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option @if($asset_datas->computers=="Yes") selected @endif>Yes</option>
                                                <option @if($asset_datas->computers=="No") selected @endif>No</option>
                                            </select>
                                            @error('computers')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        {{-- <x-column_-input  title="Total Nos." Name="computers_total" div_id="computers_total" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers" val="{{$asset_datas->computers_total}}"/>
                                        <x-column_-input  title="Value" Name="computers_amount" div_id="computers_amount" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers" val="{{$asset_datas->computers_amount}}"/> --}}
                                        <div class="col-md-2 {{$asset_datas->computers=="No" ? 'offshow': ''}}" id="computers_total">
                                          <label for="rent_paid" class="form-label">Total Nos.</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->computers_total}}"
                                            name="computers_total"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    <div class="col-md-2 {{$asset_datas->computers=="No" ? 'offshow': ''}}" id="computers_amount">
                                          <label for="rent_paid" class="form-label">Value</label>
                                          <input
                                            type="text"
                                            class="form-control numbers"
                                            id=""
                                            value="{{$asset_datas->computers_amount}}"
                                            name="computers_amount"
                                            placeholder="Eg- 1000"
                                           
                                          />
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    </div>
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">OTHERS (PLEASE SPECIFY THE ITEMS ) 
                               <select Name="computers" class="form-select target" id="Other_item_id" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option @if(json_decode($asset_datas->item_name)!=null) selected @endif>Yes</option>
                                       <option @if(json_decode($asset_datas->item_name)==null) selected @endif>No</option>
                                   </select>  
                              </div></div>
                              <div class="card-body {{json_decode($asset_datas->item_name)==null ? 'offshow': ''}}" id="other">
                                      <div class="row g-2" id="asset_newinput">
                                        @if(!empty($asset_datas->item_no))
                                        @php
                                        $jan1=json_decode($asset_datas->item_no);
                                        $jan2=json_decode($asset_datas->item_amount);
                                       
                                        @endphp
                                        @if(json_decode($asset_datas->item_name)!=null)
                                        @forEach(json_decode($asset_datas->item_name) as $key => $data1)
                                        @if($key==0)
                                        <x-column_-input  title="Name of Item" Name="item_name[]" id="" placeholder="Eg-Chairs" div_class="col-md-2" val="{{$data1}}"/>
                                        <x-column_-input title="Nos./Area" id="" Name="item_no[]"  placeholder="Eg- 10 " div_class="col-md-2" val="{{$jan1[$key]}}"/>
                                        <x-column_-input title="Value" id="" Name="item_amount[]"  placeholder="Eg-1000" div_class="col-md-2" inclass="numbers" val="{{$jan2[$key]}}"/>
                                        <button type="button" id="asset_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                        @else
                                        <div id="row" class="row g-2"><div class="col-md-2">
                                          <input name="item_name[]" type="text" class="form-control" placeholder="Eg-Chair" required value="{{$data1}}"> </div>
                                          <div class="col-md-2">
                                          <input name="item_no[]" type="text" class="form-control" placeholder="Eg-10" required value="{{$jan1[$key]}}"> </div>
                                          <div class="col-md-2">
                                          <input name="item_amount[]" type="text" class="form-control numbers" placeholder="Eg-1000" required value="{{$jan2[$key]}}"> </div>
                                          <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>

                                        @endif
                                        @endforeach
                                        @else
                                        <x-column_-input  title="Name of Item" Name="item_name[]" id="" placeholder="Eg-Chairs" div_class="col-md-2"/>
                                        <x-column_-input title="Nos./Area" id="" Name="item_no[]"  placeholder="Eg- 10 " div_class="col-md-2"/>
                                        <x-column_-input title="Value" id="" Name="item_amount[]"  placeholder="Eg-1000" div_class="col-md-2" inclass="numbers"/>
                                        <button type="button" id="asset_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            
                                        @endif
                                        @endif
                                    </div>
                              </div>
                              
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Update</button> 
                                <a href="/society/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Back</button></a>
                          </div>
                      </form>
                
                  @else
                  <div style="color:red">
                    <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                    <a href="/asset/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                  </div>
                     
                  @endif
                </div>
                </div>
                {{-- borrowing tab end --}}

                 {{-- borrowing tab start --}}
                <div class="tab-pane fade @if($val==111) show  active @endif " id="loan" role="tabpanel" aria-labelledby="loan-tab">
                <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
                  @if($loan_datas!=null)
                
                    <form class="needs-validation" action="/loan/{{$Datas->id}}" method ="POST" novalidate>
                        @csrf
                          @method('PUT')
                         
                              <div class="card-header"><div class="card-title">GOVERNMENT LOAN
                                 @if(($msg ?? '')!="")
                          <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                          @endif 
                              </div></div>
                              <div class="card-header"><div class="card-title">Any Govt. Loans
                                <select Name="any_Govt_loan" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option @if($loan_datas->any_Govt_loan=="Yes") selected @endif>Yes</option>
                                <option @if($loan_datas->any_Govt_loan=="No") selected @endif>No</option>
                             
                            </select></div></div>
                            @error('Govt_loan')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="card-body">
                              <div class="row g-2" id="loan_newinput">
                                 @php
                                  $jan1=json_decode($loan_datas->Loan_issue_year);
                                  $jan2=json_decode($loan_datas->Loan_sanctioned_amount);
                                  $jan3=json_decode($loan_datas->Outstanding_Principal_amount);
                                  $jan4=json_decode($loan_datas->Outstanding_interest_amount);
                                  $jan5=json_decode($loan_datas->other_mention);
                                  @endphp
                                    @if(json_decode($loan_datas->type_of_govt_loan)!=null)
                                  @foreach(json_decode($loan_datas->type_of_govt_loan) as $key => $data1)
                                  @if($key==0)
                                  <div class="col-md-2">
                                    <label for="" class="form-label">Type of Govt. Loan</label>
                                    <select Name="type_of_govt_loan[]" class="form-select target" id="govt_loan_type" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if($data1=="GODOWN") selected @endif>GODOWN</option>
                                        <option @if($data1=="FURNITURE & FIXTURES") selected @endif>FURNITURE & FIXTURES</option>
                                        <option @if($data1=="PLANT & MACHINERY") selected @endif>PLANT & MACHINERY</option>
                                        <option @if($data1=="SHARE CAPITAL") selected @endif>SHARE CAPITAL</option>
                                        <option @if($data1=="WORKING CAPITAL") selected @endif>WORKING CAPITAL</option>
                                        <option @if($data1=="TRUCK LOAN") selected @endif>TRUCK LOAN</option>
                                        <option @if($data1=="MARKETING LOAN") selected @endif>MARKETING LOAN</option>
                                        <option @if($data1=="DAIRY / LIVESTOCK") selected @endif>DAIRY / LIVESTOCK</option>
                                        <option @if($data1=="PROCESSING LOAN") selected @endif>PROCESSING LOAN</option>
                                        <option @if($data1=="STORAGE LOAN") selected @endif>STORAGE LOAN</option>
                                        <option @if($data1=="CATTLE BREEDING LOAN") selected @endif>CATTLE BREEDING LOAN</option>
                                        <option @if($data1=="PIGGERY LOAN") selected @endif>PIGGERY LOAN</option>
                                        <option @if($data1=="ICDP LOAN") selected @endif>ICDP LOAN</option>
                                        <option @if($data1=="OTHER LOAN") selected @endif>OTHER LOAN</option>

                                    </select>
                                    <div class="col-md-12" @if($data1!="OTHER LOAN") style="display:none" @endif id="other_mention_here1">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                      @isset($jan5[$key])
                                          value="{{$jan5[$key]}}"
                                      @endisset
                                      
                                      name="other_mention[]"
                                    />
                                  </div>
                                    @error('type_of_govt_loan')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div>
                                <x-column_-input  title="Loan Issue Year" Name="Loan_issue_year[]" id="" placeholder="Eg-2025" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                                <x-column_-input  title="Loan Sanctioned Amount" Name="Loan_sanctioned_amount[]" id="" placeholder="Eg-20000" div_class="col-md-2" val="{{$jan2[$key]}}"/>
                                <x-column_-input title="Outstanding Principal Amount" id="" Name="Outstanding_Principal_amount[]"  placeholder="Eg- 10000 " div_class="col-md-2" val="{{$jan3[$key]}}"/>
                                <x-column_-input title="Outstanding Interest Amount" id="" Name="Outstanding_interest_amount[]"  placeholder="Eg-10000" div_class="col-md-2" inclass="numbers" val="{{$jan4[$key]}}"/>
                                <button type="button" id="loan_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                  @else
                                  <div class="col-md-2">
                                  <select Name="anyloan[]" class="form-select target" id="govt_loan_type" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if($data1=="GODOWN") selected @endif>GODOWN</option>
                                        <option @if($data1=="FURNITURE & FIXTURES") selected @endif>FURNITURE & FIXTURES</option>
                                        <option @if($data1=="PLANT & MACHINERY") selected @endif>PLANT & MACHINERY</option>
                                        <option @if($data1=="SHARE CAPITAL") selected @endif>SHARE CAPITAL</option>
                                        <option @if($data1=="WORKING CAPITAL") selected @endif>WORKING CAPITAL</option>
                                        <option @if($data1=="TRUCK LOAN") selected @endif>TRUCK LOAN</option>
                                        <option @if($data1=="MARKETING LOAN") selected @endif>MARKETING LOAN</option>
                                        <option @if($data1=="DAIRY / LIVESTOCK") selected @endif>DAIRY / LIVESTOCK</option>
                                        <option @if($data1=="PROCESSING LOAN") selected @endif>PROCESSING LOAN</option>
                                        <option @if($data1=="STORAGE LOAN") selected @endif>STORAGE LOAN</option>
                                        <option @if($data1=="CATTLE BREEDING LOAN") selected @endif>CATTLE BREEDING LOAN</option>
                                        <option @if($data1=="PIGGERY LOAN") selected @endif>PIGGERY LOAN</option>
                                        <option @if($data1=="ICDP LOAN") selected @endif>ICDP LOAN</option>
                                        <option @if($data1=="OTHER LOAN") selected @endif>OTHER LOAN</option>
                                    </select>
                                  <div class="col-md-12" @if($data1!="OTHER LOAN") style="display:none" @endif id="other_mention_here1">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                       @isset($jan5[$key])
                                          value="{{$jan5[$key]}}"
                                      @endisset
                                      name="other_mention[]"
                                    />
                                  </div>
                                  </div>
                                  <div class="col-md-2">
                                  <input name="Loan_issue_year[]" type="text" class="form-control" placeholder="Eg-2025" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="Loan_sanctioned_amount[]" type="text" class="form-control" placeholder="Eg-20000" required value="{{$jan2[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="Outstanding_Principal_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required value="{{$jan3[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="Outstanding_interest_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required value="{{$jan4[$key]}}"> </div>
                                  <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>

                                @endif
                              @endforeach
                              @else
                               <div class="col-md-2">
                                  <label for="" class="form-label">Type of Govt. Loan</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="govt_loan_type">
                                      <option selected disabled value="">Choose...</option>
                                      <option >GODOWN</option>
                                      <option>FURNITURE & FIXTURES</option>
                                      <option>PLANT & MACHINERY</option>
                                      <option>SHARE CAPITAL</option>
                                      <option>WORKING CAPITAL</option>
                                      <option>TRUCK LOAN</option>
                                      <option>MARKETING LOAN</option>
                                      <option>DAIRY / LIVESTOCK</option>
                                      <option>PROCESSING LOAN</option>
                                      <option>STORAGE LOAN</option>
                                      <option>CATTLE BREEDING LOAN</option>
                                      <option>PIGGERY LOAN</option>
                                      <option>ICDP LOAN</option>
                                      <option>OTHER LOAN </option>
                                      
                                  </select>
                                  <div class="col-md-12" style="display:none" id="other_mention_here1">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="other_mention1"
                                      value=""
                                      name="other_mention[]"
                                    />
                                  </div>
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                                <x-column_-input  title="Loan Issue Year" Name="Loan_issue_year[]" id="" placeholder="Eg-2025" div_class="col-md-2"/>
                                <x-column_-input  title="Loan Sanctioned Amount" Name="Loan_sanctioned_amount[]" id="" placeholder="Eg-20000" div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Principal Amount" id="" Name="Outstanding_Principal_amount[]"  placeholder="Eg- 10000 " div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Interest Amount" id="" Name="Outstanding_interest_amount[]"  placeholder="Eg-10000" div_class="col-md-2" inclass="numbers"/>
                                <button type="button" id="loan_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                    
                              @endif
                            </div>
                      </div>
                              
                             
                               <div class="card-footer">
                                <button class="btn btn-info" type="submit">Update</button> 
                                <a href="/society/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Back</button></a>
                          </div>
                      </form>

                      @else
                      <div style="color:red">
                         <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                      <a href="/loan/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                      </div>
                     
                      @endif
                </div>
                </div>
                {{-- borrowing tab end --}}
            </div>
          </div>
    </div>

    </x-layout>



    <script type="text/javascript">
    $(document).ready(function() { 
    $("#js-example-basic-single").select2({ width: 'resolve' });  
    
    var Dist_name=$('#Select_District1').val();
  
      //console.log(Dist_name);
      $.getJSON("/assets/Dist_block.json", function(data){
        
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

});
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
        $.getJSON("/assets/District.json", function(data){
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
        $.getJSON("/assets/Urban_District.json", function(data){
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

        $.getJSON("/assets/Dist_block.json", function(data){
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
        $.getJSON("/assets/Circle_Name.json", function(data){
          
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

        $.getJSON("/assets/Dist_Block_Vill.json", function(data){
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
      $.getJSON("/assets/Dist_block.json", function(data){
        
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
    $.getJSON("/assets/Dist_Block_Vill.json", function(data2){
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
      format: 'dd-mm-yyyy'
  });
  

      // $('.mydate').datepicker({
      //     uiLibrary: 'bootstrap5',
      //     format: 'yyyy-mm-dd'
      // });
</script>
{{-- financial year --}}
<script>

  $( document ).ready(function() {
  
  
  var currentYear = new Date().getFullYear();
  for(var i = 0; i < 30; i++){
    var next = currentYear+1;
    var year = currentYear + '-' + next.toString().slice(-2);
    $('#Latest_Audit_complete').append(new Option(year, year));
    currentYear--;
  }
      
  
  });
  </script>
{{-- investment script --}}
  <script>
        $('.numbers').keyup(function () {
           this.value = this.value.replace(/[^0-9\.]/g,'');
        });


        $("#rowAdder_investment").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-4">' +
                  '<select Name="type_of_govt_loan[]" class="form-select target" id="selectid3" required>'+
                        '<option selected disabled value="">Choose...</option>'+
                        '<option >MCAB</option>'+
                         '<option>MECOFED</option>'+
                         '<option>MRTCF</option>'+
                         '<option>MSHFCS</option>'+
                         '<option>MSFCF</option>'+
                         '<option>MEGHALOOM</option>'+
                         '<option>MSD&LCF</option>'+
                         '<option>MJJSF</option>'+
                         '<option>SUB-AREA MARKETING</option>'+
                         '<option>OTHER</option>'+
                                
                   ' </select>'+
                   '<div class="col-md-12 other" style="display:none" id="wekk"><input type="text" class="form-control" id=""  value=""  name="other_mention[]"  /></div></div>'+
               
               
                '<div class="col-md-4">' +
                  '<input name="loan_investment_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput_investment').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
        $("body").on("change", "#investment_Status", function () {
          var investment_Status=$("#investment_Status").val();
          if(investment_Status=="No"){
            $("#type_of_govt_loan").prop("required", false);
            $("#loan_investment_amount1").prop("required", false);
          }
            
        });

        $("select").on("change",function(){
    var type_of_govt_loan =$(this).val();
    if(type_of_govt_loan=="OTHER"){
     $('#other_mention_here').show();
      $("#other_mention_here input").focus();
    }else{
      $('#other_mention_here').hide();
    }
  });
 $(document).on('change', ".target", function () {
 
    if(this.value=="OTHER"){
   $(this).closest("div").find('.other').show();
    }else{
      $(this).closest("div").find('.other').hide();
    }
    });
     </script>
     
     {{-- investment script end --}}

     {{-- borrowing script start Here --}}
     <script>
      $('.numbers').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });



      $("#rowAdder_borrowing").click(function () {
            newRowAdd =
                 '<div id="row" class="row g-2">'+
                  '<div class="col-md-2">' +
                  '<select Name="borrowing_from[]" class="form-select target borrow" id="" required>'+
                        '<option selected disabled value="">Choose...</option>'+
                        '<option >GOVT.</option>'+
                        '<option>MCAB LTD.</option>'+
                        '<option>OTHER FINANCIAL INSTITUTION</option>'+
                        '<option>OTHER(Mentioned)</option>'+
                                
                   ' </select>'+
                   '<div class="col-md-12 other" style="display:none" id="borrow"><input type="text" class="form-control" id=""  value=""  name="other_mention[]"  /></div></div>'+
                '<div class="col-md-2">' +
                '<input name="borrowing_type[]" type="text" class="form-control" placeholder="Loan Name" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="borrowing_amount[]" type="text" class="form-control" placeholder="Eg-20000" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="borrowing_refunded[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_outstanding[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput_borrowing').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
  $("#borrowing_from").on("change",function(){
    var borrowing_from =$(this).val();
    if(borrowing_from=="OTHER(Mentioned)"){
     $('#other_mention_here2').show();
      $("#other_mention_here2 input").focus();
    }else{
      $('#other_mention_here2').hide();
    }
  });
   $(document).on('change', ".borrow", function () {
 
    if(this.value=="OTHER(Mentioned)"){
   $(this).closest("div").find('.other').show();
    }else{
      $(this).closest("div").find('.other').hide();
    }
    });


        // asset script start here

          $("#asset_rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2"><div class="col-md-2">' +
                '<input name="item_name[]" type="text" class="form-control" placeholder="Eg-Chair" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_no[]" type="text" class="form-control" placeholder="Eg-10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_amount[]" type="text" class="form-control numbers" placeholder="Eg-1000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#asset_newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });

        // asset script end here

        //script for loan 
$("#loan_rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-2">' +
                  '<select Name="type_of_govt_loan[]" class="form-select target wekk2" id="" required>'+
                        '<option selected disabled value="">Choose...</option>'+
                        '<option >GODOWN</option>'+
                        '<option>FURNITURE & FIXTURES</option>'+
                        '<option>PLANT & MACHINERY</option>'+
                        '<option>SHARE CAPITAL</option>'+
                        '<option>WORKING CAPITAL</option>'+
                        '<option>TRUCK LOAN</option>'+
                        '<option>MARKETING LOAN</option>'+
                        '<option>DAIRY / LIVESTOCK</option>'+
                        '<option>PROCESSING LOAN</option>'+
                        '<option>STORAGE LOAN</option>'+
                        '<option>CATTLE BREEDING LOAN</option>'+
                        '<option>PIGGERY LOAN</option>'+
                        '<option>ICDP LOAN</option>'+
                        '<option>OTHER LOAN </option>'+
                   ' </select>'+
                   '<div class="col-md-12 other" style="display:none" id="wekk2"><input type="text" class="form-control" id=""  value=""  name="other_mention[]"  /></div></div>'+
                '<div class="col-md-2">' +
                '<input name="Loan_issue_year[]" type="text" class="form-control" placeholder="Eg-2025" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="Loan_sanctioned_amount[]" type="text" class="form-control" placeholder="Eg-20000" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="Outstanding_Principal_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="Outstanding_interest_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#loan_newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });

         $("#govt_loan_type").on("change",function(){
    var govt_loan_type =$(this).val();
    if(govt_loan_type=="OTHER LOAN"){
     $('#other_mention_here1').show();
      $("#other_mention_here1 input").focus();
    }else{
      $('#other_mention_here1').hide();
    }
  });
   $(document).on('change', ".wekk2", function () {
 
    if(this.value=="OTHER LOAN"){
   $(this).closest("div").find('.other').show();
    }else{
      $(this).closest("div").find('.other').hide();
    }
    });

  $('#Affiliation').on("change",function() {
      var value= $( "#Affiliation" ).val();
        if(value=="Yes"){
          $('#Affiliation').removeAttr('value');
          $.getJSON("/assets/affiliation.json", function(data){
                //console.log(data);
                for(i=0;i<data.length;i++)
                {
                   $('#Affiliation').append($('<option>').val(data[i].Affiliation).text(data[i].Affiliation));
                }
          
            }).fail(function(){
            //console.log("Fail to load Rural District");
        });
        }else{
          $('#Affiliation').empty();
          $('#Affiliation').append($('<option>').val("Yes").text("Yes"));
            $('#Affiliation').append($('<option selected>').val("No").text("No"));
        }
      
   });

        //end script for loan

         $('#rented_building').on("change",function(){
          
          var rented_building=$("#rented_building").val();
         
          if(rented_building=="Yes"){
           
            
            $("#rent_paid").show();
           
          }else{
            
            
            $("#rent_paid").hide();
           
          }
        });
        $('#godown').on("change",function(){
          
          var godown=$("#godown").val();
         
          if(godown=="Yes"){
           
            $("#godown_area, #godown_types_div, #godown_type_agreement, #godown_type_per_annum, #godown_capacity").show();
           
          }else{
            
            $("#godown_area, #godown_types_div, #godown_type_agreement, #godown_type_per_annum, #godown_capacity").hide();
   
           
          }
        });
        
        $('#storage').on("change",function(){
          
          var storage=$("#storage").val();
         
          if(storage=="Yes"){
           
            $("#storage_cold, #storage_dry").show();
           
          }else{
            
            $("#storage_cold, #storage_dry").hide();
   
          }
        });
          
         $('#land, #furniture, #computers, #Other_item_id').on("change",function(){
          
          var land=$("#land").val();
          var furniture=$("#furniture").val();
          var computers=$("#computers").val();
          var Other_item_id=$("#Other_item_id").val();
         
          if(land=="Yes"){
           
            $("#Land_area, #land_area_lease").show();
           
          }else if(land=="No"){
            
            $("#Land_area, #land_area_lease").hide();
   
          }

          if(furniture=="Yes"){
           
            $("#furniture_amount, #furniture_total").show();
           
          }else if(furniture=="No"){
            
            $("#furniture_amount, #furniture_total").hide();
   
          }
 
          if(computers=="Yes"){
           
            $("#computers_total, #computers_amount").show();
           
          }else if(computers=="No"){
            
            $("#computers_total, #computers_amount").hide();
   
          }
          if(Other_item_id=="Yes"){
           
            $("#other").show();
           
          }else if(Other_item_id=="No"){
            
            $("#other").hide();
   
          }
        });

        //capital add new AID or Govt. Loan
         $("#rowAdder_grand_aid").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                '<div class="col-md-2">' +
                  '<input name="Grant_Type[]" type="text" class="form-control numbers" placeholder="Eg-Name" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="Grant_Year[]" type="text" class="form-control numbers" placeholder="Eg-year" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Deptt_Name[]" type="text" class="form-control numbers" placeholder="Eg-MBMA" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Grant_Sanctioned[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Grant_Release[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Date_release[]" type="text" class="form-control numbers" placeholder="Eg-Date" required> </div>'+
                '<button type="button" id="Delete_grand_aid_Row" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput_grand_aid').append(newRowAdd);
            
        });

        $("body").on("click", "#Delete_grand_aid_Row", function () {
            $(this).parents("#row").remove();
        });

        $("#rowAdder_loan_aid").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                '<div class="col-md-2">' +
                  '<input name="Aid_Type[]" type="text" class="form-control numbers" placeholder="Eg-Name" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="Aid_Year[]" type="text" class="form-control numbers" placeholder="Eg-year" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Agencies_Name[]" type="text" class="form-control numbers" placeholder="Eg-MBMA" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Aid_Sanctioned[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Aid_Grant_Release[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="Grant_Subsidies[]" type="text" class="form-control numbers" placeholder="Eg-Date" required> </div>'+
                '<button type="button" id="Delete_loan_aid_Row" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput_loan_aid').append(newRowAdd);
            
        });

        $("body").on("click", "#Delete_loan_aid_Row", function () {
            $(this).parents("#row").remove();
        });
        //end here

         //other account
    $("#any_other_ac").on("change",function(){
    var any_other_ac =$(this).val();
    if(any_other_ac=="Yes"){
     $('#other_ac').show();

    }else{
      $('#other_ac').hide();
    }
  });


   $("#rowAdder_other_ac").click(function () {
            newRowAdd =
                '<div id="other_row" class="row g-2">'+

                '<div class="col-md-2">' +
                '<input name="ac_name[]" type="text" class="form-control" placeholder="Eg-Special Ac Name" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="ac_amount[]" type="text" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<button type="button" id="delete_other" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#other_ac').append(newRowAdd);
            
        });

        $("body").on("click", "#delete_other", function () {
            $(this).parents("#other_row").remove();
        });

        //end here
        $(function() {
    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    setTimeout(function() {
        $("#successMessage").hide('blind', {}, 500)
    }, 5000);
});
   </script>



     {{-- borrowing script end here --}}