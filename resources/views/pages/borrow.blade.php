<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Borrowing" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="/borrow" method ="POST" novalidate>
                        @csrf
                         @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Name_of_the_Society" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="Society_Id" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Name_of_the_Society" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}">
                          @endif

                        <div class="card-header"><div class="card-title">BORROWINGS
                          <select Name="Govt_loan" class="form-select target" id="Govt_loan" required>
                          <option selected disabled value="">Choose...</option>
                          <option >Yes</option>
                          <option>No</option>
                       
                      </select></div></div>
                      @error('Govt_loan')
                      <div style="color:red">{{$message}}</div>
                      @enderror

                      <div class="card-body">
                        <div class="row g-2" id="newinput_borrowing">
                          <div class="col-md-2">
                            <label for="validationCustom01" class="form-label">Borrowing from</label>
                            <select Name="borrowing_from[]" class="form-select target" id="selectid3" >
                                <option selected disabled value="">Choose...</option>
                                '<option >GOVT.</option>'+
                                '<option>MCAB LTD.</option>'+
                                '<option>OTHER FINANCIAL INSTITUTION</option>'+
                                '<option>OTHER(Mentioned)</option>'+
                                
                                
                            </select>
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
              
                      </div>
                </div>
                              <div class="card-header"><div class="card-title">TOTAL DEPOSIT</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Bank SB A/C" Name="bank_sb_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Bank FD A/C" Name="bank_fd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Bank RD A/C" Name="bank_rd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Bank CD A/C" Name="bank_cd_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Thrift A/C" Name="bank_thrift_ac" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        
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



      $("#rowAdder_borrowing").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-2">' +
                  '<select Name="borrowing_from[]" class="form-select target" id="selectid3" required>'+
                        '<option selected disabled value="">Choose...</option>'+
                        '<option >GOVT.</option>'+
                        '<option>MCAB LTD.</option>'+
                        '<option>OTHER FINANCIAL INSTITUTION</option>'+
                        '<option>OTHER(Mentioned)</option>'+
                                
                   ' </select></div>'+
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

        $("body").on("change", "#Govt_loan", function () {
          var Govt_loan=$("#Govt_loan").val();
          if(Govt_loan=="Yes"){
            $("select").prop("required", true);
            $("input").prop("required", true);
          }else{
            $("select").prop("required", false);
            $("input").prop("required", false);
          }
            
        });
        
   </script>

    </x-layout>
