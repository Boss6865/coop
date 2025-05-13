<x-layout>
    <style>
        div.dt-container {
            width: 1550px;
            margin: 0 auto;
            
        }
        th, td { white-space: nowrap; }
      div.dataTables_wrapper {
          width: 800px;
          margin: 0 auto;
      }
  
  
      </style>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css" />
      <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.4/css/fixedColumns.dataTables.css" />
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.4/js/dataTables.fixedColumns.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/5.0.4/js/fixedColumns.dataTables.js"></script>
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
                    <h3 class="card-title font-weight-bold"> ALL SECTOR REPORTS</h3>
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
                              
                                <table class="stripe table-sm" style="" id="myTable">
                                    <thead>
                                        <tr>
                                            
                                            {{-- <th> Sl. No.</th> --}}
                                            {{-- <th>District Name</th> --}}
                                            <th>Sector Name</th>
                                            <th>Total No. of Society</th>
                                            <th>Total Function</th>
                                            <th> Total Non Function </th>
                                            {{-- <th> Total Under Liquidation</th> --}}
                                            <th>Total Membership</th>
                                            <th>Total Share</th>
                                            <th>Govt. Share</th>
                                            <th>Working Capitals</th>
                                            <th>Business Turnover</th>
                                            <th>Society In Profit</th>
                                            <th>Society In loss</th>
                                            <th>Total A Class</th>
                                            <th>Total B Class</th>
                                            <th>Total C Class</th>
                                            <th>Total D Class</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach (json_decode(file_get_contents('assets/Sector_Name.json')) as $key=> $data)
                                        <tr>
                                            {{-- <th>{{$key+1}}</th> --}}
                                            {{-- <th>{{$data->Dist_Name}}</th> --}}
                                            <th>{{$data->Sector_Name}}</th>
                                            <td>{{$total_sector[$key]}}</td>
                                            <td>{{$Fun[$key]}}</td>
                                            <td>{{$Nfun[$key]}}</td>
                                            {{-- <td>{{$nlqd[$key]}}</td> --}}
                                            <td>{{$Member[$key]}}</td>
                                            <td>{{$Share[$key]}}</td>
                                            <td>{{$Govt_Share[$key]}}</td>
                                            <td>{{$Wcapital[$key]}}</td>
                                            <td>{{$Bturnover[$key]}}</td>
                                            <td>{{$Profit[$key]}}</td>
                                            <td>{{$Loss[$key]}}</td>
                                            <td>{{$A[$key]}}</td>
                                            <td>{{$B[$key]}}</td>
                                            <td>{{$C[$key]}}</td>
                                            <td>{{$D[$key]}}</td>
                                            
                                        </tr>
                                      
                                      @endforeach
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="flex flex-col">
                      <div class="card-header">
                    <h3 class="card-title font-weight-bold">GENERAL REPORTS</h3>
                      </div>
                    <div class=" overflow-x-auto pb-4">
                        <div class="min-w-full inline-block align-middle">
                            <div class="border rounded-lg border-gray-300 dt-container">
                              
                                        @php
                                           $total_society=0;
                                           $total_fun=0; $total_non_fun=0; $total_member=0; $total_share=0; $total_govt_share=0; $total_wcapital=0;
                                           $total_bturnover=0; $total_profit=0; $total_loss=0; $total_A=0; $total_B=0;$total_C=0; $total_D=0;
                                       @endphp
                                   
                                       @foreach (json_decode(file_get_contents('assets/Sector_Name.json')) as $key=> $data)
                                        @php
                                           $total_society=$total_sector[$key]+$total_society;
                                            $total_fun= $total_fun+$Fun[$key];
                                            $total_non_fun=$total_non_fun+$Nfun[$key];
                                            $total_member=$total_member+$Member[$key];
                                            $total_share=$total_share+$Share[$key];
                                            $total_govt_share=$total_govt_share+$Govt_Share[$key];
                                            $total_wcapital=$total_wcapital+$Wcapital[$key];
                                            $total_bturnover= $total_bturnover+$Bturnover[$key];
                                            $total_profit=$total_profit+$Profit[$key];
                                            $total_loss=$Loss[$key]+$total_loss;
                                            $total_A= $total_A+ $A[$key] ;
                                            $total_B= $total_B + $B[$key];
                                            $total_C= $total_C + $C[$key];
                                             $total_D= $total_D + $D[$key];
                                       @endphp
                                       @endforeach

                                <div class="overflow-auto">
                                <table class="table">
                                  <thead>
                                       <tr>
                                            <th>Total No. of Society</th>
                                            <th>Total Function</th>
                                            <th> Total Non Function </th>
                                            {{-- <th> Total Under Liquidation</th> --}}
                                            <th>Total Membership</th>
                                            <th>Total Share</th>
                                            <th>Govt. Share</th>
                                            <th>Working Capitals</th>
                                            <th>Business Turnover</th>
                                            <th>Society In Profit</th>
                                            <th>Society In loss</th>
                                            <th>Total A Class</th>
                                            <th>Total B Class</th>
                                            <th>Total C Class</th>
                                            <th>Total D Class</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                            <td>{{$total_society}}</td>
                                            <td>{{$total_fun}}</td>
                                            <td>{{$total_non_fun}}</td>
                                            {{-- <td>{{$nlqd[$key]}}</td> --}}
                                            <td>{{$total_member}}</td>
                                            <td>{{$total_share}}</td>
                                            <td>{{$total_govt_share}}</td>
                                            <td>{{$total_wcapital}}</td>
                                            <td>{{$total_bturnover}}</td>
                                            <td>{{$total_profit}}</td>
                                            <td>{{$total_loss}}</td>
                                            <td>{{$total_A}}</td>
                                            <td>{{$total_B}}</td>
                                            <td>{{$total_C}}</td>
                                            <td>{{$total_D}}</td>
                                            
                                        </tr>
                                      
                                   
                                  </tbody>
                                </table>
                              </div>
                              
                                
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
<script>
    $(document).ready( function () {
      $('#myTable').DataTable({
        fixedColumns: {
        start: 1
    },
    scrollX: true,
    
      });
  } );

      $(document).ready( function () {
      $('#myTable2').DataTable({
        fixedColumns: {
        start: 1
    },
    scrollX: true,
    
      });
  } );
  </script>