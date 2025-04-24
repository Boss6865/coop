<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Housing Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HOUSING
              @error('Society_Id')
              <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
              @enderror  
            </div></div>
            <form class="needs-validation" action="/housing" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">BORROWINGS</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Government" Name="borrowing_government" id="" placeholder="E.G" div_class="col-md-3"/>
                              <x-column_-input  title="Central Fianance Agency" Name="central_finance_agency" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Housing and Urban Development Coporation" Name="housing_urban_development_cor" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="State Co-operative fiance Societies" Name="state_fianance_society" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="National Housing Bank" Name="national_housing_bank" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Other Fianancial Institution" Name="other_financial_inst" id="" placeholder="Eg-" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title">FIXED ASSETS</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput6">
                              <x-column_-input  title="Land " Name="land_asset" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Building " Name="building_asset" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Others " Name="other_asset" id="" placeholder="Eg-" div_class="col-md-3"/>
                            </div>
                    </div>
                    
                    <div class="card-header"><div class="card-title">LOANS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Advance Year of issue" Name="adavance_year" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Advance Amount" Name="advance_amount" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Recovery Principal" Name="recovery_principal" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Recovery Interest" Name="recovery_interest" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Outstanding Principal" Name="outstanding_principal" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Outstanding Interest" Name="outstanding_interest" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="overdue Principal" Name="overdue_principal" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="overdue Interest" Name="overdue_interest" id="" placeholder="Eg-2" div_class="col-md-3"/>
                             
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">INDEPENDENT HOUSES CONSTRUCTED DURING THE YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Number (By Society)" Name="society_house_construct_number" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value (By Society)" Name="society_house_construct_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Number (By Members)" Name="member_house_construct_number" id="" placeholder="Eg-3" div_class="col-md-3"/>
                              <x-column_-input  title="Value (By Members)" Name="member_house_construct_value" id="" placeholder="Eg-3" div_class="col-md-3"/>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">INDEPENDENT HOUSE CON- SRUCTED UPTO THE END OF THE  YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Number" Name="independent_house_construct_no" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="independent_house_construct_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Income earned" Name="independent_house_construct_earn" id="" placeholder="Eg-300" div_class="col-md-3"/>
                              
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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