  @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>Nos. of Fisherman</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Male</th>
                          <td>{{$sector->male_fisher}}</td>
                        </tr>
                        <tr>
                          <th>Female</th>
                          <td>{{$sector->female_fisher}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>Asset</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Total Nos. Of Fish Pond</th>
                          <td>{{$sector->total_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Fish Pond (Hectares)</th>
                          <td>{{$sector->area_of_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Fish Pond</th>
                          <td>{{$sector->value_of_fish_pond}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. Of Nursery Pond</th>
                          <td>{{$sector->nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Nursery Pond (Hectares)</th>
                          <td>{{$sector->area_of_nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Nursery Pond</th>
                          <td>{{$sector->value_of_nursery_pond}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Fish Reared</th>
                          <td>{{$sector->type_of_fish_reared}}</td>
                        </tr>
                        <tr>
                          <th>Quantity in Kg</th>
                          <td>{{$sector->fish_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Fresh Fish and Others</th>
                          <td>{{$sector->sales_of_fresh_fish}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                     <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Dry Fish Value</th>
                          <td>{{$sector->dry_fish}}</td>
                        </tr>
                        <tr>
                          <th>Smoke Fish Value</th>
                          <td>{{$sector->smoke_fish}}</td>
                        </tr>
                        <tr>
                          <th>Sale of Fishing Material and Others</th>
                          <td>{{$sector->fishing_material_other}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/fishery/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>