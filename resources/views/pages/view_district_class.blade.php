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
                    <h3 class="card-title">District Wise Details, Member of the Society</h3>
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
                                            <th>A Class</th>
                                            <th>B Class</th>
                                            <th>C Class</th>
                                            <th>D Class</th>
                                            <th>Not Yet Audited</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($districts as $key=> $district)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <th>{{$district}}</th>
                                            <td><a href="/dist_view_class/{{$key}}/A" class="btn btn-outline-success" role="button" aria-pressed="true">{{$A[$key]}}</a></td>
                                            <td><a href="/dist_view_class/{{$key}}/B" class="btn btn-outline-success" role="button" aria-pressed="true">{{$B[$key]}}</a></td>
                                            <td><a href="/dist_view_class/{{$key}}/C" class="btn btn-outline-success" role="button" aria-pressed="true">{{$C[$key]}}</a></td>
                                            <td><a href="/dist_view_class/{{$key}}/D" class="btn btn-outline-success" role="button" aria-pressed="true">{{$D[$key]}}</a></td>
                                            <td><a href="/dist_view_class/{{$key}}/E" class="btn btn-outline-success" role="button" aria-pressed="true">{{$E[$key]}}</a></td>
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