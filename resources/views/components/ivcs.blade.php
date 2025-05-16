 @props(['sector'=>"",
'Datas'=>""
])
 <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">INTEGRATED VILLAGE COOPERATIVE SOCIETIES </h3></div></div>
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6">
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Activity</th>
                          <td>{{$sector->activity}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of the Household Covered by the Society</th>
                          <td>{{$sector->household_covered}}</td>
                        </tr>
                        <tr>
                          <th>Corpus Fund</th>
                          <td>{{$sector->corpus_fund}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    
                    <div class="col-sm-6"><h5>SHARE/SHARE-HOLDERS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of Share Holders/Member</th>
                          <td>{{$sector->share_holder_member_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Share Subscribe</th>
                          <td>{{$sector->nos_of_share_subscribe}}</td>
                        </tr>
                        <tr>
                          <th>Amount of Share Capitals</th>
                          <td>{{$sector->amount_share_capitals}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DEPOSITS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Saving Accounts</th>
                          <td>{{$sector->nos_saving_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of Saving Mobilised</th>
                          <td>{{$sector->total_saving_mobilised}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of R.D. Account</th>
                          <td>{{$sector->nos_rd_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of R.D. Mobilised</th>
                          <td>{{$sector->total_rd_mobilised}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of F.D. Account</th>
                          <td>{{$sector->nos_fd_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of F.D. Mobilised</th>
                          <td>{{$sector->total_fd_mobilised}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>LOAN/BORROWERS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Loan Account/Borrowers</th>
                          <td>{{$sector->nos_loanorborrower_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Loan Amount Disbured</th>
                          <td>{{$sector->total_loan_disbured}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Outstanding Borrowers</th>
                          <td>{{$sector->outstanding_borrower}}</td>
                        </tr>
                        <tr>
                          <th>Outstanding Amount</th>
                          <td>{{$sector->outstanding_amount}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Product Kept in Collection Market Centre (CMC)</th>
                          <td>{{$sector->product_cmc}}</td>
                        </tr>
                        <tr>
                          <th>Tools and Machinery Available at Custom Hiring Centre</th>
                          <td>{{$sector->machinery_tool_CHC}}</td>
                        </tr>
                        <tr>
                          <th>Agriculture Farming/Cultivation Item</th>
                          <td>{{$sector->agriculture_item}}</td>
                        </tr>
                        <tr>
                          <th>Agriculture Farming/Cultivation Area</th>
                          <td>{{$sector->agriculture_area}}</td>
                        </tr>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Item</th>
                          <td>{{$sector->horticulture_item}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Area</th>
                          <td>{{$sector->horticulture_area}}</td>
                        </tr>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Area</th>
                          <td>{{$sector->horticulture_area}}</td>
                        </tr>
                        <tr>
                          <th>Livestock</th>
                          <td>{{$sector->livestock}}</td>
                        </tr>
                        <tr>
                          <th>Tading/Marketting</th>
                          <td>{{$sector->marketing_trading}}</td>
                        </tr>
                        <tr>
                          <th>Grocery Consumer Store</th>
                          <td>{{$sector->consumer_store}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/ivcs/{{$Datas}}"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>