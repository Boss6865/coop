 @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>MEMBERSHIP</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>ST Male</th>
                          <td>{{$sector->st_male}}</td>
                        </tr>
                        <tr>
                          <th>ST Female</th>
                          <td>{{$sector->st_female}}</td>
                        </tr>
                        <tr>
                          <th>SC Male</th>
                          <td>{{$sector->sc_male}}</td>
                        </tr>
                        <tr>
                          <th>SC Female</th>
                          <td>{{$sector->sc_female}}</td>
                        </tr>
                        <tr>
                          <th>Of Which Landholders</th>
                          <td>{{$sector->which_landholder}}</td>
                        </tr>
                        <tr>
                          <th>Of Which Argriculture Labourers </th>
                          <td>{{$sector->which_agriculture}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FARMING ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Agri/Horti Produce</th>
                          <td>{{$sector->type_produce_agriorhorti}}</td>
                        </tr>
                        <tr>
                          <th>Production In Quantity</th>
                          <td>{{$sector->production_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Amount</th>
                          <td>{{$sector->farming_activities_amount}}</td>
                        </tr>
                        <tr>
                          <th>Sale  Amount in Quantity</th>
                          <td>{{$sector->produce_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sale Amount</th>
                          <td>{{$sector->produce_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="modal-footer">
                    <a href="/farming/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  </div>