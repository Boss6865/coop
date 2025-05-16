 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>PROCESSING UNIT / FACTORY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of Item</th>
                          <td>{{$sector->item_name}}</td>
                        </tr>
                        <tr>
                          <th>Item Value</th>
                          <td>{{$sector->item_value}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PROCESSING MACHINE </h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of the Item</th>
                          <td>{{$sector->process_machine_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of the Item</th>
                          <td>{{$sector->process_item_Nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Item</th>
                          <td>{{$sector->process_item_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>SALE OF PRODUCT</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Item</th>
                          <td>{{$sector->sale_of_item_name}}</td>
                        </tr>
                        <tr>
                          <th>Quantity</th>
                          <td>{{$sector->sale_of_item_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Amount</th>
                          <td>{{$sector->sale_of_item_amount}}</td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PACKAGING</h5>
                      <table class="table">
                        
                      <tbody>
                        <tr>
                          <th>Packaging</th>
                          <td>{{$sector->packing}}</td>
                        </tr>
                        <tr>
                          <th>Types of Packaging</th>
                          <td>{{$sector->packaging_type}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/processing/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>