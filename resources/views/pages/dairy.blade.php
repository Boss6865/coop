<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Consumer Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">DAIRY
              @error('Society_Id')
                      <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
                      @enderror
            </div></div>
            <form class="needs-validation" action="/dairy" method="POST" novalidate>
                @csrf
                 {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Nos. Of Milch Cows" Name="Nos_of_milch_cow" id="" placeholder="Eg-d" div_class="col-md-3"/>
                              <x-column_-input  title="Total Value of Milch Cow" Name="total_value_of_Milch_cow" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. Of Cowshed" Name="no_of_cowshed" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
                            <div class="row g-2">
                              <x-column_-input  title="Others Items (Specify)" Name="other_item" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Other No." Name="other_no" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Other Amount" Name="other_amount" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
                    <div class="card-header"><div class="card-title"> MILK PROCURED</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Quantity in Litres" Name="produce_in_litre" id="" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="produce_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> MILK UNSOLD</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Quantity in Litres" Name="usold_litre" id="" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="unsold_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> DAIRY PRODUCT SOLD</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Item (Specify)" Name="dairy_product_item" id="" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                              <x-column_-input  title="Value" Name="dairy_product_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Milk collection Unit Facilities</label>
                                <select Name="collection_facility" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
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
                                  <option>Yes</option>
                                  <option>No</option>
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
                                <option>Yes</option>
                                <option>No</option>
                                @error('sale_of_feed_medicine')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                         </div>
                         <x-column_-input  title="Value" Name="sale_of_feed_medicine_value" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-primary">Save</button>
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