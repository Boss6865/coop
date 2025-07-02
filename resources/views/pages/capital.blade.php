<x-layout>
<x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Capitals" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<div class="card card-info card-outline mb-4">
                  

                 
                  <form class="needs-validation" action="/letview" method ="POST" novalidate>
                    @csrf

                     @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Society_Id" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="id_of_society252" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}">
                          @endif
                    {{-- <input type="hidden" name="Society_Id" value="{{ Session()->get('Sooos'); }}">
                    <input type="hidden" name="id_of_society252" value="{{ Session()->get('id_key'); }}"> --}}
                          <div class="card-header"><div class="card-title">DETAILS INFORMATION OF  THE SOCIETY </div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Admission Fee" Name="Admission_fee" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id" function='onkeyup=word_id.innerHTML=convertNumberToWords(this.value)' inclass="numbers" required="required"/>
                                    <x-column_-input  title="Face Value Of Each Share" Name="Share_face_value" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id1" function='onkeyup=word_id1.innerHTML=convertNumberToWords(this.value)' inclass="numbers" required="required"/>
                                    <x-column_-input  title="Authorized Share Capital" Name="Authorize_share_capital" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id2" function='onkeyup=word_id2.innerHTML=convertNumberToWords(this.value) inclass="numbers"' required="required"/>
                                    
                                      
                                  </div>
                          </div>
                          <div class="card-header"><div class="card-title">SHARE CAPITAL CONTRIBUTION</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                     
                                    <x-column_-input  title="Individual" Name="Individual_share" id="" placeholder="Eg-100" div_class="col-md-4" inclass="numbers" word_id="word_id_share" function='onkeyup=word_id_share.innerHTML=convertNumberToWords(this.value)' required="required"/>
                                    <x-column_-input  title="Govt." Name="Govt_share" id="" placeholder="Eg-100" div_class="col-md-4" inclass="numbers" word_id="word_id_gshare" function='onkeyup=word_id_gshare.innerHTML=convertNumberToWords(this.value)'/>
                                    <x-column_-input  title="Other Cooperative Institutions (State / Primary / Etc) Level" Name="Other_coop_share" id="" placeholder="Eg-100" div_class="col-md-4" inclass="numbers" word_id="word_id_oshare" function='onkeyup=word_id_oshare.innerHTML=convertNumberToWords(this.value)'/>
                                    
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACTIVITIES OF THE SOCIETY (IF NIL, MENTION THE OBJECTIVE OF THE SOCIETY AS PER ITS BYE-LAW)</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    {{-- <div class="col-md-3">
                                      <label for="validationCustom01" class="form-label">Primary Activitiy</label>
                                      <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                          <option selected disabled value="">Choose...</option>
                                          
                                          <option value="credit">CREDIT</option>
                                          <option value="handloom">HANDLOOM</option>
                                          <option value="handicraft">HANDICRAFT</option>
                                          <option value="consumer">CONSUMER</option>
                                          <option value="dairy">DAIRY</option>
                                          <option value="farming">FARMING</option>
                                          <option value="fishery">FISHERIES</option>
                                          <option value="market">MARKETING</option>
                                          <option value="processing">PROCESSING</option>
                                          <option value="transport">TRANSPORT</option>
                                          <option value="livestock">LIVESTOCK</option>
                                          <option value="tourism">TOURISM</option>
                                          <option value="jingkiengjri">TOURISM</option>
                                          <option value="industry">INDUSTRIAL</option>
                                          <option value="tandc">THRIFT AND CREDIT</option>
                                          <option value="labour">LABOUR CONTRACT</option>
                                          <option value="housing">HOUSING</option>
                                          <option value="lrb">Mariang Jingkieng Jri</option>
                                          <option value="Banking">Banking Service</option>
                                          <option value="other">OTHERS TYPES</option>
                                         
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div> --}}
                                  {{-- <div class="col-md-3">
                                    <label for="validationCustom01" class="form-label">Secondary Activitiy</label>
                                    <select Name="Secondary_Activity" class="form-select target" id="selectid3">
                                        <option selected disabled value="">Choose...</option>
                                        
                                        <option value="credit">CREDIT</option>
                                        <option value="handloom">HANDLOOM</option>
                                      <option value="handicraft">HANDICRAFT</option>
                                      <option value="consumer">CONSUMER</option>
                                      <option value="dairy">DAIRY</option>
                                      <option value="farming">FARMING</option>
                                      <option value="fishery">FISHERIES</option>
                                      <option value="market">MARKETING</option>
                                      <option value="processing">PROCESSING</option>
                                      <option value="transport">TRANSPORT</option>
                                      <option value="livestock">LIVESTOCK</option>
                                      <option value="tourism">TOURISM</option>
                                      <option value="jingkiengjri">TOURISM</option>
                                      <option value="industry">INDUSTRIAL</option>
                                      <option value="tandc">THRIFT AND CREDIT</option>
                                      <option value="labour">LABOUR CONTRACT</option>
                                      <option value="housing">HOUSING</option>
                                      <option value="lrb">Mariang Jingkieng Jri</option>
                                      <option value="Banking">Banking Service</option>
                                      <option value="other">OTHERS TYPES</option>
                                     
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div> --}}
                                {{-- <div class="col-md-3">
                                  <label for="validationCustom01" class="form-label">Tertiary Activitiy</label>
                                  <select Name="Tertiary_Activity" class="form-select target" id="selectid3">
                                      <option selected disabled value="">Choose...</option>
                                      
                                      <option value="credit">CREDIT</option>
                                      <option value="handloom">HANDLOOM</option>
                                      <option value="handicraft">HANDICRAFT</option>
                                      <option value="consumer">CONSUMER</option>
                                      <option value="dairy">DAIRY</option>
                                      <option value="farming">FARMING</option>
                                      <option value="fishery">FISHERIES</option>
                                      <option value="market">MARKETING</option>
                                      <option value="processing">PROCESSING</option>
                                      <option value="transport">TRANSPORT</option>
                                      <option value="livestock">LIVESTOCK</option>
                                      <option value="tourism">TOURISM</option>
                                      <option value="jingkiengjri">TOURISM</option>
                                      <option value="industry">INDUSTRIAL</option>
                                      <option value="tandc">THRIFT AND CREDIT</option>
                                      <option value="labour">LABOUR CONTRACT</option>
                                      <option value="housing">HOUSING</option>
                                      <option value="lrb">Mariang Jingkieng Jri</option>
                                      <option value="Banking">Banking Service</option>
                                      <option value="other">OTHERS TYPES</option>
                                          
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div> --}}
                                    <x-column_-input  title="Primary Activitiy" Name="Primary_Activity" id="" placeholder="Eg-100" div_class="col-md-3" required="required"/>
                                    <x-column_-input  title="Secondary Activitiy" Name="Secondary_Activity" id="" placeholder="Eg-100" div_class="col-md-3"/>
                                    <x-column_-input  title="Tertiary Activitiy" Name="Tertiary_Activity" id="" placeholder="Eg-100" div_class="col-md-3"/>

                                    <x-column_-input  title="Others (Mention in)" Name="Other_Activity" id="" placeholder="Eg-100" div_class="col-md-3"/>

                                  </div>
                          </div>

                          
                          <div class="card-body">
                                  <div class="row g-2">
                                    <div class="col-md-3">
                                      <label for="validationCustom01" class="form-label">Society Undertaken Pds (Fair Price Shop)</label>
                                      <select Name="Society_Fair_Price_Shop" class="form-select target" id="selectid3" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option >Yes</option>
                                          <option>No</option>
                                         
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div>
                                  <div class="col-md-3">
                                    <label for="validationCustom01" class="form-label">Year Of Latest Audit Completed</label>
                                    <select Name="Latest_Audit_complete" class="form-select target" id="Latest_Audit_complete" required>
                                        <option selected >Not Yet Audited</option>
                                        
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                    {{-- <x-column_-input  title="Society Undertaken Pds (Fair Price Shop)" Name="Society_Fair_Price_Shop" id="" placeholder="Eg-100" div_class="col-md-3"/> --}}
                                    {{-- <x-column_-input  title="Year Of Latest Audit Completed" Name="Latest_Audit_complete" id="Latest_Audit_complete" placeholder="Eg-100" div_class="col-md-3"/> --}}
                                      
                                      <!--begin::Col-->
                                      <div class="col-md-3">
                                            <label for="validationCustom01" class="form-label">Category Of Audit / Audit Class</label>
                                            <select Name="Audit_Class" class="form-select target" id="selectid3" required>
                                                <option selected>Not Yet Audited</option>
                                                <option >A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                                        </div>
                                        <x-column_-input  title="WORKING CAPITAL" Name="Working_Capitals" id="" placeholder="Eg-100" div_class="col-md-3" word_id="word_id3" function='onkeyup=word_id3.innerHTML=convertNumberToWords(this.value)'/>
                                        <!--end::Col-->
                                      
                          </div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Business Turnover" Name="Business_turnover" id="" placeholder="Eg-100" div_class="col-md-3" word_id="word_id4" function='onkeyup=word_id4.innerHTML=convertNumberToWords(this.value)'/>
                                    <x-column_-input  title="Total Reserve" Name="Total_reserve" id="" placeholder="Eg-100" div_class="col-md-3" word_id="word_id15" function='onkeyup=word_id15.innerHTML=convertNumberToWords(this.value)'/>
                                    <div class="col-md-3">
                                      <label for="validationCustom01" class="form-label">Whether The Society Is Making Profit/Loss</label>
                                      <select Name="Profit_loss" class="form-select target" id="selectid3" required>
                                          <option selected disabled value="">Choose...</option>
                                          <option >Profit</option>
                                          <option>Loss</option>
                                          <option>Neither Profit/Loss</option>
                                          
                                      </select>
                                      <div class="valid-feedback">Looks good!</div>
                                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                                  </div>
                                    {{-- <x-column_-input  title="Whether The Society Is Making Profit/Loss" Name="Profit_loss" id="" placeholder="Eg-100" div_class="col-md-3"/> --}}
                                    <x-column_-input  title="Net Profit(+)/Loss(-) Of The Society (Amount In)" Name="Net_Profit_Loss" id="" placeholder="Eg-100" div_class="col-md-3"/>
                                      
                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">ACCUMULATED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Profit" Name="Profit" id="" placeholder="Eg-100" div_class="col-md-2" inclass="numbers" required="required"/>
                                    <x-column_-input  title="Loss" Name="Loss" id="" placeholder="Eg-100" div_class="col-md-2" inclass="numbers" required="required"/>
                                      
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
                                    <x-column_-input  title="Types Of Grant" Name="Grant_Type" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Year" Name="Grant_Year" id="Grant_Year" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Name Of The DEPTT." Name="Deptt_Name" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Total Grant Sanctioned" Name="Grant_Sanctioned" id="" placeholder="Eg-100" div_class="col-md-2" word_id="word_id5" function='onkeyup=word_id5.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Grant Release" Name="Grant_Release" id="" placeholder="Eg-100" div_class="col-md-2" word_id="word_id6" function='onkeyup=word_id6.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Date Of Release" Name="Date_release" id="Date_release" placeholder="Eg-100" div_class="col-md-2"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">GOVERNMENT AID, IN THE FORM OF A  LOAN - CUM - SUBSIDIES</div></div>
                          <div class="card-body">
                                  <div class="row g-2">

                                    <x-column_-input  title="Types Of Aid" Name="Aid_Type" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Year" Name="Aid_Year" id="Aid_Year" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Name Of The Agencies" Name="Agencies_Name" id="" placeholder="Eg-100" div_class="col-md-2"/>
                                    <x-column_-input  title="Total AID Sanctioned" Name="Aid_Sanctioned" id="" placeholder="Eg-100" div_class="col-md-2" word_id="word_id7" function='onkeyup=word_id7.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Grant Loan Release " Name="Aid_Grant_Release" id="" placeholder="Eg-100" div_class="col-md-2" word_id="word_id8" function='onkeyup=word_id8.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Grant Subsidies" Name="Grant_Subsidies" id="" placeholder="Eg-100" div_class="col-md-2" word_id="word_id14" function='onkeyup=word_id14.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>

                                  </div>
                          </div>


                          <div class="card-header"><div class="card-title">REFUND OF AID SANCTIONED AS  LOAN</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Loan Sanctioned" Name="Loan_Sanctioned" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id9" function='onkeyup=word_id9.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Loan Refunded " Name="Loan_Refunded" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id10" function='onkeyup=word_id10.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                    <x-column_-input  title="Loan Outstanding" Name="Loan_Outstanding" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id11" function='onkeyup=word_id11.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>

                                  </div>
                          </div>

                          <div class="card-header"><div class="card-title">MANAGERIAL SUBSIDY RECEIVED</div></div>
                          <div class="card-body">
                                  <div class="row g-2">
                                    <x-column_-input  title="Year" Name="MANAGERIAL_SUBSIDY_RECEIVED_Year" id="MANAGERIAL_SUBSIDY_RECEIVED_Year" placeholder="Eg-100" div_class="col-md-4" />
                                    <x-column_-input  title="Amount" Name="MANAGERIAL_SUBSIDY_RECEIVED_Amount" id="" placeholder="Eg-100" div_class="col-md-4" word_id="word_id13" function='onkeyup=word_id13.innerHTML=convertNumberToWords(this.value)' inclass="numbers"/>
                                      
                                      
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
                '<input type="text" Name="Yes_Dividen_Challan_date" id="Yes_Dividen_Challan_date" class="form-control" placeholder="Eg-122" required> </div>';

            $('#newinput1').append(newRowAdd);

            $('#Yes_Dividen_Challan_date').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });


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
                '<input type="text" Name="CDf_Yes_paidDate" id="CDf_Yes_paidDate" class="form-control" placeholder="Eg-12/12/2005" required> </div>';

            $('#newinput2').append(newRowAdd);


            $('#CDf_Yes_paidDate').datepicker({
          uiLibrary: 'bootstrap5',
          format: 'yyyy-mm-dd'
      });

  }
  else if(singleValues=='No'){
    $(".toremove2").remove();
  }
  
} );
       
    </script>
                        
                        <!--end::JavaScript-->
      

</x-layout>

<script>

$( document ).ready(function() {


var currentYear = new Date().getFullYear();
for(var i = 0; i < 30; i++){
  var next = currentYear+1;
  var year = currentYear + '-' + next.toString().slice(-2);
  $('#Latest_Audit_complete').append(new Option(year, year));
  currentYear--;
}
    

});


function convertNumberToWords(amount) {

    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}


$('.numbers').keyup(function () {
         this.value = this.value.replace(/[^0-9\.]/g,'');
      });
</script>