<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="investment" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
      <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="card card-info card-outline mb-4">
                      
    
                     
                      <form class="needs-validation" action="" method ="" novalidate>
                        @csrf
                        <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                        <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}">
                              <div class="card-header"><div class="card-title">GOVERNMENT LOAN (AMOUNT IN RUPEES) 
                                <select Name="self_building" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option >Yes</option>
                                <option>No</option>
                             
                            </select></div></div>
                              
                              <div class="card-header"><div class="card-title">GODOWN LOAN
                                <select Name="godown_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >TRUCK LOAN</option>
                                    <option>GODOWN LOAN</option>
                                    <option value="">FURNITURE & FIXTURES</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="godown_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="godown_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="godown_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="godown_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>
                              
                              <div class="card-header"><div class="card-title">FURNITURE & FIXTURES
                                <select Name="furniture_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="furniture_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="furniture_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="furniture_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="furniture_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>

                              <div class="card-header"><div class="card-title">PLANT & MACHINERY
                                <select Name="pmachinery_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="pmachinery_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="pmachinery_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="pmachinery_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="pmachinery_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>


                              <div class="card-header"><div class="card-title">SHARE CAPITAL
                                <select Name="sharecapital_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="sharecapital_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="sharecapital_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="sharecapital_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="sharecapital_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>
                              
                              <div class="card-header"><div class="card-title">WORKING CAPITAL
                                <select Name="wcapital_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="wcapital_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="wcapital_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="wcapital_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="wcapital_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>
                              <div class="card-header"><div class="card-title">TRUCK LOAN
                                <select Name="truck_loan" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option >Yes</option>
                                    <option>No</option>
                                 
                                </select>
                            </div></div>
                              <div class="card-body">
                                      <div class="row g-2">
                                        <div>
                                            <table class="table table-borderless text-center">
                                               
                                                <tbody>
                                                  <tr>
                                                    <th colspan="2">Loan Issued</th>
                                                    <th colspan="2">Outstanding Amount</th>
                                                    
                                                  </tr>
                                                  <tr>
                                                
                                                    <td><x-column_-input  title="Year" Name="truck_loan_year" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Amount Sanctioned" Name="truck_loan_sanctioned" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Principal" Name="truck_loan_principal" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                    <td><x-column_-input  title="Interest Sanctioned" Name="truck_loan_interest" id="validationCustom09" placeholder="Eg- 1000" div_class="col-md-12" inclass="numbers"/></td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                    </div>
                              </div>
                              <div class="card-footer">
                                <button class="btn btn-info" type="submit">Next</button>
                          </div>
                      </form>
      </div>
                            <!--end::Form-->
  <!--begin::JavaScript-->
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
    <script>
      $('.numbers').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });


      $("#rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2"><div class="col-md-2">' +
                '<input name="item_name[]" type="text" class="form-control" placeholder="Eg-Chair" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_no[]" type="text" class="form-control" placeholder="Eg-10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="item_amount[]" type="text" class="form-control numbers" placeholder="Eg-1000" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });
   </script>

    </x-layout>
