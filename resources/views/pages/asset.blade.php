<x-layout>
  @isset($Datas->Name_of_the_Society)
  <x-navigation title="{{$Datas->Name_of_the_Society}}" Nav="investment" />
  @else
<x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
  @endisset
    
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
     
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="/asset" method ="POST" novalidate>
                        @csrf
                         @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Name_of_the_Society" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="Society_Id" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Name_of_the_Society" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}">
                          @endif
                              <div class="card-header"><div class="card-title">OFFICE BUILDINGS </div></div>
                             
                              <div class="card-body" >
                                      <div class="row g-2">
                                        <div class="col-md-3">
                                            <label for="" class="form-label">Own Building</label>
                                            <select Name="self_building" class="form-select target" id="self_building" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                             
                                            </select>
                                            @error('self_building')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="" class="form-label">Rented Building</label>
                                            <select Name="rented_building" class="form-select target" id="rented_building">
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                             
                                            </select>
                                            @error('rented_building')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Rent Paid Per Annum" Name="rent_paid" div_id="rent_paid" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">GODOWN</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Do You Have Godown</label>
                                            <select Name="godown" class="form-select target" id="godown" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                             
                                            </select>
                                            @error('godown')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <x-column_-input  title="AREA OF THE GODOWN IN SQ.FT. / ACRE" Name="godown_area" div_id="godown_area" placeholder="Eg- 1000" div_class="col-md-4"/>
                                        <x-column_-input  title="CAPACITY IN MT" Name="godown_capacity" div_id="godown_capacity" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                      
                                        <div class="col-md-4" id="godown_types_div">
                                            <label for="" class="form-label">Types</label>
                                            <select Name="godown_types" class="form-select target" id="godown_types">
                                                <option selected disabled value="">Choose...</option>
                                                <option >Owned</option>
                                                <option>Lease</option>
                                                <option>Rented</option>
                                            </select>
                                            @error('godown_types')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Terms Of Agreement" Name="godown_type_agreement" div_id="godown_type_agreement" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                        <x-column_-input  title="Amount Paid Per Annum" Name="godown_type_per_annum" div_id="godown_type_per_annum" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                       </div>
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Storage</label>
                                            <select Name="storage" class="form-select target" id="storage" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            @error('storage')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Cold (in Number)" Name="storage_cold" div_id="storage_cold" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers1"/>
                                        <x-column_-input  title="Dry (in Number)" Name="storage_dry" div_id="storage_dry" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers1"/>
                                       </div>
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Land</label>
                                            <select Name="land" class="form-select target" id="land" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            @error('land')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Land Area in Sq. Ft./Acre" Name="Land_area" div_id="Land_area" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4"/>
                                        <x-column_-input  title="If Lease Term Agreement and Area in Sq. Ft./Acre" Name="land_area_lease" div_id="land_area_lease" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4"/>
                                        </div>
                                      <div class="row g-2">
                                        <div class="col-md-2">
                                            <label for="" class="form-label">Furniture</label>
                                            <select Name="furniture" class="form-select target" id="furniture" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            @error('furniture')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Total Nos." Name="furniture_total" div_id="furniture_total" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers1"/>
                                        <x-column_-input  title="Value" Name="furniture_amount" div_id="furniture_amount" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers1"/>
                                        </div>
                                      <div class="row g-2">
                                        <div class="col-md-2">
                                            <label for="" class="form-label">Computers</label>
                                            <select Name="computers" class="form-select target" id="computers" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            @error('computers')
                                            <div style="color:red">{{$message}}</div>
                                            @enderror
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        
                                        <x-column_-input  title="Total Nos." Name="computers_total" div_id="computers_total" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers1"/>
                                        <x-column_-input  title="Value" Name="computers_amount" div_id="computers_amount" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers1"/>
                                      
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">OTHERS (PLEASE SPECIFY THE ITEMS )  
                                <select Name="other_yes_no" class="form-select target" id="Other_item_id" required>
                                       <option selected disabled value="">Choose...</option>
                                       <option >Yes</option>
                                       <option>No</option>
                                   </select>
                              </div></div> 
                              <div class="card-body" id="other">
                                      <div class="row g-2" id="asset_newinput">
                                        <x-column_-input  title="Name of Item" Name="item_name[]" id="" placeholder="Eg-Chairs" div_class="col-md-2"/>
                                        <x-column_-input title="Nos./Area" id="" Name="item_no[]"  placeholder="Eg- 10 " div_class="col-md-2"/>
                                        <x-column_-input title="Value" id="" Name="item_amount[]"  placeholder="Eg-1000" div_class="col-md-2" inclass="numbers"/>
                                        <button type="button" id="asset_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            
                                    </div>
                              </div>
                              
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Next</button>
                          </div>
                        
                      </form>
      </div>
                            <!--end::Form-->
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
    <script>
      $('.numbers').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });
        $('.numbers1').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });


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
        $("body").on("change","#godown",function(){
          var godown=$('#godown').val();
          if(godown=="No"){
            
             $("#godown_types").prop("required", false);
          }else if(godown=="Yes"){
            //$("#godown_types").prop("required", true);
          }
        });
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
   </script>

    </x-layout>
