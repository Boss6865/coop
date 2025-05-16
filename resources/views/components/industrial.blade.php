  @props(['sector'=>"",
'Datas'=>""
])
<div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>ACTIVITIES</h5>
                      <table class="table">
                        <thead>
                          <th>Sl. No.</th>
                          <th>Type of Business</th>
                          <th>Item Produced/Service</th>
                          <th>Nos. of Person Employed</th>
                          <th>Wages Paid</th>
                          <th>Sales TurnOver</th>
                        </thead>
                      <tbody>
                        @php
                        $jan1=json_decode($sector->name_of_item_produced);
                        $jan2=json_decode($sector->person_employed);
                        $jan3=json_decode($sector->wages_paid);
                        $jan4=json_decode($sector->sales_turnover);
                        @endphp
                        @forEach(json_decode($sector->type_of_Business) as $key => $data)
                        <tr>
                          <th>{{$key+1}}</th>
                          <th>{{$data}}</th>
                          <td>{{$jan1[$key]}}</td>
                          <td>{{$jan2[$key]}}</td>
                          <td>{{$jan3[$key]}}</td>
                          <td>{{$jan4[$key]}}</td>
                        </tr>
                        @endforeach
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>TRAINING CENTRE</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Cources Offered</th>
                          <td>{{$sector->course_offered}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Of Trainnee</th>
                          <td>{{$sector->nos_of_trainee}}</td>
                        </tr>
                        <tr>
                          <th>Course Fee</th>
                          <td>{{$sector->course_fee}}</td>
                        </tr>
                        <tr>
                          <th>Teaching Staff</th>
                          <td>{{$sector->teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Non-Teaching Staff</th>
                          <td>{{$sector->non_teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Salary To Staff</th>
                          <td>{{$sector->salary}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    
                  <div class="modal-footer">
                    <a href="/industry/{{$Datas}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>