<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Housing Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HOUSING
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror 
            </div></div>
            @if(!empty($activities->borrowing_government))
            <form class="needs-validation" action="/housing/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/housing" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">BORROWINGS</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Government" Name="borrowing_government" id="" placeholder="E.G" div_class="col-md-3" val="{{($activities->borrowing_government ?? '')}}"/>
                              <x-column_-input  title="Central Fianance Agency" Name="central_finance_agency" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->central_finance_agency ?? '')}}"/>
                              <x-column_-input  title="Housing and Urban Development Coporation" Name="housing_urban_development_cor" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->housing_urban_development_cor ?? '')}}"/>
                              <x-column_-input  title="State Co-operative fiance Societies" Name="state_fianance_society" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->state_fianance_society ?? '')}}"/>
                              <x-column_-input  title="National Housing Bank" Name="national_housing_bank" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->national_housing_bank ?? '')}}"/>
                              <x-column_-input  title="Other Fianancial Institution" Name="other_financial_inst" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->other_financial_inst ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">FIXED ASSETS</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput6">
                              <x-column_-input  title="Land " Name="land_asset" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->land_asset ?? '')}}"/>
                              <x-column_-input  title="Building " Name="building_asset" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->building_asset ?? '')}}"/>
                              <x-column_-input  title="Others " Name="other_asset" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->other_asset ?? '')}}"/>
                            </div>
                    </div>
                    
                    <div class="card-header"><div class="card-title">LOANS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Advance Year of issue" Name="adavance_year" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->adavance_year ?? '')}}"/>
                              <x-column_-input  title="Advance Amount" Name="advance_amount" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->advance_amount ?? '')}}"/>
                              <x-column_-input  title="Recovery Principal" Name="recovery_principal" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->recovery_principal ?? '')}}"/>
                              <x-column_-input  title="Recovery Interest" Name="recovery_interest" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->recovery_interest ?? '')}}"/>
                              <x-column_-input  title="Outstanding Principal" Name="outstanding_principal" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->outstanding_principal ?? '')}}"/>
                              <x-column_-input  title="Outstanding Interest" Name="outstanding_interest" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->outstanding_interest ?? '')}}"/>
                              <x-column_-input  title="overdue Principal" Name="overdue_principal" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->overdue_principal ?? '')}}"/>
                              <x-column_-input  title="overdue Interest" Name="overdue_interest" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->overdue_interest ?? '')}}"/>
                             
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">INDEPENDENT HOUSES CONSTRUCTED DURING THE YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Number (By Society)" Name="society_house_construct_number" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->society_house_construct_number ?? '')}}"/>
                              <x-column_-input  title="Value (By Society)" Name="society_house_construct_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->society_house_construct_value ?? '')}}"/>
                              <x-column_-input  title="Number (By Members)" Name="member_house_construct_number" id="" placeholder="Eg-3" div_class="col-md-3" val="{{($activities->member_house_construct_number ?? '')}}"/>
                              <x-column_-input  title="Value (By Members)" Name="member_house_construct_value" id="" placeholder="Eg-3" div_class="col-md-3" val="{{($activities->member_house_construct_value ?? '')}}"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">INDEPENDENT HOUSE CON- SRUCTED UPTO THE END OF THE  YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Number" Name="independent_house_construct_no" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->independent_house_construct_no ?? '')}}"/>
                              <x-column_-input  title="Value" Name="independent_house_construct_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->independent_house_construct_value ?? '')}}"/>
                              <x-column_-input  title="Income earned" Name="independent_house_construct_earn" id="" placeholder="Eg-300" div_class="col-md-3" val="{{($activities->independent_house_construct_earn ?? '')}}"/>
                              
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->borrowing_government))
                  <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                   <a href="/sector/{{ $Datas->id }}"><button type="button" class="btn btn-secondary">Back</button></a> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    @endif
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