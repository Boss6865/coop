<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Livestock Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">LIVESTOCK</div></div>
            <form class="needs-validation" action="/livestock" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">FIXED ASSETS ON LIVESTOCK</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput3">  
                              <x-column_-input  title="Name of Livestock" Name="livestock_Name[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Sheds" Name="shed_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value of Sheds" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                    <div class="card-header"><div class="card-title">ASSETS ON LIVESTOCKS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                              <x-column_-input  title="Nos." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              
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


  $("#rowAdder3").click(function () {
            newRowAdd =
                '<div id="row3" class="row g-2"><div class="col-md-3">' +
                '<input name="livestock_Name[]" type="text" class="form-control" placeholder="Eg-Poultry, Piggery" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="shed_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="shed_value[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
        });
</script>