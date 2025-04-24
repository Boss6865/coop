<x-layout>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="DetailsView" />
        <div class="card card-info card-outline mb-4">
      
            <form class="needs-validation" action="/activity" method ="POST"  novalidate>
              @csrf
              {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
            <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

            <input type="hidden" name="Name_of_society" value="{{$Datas->Name_of_the_Society}}">
            <input type="hidden" name="Society_Id" value="{{$id}}">
                   
                    <div class="card-header"><div class="card-title">MULTI-PURPOSE  SECTOR :: 
                      @error('Society_Id')
                      <div style="color:red">Itz Seem Data is already Save. Please Update to Continue</div>
                      @enderror
                    </div></div>
                 
                    <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="activity_1" class="form-label">Activity 1</label>
                                    <select name="activity_1" class="form-select target2" id="Select1" required>
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none') =="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_1 ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_2" class="form-label">Activity 2</label>
                                    <select name="activity_2" class="form-select target2" id="selectid2">
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_2 ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_3" class="form-label">Activity 3</label>
                                    <select name="activity_3" class="form-select target2" id="selectid2">
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_3 ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_4" class="form-label">Activity 4</label>
                                    <select name="activity_4" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_4 ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_5" class="form-label">Activity 5</label>
                                    <select name="activity_5" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_5 ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_other" class="form-label">Other</label>
                                    <select name="activity_other" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                        
                                        <option value="/handloom/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if(($activity->activity_other ?? 'none')=="other") selected @endif>OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>

                            </div>
                            <div>
                      
                    </div>
                    </div>
                    <div class="card-footer">
                    
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                   
            </form>
        </div>
        
        <!-- Button trigger modal -->

        
  <!-- Modal -->
  


   <!-- Modal -->
  

   <!-- Modal -->
   
</x-layout>
<script>
$('select').change(function(){
  //  var sect= $('#Select1').find(":selected").val()
  //    $('#'+sect).modal('show');
  var id = $(this).val(); // get selected value
   if (id) { 
       window.location = id; 
   }
    return false;
    
});

</script>
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
