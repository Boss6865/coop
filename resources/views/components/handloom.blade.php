
  @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>LOOMS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>No. Of Looms Owned</th>
                          <td>{{$sector->no_of_looms_own}}</td>
                        </tr>
                        <tr>
                          <th>Whether Society Use Natural Dyes</th>
                          <td>{{$sector->natural_dykes}}</td>
                        </tr>
                        <tr>
                          <th>No. Of Dyeing Houses Owned</th>
                          <td>{{$sector->dyeing_house_own}}</td>
                        </tr>
                        <tr>
                          <th>Name Of The Items Produced</th>
                          <td>{{$sector->item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Total Handloom Sale</th>
                          <td>{{$sector->total_handlom_sale}}</td>
                        </tr>
                        <tr>
                          <th>Total Powerloom Sale</th>
                          <td>{{$sector->total_powerloom_sale}}</td>
                        </tr>
                        <tr>
                          <th>Total others Sale</th>
                          <td>{{$sector->total_other_sale}}</td>
                        </tr>
                        <tr>
                          <th>Local Market</th>
                          <td>{{$sector->local_market}}</td>
                        </tr>
                        <tr>
                          <th>Local Market Amount</th>
                          <td>{{$sector->local_market_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>LOOMS</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Export</th>
                          <td>{{$sector->export}}</td>
                        </tr>
                        <tr>
                          <th>Export Amount</th>
                          <td>{{$sector->export_amount}}</td>
                        </tr>
                        <tr>
                          <th>Production Employee</th>
                          <td>{{$sector->production_employee}}</td>
                        </tr>
                        <tr>
                          <th>Administration Employee</th>
                          <td>{{$sector->admin_employee}}</td>
                        </tr>
                        <tr>
                          <th>Others Employee</th>
                          <td>{{$sector->other_employee}}</td>
                        </tr>
                        <tr>
                          <th>Wage Paid</th>
                          <td>{{$sector->wage_paid}}</td>
                        </tr>
                         <tr>
                          <th>Sale Depot</th>
                          <td>{{$sector->sale_deport}}</td>
                        </tr>
                         <tr>
                          <th>Whether Own Workshed</th>
                          <td>{{$sector->workshed}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>Value Of Yarn & Other Raw Materials</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Production Name</th>
                          <td>{{$sector->production_name}}</td>
                        </tr>
                        <tr>
                          <th>Production Quantity</th>
                          <td>{{$sector->production_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Production Amount</th>
                          <td>{{$sector->production_amount}}</td>
                        </tr>
                         <tr>
                          <th>Purchase Name</th>
                          <td>{{$sector->purchase_name}}</td>
                        </tr>
                        <tr>
                          <th>Purchase Quantity</th>
                          <td>{{$sector->purchase_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Purchase Amount</th>
                          <td>{{$sector->purchase_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                     <div class="col-sm-6"><h5>No Of Other Equipments</h5>
                      <table class="table">
                        <thead>
                          <th>SL. No.</th>
                          <th>Name</th>
                          <th>Total No.</th>
                        </thead>
                      <tbody>
                        @php
                              $jani=json_decode($sector->Equipments_Nos);
                        @endphp
                        @forEach(json_decode($sector->Equipments_Name) as $key=> $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{ $data}}</th>
                          <td>{{ $jani[$key] }}</td>
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/handloom/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>