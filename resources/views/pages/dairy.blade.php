<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Consumer Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">DAIRY
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->Nos_of_milch_cow))
            <form class="needs-validation" action="/dairy/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/dairy" method="POST" novalidate>
              @csrf
            @endif
            
                 {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Nos. Of Milch Cows" Name="Nos_of_milch_cow" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->Nos_of_milch_cow ?? '')}}"/>
                              <x-column_-input  title="Total Value of Milch Cow" Name="total_value_of_Milch_cow" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->total_value_of_Milch_cow ?? '')}}"/>
                              <x-column_-input  title="Nos. Of Cowshed" Name="no_of_cowshed" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->no_of_cowshed ?? '')}}"/>
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Others Items (Specify)" Name="other_item" id="" placeholder="Eg- Anything" div_class="col-md-3" val="{{($activities->other_item ?? '')}}"/>
                              <x-column_-input  title="Other No." Name="other_no" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->other_no ?? '')}}"/>
                              <x-column_-input  title="Other Amount" Name="other_amount" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->other_amount ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title"> MILK PROCURED</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Quantity in Litres" Name="produce_in_litre" id="" placeholder="Eg- 100" div_class="col-md-3" val="{{($activities->produce_in_litre ?? '')}}"/>
                              <x-column_-input  title="Value" Name="produce_value" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->produce_value ?? '')}}"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> MILK UNSOLD</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Quantity in Litres" Name="usold_litre" id="" placeholder="Eg-100" div_class="col-md-3" val="{{($activities->usold_litre ?? '')}}"/>
                              <x-column_-input  title="Value" Name="unsold_value" id="" placeholder="Eg-20" div_class="col-md-3" val="{{($activities->unsold_value ?? '')}}"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> DAIRY PRODUCT SOLD</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Item (Specify)" Name="dairy_product_item" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->dairy_product_item ?? '')}}"/>
                              <x-column_-input  title="Value" Name="dairy_product_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->dairy_product_value ?? '')}}"/>
                              <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Milk collection Unit Facilities</label>
                                <select Name="collection_facility" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option @if(($activities->collection_facility ?? '')=="Yes") selected @endif>Yes</option>
                                    <option @if(($activities->collection_facility ?? '')=="No") selected @endif>No</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                                @error('collection_facility')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                             </div>
                             <div class="col-md-3">
                              <label for="validationCustom01" class="form-label">Milk Testing Facilities</label>
                              <select Name="testing_facility" class="form-select target" id="selectid3" required>
                                  <option selected disabled value="">Choose...</option>
                                  <option @if(($activities->testing_facility ?? '')=="Yes") selected @endif>Yes</option>
                                  <option @if(($activities->testing_facility ?? '')=="No") selected @endif>No</option>
                              </select>
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">This field is required. Can't be empty</div>
                              @error('testing_facility')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                           </div>
                           <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Sales of Feeds and Medicine (Per Anum)</label>
                            <select Name="sale_of_feed_medicine" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option @if(($activities->sale_of_feed_medicine ?? '')=="Yes") selected @endif>Yes</option>
                                <option @if(($activities->sale_of_feed_medicine ?? '')=="No") selected @endif>No</option>
                                @error('sale_of_feed_medicine')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                         </div>
                         <x-column_-input  title="Value" Name="sale_of_feed_medicine_value" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->sale_of_feed_medicine_value ?? '')}}"/>
                            </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->Nos_of_milch_cow))
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