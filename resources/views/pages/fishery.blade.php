<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Fishery Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">FISHERIES
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              <div style="color:red"><i class="bi bi-x-lg"></i>Itz Seem Data is already Save. Please Update to Continue</div>
              @enderror
            </div></div>
            @if(!empty($activities->male_fisher))
            <form class="needs-validation" action="/fishery/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/fishery" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">NO. OF FISHERMEN</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Male" Name="male_fisher" id="" placeholder="Eg-10" div_class="col-md-3" val="{{($activities->male_fisher ?? '')}}"/>
                              <x-column_-input  title="Female" Name="female_fisher" id="" placeholder="Eg-20" div_class="col-md-3" val="{{($activities->female_fisher ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">ASSETS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Total Nos. Of Fish Pond" Name="total_pond" id="" placeholder="Eg- 5" div_class="col-md-3" val="{{($activities->total_pond ?? '')}}"/>
                              <x-column_-input  title="Area of Fish Pond (Hectares)" Name="area_of_pond" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->area_of_pond ?? '')}}"/>
                              <x-column_-input  title="Value of Fish Pond" Name="value_of_fish_pond" id="" placeholder="Eg-20000" div_class="col-md-3" val="{{($activities->value_of_fish_pond ?? '')}}"/>
                              
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Total Nos. Of Nursery Pond" Name="nursery_pond" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->nursery_pond ?? '')}}"/>
                              <x-column_-input  title="Area of Nursery Pond (Hectares)" Name="area_of_nursery_pond" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->area_of_nursery_pond ?? '')}}"/>
                              <x-column_-input  title="Value of Nursery Pond" Name="value_of_nursery_pond" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->value_of_nursery_pond ?? '')}}"/>
                             
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> FISH CATCHED/REARED & SALES	</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Types of Fish Reared" Name="type_of_fish_reared" id="" placeholder="Eg-Shalanai, Kha saw" div_class="col-md-3" val="{{($activities->type_of_fish_reared ?? '')}}"/>
                              <x-column_-input  title="Quantity in Kg" Name="fish_quantity" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->fish_quantity ?? '')}}"/>
                              <x-column_-input  title="Sales of Fresh Fish and Others" Name="sales_of_fresh_fish" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->sales_of_fresh_fish ?? '')}}"/>
                              
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Dry Fish Value" Name="dry_fish" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->dry_fish ?? '')}}"/>
                              <x-column_-input  title="Smoke Fish Value" Name="smoke_fish" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->smoke_fish ?? '')}}"/>
                              <x-column_-input  title="Sale of Fishing Material and Others" Name="fishing_material_other" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->fishing_material_other ?? '')}}"/>
                              
                            </div>
    
                    </div>
                   
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->male_fisher))
                  <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                   <a href="/sector/{{ $Datas->id }}"><button type="button" class="btn btn-secondary">Back</button></a> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                  </div>
                </div>
              </form>
        </div>
</x-layout>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
     'use strict';
 
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     const forms = document.querySelectorAll('.needs-validation');
 
     // Loop over them and prevent submission
     Array.from(forms).forEach((form) => {
       form.addEventListener(
         'submit',
         (event) => {
           if (!form.checkValidity()) {
             event.preventDefault();
             event.stopPropagation();
           }
 
           form.classList.add('was-validated');
         },
         false,
       );
     });
   })();
</script>