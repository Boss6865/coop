@props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TRANSPORT FACILITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Goods Vehicles</th>
                          <td>{{$sector->nos_of_Goods_vehicle}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Passenger Vehicles</th>
                          <td>{{$sector->no_of_passenger_vehichle}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>TYPES OF VEHICLES</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Vehicle Type</th>
                          <td>{{$sector->vehicle_type}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Vehicle</th>
                          <td>{{$sector->vehicle_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Vehicle</th>
                          <td>{{$sector->vehicle_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Other Assets Name</th>
                          <td>{{$sector->other_asset_name}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Other Assets</th>
                          <td>{{$sector->other_asset_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the other Assets</th>
                          <td>{{$sector->other_asset_value}}</td>
                        </tr>
                        <tr>
                          <th>income from services providers</th>
                          <td>{{$sector->other_asset_income}}</td>
                        </tr>
                        <tr>
                          <th>Others Total</th>
                          <td>{{$sector->other_total}}</td>
                        </tr>
                        <tr>
                          <th>Other Total Wages</th>
                          <td>{{$sector->others_wages_total}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DRIVERS</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Number of Driver</th>
                          <td>{{$sector->total_driver}}</td>
                        </tr>
                        <tr>
                          <th>Total Wages Paid to Driver</th>
                          <td>{{$sector->total_driver_wages}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper</th>
                          <td>{{$sector->total_helper}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper Wages</th>
                          <td>{{$sector->total_helper_wages}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>


                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/transport/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>