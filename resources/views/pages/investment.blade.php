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
                              <div class="card-header"><div class="card-title">INVESTMENT OF THE SOCIETY (AMOUNT IN RUPEES) </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <x-column_-input  title="MCAB" Name="MCAB" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MECOFED" Name="MECOFED" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MRTCF" Name="MRTCF" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MSHFCS" Name="MSHFCS" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MSFCF" Name="MSFCF" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MEGHALOOM" Name="MEGHALOOM" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MSD&LCF" Name="MSD_LCF" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="MJJSF" Name="MJJSF" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="SUB-AREA MARKETING" Name="SUB_AREA_MARKETING" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="ETC" Name="ETC" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
                                        <x-column_-input  title="TOTAL" Name="TOTAL" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-3" inclass="numbers"/>
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
