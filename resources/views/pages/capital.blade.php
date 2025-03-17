<x-layout>
<x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Capitals" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="card card-info card-outline mb-4">
                  

                 
                  <form class="needs-validation" action="/letview" method ="POST" novalidate>
                    @csrf
                    <input type="hidden" name="Society_Id" value="47">
                    <input type="hidden" name="id_of_society252" value="47">
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Admission Fee" Name="Admission_fee" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Face Value Of Each Share" Name="Share_face_value" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Authorized Share Capital" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">SHARE CAPITAL CONTRIBUTION</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Individual" Name="Individual_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Govt." Name="Govt_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Other Cooperative Institutions (State / Primary / Etc) Level" Name="Other_coop_share" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Primary Activitiy" Name="Primary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Secondary Activitiy" Name="Secondary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Tertiary Activitiy" Name="Tertiary_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Others (Mention in)" Name="Other_Activity" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>

                                  </div>
                          </div>

                          
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Society Undertaken Pds (Fair Price Shop)" Name="Society_Fair_Price_Shop" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Year Of Latest Audit Completed" Name="Latest_Audit_complete" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                      
                                      <!--begin::Col-->
                                      <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Category Of Audit / Audit Class</label>
                                            <select Name="Audit_Class" class="form-select target" id="selectid3" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option >A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <x-column_-input  title="WORKING CAPITAL" Name="Working_Capitals" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                        <!--end::Col-->
                                      
                          </div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Business Turnover" Name="Business_turnover" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Total Reserve" Name="Total_reserve" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Whether The Society Is Making Profit/Loss" Name="Profit_loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Net Profit(+)/Loss(-) Of The Society (Amount In)" Name="Net_Profit_Loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-3"/>
                                      
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACCUMULATED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Profit" Name="Profit" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Loss" Name="Loss" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                      
                                  </div>
                          </div>
                          <div class="card-body">
                                  <div id= "newinput1" class="row g-2">
                                     
                                      <!--begin::Col-->
                                        <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Whether Dividend Decleared By The Society</label>
                                            <select name="Declear_Dividen" class="form-select target" id="selectid" required>
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
                                            <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
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
                                    <x-column_-input  title="Types Of Grant" Name="Grant_Type" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Year" Name="Grant_Year" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Grant Release" Name="Grant_Release" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Date Of Release" Name="Date_release" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</div></div>
                          <div class="card-body">
                                  <div class="row g-2">

                                    <x-column_-input  title="Types Of Aid" Name="Aid_Type" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Year" Name="Aid_Year" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Grant Loan Release " Name="Aid_Grant_Release" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies" id="validationCustom09" placeholder="Eg-100" div_class="col-md-2"/>

                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">REFUND OF AID SANCTIONED AS  LOAN</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Loan Sanctioned" Name="Loan_Sanctioned" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Loan Refunded " Name="Loan_Refunded" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Loan Outstanding" Name="Loan_Outstanding" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">MANAGERIAL SUBSIDY RECEIVED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Year" Name="MANAGERIAL_SUBSIDY_RECEIVED_Year" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                    <x-column_-input  title="Amount" Name="MANAGERIAL_SUBSIDY_RECEIVED_Amount" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                                      
                                      
                                  </div>
                          </div>
                          
                          <div class="card-footer">
                            <button class="btn btn-info" type="submit">Next</button>
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
                '<input type="text" Name="Yes_Dividen_Amount_topaid" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Amount Paid To Govt.</label>' +
                '<input type="text" Name="Yes_Dividen_Amount_topaid_Govt" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove"><label for="validationCustom01" class="form-label">Challan No. & Date To Govt.</label>' +
                '<input type="text" Name="Yes_Dividen_Challan_date" class="form-control" placeholder="Eg-122" required> </div>';

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
                '<input type="text" Name="CDf_Yes_paidamount" class="form-control" placeholder="Eg-1000" required> </div>'+
                '<div class="col-md-3 toremove2"><label for="validationCustom01" class="form-label">Date  Paid</label>' +
                '<input type="text" Name="CDf_Yes_paidDate" class="form-control" placeholder="Eg-12/12/2005" required> </div>';

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