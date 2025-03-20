<x-layout>
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
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">CAPITALS</button>
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
                </form>
                <h2 class="mb-3">Home</h2>
                <p class="lead">This is the home tab content.</p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h2 class="mb-3">Profile</h2>
                <p class="lead">This is the profile tab content.</p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h2 class="mb-3">Contact</h2>
                <p class="lead">This is the contact tab content.</p>
              </div>
            </div>
          </div>
    </div>

    </x-layout>