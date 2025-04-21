<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Transport Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">TRANSPORT</div></div>
            <form class="needs-validation" action="/transport" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">TRANSPORT FACILITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Nos. of Goods Vehicles" Name="nos_of_Goods_vehicle" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Passenger Vehicles" Name="no_of_passenger_vehichle" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title">TYPES OF VEHICLES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="vehicle_type" id="" placeholder="Eg-Bus, Truck" div_class="col-md-3"/>
                              <x-column_-input  title="Nos." Name="vehicle_nos" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="vehicle_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="other_asset_name" id="" placeholder="Eg-any name" div_class="col-md-3"/>
                              <x-column_-input  title="Nos." Name="other_asset_nos" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="other_asset_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="income from services providers" Name="other_asset_income" id="" placeholder="Eg-200" div_class="col-md-3"/>
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">DRIVERS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Nos." Name="total_driver" id="" placeholder="Eg- 10" div_class="col-md-3"/>
                              <x-column_-input  title="Wages" Name="total_driver_wages" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">HELPERS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Nos." Name="total_helper" id="" placeholder="Eg- 10" div_class="col-md-3"/>
                              <x-column_-input  title="Wages" Name="total_helper_wages" id="" placeholder="Eg-2000" div_class="col-md-3"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">OTHERS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Nos." Name="other_total" id="" placeholder="Eg- 10" div_class="col-md-3"/>
                              <x-column_-input  title="Wages" Name="others_wages_total" id="" placeholder="Eg-2000" div_class="col-md-3"/>
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