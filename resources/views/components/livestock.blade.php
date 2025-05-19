 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    @if(!empty($sector->no_of_piggery_shed))
                    <div class="col-sm-6"><h5>PIGGERY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. of Piggery Shed</th>
                          <td>{{$sector->no_of_piggery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Value of Piggery Sheds</th>
                          <td>{{$sector->value_of_piggery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Types of Piggery Activities</th>
                          <td>{{$sector->piggery_activities}}</td>
                        </tr>
                        <tr>
                          <th>Total Sales</th>
                          <td>{{$sector->total_sale}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    @endif
                    @if(!empty($sector->no_of_goatery_shed))
                    <div class="col-sm-6"><h5>GOATERY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. of Goatery Shed</th>
                          <td>{{$sector->no_of_goatery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Value of Goatery Sheds</th>
                          <td>{{$sector->value_of_goatery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Types of Goatery Item</th>
                          <td>{{$sector->goatery_item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sales</th>
                          <td>{{$sector->goatery_total_sale}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    @endif
                     @if(!empty($sector->no_of_poultry_shed))
                    <div class="col-sm-6"><h5>POULTRY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. of Poultry Shed</th>
                          <td>{{$sector->no_of_poultry_shed}}</td>
                        </tr>
                        <tr>
                          <th>Value of Poultry Sheds</th>
                          <td>{{$sector->value_of_poultry_shed}}</td>
                        </tr>
                        <tr>
                          <th>Types of poultry Item</th>
                          <td>{{$sector->poultry_item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sales</th>
                          <td>{{$sector->poultry_total_sale}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    @endif
                    @if(!empty($sector->no_of_duckery_shed))
                    <div class="col-sm-6"><h5>DUCKERY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. of Duckery Shed</th>
                          <td>{{$sector->no_of_duckery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Value of Duckery Sheds</th>
                          <td>{{$sector->value_of_duckery_shed}}</td>
                        </tr>
                        <tr>
                          <th>Types of duckery Item</th>
                          <td>{{$sector->duckery_item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sales</th>
                          <td>{{$sector->duckery_total_sale}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    @endif
                    @if(!empty($sector->no_of_cattle_farming_shed))
                    <div class="col-sm-6"><h5>CATTLE</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. of Cattle Farming Shed</th>
                          <td>{{$sector->no_of_cattle_farming_shed}}</td>
                        </tr>
                        <tr>
                          <th>Value of Cattle_Farming Sheds</th>
                          <td>{{$sector->value_of_cattle_farming_shed}}</td>
                        </tr>
                        <tr>
                          <th>Types of Cattle Farming Item</th>
                          <td>{{$sector->cattle_farming_item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sales</th>
                          <td>{{$sector->cattle_farming_total_sale}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    @endif
                    <div class="col-sm-6"><h5>ASSETS ON LIVESTOCKS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of the Livestock</th>
                          <td>{{$sector->livestock_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Livestock</th>
                          <td>{{$sector->livestock_no}}</td>
                        </tr>
                        <tr>
                          <th>Livestock Value</th>
                          <td>{{$sector->livestock_value}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/farming/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>