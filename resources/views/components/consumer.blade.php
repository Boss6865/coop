 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>CONSUMER</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Departmental Store</th>
                          <td>{{$sector->departmental_store}}</td>
                        </tr>
                        <tr>
                          <th>Retails Units</th>
                          <td>{{$sector->retails_unit}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Of Branch</th>
                          <td>{{$sector->no_of_branch}}</td>
                        </tr>
                        <tr>
                          <th>Closing Stock Value</th>
                          <td>{{$sector->closing_stock}}</td>
                        </tr>
                        <tr>
                          <th>Purchase During a Year</th>
                          <td>{{$sector->purchase_date}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>SALE OF  CONSUMER GOODS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>item Name</th>
                          <td>{{$sector->item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sale</th>
                          <td>{{$sector->total_sale}}</td>
                        </tr>
                        <tr>
                          <th>Controlled Wholesale</th>
                          <td>{{$sector->Controll_wholesale}}</td>
                        </tr>
                        <tr>
                          <th>Controlled Retail</th>
                          <td>{{$sector->controll_retail}}</td>
                        </tr>
                        <tr>
                          <th>Un-Controlled Wholesale</th>
                          <td>{{$sector->uncontroll_wholesale}}</td>
                        </tr>
                        <tr>
                          <th>Un-Controlled Retail</th>
                          <td>{{$sector->uncontroll_retail}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/consumer/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>