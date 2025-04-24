<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Thrift and Credit Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">THRIFT AND CREDIT
              @error('Society_Id')
                      <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
                      @enderror
            </div></div>
            <form class="needs-validation" action="/tandc" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
              <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">THRIFT CONTRIBUTION PER ANNUM</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Contribution During The Year" Name="year_contribution" id="" placeholder="Eg-" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Members Contributed" Name="member_contributed" id="" placeholder="Eg-" div_class="col-md-3"/>
                              
                              
                            </div>
                    <div class="card-header"><div class="card-title">LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput6">
                              <x-column_-input  title="Types of Loan" Name="borrowing_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-2"/>
                              {{-- <div class="col-md-1">
                                <label for="validationCustom01" class="form-label">Loan Type</label>
                                <select Name="borrowing_loan[]" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>General Loan</option>
                                    <option>Emergency Loan</option>
                                    <option>Housing Loan</option>
                                    <option>Other LoanType </option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                             </div> --}}
                              <x-column_-input  title="Nos. of ST Borrowing " Name="borrowing_loan_st[]" id="" placeholder="Eg-5" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of SC Borrowing" Name="borrowing_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of Gen/Other Borrowing" Name="borrowing_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Amount Issues for Borrowing" Name="borrowing_loan_issues[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <button type="button" id="rowAdder6" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                    </div>
                    
                    <div class="card-header"><div class="card-title">LOAN  RECOVERY  DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput7">
                              <x-column_-input  title="Types of Loan" Name="recover_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3"/>
                              <x-column_-input  title="SC" Name="recover_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1"/>
                              <x-column_-input  title="ST" Name="recover_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Gen/Other" Name="recover_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Principal" Name="recover_loan_principal[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Interest" Name="recover_loan_interest[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <button type="button" id="rowAdder7" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">OUTSTANDING LOAN  DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput8">
                              <x-column_-input  title="Types of Loan" Name="outstanding_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3"/>
                              <x-column_-input  title="SC" Name="outstanding_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1"/>
                              <x-column_-input  title="ST" Name="outstanding_loan_sc[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Gen/Other" Name="outstanding_loan_GO[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Principal" Name="outstanding_loan_principal[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Interest" Name="outstanding_loan_interest[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Defaulters Nos." Name="outstanding_loan_defaulters_no[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Defaulters Amount." Name="outstanding_laon_issues_defaulters_amount[]" id="" placeholder="Eg-1" div_class="col-md-2"/>
                              <button type="button" id="rowAdder8" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
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


  $("#rowAdder6").click(function () {
            newRowAdd =
                '<div id="row6" class="row g-2"><div class="col-md-2">' +
                '<input name="borrowing_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow6" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput6').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow6", function () {
            $(this).parents("#row6").remove();
        });

        $("#rowAdder7").click(function () {
            newRowAdd =
                '<div id="row7" class="row g-2"><div class="col-md-3">' +
                '<input name="recover_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required> </div>'+
                '<div class="col-md-1">' +
                  '<input name="recover_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required> </div>'+
                '<div class="col-md-1">' +
                  '<input name="recover_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="recover_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="recover_loan_principal[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-1">' +
                    '<input name="recover_loan_interest[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow7" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput7').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow7", function () {
            $(this).parents("#row7").remove();
        });

        $("#rowAdder8").click(function () {
            newRowAdd =
                '<div id="row8" class="row g-2"><div class="col-md-3">' +
                '<input name="outstanding_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required> </div>'+
                '<div class="col-md-1">' +
                  '<input name="outstanding_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required> </div>'+
                '<div class="col-md-1">' +
                  '<input name="outstanding_loan_sc[]" type="text" class="form-control" placeholder="Eg- 1" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="outstanding_loan_GO[]" type="text" class="form-control" placeholder="Eg- 1" required> </div>'+
                  '<div class="col-md-1">' +
                  '<input name="outstanding_loan_principal[]" type="text" class="form-control" placeholder="Eg- 1" required> </div>'+
                  '<div class="col-md-1">' +
                    '<input name="outstanding_loan_interest[]" type="text" class="form-control" placeholder="Eg- 1" required> </div>'+
                    '<div class="col-md-1">' +
                      '<input name="outstanding_loan_defaulters_no[]" type="text" class="form-control" placeholder="Eg- 1" required> </div>'+
                      '<div class="col-md-2">' +
                    '<input name="outstanding_laon_issues_defaulters_amount[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow8" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput8').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow8", function () {
            $(this).parents("#row8").remove();
        });
</script>