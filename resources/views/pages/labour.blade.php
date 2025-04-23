<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Labour Contract Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">LABOUR CONTRACT</div></div>
            <form class="needs-validation" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                    <div class="card-body">
                      <div class="row g-2">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="form-label">Society Operation</label>
                          <select Name="society_operation" class="form-select target" id="selectid3" required>
                              <option selected disabled value="">Choose...</option>
                              <option>Rural Area</option>
                              <option>Urban Area</option>
                              <option>Both</option>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                       </div>
                     </div>
                    <div class="card-header"><div class="card-title">MEMBERSHIP INVOLVED IN CONTRACT WORKS</div></div>
                    <div class="card-body">
                            <div class="row g-2" >
                              <x-column_-input  title="ST" Name="borrowing_loan[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="SC" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="Total" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="Of which is labourer" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="Other Specify" Name="borrowing_loan[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="No of Workers" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">VALUE OF CONTRACTS EXECUTED DURING THE YEAR (WORK AWARDING AGENCIES)</div></div>
                    <div class="card-body">
                            <div class="row g-2" >
                              <x-column_-input  title="Government Body" Name="borrowing_loan[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="Local Body" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              <x-column_-input  title="Other" Name="borrowing_loan_st[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              
                            </div>
                            <div class="row g-2" >
                              <x-column_-input  title="Income Earned" Name="borrowing_loan[]" id="" placeholder="Eg-" div_class="col-md-2"/>
                              
                              
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