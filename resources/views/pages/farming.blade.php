<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Farming Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">FARMING</div></div>
            <form class="needs-validation" action="/farming" method="POST" novalidate>
                @csrf
                 {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
               <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">MEMBERSHIP</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="ST Male" Name="st_male" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="ST Female" Name="st_female" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="SC Male" Name="sc_male" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="SC Feale" Name="sc_female" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Of Which Landholders (in Nos)" Name="which_landholder" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Of Which Argriculture Labourers (in Nos)" Name="which_agriculture" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
                    <div class="card-header"><div class="card-title">FARMING ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Types of Agri/Horti Produce" Name="type_produce_agriorhorti" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Production In Quantity" Name="production_quantity" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Amount" Name="farming_activities_amount" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> SALE OF PRODUCE	</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Quantity" Name="produce_quantity" id="" placeholder="Eg-10" div_class="col-md-3"/>
                              <x-column_-input  title="Amount" Name="produce_amount" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Back</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
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