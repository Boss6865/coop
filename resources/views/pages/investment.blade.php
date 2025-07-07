<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="/investment" method ="POST" novalidate>
                        @csrf
                          @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Name_of_the_Society" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="Society_Id" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Name_of_the_Society" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}">
                          @endif

                        

                              <div class="card-header"><div class="card-title">INVESTMENT OF THE SOCIETY 
                                <select Name="investment_Status" class="form-select target" id="investment_Status" required>
                                <option selected disabled value="">Choose...</option>
                                <option >Yes</option>
                                <option>No</option>
                             
                            </select></div></div>
                            @error('investment_Status')
                            <div style="color:red">{{$message}}</div>
                            @enderror
                            <div class="card-body">
                              <div class="row g-2" id="newinput_investment">
                                <div class="col-md-4">
                                  <label for="validationCustom01" class="form-label">Type of Investment</label>
                                  <select Name="type_of_govt_loan[]" class="form-select target" id="type_of_govt_loan" required>
                                      <option selected disabled value="">Choose...</option>
                                      <option >MCAB</option>
                                      <option>MECOFED</option>
                                      <option>MRTCF</option>
                                      <option>MSHFCS</option>
                                      <option>MSFCF</option>
                                      <option>MEGHALOOM</option>
                                      <option>MSD&LCF</option>
                                      <option>MJJSF</option>
                                      <option>SUB-AREA MARKETING</option>
                                      <option>OTHER</option>
                                      
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
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  @error('type_of_govt_loan')
                                  <div style="color:red">{{$message}}</div>
                                  @enderror
                              </div>
                                {{-- <x-column_-input  title="Investment Amount" Name="loan_investment_amount[]" id="validationCustom09" placeholder="Eg-2025" div_class="col-md-4" inclass="numbers" /> --}}
                               
                                <div class="col-md-4">
                                        <label for="loan_investment_amount1" class="form-label">Investment Amount</label>
                                        <input
                                          type="text"
                                          class="form-control numbers"
                                          id="loan_investment_amount1"
                                          value=""
                                          name="loan_investment_amount[]"
                                          placeholder="Investment Amount"
                                          required
                                        />
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                                <button type="button" id="rowAdder_investment" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                    
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


        $("#rowAdder_investment").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2">'+
                  '<div class="col-md-4">' +
                  '<select Name="type_of_govt_loan[]" class="form-select target" id="" required>'+
                        '<option selected disabled value="">Choose...</option>'+
                        '<option >MCAB</option>'+
                         '<option>MECOFED</option>'+
                         '<option>MRTCF</option>'+
                         '<option>MSHFCS</option>'+
                         '<option>MSFCF</option>'+
                         '<option>MEGHALOOM</option>'+
                         '<option>MSD&LCF</option>'+
                         '<option>MJJSF</option>'+
                         '<option>SUB-AREA MARKETING</option>'+
                         '<option>OTHER</option>'+
                                
                   ' </select>'+
                   '<div class="col-md-12 other" style="display:none" id="wekk"><input type="text" class="form-control" id=""  value=""  name="other_mention[]"  /></div></div>'+
               
                '<div class="col-md-4">' +
                  '<input name="loan_investment_amount[]" type="text" class="form-control numbers" placeholder="Eg-10000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput_investment').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
         $("body").on("change", "#investment_Status", function () {
          var investment_Status=$("#investment_Status").val();
          if(investment_Status=="No"){
            $("#type_of_govt_loan").prop("required", false);
            $("#loan_investment_amount1").prop("required", false);
          }
            
        });

        $("select").on("change",function(){
    var type_of_govt_loan =$(this).val();
    if(type_of_govt_loan=="OTHER"){
     $('#other_mention_here').show();
      $("#other_mention_here input").focus();
    }else{
      $('#other_mention_here').hide();
    }
  });
 $(document).on('change', ".target", function () {
 
    if(this.value=="OTHER"){
   $(this).closest("div").find('.other').show();
    }else{
      $(this).closest("div").find('.other').hide();
    }
    });
     </script>

    </x-layout>
