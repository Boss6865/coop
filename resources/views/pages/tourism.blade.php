<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Tourism Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">TOURISM AND LRB
              @if(($msg ?? '')!="")
              <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
              @endif
              @error('Society_Id')
              
              <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
              @enderror
            </div></div>
            @if(!empty($activities->deomestic_tourist))
            <form class="needs-validation" action="/tourism/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/tourism" method="POST" novalidate>
              @csrf
            @endif
            
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">FLOW OF TOURISTS  (PER ANNUM)</div></div>
                    <div class="card-body">
                            <div class="row g-2">  
                              <x-column_-input  title="Domestic" Name="deomestic_tourist" id="" placeholder="Eg-100" div_class="col-md-3" val="{{($activities->deomestic_tourist ?? '')}}"/>
                              <x-column_-input  title="Foreign" Name="foreign_tourist" id="" placeholder="Eg-200" div_class="col-md-3" val="{{($activities->foreign_tourist ?? '')}}"/>
                              <x-column_-input  title="Collection of Entry Fee (per Anum)" Name="entry_fee_annually" id="" placeholder="Eg-500" div_class="col-md-3" val="{{($activities->entry_fee_annually ?? '')}}"/>
                              <x-column_-input  title="Collection of Parking Fee (per Anum)" Name="parking_fee_annually" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->parking_fee_annually ?? '')}}"/>
                              <x-column_-input  title="Collection of Other Fee (per Anum)" Name="other_fee_annually" id="" placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->other_fee_annually ?? '')}}"/>
                              <x-column_-input  title="Total Nos. of Guest House/Logde" Name="total_guest_house_or_lodge" id="" placeholder="Eg-5" div_class="col-md-3" val="{{($activities->total_guest_house_or_lodge ?? '')}}"/>
                              <x-column_-input  title="Income from Guest House/Logde" Name="income_from_guest_house_or_lodge" id="" placeholder="Eg-2000" div_class="col-md-3" val="{{($activities->income_from_guest_house_or_lodge ?? '')}}"/>
                            </div>
                    <div class="card-header"><div class="card-title">OTHER INCOME PER ANNUM</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Source" Name="other_source" id="" placeholder="Eg- any source" div_class="col-md-3" val="{{($activities->other_source ?? '')}}"/>
                              <x-column_-input  title="Value" Name="other_value" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->other_value ?? '')}}"/>
                              <x-column_-input  title="Nos. of Male Guide" Name="male_guide" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->male_guide ?? '')}}"/>
                              <x-column_-input  title="Nos. Female Guide" Name="female_guide" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->female_guide ?? '')}}"/>
                              
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES  </div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Types of Product" Name="product_promotion" id="" placeholder="Eg-" div_class="col-md-3" val="{{($activities->product_promotion ?? '')}}"/>
                              <x-column_-input  title="Sales Per Anum" Name="sale_of_product_annually" id="" placeholder="Eg-2" div_class="col-md-3" val="{{($activities->sale_of_product_annually ?? '')}}"/>
                              
                            </div>
                    </div>
                    
    
                    <div class="card-header"><div class="card-title">OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</div></div>
                    <div class="card-body">
                            <div class="row g-2" id="newinput4">
                              @if(!empty($activities->deomestic_tourist))
                              @php
                              $jan1=json_decode($activities->Equipments_Nos);
                              @endphp
                              @forEach(json_decode($activities->Equipments_Name) as $key => $data)
                              @if($key==0)
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3" val="{{$data}}"/>
                              <x-column_-input  title="Nos" Name="Equipments_Nos[]" id="" placeholder="Eg-2" div_class="col-md-3" val="{{$jan1[$key]}}"/>
                              <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                                @else
                                <div id="row4" class="row g-2"><div class="col-md-3">
                                  <input name="Equipments_Name[]" type="text" class="form-control" placeholder="Eg-Boat,Kayak, Life Jacket" required value="{{$data}}"> </div>
                                  <div class="col-md-3">
                                  <input name="Equipments_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required value="{{$jan1[$key]}}"> </div>
                                  <button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>
                              @endif
                                @endforeach
                              @else
                              <x-column_-input  title="Name" Name="Equipments_Name[]" id="" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3"/>
                              <x-column_-input  title="Nos" Name="Equipments_Nos[]" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                              @endif
                              
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">LIVING ROOT BRIDGE GRANT RECEIVE</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Source" Name="lrb_source" id="" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3"/>
                              <x-column_-input  title="Amount Recieve" Name="lrb_amount_recieved" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Amount Utilized" Name="lrb_amount_utilized" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Amount Unutilized" Name="lrb_amount_utilized" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Specify the purpose for the grant recieved" Name="purpose_of_grant_recieve" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Shared Investment in SUBMJJCS" Name="shared_investment" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Collection of entry fee/parking fee/if any" Name="fee_collection" id="" placeholder="Eg-2" div_class="col-md-3"/>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->deomestic_tourist))
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

  $("#rowAdder4").click(function () {
            newRowAdd =
                '<div id="row4" class="row g-2"><div class="col-md-3">' +
                '<input name="Equipments_Name[]" type="text" class="form-control" placeholder="Eg-Boat,Kayak, Life Jacket" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="Equipments_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput4').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow4", function () {
            $(this).parents("#row4").remove();
        });
</script>