<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="PACS" />
        <div class="card card-info card-outline mb-4">
            <form class="needs-validation" action="/letview" method ="POST" novalidate>
                @csrf
                <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}">
                      <div class="card-header"><div class="card-title">PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)</div></div>
                      <div class="card-body">
                        <div class="row g-2">
                            <!--begin::Col-->
                              <div class="col-md-3">
                                  <label for="" class="form-label">Activity</label>
                                  <select name="activity" class="form-select" required>
                                      <option selected disabled value="">Choose...</option>
                                      <option >Primary</option>
                                      <option>Secondary</option>
                                      <option>Tertiary</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <!--end::Col-->
                        </div>
                    </div>
                      <div class="card-header"><div class="card-title">KCC LOAN AVAILED DURING THE YEAR CURRENT YEAR</div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Amount Sanctioned" Name="amount_sanctioned" id="" placeholder="Eg-100" div_class="col-md-4"/>
                                <x-column_-input  title="Nos. of member in which loans was sanctioned" Name="nos_of_member_loan_for" id="" placeholder="Eg-10" div_class="col-md-4"/>
                                <x-column_-input  title="Purpose of Which Loans was taken for" Name="purpose_taken_for" id="" placeholder="Eg- for cultivation and types of crops" div_class="col-md-4"/>
                                
                              </div>
                      </div>

                      <div class="card-header"><div class="card-title">NO. OF KCC LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</div></div>
                      <div class="card-body">
                              <div id="newinput2" class="row g-2">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Ethnic Group/Clan</label>
                                    <select name="clan[]" class="form-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option >ST</option>
                                        <option>SC</option>
                                        <option>Gen/Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                              
                                <x-column_-input  title="Male" Name="male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                                <x-column_-input  title="Female" Name="female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                                <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              </div>
                      </div>
                      <div class="card-header"><div class="card-title">LOAN  RECOVERY  DURING THE CURRENT YEAR</div></div>
                      <div class="card-body">
                        <div id="newinput1" class="row g-2">
                          <div class="col-md-3">
                              <label for="" class="form-label">Ethnic Group/Clan</label>
                              <select name="recovery_clan[]" class="form-select" required>
                                  <option selected disabled value="">Choose...</option>
                                  <option >ST</option>
                                  <option>SC</option>
                                  <option>Gen/Other</option>
                              </select>
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                          </div>
                        
                          <x-column_-input  title="Male" Name="recovery_male_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                          <x-column_-input  title="Female" Name="recovery_female_clan[]" id="" placeholder="Eg-10" div_class="col-md-3"/>
                          <button type="button" id="rowAdder1" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                        </div>
                        <div class="card-header"><div class="card-title">Total Amount Recovery</div></div>
                        <div class="card-body">
                            <div class="row g-2">
                                    <x-column_-input  title="Principal Amount" Name="principal_amount" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                                    <x-column_-input  title="Interest Amount" Name="interest_amount" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">KCC LOAN OUTSTANDING FOR THE LAST FIVE YEARS</div></div>
                        <div class="card-body">
                            <div class="row g-2" id="newinput3">
                                    <x-column_-input  title="Years" Name="years" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <x-column_-input  title="Principal Amount" Name="outstanding_p_amount[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <x-column_-input  title="Interest Amount" Name="outstanding_interest[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">NO. OF OUTSTANDING LOANEE MEMBERS</div></div>
                        <div class="card-body">
                            <div class="row g-2" id="newinput4">
                                <div class="col-md-3">
                                    <label for="" class="form-label">Ethnic Group/Clan</label>
                                    <select name="outstandingloanee_clan[]" class="form-select" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option >ST</option>
                                        <option>SC</option>
                                        <option>Gen/Other</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                    <x-column_-input  title="Male" Name="outstandingloanee_male[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <x-column_-input  title="Female" Name="outstandingloanee_female[]" id="" placeholder="Eg-1000" div_class="col-md-2"/>
                                    <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="row g-2" id="newinput3">
                                    <x-column_-input  title="Defaulters Nos." Name="defaulter_no" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                                    <x-column_-input  title="Defaulters Amount" Name="defaulter_amount" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                            </div>
                        </div>
                        <div class="card-header"><div class="card-title">PROVISION FOR NPA (KCC)</div></div>
                        <div class="card-body">
                            <div class="row g-2" id="newinput3">
                                    <x-column_-input  title="Principal" Name="npa_principal" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                                    <x-column_-input  title="Interest" Name="npa_interest" id="" placeholder="Eg-1000" div_class="col-md-3"/>
                            </div>
                        </div>
                      <div class="card-footer">
                        <button class="btn btn-info" type="submit">Next</button>
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
                '<div id="row2" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen/Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });

        $("#rowAdder1").click(function () {
            newRowAdd =
                '<div id="row1" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="recovery_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen/Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow1" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput1').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow1", function () {
            $(this).parents("#row1").remove();
        });
        var i=2;
        $("#rowAdder3").click(function () {
            
           
            newRowAdd =
                '<div id="row3" class="row g-2">'+
                '<div class="col-md-2">' +
                '<input name="years[]" type="text" class="form-control" placeholder="Eg- 10" required value="'+i+
                '" disabled> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_p_amount[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_interest[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            i++;
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
            i--;
        });

        $("#rowAdder4").click(function () {
            newRowAdd =
                '<div id="row4" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="outstandingloanee_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen/Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_male[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_female[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput4').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow4", function () {
            $(this).parents("#row4").remove();
        });
</script>
