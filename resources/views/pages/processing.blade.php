<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Processing Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">PROCESSING
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->item_name))
            <form class="needs-validation" action="/processing/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/processing" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">PROCESSING UNIT / FACTORY</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Name of Item" Name="item_name" id="" placeholder="Eg- Name" div_class="col-md-3" val="{{($activities->item_name ?? '')}}"/>
                              <x-column_-input  title="Value" Name="item_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->item_value ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">PROCESSING MACHINE (SPECIFY)</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name of the Item" Name="process_machine_name" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->process_machine_name ?? '')}}"/>
                              <x-column_-input  title="Nos. of the Item" Name="process_item_Nos" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->process_item_Nos ?? '')}}"/>
                              <x-column_-input  title="Value of the Item" Name="process_item_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->process_item_value ?? '')}}"/>
                              
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">SALE OF PRODUCT	</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Item" Name="sale_of_item_name" id="" placeholder="Eg-sale item name" div_class="col-md-3" val="{{($activities->sale_of_item_name ?? '')}}"/>
                              <x-column_-input  title="Quantity" Name="sale_of_item_quantity" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->sale_of_item_quantity ?? '')}}"/>
                              <x-column_-input  title="Amount" Name="sale_of_item_amount" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->sale_of_item_amount ?? '')}}"/>
                              
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">PACKAGING</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                               <div class="col-md-3">
                                 <label for="validationCustom01" class="form-label">Packaging</label>
                                 <select Name="packing" class="form-select target" id="selectid3" required>
                                     <option selected disabled value="">Choose...</option>
                                     <option @if(($activities->packing ?? '')=="Yes") selected @endif>Yes</option>
                                  <option @if(($activities->packing ?? '')=="No") selected @endif>No</option>
                                 </select>
                                 <div class="valid-feedback">Looks good!</div>
                                 <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <x-column_-input  title="Types of Packaging" Name="packaging_type" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->packaging_type ?? '')}}"/>
                              
                            </div>
                    </div>
    
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->item_name))
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