 @props(['sector'=>"",
'Datas'=>""
])
 <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>FLOW OF TOURISTS (PER ANNUM)</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Domestic</th>
                          <td>{{$sector->deomestic_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Foreign</th>
                          <td>{{$sector->foreign_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Entry Fee (per Anum)</th>
                          <td>{{$sector->entry_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Parking Fee (per Anum)</th>
                          <td>{{$sector->parking_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Other Fee (per Anum)</th>
                          <td>{{$sector->other_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. of Guest House/Logde</th>
                          <td>{{$sector->total_guest_house_or_lodge}}</td>
                        </tr>
                        <tr>
                          <th>Income from Guest House/Logde</th>
                          <td>{{$sector->income_from_guest_house_or_lodge}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER INCOME PER ANNUM</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Source</th>
                          <td>{{$sector->other_source}}</td>
                        </tr>
                        <tr>
                          <th>Value</th>
                          <td>{{$sector->other_value}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Male Guide</th>
                          <td>{{$sector->male_guide}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Female Guide</th>
                          <td>{{$sector->female_guide}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Product</th>
                          <td>{{$sector->product_promotion}}</td>
                        </tr>
                        <tr>
                          <th>Sales Per Anum</th>
                          <td>{{$sector->sale_of_product_annually}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</h5>
                      <table class="table">
                        <thead>
                          <th>Nos.</th>
                          <th>Name</th>
                          <th>Total Number</th>
                        </thead>
                      <tbody>
                        @php
                          $jan1=json_decode($sector->Equipments_Nos);
                        @endphp
                        @forEach(json_decode($sector->Equipments_Name) as $key => $data)
                        <tr>
                          <td>{{$key+1}}.</td>
                          <td>{{$data}}</td>
                          <td>{{$jan1[$key]}}</td>
                        </tr>
                        
                       @endforeach
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/tourism/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>