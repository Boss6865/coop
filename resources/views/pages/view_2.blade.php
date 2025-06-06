<x-layout>
    <x-navigation  Nav="View District Wise"/>
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">District Wise Details of Society</h3>
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

                 

                  <div class="flex flex-col">
                    <div class=" overflow-x-auto pb-4">
                        <div class="min-w-full inline-block align-middle">
                            <div class="border rounded-lg border-gray-300 dt-container">
                              
                                <table class="table table-sm" style="" id="myTable">
                                    <thead>
                                        <tr>
                                            
                                            <th> Sl. No.</th>
                                            <th>District Name</th>
                                            <th>Total No. of Society</th>
                                            <th>Total Function</th>
                                            <th> Total Non Function </th>
                                            <th> Total Under Liquidation</th>
                                            <th> Total Membership</th>
                                            <th> Total Share</th>
                                            <th> Govt. Share</th>
                                            <th> Working Capitals</th>
                                            <th> Business Turnover</th>
                                            <th> Society In Profit</th>
                                            <th> Society In lost</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($Data as $key=> $data)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$Data1[$key]}}</td>
                                            <th>{{$data}}</th>
                                            <td>{{$Fun[$key]}}</td>
                                            <td>{{$Nfun[$key]}}</td>
                                            <td>{{$nlqd[$key]}}</td>
                                            <td>{{$Member[$key]}}</td>
                                            <td>{{$Share[$key]}}</td>
                                            <td>{{$Govt_Share[$key]}}</td>
                                            <td>{{$Wcapital[$key]}}</td>
                                            <td>{{$Bturnover[$key]}}</td>
                                            <td>{{$Profit[$key]}}</td>
                                            <td>{{$Loss[$key]}}</td>
                                            
                                        </tr>
                                      
                                      @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                  
                  <div class="card-footer">Footer</div>
                  <!-- /.card-footer-->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
</x-layout>