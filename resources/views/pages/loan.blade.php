<x-layout>
  @isset($Datas->Name_of_the_Society)
  <x-navigation title="{{$Datas->Name_of_the_Society}}" Nav="investment" />
  @else
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
  @endif
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
                        <div class="card-header"><div class="card-title">GOVERNMENT LOAN</div></div>
                     
                      <form class="needs-validation" action="/loan" method ="POST" novalidate>
                        @csrf
                         @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Name_of_the_Society" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="Society_Id" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Name_of_the_Society" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}">
                          @endif
                              <div class="card-header"><div class="card-title">Any Govt. Loans
                                <select Name="any_Govt_loan" class="form-select target" id="any_Govt_loan" required>
                                <option selected disabled value="">Choose...</option>
                                <option >Yes</option>
                                <option>No</option>
                             
                            </select></div></div>
                            @error('Govt_loan')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="card-body">
                              <div class="row g-2" id="loan_newinput" style="display: none" >
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
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                                <x-column_-input  title="Loan Issue Year" Name="Loan_issue_year[]" id="" placeholder="Eg-2025" div_class="col-md-2"/>
                                <x-column_-input  title="Loan Sanctioned Amount" Name="Loan_sanctioned_amount[]" id="" placeholder="Eg-20000" div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Principal Amount" id="" Name="Outstanding_Principal_amount[]"  placeholder="Eg- 10000 " div_class="col-md-2"/>
                                <x-column_-input title="Outstanding Interest Amount" id="" Name="Outstanding_interest_amount[]"  placeholder="Eg-10000" div_class="col-md-2" inclass="numbers"/>
                                <button type="button" id="loan_rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                    
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


      $("#loan_rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-2">' +
                  '<select Name="type_of_govt_loan[]" class="form-select target wekk2" id="selectid3" required>'+
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
        $("body").on("change","#any_Govt_loan", function(){
          var any_Govt_loan=$("#any_Govt_loan").val();
          if(any_Govt_loan=="Yes"){
            $('#loan_newinput').show();
          }else if(any_Govt_loan=="No"){
            $('#loan_newinput').hide();
          }
        });


       $("#govt_loan_type").on("change",function(){
    var govt_loan_type =$(this).val();
    if(govt_loan_type=="OTHER LOAN"){
     $('#other_mention_here').show();
      $("#other_mention_here input").focus();
    }else{
      $('#other_mention_here').hide();
    }
  });
   $(document).on('change', ".wekk2", function () {
 
    if(this.value=="OTHER LOAN"){
   $(this).closest("div").find('.other').show();
    }else{
      $(this).closest("div").find('.other').hide();
    }
    });
   </script>

    </x-layout>
