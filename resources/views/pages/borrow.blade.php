<x-layout>
  @isset($Datas->Name_of_the_Society)
  <x-navigation title="{{$Datas->Name_of_the_Society}}" Nav="Borrowing" />
@else
  <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Borrowing" />
  @endisset
  
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
                            <select Name="borrowing_from[]" class="form-select target" id="borrowing_from" >
                                <option selected disabled value="">Choose...</option>
                                '<option >GOVT.</option>'+
                                '<option>MCAB LTD.</option>'+
                                '<option>OTHER FINANCIAL INSTITUTION</option>'+
                                '<option>OTHER(Mentioned)</option>'+
                                
                                
                            </select>
                            <div class="col-md-12" style="display:none" id="other_mention_here2">
                         
                                    <input
                                      type="text"
                                      class="form-control"
                                      value=""
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
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div class="card-title col-md-2">Any Others A/C
                                        <select Name="any_other_ac" class="form-select target" id="any_other_ac" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option >Yes</option>
                                        <option>No</option>
                                        </select>
                                        @error('any_other_ac')
                                        <div style="color:red">{{$message}}</div>
                                        @enderror
                                        <div class="valid-feedback">Looks good!</div>
                                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                                      </div>
                                        <div class="row g-2" id="other_ac" style="display:none">
                                           <x-column_-input  title="Account Name" Name="ac_name[]" id="" placeholder="Eg- Special Ac Name" div_class="col-md-2"/>
                                            <x-column_-input  title="Amount" Name="ac_amount[]" id="" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                          <button type="button" id="rowAdder_other_ac" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                        </div>
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

        // $("body").on("change", "#Govt_loan", function () {
        //   var Govt_loan=$("#Govt_loan").val();
        //   if(Govt_loan=="Yes"){
        //     $("select").prop("required", true);
        //     $("input").prop("required", true);
        //   }else{
        //     $("select").prop("required", false);
        //     $("input").prop("required", false);
        //   }
            
        // });

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
   </script>

    </x-layout>
