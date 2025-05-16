 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>AGRICULTURE INPUTS SUCH AS SEED, FERTILIZERS ETC</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Type</th>
                          <td>{{$sector->agriculture_input_type}}</td>
                        </tr>
                        <tr>
                          <th>Quantity</th>
                          <td>{{$sector->agriculture_input_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Value</th>
                          <td>{{$sector->agriculture_input_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>AGRICULTURE/HORTICULTURE/ OTHER PRODUCES</h5>
                      <table class="table">
                        <thead>
                          <th>SL. No.</th>
                          <th>Name of the Product Produces</th>
                          <th>Quantity in kg</th>
                          <th>Values</th>
                        </thead>
                      <tbody>
                        @php
                              $jan1=json_decode($sector->product_quantity);
                              $jan2=json_decode($sector->product_value);
                        @endphp
                        @forEach(json_decode($sector->product_produce) as $key => $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$data}}</th>
                          <td>{{$jan1[$key]}}</td>
                          <td>{{$jan2[$key]}}</td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/market/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>