<x-layout> 
  @php
      // var_dump(implode(",",$over_all_total));
       
  @endphp
  <style>
    .apexcharts-tooltip {
    background: #f3f3f3;
    color: #000000;
  }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
         <!--begin::App Main-->
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">


          
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
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
                   
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3>{{$total_society}}</h3>
                    <p>Total Register Society</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                    ></path>
                  </svg>
                  <a
                    href="/dist_view_society"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3> {{$total_member}}</h3>
                    <p>Total Memberships</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
                    ></path>
                  </svg>
                  <a
                    href="/dist_view_member"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 2-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>{{$total_wcapital}}</h3>
                    <p>Working Capitals</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"
                    ></path>
                  </svg>
                  <a
                    href="#"
                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--end::Col-->
              

              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 4-->
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>{{$total_A}}</h3>
                    <p>A Class Societies</p>
                  </div>
                  <svg
                    class="small-box-icon"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                  >
                    <path
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                      d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                    ></path>
                    <path
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                      d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                    ></path>
                  </svg>
                  <a
                    href="/dist_view_class"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 4-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->

              
            <!--begin::Row-->
            <div class="row">
              
              <!-- Start col -->
              <div class="col-lg-7 connectedSortable">
                <div class="card-header border-primary">
                    <h3 class="card-title">Function and Non-Function Report</h3>
                    
                  </div>
                <div class="card mb-4 border-primary">
                  <div id='myDiv'></div>
                  {{-- <div class="card-body"><div id="revenue-chart"></div></div> --}}
                </div>
                <!-- /.card -->
                
                <!-- DIRECT CHAT -->
                <div class="card mb-4 border-primary">
                    <div id='sector_view'></div>
                </div>
                <!-- /.direct-chat -->
              </div>
              <!-- /.Start col -->
               



              <!-- Start col -->
              <div class="col-lg-5 connectedSortable">
                <div class="card-header">
                    <h3 class="card-title">Total Member of a District</h3>
                    
                  </div>
                <div class="card text-white bg-gradient border-primary mb-4">
                  <concanvas id="chartContainer" style="height: 370px; width: 100%;"></canvas>
                  </div>
                <div class="card text-white bg-gradient border-primary mb-4">
                  <div class="card-header border-0">
                    <h3 class="card-title">District With Total Societies</h3>
                    
                  </div>
                  <div class="card-body"><div id="district_with_total" style="height: 220px"></div></div>
                 
                </div>
              </div>
              <!-- /.Start col -->
              @php
                 $districts=json_decode(file_get_contents('assets/District.json') );
                 $Sectors=json_decode(file_get_contents('assets/Sector_Name.json') );
               @endphp
               <div class="col-lg-7">
                
                <!-- /.card -->
                <div class="card mb-4 border-primary vh-50">
                  <div class="card-header border-0">
                    <h3 class="card-title">SECTORS</h3>
                    <div class="card-tools">
                      {{-- <a href="#" class="btn btn-tool btn-sm">
                        <i class="bi bi-download"></i>
                      </a> --}}
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="bi bi-list"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-striped align-middle">
                      <thead>
                        <tr>
                          <th class="text-center">Sectors</th>
                          <th class="text-center">No. of Societies</th>
                          <th class="text-center">Member</th>
                          <th class="text-center">View</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach($Sectors as $key=> $Sector)
                        <tr>
                          <td>
                            <img
                              src="../../dist/assets/img/coop_logo.png"
                              alt="Product 1"
                              class="rounded-circle img-size-32 me-2"
                            />
                           <a href="/single_sector_view/{{$key}}"  class="btn btn-light btn-sm">{{$Sector->Sector_Name}}</a>
                            {{-- <span class="badge text-bg-danger">NEW</span> --}}
                          </td>
                          <td class="text-center"><a href="/single_sector_view/{{$key}}"  class="btn btn-light btn-sm">{{$total_sector[$key]}}</a></td>
                          <td class="text-center">
                            {{-- <small class="text-success me-1">
                              <i class="bi bi-arrow-up"></i>
                              12%
                            </small> --}}
                             <a href="/single_sector_member_view/{{$key}}"  class="btn btn-light btn-sm">{{$Member[$key]}}</a>
                          </td>
                          <td>
                            <a href="/single_sector_view/{{$key}}" class="text-secondary btn-sm">
                              <i class="bi bi-search"></i>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                         <tr>
                        <th class="text-center">Total</th>
                        <th class="text-center"><a href="/Sector_view"  class="btn btn-light btn-lg">{{$total_society}}</a></th>
                        <th colspan="2"><a href="/all_sector"  class="btn btn-light btn-lg">{{$total_member}}</a></th>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card -->
              </div>
               <div class="col-lg-5">
                
                <!-- /.card -->
                <div class="card mb-4 border-primary vh-50">
                  <div class="card-header border-0">
                    <h3 class="card-title">DISTRICTS</h3>
                    <div class="card-tools">
                      {{-- <a href="#" class="btn btn-tool btn-sm">
                        <i class="bi bi-download"></i>
                      </a> --}}
                      <a href="#" class="btn btn-tool btn-sm">
                        <i class="bi bi-list"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-striped align-middle">
                      <thead>
                        <tr>
                          <th class="text-center">District</th>
                          <th class="text-center">No. of Societies</th>
                          <th class="text-center">Member</th>
                          <th class="text-center">View</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($districts as $key=> $district)
                        <tr>
                          <td>
                            <img
                              src="../../dist/assets/img/coop_logo.png"
                              alt="Product 1"
                              class="rounded-circle img-size-32 me-2"
                            /><a href="/view_both_n_nf_society/{{$key}}"  class="btn btn-light btn-sm">
                            {{$district->Dist_Name}} </a>
                            {{-- <span class="badge text-bg-danger">NEW</span> --}}
                          </td>
                          <td  class="text-center"><a href="/view_both_n_nf_society/{{$key}}"  class="btn btn-light btn-lg">{{$d_fun[$key] + $d_Non_fun[$key]}}</a></td>
                          <td>
                            {{-- <small class="text-success me-1">
                              <i class="bi bi-arrow-up"></i>
                              
                            </small> --}}
                            <a href="/dist_view_dist_member/{{$key}}"  class="btn btn-light btn-sm">
                            {{$D_total_member[$key]}}</a>
                          </td>
                          <td>
                            <a href="/view_both_n_nf_society/{{$key}}"  class="btn btn-light">
                              <i class="bi bi-search"></i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      <tr>
                        <th class="text-center">Total</th>
                        <th class="text-center"><a href="/dist_view_society"  class="btn btn-light btn-sm">{{$total_society}}</a></th>
                        <th colspan="2"><a href="/dist_view_member"  class="btn btn-light btn-sm">{{$total_member}}</a></th>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      
      <!--end::App Main-->

       <!-- apexcharts -->

    
    <script>
      const district =['E. W. Khasi Hills', 'E. Garo Hills', 'E. Jaintia Hills', 'E. Khasi Hills', 'N. Garo Hills', 'Ri Bhoi', 'S. Garo Hills', 'S. W. Garo Hills', 'S. W. Khasi Hills', 'W. Garo Hills', 'W. Jaintia Hills', 'W. Khasi Hills'];
      const sector_list=['PACS', 'IVCS', 'UC BANK', 'CONSUMER', 'MARKETING', 'HOUSING',
            'MULTIPURPOSE', 'CREDIT AND THRIFT', 'INDUSTRIAL', 'DAIRY', 'FISHERY', 'HANDLOOM WEAVERS', 'HANDICRAFT',
            'TRANSPORT', 'FARMING', 'LIVESTOCK', 'HORTICULTURE', 'CLF', 'FPO', 'PROCESSING',
            'LABOUR CONTRACT', 'SERICULTURE', 'TOURISM', 'LIVING ROOT BRIDGES', 'EDU. AND TRAINING', 'OTHER TYPES',
          ];
const function_value=[{{implode(",",$d_fun)}}];

const non_function_value=[{{implode(",",$d_Non_fun)}}];

      var options = {
          series: [{
            name: "Function",
            color: '#198754',
          data: function_value
        }, {
          name:"Non-Function",
          data: non_function_value
        }],
          chart: {
          type: 'bar',
          height: 440,
          events: {
     dataPointSelection: function(event, chartContext, opts) {
        //  console.log(opts.dataPointIndex);
        //  console.log(opts.seriesIndex);
        
        window.location.href = "/view_society_district_status/"+opts.dataPointIndex+"/"+opts.seriesIndex;
      }
    }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            dataLabels: {
              position: 'top',
            },
          }
        },
        dataLabels: {
          enabled: true,
          offsetX: -6,
          style: {
            fontSize: '12px',
            colors: ['#fff']
          }
        },
        stroke: {
          show: true,
          width: 1,
          colors: ['#fff']
        },
        tooltip: {
          shared: true,
          intersect: false
        },
        xaxis: {
          categories: district,
        },
        };

        var chart = new ApexCharts(document.querySelector("#myDiv"), options);
        chart.render();

 //-------------
      // - PIE CHART -
      //-------------

 const total_membe=[{{implode(",",$D_total_member)}}];
 var options = {
          series:total_membe,
          chart: {
          width: 610,
          type: 'pie',
        },
        labels: district,
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 300
            },
            legend: {
              position: 'bottom'
            }
          }
        }],
         colors: ['#0d6efd', '#20c997', '#73f080', '#d63384', '#2f3233', '#adb5bd','#f511a9','#f01653','#f70a0a','#368f48','#10eb26','#3d0c6e'],
        };

        var chart = new ApexCharts(document.querySelector("#chartContainer"), options);
        chart.render();


document.querySelector("#chartContainer").addEventListener("click", function() {
      //  alert("click");
      var activePoints = this.chart.getElementAtEvent(evt)[0];
      if (activePoints[0]) {
        var chartData = activePoints[0]['_chart'].config.data;
        var idx = activePoints[0]['_index'];

        var label = chartData.labels[idx];
        var value = chartData.datasets[0].data[idx];

        var url = "http://example.com/?label=" + label + "&value=" + value;
        console.log(url);
        alert(url);
      }
      });

      //sector view
  const total_sector=[{{implode(",",$total_sector)}}];
       var options = {
          series: [{
          name: 'Total',
          data: total_sector
        }],
        chart: {
          height: 450,
          type: 'bar',
          events: {
     dataPointSelection: function(event, chartContext, opts) {
        console.log(sector_list[opts.dataPointIndex]);
        console.log(sector_list.indexOf(sector_list[opts.dataPointIndex]));
        window.location.href = "/view_society_sector_district/"+sector_list.indexOf(sector_list[opts.dataPointIndex]);
      }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 0
        },
        grid: {
          row: {
            colors: ['#fff', '#f2f2f2']
          }
        },
        xaxis: {
          labels: {
            rotate: -45
          },
          categories: sector_list,
          tickPlacement: 'on'
        },
        yaxis: {
          title: {
            text: 'Sectors',
          },
        },
        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            type: "horizontal",
            shadeIntensity: 0.25,
            gradientToColors: undefined,
            inverseColors: true,
            opacityFrom: 0.85,
            opacityTo: 0.85,
            stops: [50, 0, 100]
          },
        }
        };

        var chart = new ApexCharts(document.querySelector("#sector_view"), options);
        chart.render();


        //funnel
       const total_both_scoiety=[{{implode(",",$over_all_total)}}];
       const total_both_scoiety1=[{{implode(",",$over_all_total)}}];
      const total_both_scoiety2=[{{implode(",",$over_all_total)}}];
       //array sort
       let sorted_district = [];
        var numArray = total_both_scoiety;
        numArray.sort(function(a, b) {
        return a - b;
        });

const sortedArray = total_both_scoiety1;
// const valueToFind = 105;
// const index = sortedArray.indexOf(valueToFind); 
var results = [];
for(i=0;i<total_both_scoiety.length;i++){
    const valueToFind =total_both_scoiety[i] ;
    let index = sortedArray.indexOf(valueToFind); 
    const valuesToCheck = [];
    valuesToCheck.push(district[index]);
    const allValuesPresent =valuesToCheck.every(value => sorted_district.includes(value));
    if(allValuesPresent){
      if(results.length){
        index=results[0]
      }else{
        var ind
      while( ( ind = total_both_scoiety2.indexOf(valueToFind ) ) != -1 )
      {
          results.push( ind + results.length )
          total_both_scoiety2.splice( ind, 1 )
      }
      results.splice(0,1);
      index=results[0];
      }
      results.splice(0,1);
    }
    // console.log(allValuesPresent);
    // console.log(valueToFind);
    // console.log(index);
    sorted_district.push(district[index]);
}


//end or array sort

         var options = {
          series: [
          {
            name: "",
            data: total_both_scoiety,
          },
        ],
          chart: {
          type: 'bar',
          height: 365,
          dropShadow: {
            enabled: true,
          },
           events: {
     dataPointSelection: function(event, chartContext, opts) {
        // console.log(sorted_district[opts.dataPointIndex]);
        // console.log(district.indexOf(sorted_district[opts.dataPointIndex]));
        window.location.href = "/view_society_district/"+district.indexOf(sorted_district[opts.dataPointIndex]);
      }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 0,
            horizontal: true,
            distributed: true,
            barHeight: '80%',
            isFunnel: true,
          },
        },
        colors: [
          '#F44F5E',
          '#E55A89',
          '#D863B1',
          '#CA6CD8',
          '#B57BED',
          '#8D95EB',
          '#62ACEA',
          '#4BC3E6',
          
        ],
        dataLabels: {
          enabled: true,
          formatter: function (val, opt) {
            return opt.w.globals.labels[opt.dataPointIndex] 
          },
          dropShadow: {
            enabled: true,
          },
        },
        title: {
          text: 'Total Societies of District',
          align: 'middle',
          style: {
                color: '#000000',
            },
        },
        xaxis: {
          categories: sorted_district,
        
        },
        legend: {
          show: false,
        }
        };

        var chart = new ApexCharts(document.querySelector("#district_with_total"), options);
        chart.render();
    </script>
</x-layout>