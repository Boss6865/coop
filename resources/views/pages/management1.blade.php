<x-layout>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   <x-navigation title="{{ Session()->get('Sooos'); }}"/>
 <!--begin::Form Validation-->
 <div class="card card-info card-outline mb-4">
                  <!--begin::Header-->
        <div class="card-header"><div class="card-title">NUMBER OF MEMBERS OF THE SOCIETY</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
            <form class="needs-validation" action="/management2" method ="POST" novalidate>
              @csrf
                    <!--begin::Body-->
                    <input type="hidden" name="Name_of_society2525" value="{{ Session()->get('Sooos'); }}">
                    <input type="hidden" name="id_of_society" value="{{ Session()->get('id_key'); }}">
                <div class="card-body">
                      <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <!-- <x-column_-select title="Tribe" id="validationCustom17" div_class="col-md-2"/> -->
                        
                        <!--end::Col-->
                        <x-column_-input Name="ST_Male" title="Number Of ST Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <!--begin::Col-->
                        <x-column_-input Name="ST_Female" title="Number of ST Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                       
                        <!--end::Col-->
                        <x-column_-input Name="ST_CoopSociety" title="Number of ST Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="ST_PG" title="Number of ST Producer Groups" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="ST_SHG" title="Number of ST SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                    </div>
                       <!--end::Row-->
                       <div class="row g-2">
                       
                        <x-column_-input Name="SC_Male" title="Number Of SC Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <!--begin::Col-->
                        <x-column_-input Name="SC_Female" title="Number of SC Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="SC_CoopSociety" title="Number of SC Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="SC_PG" title="Number of SC Producer Groups" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="SC_SHG" title="Number of SC SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                    </div>
                       <!--end::Row-->
                       <div class="row g-2">
                        
                        <x-column_-input Name="Gen_Male" title="Number Of Gen/Others Male" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <!--begin::Col-->
                        <x-column_-input Name="Gen_Female" title="Number of Gen/Others Female" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                       
                        <!--end::Col-->
                        <x-column_-input Name="Gen_CoopSociety" title="Number of Gen/Others Coop. Societies" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="Gen_PG" title="Number of Gen/Others P.G." id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                        <x-column_-input Name="Gen_SHG" title="Number of Gen/Others SHGs" id="validationCustom02" placeholder="Eg.2" div_class="col-md-2" inclass="numbers"/>
                    </div>
                       <!--end::Row-->
                    <div class="card-header"><div class="card-title">NUMBER OF THE MANAGING COMMITTEE / BOARD OF DIRECTOR</div></div>
            <!--begin::Row-->
            <div class="row g-2">
                       
                        <!--begin:Col-->
                        <x-column_-input Name="Managing_Male" title="Number Of Male" id="validationCustom03" placeholder="Eg.2" div_class="col-md-4" inclass="numbers"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Managing_Female" title="Number Of Female" id="validationCustom04" placeholder="Eg.2" div_class="col-md-4" inclass="numbers"/>
                        
                        <!--end::Col-->
                         
                <!--begin::Col-->
                <x-column_-input Name="Date_of_LastAGM" title="Date Of Last Agm" id="Date_of_LastAGM" placeholder='eg.2/02/2025' div_class="col-md-4" />
                
                        <!--end::Col-->
                      
              </div>
                       <!--end::Row-->
                       <div class="card-header"><div class="card-title">EMPLOYEES</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Employee_Male" title="Total Male" id="validationCustom06" placeholder="eg.2" div_class="col-md-3" inclass="numbers"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Employee_Female" title="Total Female" id="validationCustom07" placeholder="eg.2" div_class="col-md-3" inclass="numbers"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Trained_Male" title="Trained Male" id="validationCustom08" placeholder="eg.2" div_class="col-md-3" inclass="numbers"/>
                       
                        <!--end::Col-->
                         
                     <!--begin::Col-->
                     <x-column_-input Name="Trained_Female" title="Trained Female" id="validationCustom09" placeholder="eg.2" div_class="col-md-3" inclass="numbers"/>
                     
                        <!--end::Col-->
                      
                    </div>
                       <!--end::Row-->

                       <div class="card-header"><div class="card-title">TRAINING PROGRAMME ATTENDED</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Programme_Type" title="Type" id="validationCustom10" placeholder="eg.2" div_class="col-md-4"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Training_Program" title="Training Programme" id="validationCustom11" placeholder="eg.2" div_class="col-md-4"/>
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <x-column_-input Name="Number_of_Trainee" title="No. of Trainees" id="validationCustom12" placeholder="eg.2" div_class="col-md-4" inclass="numbers"/>
                        
                        <!--end::Col-->
                         
                    
                      
                    </div>
                       <!--end::Row-->

                       <div class="card-header"><div class="card-title">Cost Management</div></div>
                        <!--begin::Row-->
                    <div class="row g-2">
                        <!--begin::Col-->
                        <x-column_-input Name="Managemnt_Salary" title="Salary" id="validationCustom13" placeholder="eg.10000" div_class="col-md-4" inclass="numbers"/>
                       
                        <!--end::Col-->
                       
                        <!--begin::Col-->
                        <x-column_-input Name="Management_Expense" title="Management Expenses" id="validationCustom14" placeholder="eg.2000" div_class="col-md-4" inclass="numbers"/>
                        
                        <!--end::Col-->

                         <!--begin::Col-->
                         <x-column_-input Name="Other_Expense" title="Other Expenses" id="validationCustom15" placeholder="eg.10000" div_class="col-md-4" inclass="numbers"/>
                         
                        <!--end::Col-->
                         
                    
                      
                    </div>
                       <!--end::Row-->
                </div>
                <!--End::Body--> 
                    <!--begin::Footer-->
                <div class="card-footer">
                      <button class="btn btn-info" type="submit">Previous</button>
                      <button class="btn btn-info" type="submit">Next</button>
                </div>
                    <!--end::Footer-->
        </form>
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
                  <!--end::JavaScript-->
</div>
                <!--end::Form Validation-->
</x-layout>
<script>
      $('.numbers').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });
   </script>
      <script>
        $('#Date_of_LastAGM').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd'
        });
    </script>