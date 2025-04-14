<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="/loan" method ="POST" novalidate>
                        @csrf
                         {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
                        <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

                        <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
                        <input type="hidden" name="Society_Id" value="51">
                              <div class="card-header"><div class="card-title">GOVERNMENT LOAN (AMOUNT IN RUPEES) 
                                <select Name="any_Govt_loan" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option >Yes</option>
                                <option>No</option>
                             
                            </select></div></div>
                            @error('Govt_loan')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="card-body">
                              <div class="row g-2" id="newinput">
                                <div class="col-md-2">
                                  <label for="validationCustom01" class="form-label">Type of Govt. Loan</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="selectid3" required>
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
                                      <option>OTHER LOAN </option>
                                      
                                  </select>
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                                <x-column_-input  title="Loan Issue Year" Name="Loan_issue_year[]" id="validationCustom09" placeholder="Eg-2025" div_class="col-md-2"/>
                                <x-column_-input  title="Loan Sanctioned Amount" Name="Loan_sanctioned_amount[]" id="validationCustom09" placeholder="Eg-20000" div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Principal Amount" id="validationCustom10" Name="Outstanding_Principal_amount[]"  placeholder="Eg- 10000 " div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Interest Amount" id="validationCustom10" Name="Outstanding_interest_amount[]"  placeholder="Eg-10000" div_class="col-md-2" inclass="numbers"/>
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
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-2">' +
                  '<select Name="anyloan[]" class="form-select target" id="selectid3" required>'+
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
                        '<option>OTHER LOAN </option>'+
                   ' </select></div>'+
                '<div class="col-md-2">' +
                '<input name="Loan_issue_year[]" type="text" class="form-control" placeholder="Eg-2025" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="Loan_sanctioned_amount[]" type="text" class="form-control" placeholder="Eg-20000" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="Outstanding_Principal_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="Outstanding_interest_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
   </script>

    </x-layout>
