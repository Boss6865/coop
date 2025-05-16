<x-layout>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Sector and Activies" />
 <!--begin::App Main-->
 <main class="app-main">
    
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-md-12">
            
            <!-- /.card -->
            <div class="card mb-4">
              <div class="card-header">
                <h2 class="card-title">SECTOR {{strtoupper($Datas->Sector_Type)}}</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                @if($Datas->Sector_Type=="PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)")
                @if($sector!=null)
                <x-pacs :sector="$sector" Datas="{{$Datas->id}}"/>
                @else
                <h1>No information</h1>
                  <a href="/pacs/{{$Datas->id}}"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                @endif
                @elseif($Datas->Sector_Type=="IVCS")
                @if($sector!=null)
                 <x-ivcs :sector="$sector" Datas="{{$Datas->id}}"/>
                @else
                  <h1>No information</h1>
                  <a href="/ivcs/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                @endif
              
                @else
                @if($Datas->Sector_Type=="TOURISM")

                @if($sector!=null)
                  <x-tourism :sector="$sector" Datas="{{$Datas->id}}"/>
                   @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif


                @elseif($Datas->Sector_Type=="CONSUMER")


                @if($sector!=null)
                  <x-consumer :sector="$sector" Datas="{{$Datas->id}}"/>
                   @else
                  <h1>No information</h1>
                  <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="DAIRY")

                @if($sector!=null)
                 <x-dairy :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  
                @elseif($Datas->Sector_Type=="PROCESSING")



                @if($sector!=null)
                  <x-processing :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                

                @elseif($Datas->Sector_Type=="TRANSPORT")


                @if($sector!=null)
                  <x-transport :sector="$sector" Datas="{{$Datas->id}}"/>
                 
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="FARMING" || strtoupper($Datas->Sector_Type)=="HORTICULTURE")
                
                    @if($sector!=null)
                    <x-farming :sector="$sector" Datas="{{$Datas->id}}"/>
                  
                  @else
                  <h1>No information</h1>
                  <a href="/farming/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                
                @elseif(strtoupper($Datas->Sector_Type)=="JINGKIENG JRI")


                @if($sector!=null)
                  <x-jingkiengjri :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/lrb/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="MARKETTING")


                 @if($sector!=null)
                  <x-marketting :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/market/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="PIGGERY POULTRY AND OTHER LIVESTOCK")
                <a href="/livestock/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information</button></a>
                @elseif(strtoupper($Datas->Sector_Type)=="HOUSING")
                
                @if($sector!=null)
                     <x-housing :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/housing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                @elseif(strtoupper($Datas->Sector_Type)=="FISHERY")

                @if($sector!=null)
                  <x-fishery :sector="$sector" Datas="{{$Datas->id}}"/>
                   @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="CREDIT AND THRIFT")

                  @if($sector!=null)
                       <x-tandc :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tandc/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                @elseif(strtoupper($Datas->Sector_Type)=="LABOUR CONTRACT")

                 @if($sector!=null)
                     <x-labour :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/labour/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                  @elseif(strtoupper($Datas->Sector_Type=="INDUSTRIAL"))
                  
                   @if($sector!=null)
                      <x-industrial :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/industry/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                
                @elseif(strtoupper($Datas->Sector_Type)=="HANDICRAFT")


                @if($sector!=null)
                     <x-handicraft :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                
                @elseif(strtoupper($Datas->Sector_Type)=="HANDLOOM WEAVERS")


                  @if($sector!=null)
                  <x-handloom :sector="$sector" Datas="{{$Datas->id}}"/>
                   @else
                  <h1>No information</h1>
                  <a href="/handloom/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                @endif
                
                @endif
              </div>
              <!-- /.card-body -->
              <div class="card-header">
                
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-I: {{strtoupper($Activity->Primary_Activity)}}</h3></div></div>
                @if($Activity->Primary_Activity=="fishery")
                @if($Activity1!=null)
                  <x-fishery :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  {{-- <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>Nos. of Fisherman</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Male</th>
                          <td>{{$Activity1->male_fisher}}</td>
                        </tr>
                        <tr>
                          <th>Female</th>
                          <td>{{$Activity1->female_fisher}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>Asset</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Total Nos. Of Fish Pond</th>
                          <td>{{$Activity1->total_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Fish Pond (Hectares)</th>
                          <td>{{$Activity1->area_of_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Fish Pond</th>
                          <td>{{$Activity1->value_of_fish_pond}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. Of Nursery Pond</th>
                          <td>{{$Activity1->nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Nursery Pond (Hectares)</th>
                          <td>{{$Activity1->area_of_nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Nursery Pond</th>
                          <td>{{$Activity1->value_of_nursery_pond}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Fish Reared</th>
                          <td>{{$Activity1->type_of_fish_reared}}</td>
                        </tr>
                        <tr>
                          <th>Quantity in Kg</th>
                          <td>{{$Activity1->fish_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Fresh Fish and Others</th>
                          <td>{{$Activity1->sales_of_fresh_fish}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                     <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Dry Fish Value</th>
                          <td>{{$Activity1->dry_fish}}</td>
                        </tr>
                        <tr>
                          <th>Smoke Fish Value</th>
                          <td>{{$Activity1->smoke_fish}}</td>
                        </tr>
                        <tr>
                          <th>Sale of Fishing Material and Others</th>
                          <td>{{$Activity1->fishing_material_other}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div> --}}
                   @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="transport")

                  @if($Activity1!=null)
                   <x-transport :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  {{-- <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TRANSPORT FACILITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Goods Vehicles</th>
                          <td>{{$Activity1->nos_of_Goods_vehicle}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Passenger Vehicles</th>
                          <td>{{$Activity1->no_of_passenger_vehichle}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>TYPES OF VEHICLES</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Vehicle Type</th>
                          <td>{{$Activity1->vehicle_type}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Vehicle</th>
                          <td>{{$Activity1->vehicle_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Vehicle</th>
                          <td>{{$Activity1->vehicle_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Other Assets Name</th>
                          <td>{{$Activity1->other_asset_name}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Other Assets</th>
                          <td>{{$Activity1->other_asset_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the other Assets</th>
                          <td>{{$Activity1->other_asset_value}}</td>
                        </tr>
                        <tr>
                          <th>income from services providers</th>
                          <td>{{$Activity1->other_asset_income}}</td>
                        </tr>
                        <tr>
                          <th>Others Total</th>
                          <td>{{$Activity1->other_total}}</td>
                        </tr>
                        <tr>
                          <th>Other Total Wages</th>
                          <td>{{$Activity1->others_wages_total}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DRIVERS</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Number of Driver</th>
                          <td>{{$Activity1->total_driver}}</td>
                        </tr>
                        <tr>
                          <th>Total Wages Paid to Driver</th>
                          <td>{{$Activity1->total_driver_wages}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper</th>
                          <td>{{$Activity1->total_helper}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper Wages</th>
                          <td>{{$Activity1->total_helper_wages}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>


                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div> --}}
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                  @elseif($Activity->Primary_Activity=="dairy")
                  @if($Activity1!=null)
                  <x-dairy :sector="$Activity1" Datas="{{$Datas->id}}"/>
                 
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="tourism")
                  @if($Activity1!=null)
                  <x-tourism :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="consumer")
                  @if($Activity1!=null)
                  <x-consumer :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Primary_Activity=="processing")
                  @if($Activity1!=null)
                  <x-processing :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Primary_Activity=="farming")
                  @if($Activity1!=null)
                  <x-farming :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/farming/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Primary_Activity=="jingkiengjri")
                  @if($Activity1!=null)
                  <x-jingkiengjri :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/lrb/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="market")
                  @if($Activity1!=null)
                  <x-marketting :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/market/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="tandc")
                  @if($Activity1!=null)
                  <x-tandc :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tandc/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="labour")
                  @if($Activity1!=null)
                  <x-labour :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/labour/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="industry")
                  @if($Activity1!=null)
                  <x-industrial :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/industry/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="handicraft")
                  @if($Activity1!=null)
                  <x-handicraft :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="handloom")
                  @if($Activity1!=null)
                  <x-handloom :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handloom/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="transport")
                  @if($Activity1!=null)
                  <x-transport :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="fishery")
                  @if($Activity1!=null)
                  <x-fishery :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                @endif
                 
              </div>
              
              <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-II: {{strtoupper($Activity->Secondary_Activity)}}</h3></div></div>
                @if($Activity->Secondary_Activity=="dairy")

                 @if($Activity2!=null)
                  <x-dairy :sector="$Activity2" Datas="{{$Datas->id}}"/>
                 
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="tourism")
                  @if($Activity2!=null)
                  <x-tourism :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="consumer")
                  @if($Activity2!=null)
                  <x-consumer :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Secondary_Activity=="processing")
                  @if($Activity2!=null)
                  <x-processing :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Secondary_Activity=="farming")
                  @if($Activity2!=null)
                  <x-farming :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/farming/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Secondary_Activity=="jingkiengjri")
                  @if($Activity2!=null)
                  <x-jingkiengjri :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/lrb/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="market")
                  @if($Activity2!=null)
                  <x-marketting :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/market/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="tandc")
                  @if($Activity2!=null)
                  <x-tandc :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tandc/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="labour")
                  @if($Activity2!=null)
                  <x-labour :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/labour/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="industry")
                  @if($Activity2!=null)
                  <x-industrial :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/industry/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="handicraft")
                  @if($Activity2!=null)
                  <x-handicraft :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="handloom")
                  @if($Activity2!=null)
                  <x-handloom :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handloom/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="fishery")
                  @if($Activity2!=null)
                  <x-fishery :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Secondary_Activity=="transport")
                  @if($Activity2!=null)
                  <x-transport :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif




                {{-- @if($Activity2!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>FLOW OF TOURISTS (PER ANNUM)</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Domestic</th>
                          <td>{{$Activity2->deomestic_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Foreign</th>
                          <td>{{$Activity2->foreign_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Entry Fee (per Anum)</th>
                          <td>{{$Activity2->entry_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Parking Fee (per Anum)</th>
                          <td>{{$Activity2->parking_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Other Fee (per Anum)</th>
                          <td>{{$Activity2->other_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. of Guest House/Logde</th>
                          <td>{{$Activity2->total_guest_house_or_lodge}}</td>
                        </tr>
                        <tr>
                          <th>Income from Guest House/Logde</th>
                          <td>{{$Activity2->income_from_guest_house_or_lodge}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER INCOME PER ANNUM</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Source</th>
                          <td>{{$Activity2->other_source}}</td>
                        </tr>
                        <tr>
                          <th>Value</th>
                          <td>{{$Activity2->other_value}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Male Guide</th>
                          <td>{{$Activity2->male_guide}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Female Guide</th>
                          <td>{{$Activity2->female_guide}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Product</th>
                          <td>{{$Activity2->product_promotion}}</td>
                        </tr>
                        <tr>
                          <th>Sales Per Anum</th>
                          <td>{{$Activity2->sale_of_product_annually}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</h5>
                      <table class="table">
                        <thead>
                          <th>Nos.</th>
                          <th>Name</th>
                          <th>Total Number</th>
                        </thead>
                      <tbody>
                        @php
                          $jan1=json_decode($Activity2->Equipments_Nos);
                        @endphp
                        @forEach(json_decode($Activity2->Equipments_Name) as $key => $data)
                        <tr>
                          <td>{{$key+1}}.</td>
                          <td>{{$data}}</td>
                          <td>{{$jan1[$key]}}</td>
                        </tr>
                        
                       @endforeach
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                  @elseif($Activity->Secondary_Activity=="handicraft")
                  @if($Activity2!=null)
                      <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>CANE & BAMBOO  WORK</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Specify Items Produced</th>
                          <td>{{$Activity2->item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$Activity2->nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Wages Paid</th>
                          <td>{{$Activity2->wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Sales Turn Over</th>
                          <td>{{$Activity2->sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Speify Items Produced</th>
                          <td>{{$Activity2->other_item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$Activity2->other_nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Others Wages Paid</th>
                          <td>{{$Activity2->other_wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Others Sales Turn Over</th>
                          <td>{{$Activity2->other_sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    </div>
                  <div class="modal-footer">
                    <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif --}}

                @endif
                
              </div>
              <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-III: {{strtoupper($Activity->Tertiary_Activity)}}</h3></div></div>
                @if($Activity->Tertiary_Activity=="processing")
                  @if($Activity3!=null)
                  <x-dairy :sector="$Activity3" Datas="{{$Datas->id}}"/>
                 
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="tourism")
                  @if($Activity3!=null)
                  <x-tourism :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="consumer")
                  @if($Activity3!=null)
                  <x-consumer :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Tertiary_Activity=="processing")
                  @if($Activity3!=null)
                  <x-processing :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Tertiary_Activity=="farming")
                  @if($Activity3!=null)
                  <x-farming :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/farming/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                   @elseif($Activity->Tertiary_Activity=="jingkiengjri")
                  @if($Activity3!=null)
                  <x-jingkiengjri :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/lrb/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="market")
                  @if($Activity3!=null)
                  <x-marketting :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/market/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="tandc")
                  @if($Activity3!=null)
                  <x-tandc :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/tandc/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="labour")
                  @if($Activity3!=null)
                  <x-labour :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/labour/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="industry")
                  @if($Activity3!=null)
                  <x-industrial :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/industry/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="handicraft")
                  @if($Activity3!=null)
                  <x-handicraft :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="handloom")
                  @if($Activity3!=null)
                  <x-handloom :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/handloom/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="fishery")
                  @if($Activity3!=null)
                  <x-fishery :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Tertiary_Activity=="transport")
                  @if($Activity3!=null)
                  <x-transport :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                  @elseif($Activity->Tertiary_Activity=="other")
                  @if($Activity3!=null)
                    <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>SCHOOL/MUSIC/COMPUTER/COACHING CENTRE</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Course Offerred</th>
                          <td>{{$Activity3->course_offered}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Student</th>
                          <td>{{$Activity3->nos_of_student}}</td>
                        </tr>
                        <tr>
                          <th>Course Fee</th>
                          <td>{{$Activity3->course_fee}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Teacing Staff</th>
                          <td>{{$Activity3->no_of_teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Non Teaching Staff</th>
                          <td>{{$Activity3->no_of_non_teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Salary To Staff</th>
                          <td>{{$Activity3->salary_to_staff}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    
                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Service Provide</th>
                          <td>{{$Activity3->service_provided}}</td>
                        </tr>
                        <tr>
                          <th>Number of Employee involved</th>
                          <td>{{$Activity3->employee}}</td>
                        </tr>
                        <tr>
                          <th>Wages paid</th>
                          <td>{{$Activity3->wage_paid}}</td>
                        </tr>
                        <tr>
                          <th>Total Turnover</th>
                          <td>{{$Activity3->turn_over}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>


                   </div>
                  
                  </div>
                  <div class="modal-footer">
                    <a href="/other/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  
                  @else
                   <h1>No information</h1>
                  <a href="/other/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                @endif
                
              </div>
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