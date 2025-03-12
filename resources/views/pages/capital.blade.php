<x-layout>
<x-navigation title="Name of the Society" Nav="Capitals" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="card card-info card-outline mb-4">
                  

                 
                  <form class="needs-validation" novalidate>
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Admission Fee" Name="Member_Name[]" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Face Value Of Each Share" Name="Member_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Authorized Share Capital" Name="Member_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">SHARE CAPITAL CONTRIBUTION</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Individual" Name="Member_Name[]" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Govt." Name="Member_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Other Cooperative Institutions (State / Primary / Etc) Level" Name="Member_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Primary Activitiy" id="validationCustom07" placeholder="Eg-Activities" div_class="col-md-3"/>
                                      <x-column_-input title="Secondary Activitiy" id="validationCustom08" placeholder="Eg-Activities" div_class="col-md-3"/>
                                      <x-column_-input title="Tertiary Activitiy" id="validationCustom09" placeholder="Eg-activities" div_class="col-md-3"/>
                                      <x-column_-input title="Others (Mention in)" id="validationCustom08" placeholder="Eg-Mention" div_class="col-md-3"/>
                                  </div>
                          </div>

                          
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Society Undertaken Pds (Fair Price Shop)" id="validationCustom05" placeholder="Eg-Yes/No" div_class="col-md-3"/>
                                      <x-column_-input title="Year Of Latest Audit Completed" id="validationCustom06" placeholder="22/11/1991" div_class="col-md-3"/>
                                      
                                      <!--begin::Col-->
                                      <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Category Of Audit / Audit Class</label>
                                            <select class="form-select target" id="selectid3" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <!--end::Col-->
                                      <x-column_-input title="WORKING CAPITAL" id="validationCustom08" placeholder="Eg-1000" div_class="col-md-3"/>
                          </div>
                          <div class="card-body">
                                  <div class="row g-2">
                                      <x-column_-input title="Business Turnover" id="validationCustom07" placeholder="Eg-10000" div_class="col-md-3"/>
                                      <x-column_-input title="Total Reserve" id="validationCustom08" placeholder="Eg-10000" div_class="col-md-3"/>
                                      <x-column_-input title="Whether The Society Is Making Profit/Loss" id="validationCustom07" placeholder="Eg-Yes/No" div_class="col-md-3"/>
                                      <x-column_-input title="Net Profit(+)/Loss(-) Of The Society (Amount In)" id="validationCustom08" placeholder="Eg-1000" div_class="col-md-3"/>
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACCUMULATED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Profit" id="validationCustom05" placeholder="Eg-2000" div_class="col-md-2"/>
                                      <x-column_-input title="Loss" id="validationCustom06" placeholder="Eg-2000" div_class="col-md-2"/>
                                      
                                  </div>
                          </div>
                          <div class="card-body">
                                  <div id= "newinput1" class="row g-2">
                                     
                                      <!--begin::Col-->
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Whether Dividend Decleared By The Society</label>
                                            <select class="form-select target" id="selectid" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <!--end::Col-->
                                  </div>
                          </div>
                          <div class="card-body">
                                  <div id= "newinput2" class="row g-2">
                                     
                                      <!--begin::Col-->
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Whether  CDF Paid By The Society</label>
                                            <select class="form-select target2" id="selectid2" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >Yes</option>
                                                <option>No</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <!--end::Col-->
                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A GRANT</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Types Of Grant" id="validationCustom07" placeholder="Eg-Grants" div_class="col-md-2"/>
                                      <x-column_-input title="Year" id="validationCustom08" placeholder="Eg-2001" div_class="col-md-2"/>
                                      <x-column_-input title="Name Of The DEPTT." id="validationCustom09" placeholder="Eg-Tourism" div_class="col-md-2"/>
                                      <x-column_-input title="Total Grant Sanctioned" id="validationCustom08" placeholder="Eg-10000" div_class="col-md-2"/>
                                      <x-column_-input title="Grant Release" id="validationCustom09" placeholder="Eg-Yes" div_class="col-md-2"/>
                                      <x-column_-input title="Date Of Release" id="validationCustom08" placeholder="Eg-Mention12/12/2001" div_class="col-md-2"/>
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Types Of Aid" id="validationCustom07" placeholder="Eg-Aid" div_class="col-md-2"/>
                                      <x-column_-input title="Year" id="validationCustom08" placeholder="Eg-2001" div_class="col-md-2"/>
                                      <x-column_-input title="Name Of The Agencies" id="validationCustom09" placeholder="Eg-Tourism" div_class="col-md-2"/>
                                      <x-column_-input title="Total AID Sanctioned" id="validationCustom08" placeholder="Eg-10000" div_class="col-md-2"/>
                                      <x-column_-input title="Grant Loan Release " id="validationCustom09" placeholder="Eg-Yes" div_class="col-md-2"/>
                                      <x-column_-input title="Grant Subsidies" id="validationCustom08" placeholder="Eg-1000" div_class="col-md-2"/>
                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">REFUND OF AID SANCTIONED AS  LOAN</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Loan Sanctioned" id="validationCustom07" placeholder="Eg-10000" div_class="col-md-4"/>
                                      <x-column_-input title="Loan Refunded" id="validationCustom08" placeholder="Eg-10000" div_class="col-md-4"/>
                                      <x-column_-input title="Loan Outstanding" id="validationCustom09" placeholder="Eg-10000" div_class="col-md-4"/>
                                      
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">MANAGERIAL SUBSIDY RECEIVED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                      <x-column_-input title="Year" id="validationCustom07" placeholder="Eg-2021" div_class="col-md-4"/>
                                      <x-column_-input title="Amount" id="validationCustom08" placeholder="Eg-10000" div_class="col-md-4"/>
                                      
                                  </div>
                          </div>
                          
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Submit form</button>
                      </div>
                  </form>
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


<script type="text/javascript">
$( "#selectid" ).on( "change", function() {
 
    var singleValues = $( "#selectid" ).val();
    //console.log(singleValues);
  if(singleValues=='Yes'){
    newRowAdd =
                '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Members</label>' +
                '<input type="text" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Govt.</label>' +
                '<input type="text" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Challan No. & Date To Govt.</label>' +
                '<input type="text" class="form-control" placeholder="Eg-122" required> </div>';

            $('#newinput1').append(newRowAdd);

      


  }
  else if(singleValues=='No'){
    $(".toremove").remove();
  }
  
} );

$( ".target2" ).on( "change", function() {
    var singleValues = $( "#selectid2" ).val();
  if(singleValues=='Yes'){
    newRowAdd =
                '<div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Amount Paid</label>' +
                '<input type="text" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Date  Paid</label>' +
                '<input type="text" class="form-control" placeholder="Eg-12/12/2005" required> </div>';

            $('#newinput2').append(newRowAdd);




  }
  else if(singleValues=='No'){
    $(".toremove2").remove();
  }
  
} );
       
    </script>
                        
                        <!--end::JavaScript-->
      </div>

</x-layout>