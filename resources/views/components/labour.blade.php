   @props(['sector'=>"",
'Datas'=>""
])
 <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>MEMBERSHIP INVOLVED IN CONTRACT WORKS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Society Operation</th>
                          <td>{{$sector->society_operation}}</td>
                        </tr>
                        <tr>
                          <th>ST</th>
                          <td>{{$sector->ST}}</td>
                        </tr>
                        <tr>
                          <th>SC</th>
                          <td>{{$sector->SC}}</td>
                        </tr>
                        <tr>
                          <th>Total</th>
                          <td>{{$sector->total}}</td>
                        </tr>
                        <tr>
                          <th>Of which is labourer</th>
                          <td>{{$sector->of_which_borrower}}</td>
                        </tr>
                        <tr>
                          <th>Other</th>
                          <td>{{$sector->other_specify}}</td>
                        </tr>
                        <tr>
                          <th>No of Workers</th>
                          <td>{{$sector->no_of_worker}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>VALUE OF CONTRACTS EXECUTED DURING THE YEAR (WORK AWARDING AGENCIES)</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Government Body</th>
                          <td>{{$sector->Govt_body}}</td>
                        </tr>
                        <tr>
                          <th>Local Body</th>
                          <td>{{$sector->local_body}}</td>
                        </tr>
                        <tr>
                          <th>Others</th>
                          <td>{{$sector->other}}</td>
                        </tr>
                        <tr>
                          <th>Income Earned</th>
                          <td>{{$sector->income_earned}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    
                  <div class="modal-footer">
                    <a href="/labour/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>