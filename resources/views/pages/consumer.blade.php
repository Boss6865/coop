<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Consumer Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">CONSUMER
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              <i class="bi bi-x-lg"></i>
              <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
              @enderror
            </div></div>
            {{-- @if($activities->departmental_store=="Yes" || $activities->departmental_store=="No" ) --}}
            @if(!empty($activities->departmental_store))
            <form class="needs-validation" action="/consumer/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/consumer" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{$Datas->id}}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">MARK WHEREVER APPLICABLE</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Departmental Store</label>
                                    <select Name="departmental_store" class="form-select target" id="selectid3" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if(($activities->departmental_store ?? '')=="Yes") selected @endif>Yes</option>
                                        <option @if(($activities->departmental_store ?? '')=="No") selected @endif>No</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    @error('departmental_store')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                                 </div>
                                 <div class="col-md-2">
                                    <label for="validationCustom01" class="form-label">Retails Units</label>
                                    <select Name="retails_unit" class="form-select target" id="selectid3" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option @if(($activities->retails_unit ?? '')=="Yes") selected @endif>Yes</option>
                                        <option @if(($activities->retails_unit ?? '')=="No") selected @endif>No</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    @error('retails_unit')
                                    <div style="color:red">{{$message}}</div>
                                    @enderror
                                 </div>
                              {{-- <x-column_-input  title="Departmental Store" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                              <x-column_-input  title="Retails Units" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/> --}}
                              
                              <x-column_-input  title="Nos. Of Branch" Name="no_of_branch" id="" placeholder="Eg-2" div_class="col-md-2" val="{{($activities->no_of_branch ?? '')}}"/>
                              <x-column_-input  title="Closing Stock Value" Name="closing_stock" id="" placeholder="Eg-2" div_class="col-md-2" val="{{($activities->closing_stock ?? '')}}"/>
                              <x-column_-input  title="Purchase During a Year" Name="purchase_date" id="" placeholder="Eg-2" div_class="col-md-2" val="{{($activities->purchase_date ?? '')}}"/>
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title"> SALE OF  CONSUMER GOODS</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Specify" Name="item" id="" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3" val="{{($activities->item ?? '')}}"/>
                              <x-column_-input  title="Total Sale" Name="total_sale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->total_sale ?? '')}}"/>
                              <x-column_-input  title="Controlled Wholesale" Name="Controll_wholesale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->Controll_wholesale ?? '')}}"/>
                              <x-column_-input  title="Controlled Retail" Name="controll_retail" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->controll_retail ?? '')}}"/>
                              <x-column_-input  title="Un-Controlled Wholesale" Name="uncontroll_wholesale" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->uncontroll_wholesale ?? '')}}"/>
                              <x-column_-input  title="Un-Controlled Retail" Name="uncontroll_retail" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->uncontroll_retail ?? '')}}"/>
                            </div>
    
                    </div>
                    <div class="modal-footer">
                      @if(!empty($activities->departmental_store))
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