<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Handloom Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HANDLOOM
            
            @if(($msg ?? '')!="")
            <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
            @endif
            @error('Society_Id')
            
            <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
            @enderror
            </div></div>
            @if(!empty($activities->no_of_looms_own))
            <form class="needs-validation" action="/handloom/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/handloom" method="POST" novalidate>
              @csrf
            @endif
            <form class="needs-validation" action="/handloom" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                    <div class="row g-2">
                      <x-column_-input  title="No. Of Looms Owned" Name="no_of_looms_own" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->no_of_looms_own ?? '')}}"/>
                      <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Whether Society Use Natural Dyes</label>
                        <select Name="natural_dykes" class="form-select target" id="" required>
                            <option selected disabled value="">Choose...</option>
                            <option @if(($activities->natural_dykes ?? '')=="Yes") selected @endif>Yes</option>
                            <option @if(($activities->natural_dykes ?? '')=="No") selected @endif>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                        @error('natural_dykes')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                      <x-column_-input  title="No. Of Dyeing Houses Owned" Name="dyeing_house_own" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->dyeing_house_own ?? '')}}"/>
                      <x-column_-input  title="Name Of The Items Produced" Name="item_produce" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->item_produce ?? '')}}"/>
                      <x-column_-input  title="Total Handloom Sale" Name="total_handlom_sale" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->total_handlom_sale ?? '')}}"/>
                      <x-column_-input  title="Total Powerloom Sale" Name="total_powerloom_sale" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->total_powerloom_sale ?? '')}}"/>
                      <x-column_-input  title="Total others Sale" Name="total_other_sale" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->total_other_sale ?? '')}}"/>
                      
                        <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">Local Market</label>
                         <select Name="local_market" class="form-select target" id="selectid3" required>
                             <option selected disabled value="">Choose...</option>
                             <option @if(($activities->local_market ?? '')=="Yes") selected @endif>Yes</option>
                            <option @if(($activities->local_market ?? '')=="No") selected @endif>No</option>
                         </select>
                         <div class="valid-feedback">Looks good!</div>
                         <div class="invalid-feedback">This field is required. Can't be empty</div>
                         @error('local_market')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                      </div>
                    
                    <x-column_-input  title="Local Market Amount" Name="local_market_amount" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->local_market_amount ?? '')}}"/>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Export</label>
                        <select Name="export" class="form-select target" id="" required>
                            <option selected disabled value="">Choose...</option>
                            <option @if(($activities->export ?? '')=="Yes") selected @endif>Yes</option>
                            <option @if(($activities->export ?? '')=="No") selected @endif>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                        @error('export')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                     </div>
                    <x-column_-input  title="Export Amount" Name="export_amount" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->export_amount ?? '')}}"/>
                    <x-column_-input  title="Production Employee" Name="production_employee" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->production_employee ?? '')}}"/>
                    <x-column_-input  title="Administration Employee" Name="admin_employee" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->admin_employee ?? '')}}"/>
                    <x-column_-input  title="Others Employee" Name="other_employee" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->other_employee ?? '')}}"/>
                    <x-column_-input  title="Wage Paid" Name="wage_paid" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->wage_paid ?? '')}}"/>
                    <x-column_-input  title="Sale Depot" Name="sale_deport" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->sale_deport ?? '')}}"/>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Whether Own Workshed</label>
                        <select Name="workshed" class="form-select target" id="selectid3" required>
                            <option selected disabled value="">Choose...</option>
                            <option @if(($activities->workshed ?? '')=="Yes") selected @endif>Yes</option>
                            <option @if(($activities->workshed ?? '')=="No") selected @endif>No</option>
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
                              <x-column_-input  title="Production Name" Name="production_name" id="" placeholder="Eg-Jainsem" div_class="col-md-3" val="{{($activities->production_name ?? '')}}"/>
                              <x-column_-input  title="Production Quantity" Name="production_quantity" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->production_quantity ?? '')}}"/>
                              <x-column_-input  title="Production Amount" Name="production_amount" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->production_amount ?? '')}}"/>
                             
                            </div>
                            <div class="row g-2">
                                <x-column_-input  title="Purchase Name" Name="purchase_name" id="" placeholder="Eg-Jainsem" div_class="col-md-3" val="{{($activities->purchase_name ?? '')}}"/>
                                <x-column_-input  title="Purchase Quantity" Name="purchase_quantity" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->purchase_quantity ?? '')}}"/>
                                <x-column_-input  title="Purchase Amount" Name="purchase_amount" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->purchase_amount ?? '')}}"/>
                               
                              </div>
    
                    </div>
                    <div class="card-header"><div class="card-title">No Of Other Equipments</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput">
                              @if(!empty($activities->no_of_looms_own))
                              @php
                              $jani=json_decode($activities->Equipments_Nos);
                              @endphp
                              @forEach(json_decode($activities->Equipments_Name) as $key=> $data)
                              @if($key==0)
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" div_class="col-md-8" val="{{($data ?? '')}}"/>
                              <x-column_-input  title="Total No." Name="Equipments_Nos[]" id="" placeholder="Eg-2" div_class="col-md-2" val="{{ $jani[$key] }}"/>
                              <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @else
                              <div id="row" class="row g-2"><div class="col-md-8">
                                <input name="Equipments_Name[]" type="text" class="form-control" required value="{{($data ?? '')}}"> </div>
                                <div class="col-md-2">
                                <input name="Equipments_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{ $jani[$key] }}"> </div>
                                <button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                              
                              @endforeach
                             
                              @else
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" div_class="col-md-8"/>
                              <x-column_-input  title="Total No." Name="Equipments_Nos[]" id="" placeholder="Eg-2" div_class="col-md-2"/>
                              <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
                             
                            </div>
    
                    </div>
                    <div class="modal-footer">
                      @if(!empty($activities->no_of_looms_own))
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