<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="/asset" method ="POST" novalidate>
                        @csrf
                         {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
                        <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

                        <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
                        <input type="hidden" name="Society_Id" value="51">
                              <div class="card-header"><div class="card-title">OFFICE BUILDINGS </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Own Building</label>
                                            <select Name="self_building" class="form-select target" id="selectid3" required>
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
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Rented Building</label>
                                            <select Name="rented_building" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Rent Paid Per Annum" Name="rent_paid" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">GODOWN</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Do You Have Gowdown</label>
                                            <select Name="godown" class="form-select target" id="selectid3" required>
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
                                        <x-column_-input  title="AREA OF THE GODOWN IN SQ.FT. / ARCE" Name="godown_area" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4"/>
                                        <x-column_-input  title="CAPACITY IN MT" Name="godown_capacity" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Types</label>
                                            <select Name="godown_types" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Terms Of Agreement" Name="godown_type_agreement" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                        <x-column_-input  title="Amount Paid Per Annum" Name="godown_type_per_annum" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4" inclass="numbers"/>
                                       
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Storage</label>
                                            <select Name="storage" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Cold" Name="storage_cold" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4" />
                                        <x-column_-input  title="Dry" Name="storage_dry" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-4" />
                                       
                                        <div class="col-md-4">
                                            <label for="validationCustom01" class="form-label">Land</label>
                                            <select Name="land" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Land Area in Sq. Ft./Acre" Name="Land_area" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4"/>
                                        <x-column_-input  title="If Lease Term Agreement and Area in Sq. Ft./Acre" Name="land_area_lease" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-4"/>
                                        <div class="col-md-2">
                                            <label for="validationCustom01" class="form-label">Furniture</label>
                                            <select Name="furniture" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Total Nos." Name="furniture_total" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Value" Name="furniture_amount" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers"/>
                                        <div class="col-md-2">
                                            <label for="validationCustom01" class="form-label">Computers</label>
                                            <select Name="computers" class="form-select target" id="selectid3" required>
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
                                        
                                        <x-column_-input  title="Total Nos." Name="computers_total" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Value" Name="computers_amount" id="validationCustom09" placeholder="Eg- 1000 Sq. Ft." div_class="col-md-2" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">OTHERS (PLEASE SPECIFY THE ITEMS )  </div></div>
                              <div class="card-body">
                                      <div class="row g-2" id="newinput">
                                        <x-column_-input  title="Name of Item" Name="item_name[]" id="validationCustom09" placeholder="Eg-Chairs" div_class="col-md-2"/>
                                        <x-column_-input title="Nos./Area" id="validationCustom10" Name="item_no[]"  placeholder="Eg- 10 " div_class="col-md-2"/>
                                        <x-column_-input title="Value" id="validationCustom10" Name="item_amount[]"  placeholder="Eg-1000" div_class="col-md-2" inclass="numbers"/>
                                        <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            
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


      $("#rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2"><div class="col-md-2">' +
                '<input name="item_name[]" type="text" class="form-control" placeholder="Eg-Chair" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_no[]" type="text" class="form-control" placeholder="Eg-10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_amount[]" type="text" class="form-control numbers" placeholder="Eg-1000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
   </script>

    </x-layout>
