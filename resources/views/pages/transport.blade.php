<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Transport Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">TRANSPORT
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->nos_of_Goods_vehicle))
            <form class="needs-validation" action="/transport/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/transport" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">TRANSPORT FACILITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2"> 
                              <x-column_-input  title="Nos. of Goods Vehicles" Name="nos_of_Goods_vehicle" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->nos_of_Goods_vehicle ?? '')}}"/>
                              <x-column_-input  title="Nos. of Passenger Vehicles" Name="no_of_passenger_vehichle" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->no_of_passenger_vehichle ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">TYPES OF VEHICLES</div></div>
                    <div class="card-body">
                            <div class="row g-2 val="{{($activities->Nos_of_milch_cow ?? '')}}"">
                              <x-column_-input  title="Name" Name="vehicle_type" id="" placeholder="Eg-Bus, Truck" div_class="col-md-3" val="{{($activities->vehicle_type ?? '')}}"/>
                              <x-column_-input  title="Nos." Name="vehicle_nos" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->vehicle_nos ?? '')}}"/>
                              <x-column_-input  title="Value" Name="vehicle_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->vehicle_value ?? '')}}"/>
                            
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="other_asset_name" id="" placeholder="Eg-any name" div_class="col-md-3" val="{{($activities->other_asset_name ?? '')}}"/>
                              <x-column_-input  title="Nos." Name="other_asset_nos" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->other_asset_nos ?? '')}}"/>
                              <x-column_-input  title="Value" Name="other_asset_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->other_asset_value ?? '')}}"/>
                              <x-column_-input  title="income from services providers" Name="other_asset_income" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->other_asset_income ?? '')}}"/>
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">DRIVERS</div></div>
                    <div class="card-body">
                            <div class="row g- val="{{($activities->Nos_of_milch_cow ?? '')}}">
                              <x-column_-input  title="Nos." Name="total_driver" id="" placeholder="Eg- 10" div_class="col-md-3 val="{{($activities->total_driver ?? '')}}"/>
                              <x-column_-input  title="Wages" Name="total_driver_wages" id="" placeholder="Eg-2000" div_class="col-md-3 val="{{($activities->total_driver_wages ?? '')}}"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">HELPERS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Nos." Name="total_helper" id="" placeholder="Eg- 10" div_class="col-md-3" val="{{($activities->total_helper ?? '')}}"/>
                              <x-column_-input  title="Wages" Name="total_helper_wages" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->total_helper_wages ?? '')}}"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">OTHERS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Nos." Name="other_total" id="" placeholder="Eg- 10" div_class="col-md-3" val="{{($activities->other_total ?? '')}}"/>
                              <x-column_-input  title="Wages" Name="others_wages_total" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->others_wages_total ?? '')}}"/>
                            </div>
                    </div>
            
    
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->nos_of_Goods_vehicle))
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