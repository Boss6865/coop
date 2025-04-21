<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Fishery Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">FISHERIES</div></div>
            <form class="needs-validation" action="/fishery" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">NO. OF FISHERMEN</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Male" Name="male_fisher" id="" placeholder="Eg-10" div_class="col-md-3"/>
                              <x-column_-input  title="Female" Name="female_fisher" id="" placeholder="Eg-20" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title">ASSETS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Total Nos. Of Fish Pond" Name="total_pond" id="" placeholder="Eg- 5" div_class="col-md-3"/>
                              <x-column_-input  title="Area of Fish Pond (Hectares)" Name="area_of_pond" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                              <x-column_-input  title="Value of Fish Pond" Name="value_of_fish_pond" id="" placeholder="Eg-20000" div_class="col-md-3"/>
                              
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Total Nos. Of Nursery Pond" Name="nursery_pond" id="" placeholder="Eg-5" div_class="col-md-3"/>
                              <x-column_-input  title="Area of Nursery Pond (Hectares)" Name="area_of_nursery_pond" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value of Nursery Pond" Name="value_of_nursery_pond" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> FISH CATCHED/REARED & SALES	</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Types of Fish Reared" Name="type_of_fish_reared" id="" placeholder="Eg-Shalanai, Kha saw" div_class="col-md-3"/>
                              <x-column_-input  title="Quantity in Kg" Name="fish_quantity" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                              <x-column_-input  title="Sales of Fresh Fish and Others" Name="sales_of_fresh_fish" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Dry Fish Value" Name="dry_fish" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <x-column_-input  title="Smoke Fish Value" Name="smoke_fish" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <x-column_-input  title="Sale of Fishing Material and Others" Name="fishing_material_other" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              
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
</script>