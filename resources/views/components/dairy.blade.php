 @props(['sector'=>"",
'Datas'=>""
])
 <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. Of Milch Cows</th>
                          <td>{{$sector->Nos_of_milch_cow}}</td>
                        </tr>
                        <tr>
                          <th>Total Value of Milch Cow</th>
                          <td>{{$sector->total_value_of_Milch_cow}}</td>
                        </tr>
                         <tr>
                          <th>Nos. Of Cowshed</th>
                          <td>{{$sector->no_of_cowshed}}</td>
                        </tr>
                        <tr>
                          <th>Others Items</th>
                          <td>{{$sector->other_item}}</td>
                        </tr>
                        <tr>
                          <th>Other No.</th>
                          <td>{{$sector->other_no}}</td>
                        </tr>
                        <tr>
                          <th>Other Amount</th>
                          <td>{{$sector->other_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>MILK PROCURED</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Quantity in Litres</th>
                          <td>{{$sector->produce_in_litre}}</td>
                        </tr>
                        <tr>
                          <th>Production Value</th>
                          <td>{{$sector->produce_value}}</td>
                        </tr>
                        <tr>
                          <th>Unsold Milk in Litre</th>
                          <td>{{$sector->usold_litre}}</td>
                        </tr>
                         <tr>
                          <th>Unsold Milk Value</th>
                          <td>{{$sector->unsold_value}}</td>
                        </tr>
                         <tr>
                          <th>Milk collection Unit Facilities</th>
                          <td>{{$sector->collection_facility}}</td>
                        </tr>
                        <tr>
                          <th>Milk Testing Facilities</th>
                          <td>{{$sector->testing_facility}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine (Per Anum)</th>
                          <td>{{$sector->sale_of_feed_medicine}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine Value</th>
                          <td>{{$sector->sale_of_feed_medicine_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DAIRY PRODUCT SOLD</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Item Produced</th>
                          <td>{{$sector->dairy_product_item}}</td>
                        </tr>
                        <tr>
                          <th>Produced Item Value</th>
                          <td>{{$sector->dairy_product_value}}</td>
                        </tr>
                       
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/dairy/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>