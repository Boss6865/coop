 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>GRANT RECEIVE</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Source</th>
                          <td>{{$sector->lrb_source}}</td>
                        </tr>
                        <tr>
                          <th>Amount Received</th>
                          <td>{{$sector->lrb_amount_recieved}}</td>
                        </tr>
                        <tr>
                          <th>Amount Utilized</th>
                          <td>{{$sector->lrb_amount_utilized}}</td>
                        </tr>
                        <tr>
                          <th>Amount Unutilized</th>
                          <td>{{$sector->lrb_amount_unutilized}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>AGRICULTURE/HORTICULTURE/ OTHER PRODUCES</h5>
                      <table class="table">
                       
                      <tbody>
                         <tr>
                          <th>Purpose for the grant received</th>
                          <td>{{$sector->purpose_of_grant_recieve}}</td>
                        </tr>
                        <tr>
                          <th>Shared Investment in SUBMJJCS</th>
                          <td>{{$sector->shared_investment}}</td>
                        </tr>
                        <tr>
                          <th>Collection of entry fee/parking fee</th>
                          <td>{{$sector->fee_collection}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/jingkiengjri/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>