<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Handloom Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HANDLOOM
            @error('Society_Id')
                      <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
                      @enderror  
            </div></div>
            <form class="needs-validation" action="/handloom" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
               <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                    <div class="row g-2">
                      <x-column_-input  title="No. Of Looms Owned" Name="no_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Whether Society Use Natural Dyes</label>
                        <select Name="natural_dykes" class="form-select target" id="" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                        @error('natural_dykes')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                      <x-column_-input  title="No. Of Dyeing Houses Owned" Name="dyeing_house_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      <x-column_-input  title="Name Of The Items Produced" Name="item_produce" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      <x-column_-input  title="Total Handloom Sale" Name="total_handlom_sale" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      <x-column_-input  title="Total Powerloom Sale" Name="total_powerloom_sale" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      <x-column_-input  title="Total others Sale" Name="total_other_sale" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                      
                        <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">Local Market</label>
                         <select Name="local_market" class="form-select target" id="selectid3" required>
                             <option selected disabled value="">Choose...</option>
                             <option>Yes</option>
                             <option>No</option>
                         </select>
                         <div class="valid-feedback">Looks good!</div>
                         <div class="invalid-feedback">This field is required. Can't be empty</div>
                         @error('local_market')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    
                    <x-column_-input  title="Local Market Amount" Name="local_market_amount" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Export</label>
                        <select Name="export" class="form-select target" id="" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                        @error('export')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                     </div>
                    <x-column_-input  title="Export Amount" Name="export_amount" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <x-column_-input  title="Production Employee" Name="production_employee" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <x-column_-input  title="Administration Employee" Name="admin_employee" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <x-column_-input  title="Others Employee" Name="other_employee" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <x-column_-input  title="Wage Paid" Name="wage_paid" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <x-column_-input  title="Sale Depot" Name="sale_deport" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Whether Own Workshed</label>
                        <select Name="workshed" class="form-select target" id="selectid3" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                        @error('workshed')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                     </div>
                     <div class="card-header"><div class="card-title">Value Of Yarn & Other Raw Materials</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Production Name" Name="production_name" id="validationCustom09" placeholder="Eg-Jainsem" div_class="col-md-3"/>
                              <x-column_-input  title="Production Quantity" Name="production_quantity" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Production Amount" Name="production_amount" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                             
                            </div>
                            <div class="row g-2">
                                <x-column_-input  title="Purchase Name" Name="purchase_name" id="validationCustom09" placeholder="Eg-Jainsem" div_class="col-md-3"/>
                                <x-column_-input  title="Purchase Quantity" Name="purchase_quantity" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                                <x-column_-input  title="Purchase Amount" Name="purchase_amount" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                               
                              </div>
    
                    </div>
                    <div class="card-header"><div class="card-title">No Of Other Equipments</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput">
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" div_class="col-md-8"/>
                              <x-column_-input  title="Total No." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                              <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
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

    //Dynamic add input field
    $("#rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2"><div class="col-md-8">' +
                '<input name="Equipments_Name[]" type="text" class="form-control" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="Equipments_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        });

    
  </script>