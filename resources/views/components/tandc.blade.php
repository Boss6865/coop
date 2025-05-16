  @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>THRIFT CONTRIBUTION PER ANNUM</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Contribution During The Year</th>
                          <td>{{$sector->year_contribution}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Members Contributed</th>
                          <td>{{$sector->member_contributed}}</td>
                        </tr>
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</h5>
                      <table class="table">
                        <thead>
                          <th>SL. No</th>
                          <th>Types of Loan</th>
                          <th>Nos. of ST Borrowing</th>
                          <th>Nos. of SC Borrowing</th>
                          <th>Nos. of Gen/Other Borrowing</th>
                          <th>Amount Issues for Borrowing</th>
                        </thead>
                      <tbody>
                         @php
                          $jan1=json_decode($sector->borrowing_loan_st);
                          $jan2=json_decode($sector->borrowing_loan_sc);
                          $jan3=json_decode($sector->borrowing_loan_GO);
                          $jan4=json_decode($sector->borrowing_loan_issues);
                          @endphp
                        @forEach(json_decode($sector->borrowing_loan) as $key => $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$data}}</th>
                          <td>{{$jan1[$key]}}</td>
                          <td>{{$jan2[$key]}}</td>
                          <td>{{$jan3[$key]}}</td>
                          <td>{{$jan4[$key]}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                     <div class="row">
                      <div class="col-sm-6"><h5>LOAN  RECOVERY  DURING THE CURRENT YEAR</h5>
                      <table class="table">
                        <thead>
                          <th>SL. No.</th>
                          <th>Types of Loan</th>
                          <th>ST</th>
                          <th>SC</th>
                          <th>Gen/Other</th>
                          <th>Principal</th>
                          <th>Interest</th>
                        </thead>
                      <tbody>
                         @php
                          $jan1=json_decode($sector->recover_loan_st);
                          $jan2=json_decode($sector->recover_loan_sc);
                          $jan3=json_decode($sector->recover_loan_GO);
                          $jan4=json_decode($sector->recover_loan_principal);
                          $jan5=json_decode($sector->recover_loan_interest);
                          @endphp
                          @forEach(json_decode($sector->recover_loan) as $key => $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$data}}</th>
                          <td>{{$jan1[$key]}}</td>
                          <td>{{$jan2[$key]}}</td>
                          <td>{{$jan3[$key]}}</td>
                          <td>{{$jan4[$key]}}</td>
                          <td>{{$jan5[$key]}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>OUTSTANDING LOAN  DURING THE CURRENT YEAR</h5>
                      <table class="table">
                        <thead>
                          <th>SL. No.</th>
                          <th>Types of Loan</th>
                          <th>ST</th>
                          <th>SC</th>
                          <th>Gen/Other</th>
                          <th>Principal</th>
                          <th>Interest</th>
                          <th>Defaulters Nos.</th>
                          <th>Defaulters Amount.</th>
                        </thead>
                      <tbody>
                        @php
                        $jan1=json_decode($sector->outstanding_loan_st);
                        $jan2=json_decode($sector->outstanding_loan_sc);
                        $jan3=json_decode($sector->outstanding_loan_GO);
                        $jan4=json_decode($sector->outstanding_loan_principal);
                        $jan5=json_decode($sector->outstanding_loan_interest);
                        $jan6=json_decode($sector->outstanding_loan_defaulters_no);
                        $jan7=json_decode($sector->outstanding_laon_issues_defaulters_amount);
                        @endphp
                        @forEach(json_decode($sector->outstanding_loan) as $key => $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$data}}</th>
                          <td>{{$jan1[$key]}}</td>
                          <td>{{$jan2[$key]}}</td>
                          <td>{{$jan3[$key]}}</td>
                          <td>{{$jan4[$key]}}</td>
                          <td>{{$jan5[$key]}}</td>
                          <td>{{$jan6[$key]}}</td>
                          <td>{{$jan7[$key]}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      </div>


                    </div>

                    </div>
                    
                  <div class="modal-footer">
                    <a href="/tandc/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>