<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="LRB Sector" />
        <div class="card card-info card-outline mb-4">
            <div class="card-body">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">LIVING ROOT BRIDGE (MARIANG JINGKIENG JRI)
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->lrb_source))
            <form class="needs-validation" action="/lrb/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/lrb" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">

                    <div class="card-header"><div class="card-title">GRANT RECEIVE</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Source" Name="lrb_source" id="" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3" val="{{($activities->lrb_source ?? '')}}"/>
                              <x-column_-input  title="Amount Received" Name="lrb_amount_recieved" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->lrb_amount_recieved ?? '')}}"/>
                              <x-column_-input  title="Amount Utilized" Name="lrb_amount_utilized" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->lrb_amount_utilized ?? '')}}"/>
                              <x-column_-input  title="Amount Unutilized" Name="lrb_amount_unutilized" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->lrb_amount_unutilized ?? '')}}"/>
                              <x-column_-input  title="Specify the purpose for the grant received" Name="purpose_of_grant_recieve" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->purpose_of_grant_recieve ?? '')}}"/>
                              <x-column_-input  title="Shared Investment in SUBMJJCS" Name="shared_investment" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->shared_investment ?? '')}}"/>
                              <x-column_-input  title="Collection of entry fee/parking fee/if any" Name="fee_collection" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->fee_collection ?? '')}}"/>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                  @if(!empty($activities->lrb_source))
                  <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                  <button type="submit" class="btn btn-primary">Update</button>
                  @else
                   <a href="/sector/{{ $Datas->id }}"><button type="button" class="btn btn-secondary">Back</button></a> 
                    <button type="submit" class="btn btn-primary">Save</button>
                    @endif
                  </div>
                
              </form>
            </div>
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