   @props(['sector'=>"",
'Datas'=>""
])
 <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>CANE & BAMBOO  WORK</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Specify Items Produced</th>
                          <td>{{$sector->item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$sector->nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Wages Paid</th>
                          <td>{{$sector->wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Sales Turn Over</th>
                          <td>{{$sector->sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Speify Items Produced</th>
                          <td>{{$sector->other_item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$sector->other_nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Others Wages Paid</th>
                          <td>{{$sector->other_wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Others Sales Turn Over</th>
                          <td>{{$sector->other_sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    
                  <div class="modal-footer">
                    <a href="/handicraft/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>