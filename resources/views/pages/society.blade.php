<x-layout>
    <x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Capitals" />
        <main class="app-main">
            <!--begin::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
              <!--begin::Container-->
              <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">BASIC INFORMATION {{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>


                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">MANAGEMENT -I{{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title"> MANAGEMENT - II {{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>
                  <div class="card-header"></div>

                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">CAPITALS{{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">CAPITALS{{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
                      <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-4">
                    <!-- Default box -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">CAPITALS{{ $Datas->Name_of_the_Society }}</h3>
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
                               @foreach($Datas->membersociety as $data)
                                    {{$data->Date_of_LastAGM}}
                               @endforeach

                               @foreach($Datas->committee as $data)
                                    {{$data->President_Name}}
                               @endforeach
                               @foreach($Datas->capital as $data)
                                    {{$data->Admission_fee}}
                               @endforeach

                            </div>
                        </div>
                        </div>
                                            
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
          <!--end::App Main-->




    </x-layout>