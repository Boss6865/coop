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

                @elseif(strtoupper($Datas->Sector_Type)=="PIGGERY POULTRY AND OTHER LIVESTOCK")
                  @if($sector!=null)
                     <x-livestock :sector="$sector" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/livestock/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
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
            </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">

              <div class="card-header">
                
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-I: {{strtoupper($Activity->Primary_Activity)}}</h3></div></div>
                @if($Activity->Primary_Activity=="fishery")
                @if($Activity1!=null)
                  <x-fishery :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  
                   @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="transport")

                  @if($Activity1!=null)
                   <x-transport :sector="$Activity1" Datas="{{$Datas->id}}"/>
                 
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                  @elseif($Activity->Primary_Activity=="livestock")
                  @if($Activity1!=null)
                  <x-livestock :sector="$Activity1" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/livestock/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
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
            </div>
          </div>
         </div>
          <div class="row">
          <div class="col-md-12">
              <div class="card mb-4">
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

                   @elseif($Activity->Secondary_Activity=="livestock")
                  @if($Activity2!=null)
                  <x-livestock :sector="$Activity2" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/livestock/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
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


                @endif
                
              </div>
              </div>
          </div>
          </div>
           <div class="row">
          <div class="col-md-12">
            <div class="card mb-4">
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


                  @elseif($Activity->Tertiary_Activity=="livestock")
                  @if($Activity3!=null)
                  <x-livestock :sector="$Activity3" Datas="{{$Datas->id}}"/>
                  @else
                  <h1>No information</h1>
                  <a href="/livestock/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
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
            </div>
            <!-- /.card -->
        
          </div>
           </div>
        
      <!--end::Container-->
    </div>
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->

</x-layout>