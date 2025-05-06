<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Industrial Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">INDUSTRIAL
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->type_of_Business))
            <form class="needs-validation" action="/industry/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/industry" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput5"> 
                              
                              @if(!empty($activities->type_of_Business))
                              @php
                              $jan1=json_decode($activities->name_of_item_produced);
                              $jan2=json_decode($activities->person_employed);
                              $jan3=json_decode($activities->wages_paid);
                              $jan4=json_decode($activities->sales_turnover);
                              @endphp
                              @forEach(json_decode($activities->type_of_Business) as $key => $data)
                              @if($key==0)
                              {{-- <x-column_-input  title="Type of Business" Name="type_of_Business[]" id="" placeholder="Eg-Pottery, Carpentry" div_class="col-md-2" val="{{$data}}"/> --}}
                              <div class="col-md-2">
                                <label for="activity_1" class="form-label">Type of Business</label>
                                <select name="type_of_Business[]" class="form-select target2" id="Select1" required>
                                    <option selected disabled value="">Choose...</option>
                                   
                                    <option @if($data=="Pottery") selected @endif>Pottery</option>
                                    <option @if($data=="Tailoring and Knitting") selected @endif>Tailoring and Knitting</option>
                                    <option @if($data=="Steel And Fabrication") selected @endif>Steel And Fabrication</option>
                                    <option @if($data=="Carpentry") selected @endif>Carpentry</option>
                                    <option @if($data=="Hollow Block Making") selected @endif>Hollow Block Making</option>
                                    <option @if($data=="Blacksmithing") selected @endif>Blacksmithing</option>
                                    <option @if($data=="Automobile Service") selected @endif>Automobile Service</option>
                                    <option @if($data=="Bee Keeping") selected @endif>Bee Keeping</option>
                                    <option @if($data=="Candle Making") selected @endif>Candle Making</option>
                                    <option @if($data=="Other Activities") selected @endif>Other Activities</option>
                                   
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                                
                            </div>
                              <x-column_-input  title="Item Produced/Service" Name="name_of_item_produced[]" id="" placeholder="Eg-Poultry, Piggery" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                              <x-column_-input  title="Nos. of Person Employed" Name="person_employed[]" id="" placeholder="Eg-2" div_class="col-md-2" val="{{$jan2[$key]}}"/>
                              <x-column_-input  title="Wages Paid" Name="wages_paid[]" id="" placeholder="Eg-200" div_class="col-md-2" val="{{$jan3[$key]}}"/>
                              <x-column_-input  title="Sales TurnOver" Name="sales_turnover[]" id="" placeholder="Eg-20000" div_class="col-md-2" val="{{$jan4[$key]}}"/>
                              <button type="button" id="rowAdder5" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @else
                              <div id="row5" class="row g-2"><div class="col-md-2">
                                {{-- <input name="type_of_Business[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required value="{{$data}}">  --}}
                                <select name="type_of_Business[]" class="form-select target2" id="Select1" required>
                                    <option selected disabled value="">Choose...</option>
                                   
                                    <option @if($data=="Pottery") selected @endif>Pottery</option>
                                    <option @if($data=="Tailoring and Knitting") selected @endif>Tailoring and Knitting</option>
                                    <option @if($data=="Steel And Fabrication") selected @endif>Steel And Fabrication</option>
                                    <option @if($data=="Carpentry") selected @endif>Carpentry</option>
                                    <option @if($data=="Hollow Block Making") selected @endif>Hollow Block Making</option>
                                    <option @if($data=="Blacksmithing") selected @endif>Blacksmithing</option>
                                    <option @if($data=="Automobile Service") selected @endif>Automobile Service</option>
                                    <option @if($data=="Bee Keeping") selected @endif>Bee Keeping</option>
                                    <option @if($data=="Candle Making") selected @endif>Candle Making</option>
                                    <option @if($data=="Other Activities") selected @endif>Other Activities</option>
                                   
                                </select>
                              </div>
                                <div class="col-md-2">
                                  <input name="name_of_item_produced[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="person_employed[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan2[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="wages_paid[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan3[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="sales_turnover[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan4[$key]}}"> </div>
                                <button type="button" id="DeleteRow5" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                             
                              @endforeach

                              @else
                              <div class="col-md-2">
                                <label for="activity_1" class="form-label">Type of Business</label>
                                <select name="type_of_Business" class="form-select target2" id="Select1" required>
                                    <option selected disabled value="">Choose...</option>
                                   
                                    <option>Pottery</option>
                                    <option>Tailoring and Knitting</option>
                                    <option>Steel And Fabrication</option>
                                    <option>Carpentry</option>
                                    <option>Hollow Block Making</option>
                                    <option>Blacksmithing</option>
                                    <option>Automobile Service</option>
                                    <option>Bee Keeping</option>
                                    <option>Candle Making</option>
                                    <option>Other Activities</option>
                                   
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                                
                            </div>
                              {{-- <x-column_-input  title="Type of Business" Name="type_of_Business[]" id="" placeholder="Eg-Pottery, Carpentry" div_class="col-md-2" /> --}}
                              <x-column_-input  title="Item Produced/Service" Name="name_of_item_produced[]" id="" placeholder="Eg-Poultry, Piggery" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of Person Employed" Name="person_employed[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Wages Paid" Name="wages_paid[]" id="" placeholder="Eg-200" div_class="col-md-2"/>
                              <x-column_-input  title="Sales TurnOver" Name="sales_turnover[]" id="" placeholder="Eg-20000" div_class="col-md-2"/>
                              <button type="button" id="rowAdder5" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
      
                            </div>
                    <div class="card-header"><div class="card-title">TRAINING CENTRE</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Cources Offered" Name="course_offered" id="" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3" val="{{($activities->course_offered ?? '')}}"/>
                              <x-column_-input  title="Nos. Of Trainnee" Name="nos_of_trainee" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->nos_of_trainee ?? '')}}"/>
                              <x-column_-input  title="Course Fee" Name="course_fee" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->course_fee ?? '')}}"/>
                              <x-column_-input  title="Teaching Staff" Name="teaching_staff" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->teaching_staff ?? '')}}"/>
                              <x-column_-input  title="Non-Teaching Staff" Name="non_teaching_staff" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->non_teaching_staff ?? '')}}"/>
                              <x-column_-input  title="Salary To Staff" Name="salary" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->salary ?? '')}}"/>
                              
                            </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->type_of_Business))
                  <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                   <a href="/sector/{{ $Datas->id }}"><button type="button" class="btn btn-secondary">Back</button></a> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                  </div>
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

  $("#rowAdder5").click(function () {
            newRowAdd =
                '<div id="row5" class="row g-2"><div class="col-md-2">' +
                  '<select name="type_of_Business[]" class="form-select target2" id="Select1" required>'+
                  '<option selected disabled value="">Choose...</option>'+
                  '<option>Pottery</option>'+
                  '<option>Tailoring and Knitting</option>'+
                  '<option>Steel And Fabrication</option>'+
                  '<option>Carpentry</option>'+
                  '<option>Hollow Block Making</option>'+
                  '<option>Blacksmithing</option>'+
                  '<option>Automobile Service</option>'+
                  '<option>Bee Keeping</option>'+
                  '<option>Candle Making</option>'+
                  '<option>Other Activities</option>'+
                  '</select> </div>'+
                '<div class="col-md-2">' +
                  '<input name="name_of_item_produced[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="person_employed[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="wages_paid[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="sales_turnover[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow5" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput5').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow5", function () {
            $(this).parents("#row5").remove();
        });
</script>