<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="PACS" />
        <div class="card card-info card-outline mb-4">
            @if(!empty($activities->activity))
            <form class="needs-validation" action="/pacs/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/pacs" method ="POST" novalidate>
                @csrf
            @endif
            
                 
               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                      <div class="card-header"><div class="card-title">PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)
                        @if(($msg ?? '')!="")
                        <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                        @endif
                        @error('Society_Id')
                        
                        <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
                        @enderror    
                    </div></div>
                      <div class="card-body">
                        <div class="row g-2">
                            <!--begin::Col-->
                              <div class="col-md-3">
                                  <label for="" class="form-label">Activity</label>
                                  <select name="activity" class="form-select" required>
                                      <option selected disabled value="">Choose...</option>
                                      <option  @if(!empty($activities->activity))  @if($activities->activity=="Primary") selected @endif  @endif>Primary</option>
                                      <option @if(!empty($activities->activity))   @if($activities->activity=="Secondary") selected @endif @endif>Secondary</option>
                                      <option @if(!empty($activities->activity))   @if($activities->activity=="Tertiary") selected @endif @endif>Tertiary</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <!--end::Col-->
                        </div>
                    </div>
                      <div class="card-header"><div class="card-title">KCC LOAN AVAILED DURING THE YEAR CURRENT YEAR</div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Amount Sanctioned" Name="amount_sanctioned" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->amount_sanctioned ?? '')}}"/>
                                <x-column_-input  title="Nos. of member in which loans was sanctioned" Name="nos_of_member_loan_for" id="" placeholder="Eg-10" div_class="col-md-4" val="{{($activities->nos_of_member_loan_for ?? '')}}"/>
                                <x-column_-input  title="Purpose of Which Loans was taken for" Name="purpose_taken_for" id="" placeholder="Eg- for cultivation and types of crops" div_class="col-md-4" val="{{($activities->purpose_taken_for ?? '')}}"/>
                                
                              </div>
                      </div>

                      <div class="card-header"><div class="card-title">NO. OF KCC LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</div></div>
                      <div class="card-body">
                              <div id="newinput2" class="row g-2">
                                
                                @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->female_clan);
                                $jan2=json_decode($activities->clan);
                                @endphp
                                @forEach(json_decode($activities->male_clan) as $key => $data)
                                @if($key==0)
                                <div class="col-md-3">
                                    <label for="" class="form-label">Ethnic Group/Clan</label>
                                    <select name="clan[]" class="form-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if($jan2[$key]=="ST") selected @endif>ST</option>
                                        <option @if($jan2[$key]=="SC") selected @endif>SC</option>
                                        <option @if($jan2[$key]=="Gen or Other") selected @endif>Gen or Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <x-column_-input  title="Male" Name="male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3" val="{{$data}}"/>
                                <x-column_-input  title="Female" Name="female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3" val="{{$jan1[$key]}}"/>
                                <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row2" class="row g-2">
                                    <div class="col-md-3">
                                    <select name="clan[]" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option @if($jan2[$key]=="ST") selected @endif>ST</option>
                                    <option @if($jan2[$key]=="SC") selected @endif>SC</option>
                                    <option @if($jan2[$key]=="Gen or Other") selected @endif>Gen or Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                     <div class="invalid-feedback">This field is required.</div>
                                    </div>
                                    <div class="col-md-3">
                                    <input name="male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required  value="{{$data}}"> </div>
                                    <div class="col-md-3">
                                    <input name="female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required value="{{$jan1[$key]}}"> </div>
                                    <button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                @endif
                                @endforeach
                              

                                @else
                                <x-column_-input  title="Male" Name="male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                                <x-column_-input  title="Female" Name="female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                                <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @endif
                                
                                
                              </div>
                      </div>
                      <div class="card-header"><div class="card-title">LOAN  RECOVERY  DURING THE CURRENT YEAR</div></div>
                      <div class="card-body">
                        <div id="newinput1" class="row g-2">
                            @if(!empty($activities->activity))
                            @php
                            $jan1=json_decode($activities->recovery_male_clan);
                            $jan2=json_decode($activities->recovery_female_clan);
                            @endphp
                            @forEach(json_decode($activities->recovery_clan) as $key => $data)
                            @if($key==0)
                            <div class="col-md-3">
                                <label for="" class="form-label">Ethnic Group/Clan</label>
                                <select name="recovery_clan[]" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option @if($data=="ST") selected @endif>ST</option>
                                    <option @if($data=="SC") selected @endif>SC</option>
                                    <option @if($data=="Gen or Other") selected @endif>Gen or Other</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                            </div>
                          
                            <x-column_-input  title="Male" Name="recovery_male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3" val="{{$jan1[$key]}}"/>
                            <x-column_-input  title="Female" Name="recovery_female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3" val="{{$jan1[$key]}}"/>
                            <button type="button" id="rowAdder1" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            @else
                            <div id="row1" class="row g-2">
                                <div class="col-md-3">
                                <select name="recovery_clan[]" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                                <option @if($data=="ST") selected @endif>ST</option>
                                <option @if($data=="SC") selected @endif>SC</option>
                                <option @if($data=="Gen or Other") selected @endif>Gen or Other</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                 <div class="invalid-feedback">This field is required.</div>
                                </div>
                                <div class="col-md-3">
                                <input name="recovery_male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required value="{{$jan1[$key]}}"> </div>
                                <div class="col-md-3">
                                <input name="recovery_female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required value="{{$jan2[$key]}}"> </div>
                                <button type="button" id="DeleteRow1" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                            @endif

                            @endforeach
                            @else
                            <div class="col-md-3">
                                <label for="" class="form-label">Ethnic Group/Clan</label>
                                <select name="recovery_clan[]" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >ST</option>
                                    <option>SC</option>
                                    <option>Gen or Other</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                            </div>
                          
                            <x-column_-input  title="Male" Name="recovery_male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                            <x-column_-input  title="Female" Name="recovery_female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                            <button type="button" id="rowAdder1" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            @endif
                          
                        </div>
                        </div>
                        <div class="card-header"><div class="card-title">TOTAL AMOUNT RECOVERY</div></div>
                        <div class="card-body">
                            <div class="row g-2">
                                    <x-column_-input  title="Principal Amount" Name="principal_amount" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->principal_amount ?? '')}}"/>
                                    <x-column_-input  title="Interest Amount" Name="interest_amount" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->interest_amount ?? '')}}"/>
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">KCC LOAN OUTSTANDING FOR THE LAST FIVE YEARS</div></div>
                        <div class="card-body">
                            <div class="row g-2" id="newinput3">
                                @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->outstanding_p_amount);
                                $jan2=json_decode($activities->outstanding_interest);
                                @endphp
                                @forEach(json_decode($activities->years) as $key => $data)
                                @if($key==0)
                                <x-column_-input  title="Years" Name="years[]" placeholder="Eg-1000" div_class="col-md-2" val="{{$data}}"/>
                                <x-column_-input  title="Principal Amount" Name="outstanding_p_amount[]" id="" placeholder="Eg-1000" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                                <x-column_-input  title="Interest Amount" Name="outstanding_interest[]" id="" placeholder="Eg-1000" div_class="col-md-2" val="{{$jan2[$key]}}"/>
                                <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>

                                @else
                                <div id="row3" class="row g-2">
                                    <div class="col-md-2">
                                    <input name="years[]" type="text" class="form-control" placeholder="Eg- 10" required value="{{$data}}"> </div>
                                    <div class="col-md-2">
                                    <input name="outstanding_p_amount[]" type="text" class="form-control" placeholder="Eg- 10" required value="{{$jan1[$key]}}"> </div>
                                    <div class="col-md-2">
                                    <input name="outstanding_interest[]" type="text" class="form-control" placeholder="Eg- 20" required value="{{$jan2[$key]}}"> </div>
                                    <button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                @endif
                                @endforeach
                                @else
                                <x-column_-input  title="Years" Name="years[]" placeholder="Eg-1000" div_class="col-md-2"/>
                                <x-column_-input  title="Principal Amount" Name="outstanding_p_amount[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                <x-column_-input  title="Interest Amount" Name="outstanding_interest[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @endif
                                    
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">NO. OF OUTSTANDING LOANEE MEMBERS</div></div>
                        <div class="card-body">
                            <div class="row g-2" id="newinput4">
                                @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->outstandingloanee_male);
                                $jan2=json_decode($activities->outstandingloanee_female);
                                @endphp
                                @forEach(json_decode($activities->outstandingloanee_clan) as $key => $data)
                                @if($key==0)
                                <div class="col-md-3">
                                    <label for="" class="form-label">Ethnic Group/Clan</label>
                                    <select name="outstandingloanee_clan[]" class="form-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if($data=="ST") selected @endif>ST</option>
                                        <option @if($data=="SC") selected @endif>SC</option>
                                        <option @if($data=="Gen or Other") selected @endif>Gen or Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <x-column_-input  title="Male" Name="outstandingloanee_male[]" id="" placeholder="Eg-1000" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                                <x-column_-input  title="Female" Name="outstandingloanee_female[]" id="" placeholder="Eg-1000" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                                <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row4" class="row g-2">
                                    <div class="col-md-3">
                                    <select name="outstandingloanee_clan[]" class="form-select" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option @if($data=="ST") selected @endif>ST</option>
                                    <option @if($data=="SC") selected @endif>SC</option>
                                    <option @if($data=="Gen or Other") selected @endif>Gen or Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                     <div class="invalid-feedback">This field is required.</div>
                                    </div>
                                    <div class="col-md-2">
                                    <input name="outstandingloanee_male[]" type="text" class="form-control" placeholder="Eg- 10" required value="{{$jan1[$key]}}"> </div>
                                    <div class="col-md-2">
                                    <input name="outstandingloanee_female[]" type="text" class="form-control" placeholder="Eg- 20" required value="{{$jan2[$key]}}"> </div>
                                    <button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                                @endif
                                @endforeach
                                @else
                                <div class="col-md-3">
                                    <label for="" class="form-label">Ethnic Group/Clan</label>
                                    <select name="outstandingloanee_clan[]" class="form-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option >ST</option>
                                        <option>SC</option>
                                        <option>Gen or Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                    <x-column_-input  title="Male" Name="outstandingloanee_male[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <x-column_-input  title="Female" Name="outstandingloanee_female[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @endif
                                
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="row g-2">
                                    <x-column_-input  title="Defaulters Nos." Name="defaulter_no" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->defaulter_no ?? '')}}"/>
                                    <x-column_-input  title="Defaulters Amount" Name="defaulter_amount" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->defaulter_amount ?? '')}}"/>
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">PROVISION FOR NPA (KCC)</div></div>
                        <div class="card-body">
                            <div class="row g-2">
                                    <x-column_-input  title="Principal" Name="npa_principal" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->npa_principal ?? '')}}" />
                                    <x-column_-input  title="Interest" Name="npa_interest" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->npa_interest ?? '')}}"/>
                            </div>
                        </div>
                      <div class="card-footer">
                        @if(!empty($activities->activity))
                        <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                         <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                          <button type="submit" class="btn btn-primary">Save</button>
                          @endif
                  </div>
              </form>
        </div>
</x-layout>
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

 $("#rowAdder2").click(function () {
            newRowAdd =
                '<div id="row2" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen/Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });

        $("#rowAdder1").click(function () {
            newRowAdd =
                '<div id="row1" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="recovery_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen or Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow1" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput1').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow1", function () {
            $(this).parents("#row1").remove();
        });
        var i=2;
        $("#rowAdder3").click(function () {
            
           
            newRowAdd =
                '<div id="row3" class="row g-2">'+
                '<div class="col-md-2">' +
                '<input name="years[]" type="text" class="form-control" placeholder="Eg- 10" required value="'+i+
                '" > </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_p_amount[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_interest[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            i++;
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
            i--;
        });

        $("#rowAdder4").click(function () {
            newRowAdd =
                '<div id="row4" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="outstandingloanee_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen or Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_male[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_female[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput4').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow4", function () {
            $(this).parents("#row4").remove();
        });
</script>
