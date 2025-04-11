<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="" method ="" novalidate>
                        @csrf
                        <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                        <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}">
                              <div class="card-header"><div class="card-title">BORROWINGS FROM GOVT. </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Types (Specify)" Name="govt_Types" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3"/>
                                        <x-column_-input  title="Amount" Name="govt_amount" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Refunded" Name="govt_refunded" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Outstanding" Name="govt_outstanding" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">BORROWINGS FROM MCAB LTD. </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Types (Specify)" Name="mcab_Types" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3"/>
                                        <x-column_-input  title="Amount" Name="mcab_amount" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Refunded" Name="mcab_refunded" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Outstanding" Name="mcab_outstanding" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">BORROWINGS FROM OTHER FINANCIAL INSTITUTION </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Types (Specify)" Name="institution_Types" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3"/>
                                        <x-column_-input  title="Amount" Name="institution_amount" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Refunded" Name="institution_refunded" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Outstanding" Name="institution_outstanding" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">BORROWINGS FROM OTHER(Mentioned)</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Types (Specify)" Name="other_Types" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3"/>
                                        <x-column_-input  title="Amount" Name="other_amount" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Refunded" Name="other_refunded" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="Outstanding" Name="other_outstanding" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                       
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">TOTAL DEPOSIT</div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="Bank SB" Name="bank_sb" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Bank FD" Name="bank_fd" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Bank CD" Name="bank_cd" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="Thrift" Name="thrift" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
                                        <x-column_-input  title="others" Name="other" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-2" inclass="numbers"/>
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
   </script>

    </x-layout>
