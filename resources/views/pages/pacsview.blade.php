<x-layout>
    <x-navigation title="{{ $Datas->Name_of_the_Society }}" Nav="PACS" />
    <main class="app-main">
 
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row g-4 mb-4">
        <div class="col-12 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS) DEATILS OF SOCIETY</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                @isset($activities->activity)
                <table class="table table-sm table-bordered"> 
                  <tbody>
                    <tr class="align-middle"><th style="width: 20%">KCC LOAN AVAILED DURING THE YEAR CURRENT YEAR:</th>
                      <td style="width: 30%">
                        <table class="table table-sm ">
                          <tbody>
                              <tr>
                                  <th>Activity</th>
                              <td>{{$activities->activity}}</td>
                              
                              </tr>
                              
                            
                          </tbody>
                        </table>

                        <table class="table table-sm ">
                          <tbody>
                              <tr>
                                  <th>Amount Sanctioned</th>
                              <td>{{($activities->amount_sanctioned ?? '')}}</td>
                              
                              </tr>
                              <tr>
                                  <th>Nos. of member in which loans was sanctioned</th>
                              <td>{{($activities->nos_of_member_loan_for ?? '')}}</td>
                              
                              </tr>
                              <tr>
                              <th>Purpose of Which Loans was taken for</th>
                              <td>{{($activities->purpose_taken_for ?? '')}}</td>
                              
                              </tr>
                            
                          </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">NO. OF KCC LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR:</th>
                      <td style="width: 30%">
                         <table class="table table-sm">
                           <thead>
                             <th>Sl. No.</th>
                             <th>Ethnic Group/Clan</th>
                             <th>Male</th>
                             <th>Female</th>
                           </thead>
                           <tbody>
                              @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->female_clan);
                                $jan2=json_decode($activities->male_clan);
                                @endphp
                                @forEach(json_decode($activities->clan) as $key => $data)
                                @isset($data)
                                <tr>
                                   <th>{{$key+1}}</th>
                                    <td>{{$data}}</td>
                                   <td>{{$jan1[$key]}}</td>
                                    <td>{{$jan2[$key]}}</td>
                                </tr>
                                @endisset
                                @endforeach
                              @endif
                               

                               

                             
                           </tbody>
                       </table>
                     </td>
                    </tr>
                    <tr class="align-middle"><th style="width: 20%">LOAN  RECOVERY  DURING THE CURRENT YEAR:</th>
                          <td style="width: 30%">
                          <table class="table table-sm ">
                            <thead>
                              <th>Sl. No.</th>
                              <th>Ethnic Group/Clan</th>
                              <th>Male</th>
                              <th>Female</th>
                            </thead>
                            <tbody>
                               @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->recovery_male_clan);
                                $jan2=json_decode($activities->recovery_female_clan);
                                @endphp
                                @forEach(json_decode($activities->recovery_clan) as $key => $data)
                                @isset($data)
                                <tr>
                                   <th>{{$key+1}}</th>
                                   <td>{{$data}}</td>
                                    <td>{{$jan1[$key]}}</td>
                                    <td>{{$jan2[$key]}}</td>
                                </tr>
                                @endisset
                                @endforeach
                              @endif

                                
                              
                              
                            </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">TOTAL AMOUNT RECOVERY:</th>
                      <td style="width: 30%">
                          <table class="table table-sm">
                            <tbody>
                                
                                 <tr>
                                  <th>Principal Amount</th>
                                  <td>{{($activities->principal_amount ?? '')}}</td>
                                  
                                </tr>
                                 <tr>
                                  <th>Interest Amount</th>
                                  <td>{{($activities->interest_amount ?? '')}}</td>
                                </tr>
                              
                            </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr class="align-middle"><th style="width: 20%">KCC LOAN OUTSTANDING FOR THE LAST FIVE YEARS:</th>
                          <td style="width: 30%">
                          <table class="table table-sm ">
                            <thead>
                              <th>Sl. No.</th>
                              <th>Years</th>
                              <th>Principal Amount</th>
                              <th>Interest Amount</th>
                            </thead>
                            <tbody>
                              @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->outstanding_p_amount);
                                $jan2=json_decode($activities->outstanding_interest);
                                @endphp
                                @forEach(json_decode($activities->years) as $key => $data)
                                @isset($data)
                                <tr>
                                   <th>{{$key+1}}</th>
                                   <td>{{$data}}</td>
                                    <td>{{$jan1[$key]}}</td>
                                    <td>{{$jan2[$key]}}</td>
                                </tr>
                                @endisset
                                @endforeach
                              @endif
                            </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">NO. OF OUTSTANDING LOANEE MEMBERS:</th>
                      <td style="width: 30%">
                          <table class="table table-sm">
                            <thead>
                              <th>Sl. No.</th>
                              <th>Ethnic Group/Clan</th>
                              <th>Male</th>
                              <th>Female</th>
                            </thead>
                            <tbody>
                              @if(!empty($activities->activity))
                                @php
                                $jan1=json_decode($activities->outstandingloanee_male);
                                $jan2=json_decode($activities->outstandingloanee_female);
                                @endphp
                                @forEach(json_decode($activities->outstandingloanee_clan) as $key => $data)
                                @isset($data)
                                <tr>
                                   <th>{{$key+1}}</th>
                                   <td>{{$data}}</td>
                                    <td>{{$jan1[$key]}}</td>
                                    <td>{{$jan2[$key]}}</td>
                                </tr>
                                @endisset
                                @endforeach
                              @endif
                            </tbody>
                        </table>
                      </td>
                    </tr>

                    <tr class="align-middle"><th style="width: 20%">DEFAULTERS:</th>
                          <td style="width: 30%">
                          <table class="table table-sm ">

                            <tbody>
                                <tr>
                                    <th>No's.</th>
                                    <td>{{($activities->defaulter_no ?? '')}}</td>

                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>{{($activities->defaulter_amount ?? '')}}</td>

                                </tr>
                              
                              
                            </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">PROVISION FOR NPA (KCC)</th>
                      <td style="width: 30%">
                          <table class="table table-sm">

                            <tbody>
                                <tr>
                                    <th>Principal</th>
                                    <td>{{($activities->npa_principal ?? '')}}</td>

                                </tr>
                                <tr>
                                    <th>Interest</th>
                                    <td>{{($activities->npa_interest ?? '')}}</td>

                                </tr>
                            </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-footer">
                  
                         <a href="/pacs/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Edit</button></a> 

                  </div>
                @else
                <div style="color:red">
                    <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                    <a href="/pacs/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                </div>
                
                @endisset
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>

</x-layout>