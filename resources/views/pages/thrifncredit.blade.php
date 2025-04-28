<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Thrift and Credit Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">THRIFT AND CREDIT
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->year_contribution))
            <form class="needs-validation" action="/tandc/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/tandc" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">

                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">THRIFT CONTRIBUTION PER ANNUM</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Contribution During The Year" Name="year_contribution" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->year_contribution ?? '')}}"/>
                              <x-column_-input  title="Nos. of Members Contributed" Name="member_contributed" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->member_contributed ?? '')}}"/>
                              
                              
                            </div>
                    <div class="card-header"><div class="card-title">LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput6">
                              
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
                             @if(!empty($activities->year_contribution))
                              @php
                              $jan1=json_decode($activities->borrowing_loan_st);
                              $jan2=json_decode($activities->borrowing_loan_sc);
                              $jan3=json_decode($activities->borrowing_loan_GO);
                              $jan4=json_decode($activities->borrowing_loan_issues);
                              @endphp
                              @forEach(json_decode($activities->borrowing_loan) as $key => $data)
                              @if($key==0)
                              <x-column_-input  title="Types of Loan" Name="borrowing_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-2" val="{{$data}}"/>
                              <x-column_-input  title="Nos. of ST Borrowing " Name="borrowing_loan_st[]" id="" placeholder="Eg-5" div_class="col-md-2" val="{{$jan1[$key]}}"/>
                              <x-column_-input  title="Nos. of SC Borrowing" Name="borrowing_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-2" val="{{$jan2[$key]}}"/>
                              <x-column_-input  title="Nos. of Gen/Other Borrowing" Name="borrowing_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-2" val="{{$jan3[$key]}}"/>
                              <x-column_-input  title="Amount Issues for Borrowing" Name="borrowing_loan_issues[]" id="" placeholder="Eg-2" div_class="col-md-2" val="{{$jan4[$key]}}"/>
                              <button type="button" id="rowAdder6" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row6" class="row g-2"><div class="col-md-2">
                                  <input name="borrowing_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required value="{{$data}}"> </div>
                                  <div class="col-md-2">
                                  <input name="borrowing_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="borrowing_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan2[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="borrowing_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan3[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan4[$key]}}"> </div>
                                  <button type="button" id="DeleteRow6" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                             
                                
                                @endforeach
                              @else
                              <x-column_-input  title="Types of Loan" Name="borrowing_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of ST Borrowing " Name="borrowing_loan_st[]" id="" placeholder="Eg-5" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of SC Borrowing" Name="borrowing_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Nos. of Gen/Other Borrowing" Name="borrowing_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <x-column_-input  title="Amount Issues for Borrowing" Name="borrowing_loan_issues[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <button type="button" id="rowAdder6" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
                             
                            </div>
                    </div>
                    
                    <div class="card-header"><div class="card-title">LOAN  RECOVERY  DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput7">
                              @if(!empty($activities->year_contribution))
                              @php
                              $jan1=json_decode($activities->recover_loan_st);
                              $jan2=json_decode($activities->recover_loan_sc);
                              $jan3=json_decode($activities->recover_loan_GO);
                              $jan4=json_decode($activities->recover_loan_principal);
                              $jan5=json_decode($activities->recover_loan_interest);
                              @endphp
                              @forEach(json_decode($activities->recover_loan) as $key => $data)
                              @if($key==0)
                              <x-column_-input  title="Types of Loan" Name="recover_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3" val="{{$data}}"/>
                              <x-column_-input  title="SC" Name="recover_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1"  val="{{$jan1[$key]}}"/>
                              <x-column_-input  title="ST" Name="recover_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-1"  val="{{$jan2[$key]}}"/>
                              <x-column_-input  title="Gen/Other" Name="recover_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-1"  val="{{$jan3[$key]}}"/>
                              <x-column_-input  title="Principal" Name="recover_loan_principal[]" id="" placeholder="Eg-2" div_class="col-md-1"  val="{{$jan4[$key]}}"/>
                              <x-column_-input  title="Interest" Name="recover_loan_interest[]" id="" placeholder="Eg-2" div_class="col-md-1"  val="{{$jan5[$key]}}"/>
                              <button type="button" id="rowAdder7" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row7" class="row g-2"><div class="col-md-3">
                                  <input name="recover_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required value="{{$data}}" >  </div>
                                  <div class="col-md-1">
                                  <input name="recover_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="recover_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan2[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="recover_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan3[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="recover_loan_principal[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan4[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="recover_loan_interest[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan5[$key]}}"> </div>
                                  <button type="button" id="DeleteRow7" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                             
                                
                                @endforeach
                              @else
                              <x-column_-input  title="Types of Loan" Name="recover_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3"/>
                              <x-column_-input  title="SC" Name="recover_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1"/>
                              <x-column_-input  title="ST" Name="recover_loan_sc[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Gen/Other" Name="recover_loan_GO[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Principal" Name="recover_loan_principal[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <x-column_-input  title="Interest" Name="recover_loan_interest[]" id="" placeholder="Eg-2" div_class="col-md-1"/>
                              <button type="button" id="rowAdder7" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif

                            
                            </div>
                    </div>
    
                    <div class="card-header"><div class="card-title">OUTSTANDING LOAN  DURING THE CURRENT YEAR</div></div>
                    <div class="card-body">
                            <div class="row g-2"  id="newinput8">
                              @if(!empty($activities->year_contribution))
                              @php
                              $jan1=json_decode($activities->outstanding_loan_st);
                              $jan2=json_decode($activities->outstanding_loan_sc);
                              $jan3=json_decode($activities->outstanding_loan_GO);
                              $jan4=json_decode($activities->outstanding_loan_principal);
                              $jan5=json_decode($activities->outstanding_loan_interest);
                              $jan6=json_decode($activities->outstanding_loan_defaulters_no);
                              $jan7=json_decode($activities->outstanding_laon_issues_defaulters_amount);
                              @endphp
                              @forEach(json_decode($activities->outstanding_loan) as $key => $data)
                              @if($key==0)
                              <x-column_-input  title="Types of Loan" Name="outstanding_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3" val="{{$data}}"/>
                              <x-column_-input  title="SC" Name="outstanding_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1" val="{{$jan1[$key]}}"/>
                              <x-column_-input  title="ST" Name="outstanding_loan_sc[]" id="" placeholder="Eg-1" div_class="col-md-1" val="{{$jan2[$key]}}"/>
                              <x-column_-input  title="Gen/Other" Name="outstanding_loan_GO[]" id="" placeholder="Eg-1" div_class="col-md-1" val="{{$jan3[$key]}}"/>
                              <x-column_-input  title="Principal" Name="outstanding_loan_principal[]" id="" placeholder="Eg-1" div_class="col-md-1" val="{{$jan4[$key]}}"/>
                              <x-column_-input  title="Interest" Name="outstanding_loan_interest[]" id="" placeholder="Eg-1" div_class="col-md-1" val="{{$jan5[$key]}}"/>
                              <x-column_-input  title="Defaulters Nos." Name="outstanding_loan_defaulters_no[]" id="" placeholder="Eg-1" div_class="col-md-1" val="{{$jan6[$key]}}"/>
                              <x-column_-input  title="Defaulters Amount." Name="outstanding_laon_issues_defaulters_amount[]" id="" placeholder="Eg-1" div_class="col-md-2" val="{{$jan7[$key]}}"/>
                              <button type="button" id="rowAdder8" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row8" class="row g-2"><div class="col-md-3">
                                  <input name="outstanding_loan[]" type="text" class="form-control" placeholder="Eg-Housing, General, Emergency others" required value="{{$data}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_st[]" type="text" class="form-control" placeholder="Eg: 10000" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_sc[]" type="text" class="form-control" placeholder="Eg- 1" required value="{{$jan2[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_GO[]" type="text" class="form-control" placeholder="Eg- 1" required value="{{$jan3[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_principal[]" type="text" class="form-control" placeholder="Eg- 1" required value="{{$jan4[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_interest[]" type="text" class="form-control" placeholder="Eg- 1" required value="{{$jan5[$key]}}"> </div>
                                  <div class="col-md-1">
                                  <input name="outstanding_loan_defaulters_no[]" type="text" class="form-control" placeholder="Eg- 1" required value="{{$jan6[$key]}}"> </div>
                                  <div class="col-md-2">
                                  <input name="outstanding_laon_issues_defaulters_amount[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan7[$key]}}"> </div>
                                  <button type="button" id="DeleteRow8" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                             
                                
                                @endforeach
                              @else
                              <x-column_-input  title="Types of Loan" Name="outstanding_loan[]" id="" placeholder="Eg-Housing, General, Emergency others" div_class="col-md-3"/>
                              <x-column_-input  title="SC" Name="outstanding_loan_st[]" id="" placeholder="Eg-10000" div_class="col-md-1"/>
                              <x-column_-input  title="ST" Name="outstanding_loan_sc[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Gen/Other" Name="outstanding_loan_GO[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Principal" Name="outstanding_loan_principal[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Interest" Name="outstanding_loan_interest[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Defaulters Nos." Name="outstanding_loan_defaulters_no[]" id="" placeholder="Eg-1" div_class="col-md-1"/>
                              <x-column_-input  title="Defaulters Amount." Name="outstanding_laon_issues_defaulters_amount[]" id="" placeholder="Eg-1" div_class="col-md-2"/>
                              <button type="button" id="rowAdder8" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
                              
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->year_contribution))
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