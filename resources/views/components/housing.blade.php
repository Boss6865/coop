 
  @props(['sector'=>"",
'Datas'=>""
])
 <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>BORROWINGS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Government</th>
                          <td>{{$sector->borrowing_government}}</td>
                        </tr>
                        <tr>
                          <th>Central Fianance Agency</th>
                          <td>{{$sector->central_finance_agency}}</td>
                        </tr>
                        <tr>
                          <th>Housing and Urban Development Coporation</th>
                          <td>{{$sector->housing_urban_development_cor}}</td>
                        </tr>
                        <tr>
                          <th>State Co-operative fiance Societies</th>
                          <td>{{$sector->state_fianance_society}}</td>
                        </tr>
                        <tr>
                          <th>National Housing Bank</th>
                          <td>{{$sector->national_housing_bank}}</td>
                        </tr>
                        <tr>
                          <th>Other Fianancial Institution</th>
                          <td>{{$sector->other_financial_inst}}</td>
                        </tr>
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>FIXED ASSETS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Land</th>
                          <td>{{$sector->land_asset}}</td>
                        </tr>
                        <tr>
                          <th>Building</th>
                          <td>{{$sector->building_asset}}</td>
                        </tr>
                        <tr>
                          <th>Others</th>
                          <td>{{$sector->other_asset}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                    <div class="row">
                      
                      <div class="col-sm-6"><h5>INDEPENDENT HOUSES CONSTRUCTED DURING THE YEAR</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Nos. construct by Society</th>
                          <td>{{$sector->society_house_construct_number}}</td>
                        </tr>
                        <tr>
                          <th>Total Value construct by Society</th>
                          <td>{{$sector->society_house_construct_value}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. construct by Member</th>
                          <td>{{$sector->member_house_construct_number}}</td>
                        </tr>
                        <tr>
                          <th>Total Value construct by Member</th>
                          <td>{{$sector->member_house_construct_value}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>

                      <div class="col-sm-6"><h5>LOANS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Advance Year of issue</th>
                          <td>{{$sector->adavance_year}}</td>
                        </tr>
                        <tr>
                          <th>Advance Amount</th>
                          <td>{{$sector->advance_amount}}</td>
                        </tr>
                        <tr>
                          <th>Recovery Principal</th>
                          <td>{{$sector->recovery_principal}}</td>
                        </tr>
                        <tr>
                          <th>Recovery Interest</th>
                          <td>{{$sector->recovery_interest}}</td>
                        </tr>
                        <tr>
                          <th>Outstanding Principal</th>
                          <td>{{$sector->outstanding_principal}}</td>
                        </tr>
                        <tr>
                          <th>Outstanding Interest</th>
                          <td>{{$sector->outstanding_interest}}</td>
                        </tr>
                        <tr>
                          <th>Overdue Principal</th>
                          <td>{{$sector->overdue_principal}}</td>
                        </tr>
                        <tr>
                          <th>Overdue Interest</th>
                          <td>{{$sector->overdue_interest}}</td>
                        </tr>
                        </tbody>
                      </table>
                      </div>


                    </div>

                    <div class="row">
                      

                      <div class="col-sm-6"><h5>INDEPENDENT HOUSE CONSTRUCTED UPTO THE END OF THE  YEAR</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Nos. of House Construted</th>
                          <td>{{$sector->independent_house_construct_no}}</td>
                        </tr>
                        <tr>
                          <th>Total Value of House Construted</th>
                          <td>{{$sector->independent_house_construct_value}}</td>
                        </tr>
                        <tr>
                          <th>Total Income earned</th>
                          <td>{{$sector->independent_house_construct_earn}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                    </div>

                    </div>
                    
                  <div class="modal-footer">
                    <a href="/housing/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>