<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Industrial Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">INDUSTRIAL
              @error('Society_Id')
                      <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
                      @enderror
            </div></div>
            <form class="needs-validation" action="/industry" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">FLOW OF TOURISTS  (PER ANNUM)</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput5">  
                              <x-column_-input  title="Type of Business" Name="type_of_Business[]" id="" placeholder="Eg-Pottery, Carpentry" div_class="col-md-2"/>
                              <x-column_-input  title="Item Produced/Service" Name="name_of_item_produced[]" id="" placeholder="Eg-Poultry, Piggery" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of Person Employed" Name="person_employed[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Wages Paid" Name="wages_paid[]" id="" placeholder="Eg-200" div_class="col-md-2"/>
                              <x-column_-input  title="Sales TurnOver" Name="sales_turnover[]" id="" placeholder="Eg-20000" div_class="col-md-2"/>
                              <button type="button" id="rowAdder5" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                    <div class="card-header"><div class="card-title">TRAINING CENTRE</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Cources Offered" Name="course_offered" id="" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. Of Trainnee" Name="nos_of_trainee" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Course Fee" Name="course_fee" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                              <x-column_-input  title="Teaching Staff" Name="teaching_staff" id="" placeholder="Eg-5" div_class="col-md-3"/>
                              <x-column_-input  title="Non-Teaching Staff" Name="non_teaching_staff" id="" placeholder="Eg-5" div_class="col-md-3"/>
                              <x-column_-input  title="Salary To Staff" Name="salary" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                              
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

  $("#rowAdder5").click(function () {
            newRowAdd =
                '<div id="row5" class="row g-2"><div class="col-md-2">' +
                '<input name="type_of_Business[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="name_of_item_produced[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="person_employed[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="wages_paid[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="sales_turnover[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow5" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput5').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow5", function () {
            $(this).parents("#row5").remove();
        });
</script>