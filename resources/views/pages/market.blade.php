<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Marketting Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">MARKETING</div></div>
            <form class="needs-validation" action="/market" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">AGRICULTURE INPUTS SUCH AS SEED, FERTILIZERS ETC. (SPECIFY)</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Type" Name="agriculture_input_type" id="" placeholder="Eg-Seed, Fertilizer ETC" div_class="col-md-3"/>
                              <x-column_-input  title="Quantity" Name="agriculture_input_quantity" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="agriculture_input_value" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title">AGRICULTURE/HORTICULTURE/ OTHER PRODUCES</div></div>
                    <div class="card-body">
                            <div id="newinput2" class="row g-2">
                              <x-column_-input  title="Name of the Product Produces" Name="product_produce[]" id="" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" div_class="col-md-3"/>
                              <x-column_-input  title="Quantity in kg" Name="product_quantity[]" id="" placeholder="Eg-20" div_class="col-md-3"/>
                              <x-column_-input  title="Values" Name="product_value[]" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                           
                    </div>
                    
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Back</button>
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

   $("#rowAdder2").click(function () {
            newRowAdd =
                '<div id="row2" class="row g-2"><div class="col-md-3">' +
                '<input name="product_produce[]" type="text" class="form-control" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="product_quantity[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="product_value[]" type="text" class="form-control" placeholder="Eg- 200" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });
</script>