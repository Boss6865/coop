<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Handicraft Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HANDICRAFT
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              <div style="color:red"><h3><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h3></div>
              @enderror
            </div></div>

            @if(!empty($activities->item_produce))
            <form class="needs-validation" action="/handicraft/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/handicraft" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">CANE & BAMBOO  WORK</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Specify Items Produced" Name="item_produce" id="" placeholder="E.g Bucket" div_class="col-md-3" val="{{($activities->item_produce ?? '')}}"/>
                              <x-column_-input  title="Nos. of Craftsmen Employed" Name="nos_of_craftsmen" id="" placeholder="Eg-2" div_class="col-md-3"  val="{{($activities->nos_of_craftsmen ?? '')}}"/>
                              <x-column_-input  title="Wages Paid" Name="wages_paid" id="" placeholder="Eg-200" div_class="col-md-3"  val="{{($activities->wages_paid ?? '')}}"/>
                              <x-column_-input  title="Sales Turn Over" Name="sales_turnover" id="" placeholder="Eg-20000" div_class="col-md-3"  val="{{($activities->sales_turnover ?? '')}}"/>
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title">OTHER ACTIVITIES ( WOOD WORK, JUTE ETC)</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Speify Items Produced" Name="other_item_produce" id="" placeholder="Eg-Bucket" div_class="col-md-3"  val="{{($activities->other_item_produce ?? '')}}"/>
                              <x-column_-input  title="Nos. of Craftsmen Employed" Name="other_nos_of_craftsmen" id="" placeholder="Eg-2" div_class="col-md-3"  val="{{($activities->other_nos_of_craftsmen ?? '')}}"/>
                              <x-column_-input  title="Wages Paid" Name="other_wages_paid" id="" placeholder="Eg-200" div_class="col-md-3"  val="{{($activities->other_wages_paid ?? '')}}"/>
                              <x-column_-input  title="Sales Turn Over" Name="other_sales_turnover" id="" placeholder="Eg-20000" div_class="col-md-3"  val="{{($activities->other_sales_turnover ?? '')}}"/>
                            </div>
    
                    </div>
                    <div class="modal-footer">
                      @if(!empty($activities->item_produce))
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