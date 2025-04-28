<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Other Type Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">OTHER TYPE
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->course_offered))
            <form class="needs-validation" action="/other/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/other" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">SCHOOL/MUSIC/COMPUTER/COACHING CENTRE </div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Course Offerred" Name="course_offered" id="" placeholder="Eg" div_class="col-md-3" val="{{($activities->course_offered ?? '')}}"/>
                              <x-column_-input  title="Nos. of Student" Name="nos_of_student" id="" placeholder="Example" div_class="col-md-3" val="{{($activities->nos_of_student ?? '')}}"/>
                              <x-column_-input  title="Course Fee" Name="course_fee" id="" placeholder="Example" div_class="col-md-3" val="{{($activities->course_fee ?? '')}}"/>
                              <x-column_-input  title="Nos. of Teacing Staff" Name="no_of_teaching_staff" id="" placeholder="Example" div_class="col-md-3" val="{{($activities->no_of_teaching_staff ?? '')}}"/>
                              <x-column_-input  title="Nos. of Non Teaching Staff" Name="no_of_non_teaching_staff" id="" placeholder="Example" div_class="col-md-3" val="{{($activities->no_of_non_teaching_staff ?? '')}}"/>
                              <x-column_-input  title="Salary To Staff" Name="salary_to_staff" id="" placeholder="Example" div_class="col-md-3" val="{{($activities->salary_to_staff ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">OTHER ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Service Provide (specify) " Name="service_provided" id="" placeholder="write Something" div_class="col-md-3" val="{{($activities->service_provided ?? '')}}"/>
                              <x-column_-input  title="Number of Employee involved " Name="employee" id="" placeholder="write Something" div_class="col-md-3" val="{{($activities->employee ?? '')}}"/>
                              <x-column_-input  title="Wages paid " Name="wage_paid" id="" placeholder="write Something" div_class="col-md-3" val="{{($activities->wage_paid ?? '')}}"/>
                              <x-column_-input  title="Total Turnover " Name="turn_over" id="" placeholder="write Something" div_class="col-md-3" val="{{($activities->turn_over ?? '')}}"/>
                            </div>
                    </div>
                   
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->course_offered))
                  <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                   <a href="/sector/{{ $Datas->id }}"><button type="button" class="btn btn-secondary">Back</button></a> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    @endif
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