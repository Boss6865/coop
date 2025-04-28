<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Marketting Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">MARKETING
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->agriculture_input_type))
            <form class="needs-validation" action="/market/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/market" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">AGRICULTURE INPUTS SUCH AS SEED, FERTILIZERS ETC. (SPECIFY)</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Type" Name="agriculture_input_type" id="" placeholder="Eg-Seed, Fertilizer ETC" div_class="col-md-3" val="{{($activities->agriculture_input_type ?? '')}}"/>
                              <x-column_-input  title="Quantity" Name="agriculture_input_quantity" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->agriculture_input_quantity ?? '')}}"/>
                              <x-column_-input  title="Value" Name="agriculture_input_value" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->agriculture_input_value ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">AGRICULTURE/HORTICULTURE/ OTHER PRODUCES</div></div>
                    <div class="card-body">
                            <div id="newinput2" class="row g-2">
                              @if(!empty($activities->agriculture_input_type))
                              @php
                              $jan1=json_decode($activities->product_quantity);
                              $jan2=json_decode($activities->product_value);
                              @endphp
                              @forEach(json_decode($activities->product_produce) as $key => $data)
                              @if($key==0)
                                <x-column_-input  title="Name of the Product Produces" Name="product_produce[]" id="" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" div_class="col-md-3" val="{{$data}}"/>
                                <x-column_-input  title="Quantity in kg" Name="product_quantity[]" id="" placeholder="Eg-20" div_class="col-md-3" val="{{$jan1[$key]}}"/>
                                <x-column_-input  title="Values" Name="product_value[]" id="" placeholder="Eg-200" div_class="col-md-3" val="{{$jan2[$key]}}"/>
                                <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                  <div id="row2" class="row g-2"><div class="col-md-3">
                                  <input name="product_produce[]" type="text" class="form-control" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" required value="{{$data}}"> </div>
                                  <div class="col-md-3">
                                  <input name="product_quantity[]" type="text" class="form-control" placeholder="Eg- 20" required value="{{$jan1[$key]}}"> </div>
                                  <div class="col-md-3">
                                  <input name="product_value[]" type="text" class="form-control" placeholder="Eg- 200" required value="{{$jan2[$key]}}"> </div>
                                  <button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                             
                                
                                @endforeach
                              @else
                                <x-column_-input  title="Name of the Product Produces" Name="product_produce[]" id="" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" div_class="col-md-3" />
                                <x-column_-input  title="Quantity in kg" Name="product_quantity[]" id="" placeholder="Eg-20" div_class="col-md-3" />
                                <x-column_-input  title="Values" Name="product_value[]" id="" placeholder="Eg-200" div_class="col-md-3" />
                                <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
                              
                            </div>
                           
                    </div>
                    
                   
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->agriculture_input_type))
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

   $("#rowAdder2").click(function () {
            newRowAdd =
                '<div id="row2" class="row g-2"><div class="col-md-3">' +
                '<input name="product_produce[]" type="text" class="form-control" placeholder="Eg- Pulse, Vegetables, Cotton, Ginger Etc" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="product_quantity[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="product_value[]" type="text" class="form-control" placeholder="Eg- 200" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });
</script>