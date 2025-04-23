<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Other Type Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">OTHER TYPE</div></div>
            <form class="needs-validation" action="/other" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">SCHOOL/MUSIC/COMPUTER/COACHING CENTRE </div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Course Offerred" Name="course_offered" id="" placeholder="Eg" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Student" Name="nos_of_student" id="" placeholder="Example" div_class="col-md-3"/>
                              <x-column_-input  title="Course Fee" Name="course_fee" id="" placeholder="Example" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Teacing Staff" Name="no_of_teaching_staff" id="" placeholder="Example" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Non Teaching Staff" Name="no_of_non_teaching_staff" id="" placeholder="Example" div_class="col-md-3"/>
                              <x-column_-input  title="Salary To Staff" Name="salary_to_staff" id="" placeholder="Example" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title">OTHER ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Service Provide (specify) " Name="service_provided" id="" placeholder="write Something" div_class="col-md-3"/>
                              <x-column_-input  title="Number of Employee involved " Name="employee" id="" placeholder="write Something" div_class="col-md-3"/>
                              <x-column_-input  title="Wages paid " Name="wage_paid" id="" placeholder="write Something" div_class="col-md-3"/>
                              <x-column_-input  title="Total Turnover " Name="turn_over" id="" placeholder="write Something" div_class="col-md-3"/>
                            </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
        </div>
</x-layout>
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