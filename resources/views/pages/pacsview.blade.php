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
                                  <th>Amount Sanctioned</th>
                              <td>10000000</td>
                              
                              </tr>
                              <tr>
                                  <th>Nos. of member in which loans was sanctioned</th>
                              <td>10000000</td>
                              
                              </tr>
                              <tr>
                              <th>Purpose of Which Loans was taken for</th>
                              <td>1000000</td>
                              
                              </tr>
                            
                          </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">NO. OF KCC LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR:</th>
                      <td style="width: 30%">
                         <table class="table table-sm">
                           <thead>
                             <th>Sl. No.</th>
                             <th>Male</th>
                             <th>Female</th>
                           </thead>
                           <tbody>
                               <tr>
                                   <th>1</th>
                               <td>1000000</td>
                               <td>1000000</td>

                               </tr>

                             
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
                                <tr>
                                    <th>1</th>
                                    <td>2025</td>
                                    <td>10000000</td>
                                    <td>100000</td>
                                
                                </tr>
                              
                              
                            </tbody>
                        </table>
                      </td>
                      <th style="width: 20%">TOTAL AMOUNT RECOVERY:</th>
                      <td style="width: 30%">
                          <table class="table table-sm">
                            <tbody>
                                <tr>
                                  <th>Total Amount Recovery</th>
                                  <td>100000</td>
                                  <td>100000</td>
                                </tr>
                                 <tr>
                                  <th>Principal Amount</th>
                                  <td>100000</td>
                                  <td>100000</td>
                                </tr>
                                 <tr>
                                  <th>Interest Amount</th>
                                  <td>100000</td>
                                  <td>100000</td>
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
                                <tr>
                                    <th>1</th>
                                    <td>2025</td>
                                    <td>10000000</td>
                                    <td>100000</td>
                                
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
                                <tr>
                                  <th>1</th>
                                  <td>100000</td>
                                  <td>100000</td>
                                  <td>100000</td>
                                </tr>
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
                                    <td>25</td>

                                </tr>
                                <tr>
                                    <th>Amount</th>
                                    <td>25</td>

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
                                    <td>25</td>

                                </tr>
                                <tr>
                                    <th>Interest</th>
                                    <td>25</td>

                                </tr>
                            </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
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