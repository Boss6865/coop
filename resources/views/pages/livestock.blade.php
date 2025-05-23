<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Livestock Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">FIXED ASSETS ON LIVESTOCK
              @error('Society_Id')
                      <div style="color:red">Itz Seem Data is already Save. Please Update to Continue</div>
                      @enderror
            </div></div>
            

                @if(!empty($activities->no_of_piggery_shed) || !empty($activities->no_of_goatery_shed) || !empty($activities->no_of_poultry_shed) || !empty($activities->no_of_duckery_shed) || !empty($activities->no_of_cattle_farming_shed) )
            <form class="needs-validation" action="/livestock/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/livestock" method="POST" novalidate>
                @csrf
            @endif
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title"></div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput3">  
                              
                                 <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="piggery" @if(!@empty($activities->no_of_piggery_shed)) checked @endif>
                                          <label class="form-check-label" for="Piggery">
                                            Piggery
                                          </label>
                                        </div>
                                      </th>
                                      
                                      <th scope="col"><div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="goatery" @if(!@empty($activities->no_of_goatery_shed)) checked @endif>
                                          <label class="form-check-label" for="Goatery">
                                            Goatery
                                          </label>
                                        </div>
                                      </th>
                                      <th scope="col"><div class="form-check">
                                        <input class="form-check-input " type="checkbox" value="poultry" @if(!@empty($activities->no_of_poultry_shed)) checked @endif>
                                          <label class="form-check-label" for="Poultry">
                                            Poultry
                                          </label>
                                        </div>
                                      </th>
                                      <th scope="col"><div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="duckery" @if(!@empty($activities->no_of_duckery_shed)) checked @endif>
                                          <label class="form-check-label" for="Duckery">
                                            Duckery
                                          </label>
                                        </div>
                                      </th>
                                      <th scope="col"><div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="cattle" @if(!@empty($activities->no_of_cattle_farming_shed)) checked @endif>
                                          <label class="form-check-label" for="Cattle_Farming">
                                            Cattle Farming
                                          </label>
                                        </div>
                                      </th>
                                    </tr>
                                  </thead>
                                
                                </table>
                              {{-- <x-column_-input  title="Nos. of Sheds" Name="shed_Nos" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value of Sheds" Name="shed_value" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/> --}}
                              {{-- <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button> --}}
                            </div>
                    </div>
                    <div class="card-body" id="piggery" @if(!@empty($activities->no_of_piggery_shed)) @else hidden @endif>
                            <div class="row g-2">
                              <x-column_-input  title="No. of Piggery Shed" Name="no_of_piggery_shed" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->no_of_piggery_shed ?? '')}}"/>
                              <x-column_-input  title="Value of Piggery Sheds" Name="value_of_piggery_shed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->value_of_piggery_shed ?? '')}}"/>
                              <div class="col-md-3">
                                    <label for="" class="form-label">Types of Piggery Activities</label>
                                    <select Name="piggery_activities" id="piggery_activities" class="form-select target" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if(($activities->piggery_activities ?? '')=="Breeding") selected @endif>Breeding</option>
                                        <option @if(($activities->piggery_activities ?? '')=="Fattening") selected @endif>Fattening</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    @error('piggery_activities')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                                 </div>
                               <x-column_-input  title="Total Sales" Name="total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->total_sale ?? '')}}"/>
                            </div>
                    </div>
                    <div class="card-body" id="goatery" @if(!@empty($activities->no_of_goatery_shed)) @else hidden @endif>
                            <div class="row g-2">
                              <x-column_-input  title="No. of Goatery Shed" Name="no_of_goatery_shed" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->no_of_goatery_shed ?? '')}}"/>
                              <x-column_-input  title="Value of Goatery Sheds" Name="value_of_goatery_shed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->value_of_goatery_shed ?? '')}}"/>
                               <x-column_-input  title="Types of Goatery Item" Name="goatery_item" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->goatery_item ?? '')}}"/>
                              <x-column_-input  title="Total sale" Name="goatery_total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->goatery_total_sale ?? '')}}"/>
                            </div>
                    </div>
                     <div class="card-body" id="poultry" @if(!@empty($activities->no_of_poultry_shed)) @else hidden @endif>
                            <div class="row g-2">
                              <x-column_-input  title="No. of Poultry Shed" Name="no_of_poultry_shed" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->no_of_poultry_shed ?? '')}}"/>
                              <x-column_-input  title="Value of Poultry Sheds" Name="value_of_poultry_shed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->value_of_poultry_shed ?? '')}}"/>
                               <x-column_-input  title="Types of poultry Item" Name="poultry_item" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->poultry_item ?? '')}}"/>
                              <x-column_-input  title="Total sale" Name="poultry_total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->poultry_total_sale ?? '')}}"/>
                            </div>
                    </div>
                    <div class="card-body" id="duckery" @if(!@empty($activities->no_of_duckery_shed)) @else hidden @endif>
                            <div class="row g-2">
                              <x-column_-input  title="No. of Duckery Shed" Name="no_of_duckery_shed" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->no_of_duckery_shed ?? '')}}"/>
                              <x-column_-input  title="Value of Duckery Sheds" Name="value_of_duckery_shed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->value_of_duckery_shed ?? '')}}"/>
                               <x-column_-input  title="Types of duckery Item" Name="duckery_item" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->duckery_item ?? '')}}"/>
                              <x-column_-input  title="Total sale" Name="duckery_total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->duckery_total_sale ?? '')}}"/>
                            </div>
                    </div>
                    <div class="card-body" id="cattle" @if(!@empty($activities->no_of_cattle_farming_shed)) @else hidden @endif>
                            <div class="row g-2">
                              <x-column_-input  title="No. of Cattle Farming Shed" Name="no_of_cattle_farming_shed" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->no_of_cattle_farming_shed ?? '')}}"/>
                              <x-column_-input  title="Value of Cattle_Farming Sheds" Name="value_of_cattle_farming_shed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->value_of_cattle_farming_shed ?? '')}}"/>
                               <x-column_-input  title="Types of Cattle Farming Item" Name="cattle_farming_item" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->cattle_farming_item ?? '')}}"/>
                              <x-column_-input  title="Total sale" Name="cattle_farming_total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->cattle_farming_total_sale ?? '')}}"/>
                            </div>
                    </div>

                    <div class="card-header"><div class="card-title">ASSETS ON LIVESTOCKS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="livestock_name" id="" placeholder="Eg-" div_class="col-md-3" required="required" val="{{($activities->livestock_name ?? '')}}"/>
                              <x-column_-input  title="Nos." Name="livestock_no" id="" placeholder="Eg-2" div_class="col-md-3" required="required" val="{{($activities->livestock_no ?? '')}}"/>
                              <x-column_-input  title="Value" Name="livestock_value" id="" placeholder="Eg-2" div_class="col-md-3" required="required" val="{{($activities->livestock_value ?? '')}}"/>
                              
                            </div>
                    </div>
                    <div class="modal-footer">
                     @if(!empty($activities->no_of_piggery_shed) || !empty($activities->no_of_goatery_shed) || !empty($activities->no_of_poultry_shed) || !empty($activities->no_of_duckery_shed) || !empty($activities->no_of_cattle_farming_shed) )
                    <a href="/Sector_activity"><button type="button" class="btn btn-secondary">Back</button></a> 
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                         <a href="/Sector_activity"><button type="button" class="btn btn-secondary">Back</button></a> 
                          <button type="submit" class="btn btn-primary">Save</button>
                          @endif
                  </div>
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

// function select_option(val){
//   console
// }

$("input:checkbox").change(function() {
    var $this = $(this);
    let element = document.getElementById($this.val());
    let hidden = element.getAttribute("hidden");
    if($this.is(":checked")){
        element.removeAttribute("hidden");
        $(element).children().find('input,select').each(function(){
          $(this).prop('required',true);
          });
    }else{

          $(element).children().find('input,select').each(function(){
          $(this).val('');
          });
         element.setAttribute("hidden", "hidden");
         $(element).children().find('input,select').each(function(){
          $(this).removeAttr("required");
          });
          
    }
});

  $("#rowAdder3").click(function () {
            newRowAdd =
                '<div id="row3" class="row g-2"><div class="col-md-3">' +
                '<input name="livestock_Name[]" type="text" class="form-control" placeholder="Eg-Poultry, Piggery" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="shed_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="shed_value[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
        });
</script>