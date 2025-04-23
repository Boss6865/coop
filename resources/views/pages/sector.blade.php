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

            <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
            <input type="hidden" name="Society_Id" value="51">
                   
                    <div class="card-header"><div class="card-title">MULTI-PURPOSE  SECTOR ::</div></div>
                 
                    <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="activity_1" class="form-label">Activity 1</label>
                                    <select name="activity_1" class="form-select target2" id="Select1" required>
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if($activity->activity_1=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if($activity->activity_1=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if($activity->activity_1=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if($activity->activity_1=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if($activity->activity_1=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if($activity->activity_1=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if($activity->activity_1=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if($activity->activity_1=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if($activity->activity_1=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if($activity->activity_1=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if($activity->activity_1=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if($activity->activity_1=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if($activity->activity_1=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if($activity->activity_1=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if($activity->activity_1=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if($activity->activity_1=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_2" class="form-label">Activity 2</label>
                                    <select name="activity_2" class="form-select target2" id="selectid2">
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if($activity->activity_2=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if($activity->activity_2=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if($activity->activity_2=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if($activity->activity_2=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if($activity->activity_2=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if($activity->activity_2=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if($activity->activity_2=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if($activity->activity_2=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if($activity->activity_2=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if($activity->activity_2=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if($activity->activity_2=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if($activity->activity_2=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if($activity->activity_2=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if($activity->activity_2=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if($activity->activity_2=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if($activity->activity_2=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_3" class="form-label">Activity 3</label>
                                    <select name="activity_3" class="form-select target2" id="selectid2">
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if($activity->activity_3=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if($activity->activity_3=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if($activity->activity_3=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if($activity->activity_3=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if($activity->activity_3=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if($activity->activity_3=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if($activity->activity_3=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if($activity->activity_3=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if($activity->activity_3=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if($activity->activity_3=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if($activity->activity_3=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if($activity->activity_3=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if($activity->activity_3=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if($activity->activity_3=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if($activity->activity_3=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if($activity->activity_3=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_4" class="form-label">Activity 4</label>
                                    <select name="activity_4" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if($activity->activity_4=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if($activity->activity_4=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if($activity->activity_4=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if($activity->activity_4=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if($activity->activity_4=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if($activity->activity_4=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if($activity->activity_4=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if($activity->activity_4=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if($activity->activity_4=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if($activity->activity_4=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if($activity->activity_4=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if($activity->activity_4=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if($activity->activity_4=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if($activity->activity_4=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if($activity->activity_4=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if($activity->activity_4=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_5" class="form-label">Activity 5</label>
                                    <select name="activity_5" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option value="/handloom/{{$Datas->id;}}" @if($activity->activity_5=="handloom") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if($activity->activity_5=="handicraft") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if($activity->activity_5=="consumer") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if($activity->activity_5=="dairy") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if($activity->activity_5=="farming") selected @endif>FARMING</option>
                                        <option value="/fishery/{{$Datas->id;}}" @if($activity->activity_5=="fishery") selected @endif>FISHERIES</option>
                                        <option value="/market/{{$Datas->id;}}" @if($activity->activity_5=="market") selected @endif>MARKETING</option>
                                        <option value="/processing/{{$Datas->id;}}" @if($activity->activity_5=="processing") selected @endif>PROCESSING</option>
                                        <option value="/transport/{{$Datas->id;}}" @if($activity->activity_5=="transport") selected @endif>TRANSPORT</option>
                                        <option value="/livestock/{{$Datas->id;}}" @if($activity->activity_5=="livestock") selected @endif>LIVESTOCK</option>
                                        <option value="/tourism/{{$Datas->id;}}" @if($activity->activity_5=="tourism") selected @endif>TOURISM AND LRB</option>
                                        <option value="/industry/{{$Datas->id;}}" @if($activity->activity_5=="industry") selected @endif>INDUSTRIAL</option>
                                        <option value="/tandc/{{$Datas->id;}}" @if($activity->activity_5=="tandc") selected @endif>THRIFT AND CREDIT</option>
                                        <option value="/labour/{{$Datas->id;}}" @if($activity->activity_5=="labour") selected @endif>LABOUR CONTRACT</option>
                                        <option value="/housing/{{$Datas->id;}}" @if($activity->activity_5=="housing") selected @endif>HOUSING</option>
                                        <option value="/other/{{$Datas->id;}}" @if($activity->activity_5=="other") selected @endif>OTHERS TYPES</option>
                                       
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="activity_other" class="form-label">Other</label>
                                    <select name="activity_other" class="form-select target2" id="selectid2" >
                                        <option selected disabled value="">Choose...</option>
                                        
                                        <option>HANDLOOM</option>
                                        <option>HANDICRAFT</option>
                                        <option>CONSUMER</option>
                                        <option>DAIRY</option>
                                        <option>FARMING</option>
                                        <option>FISHERIES</option>
                                        <option>MARKETING</option>
                                        <option>PROCESSING</option>
                                        <option>TRANSPORT</option>
                                        <option>LIVESTOCK</option>
                                        <option>TOURISM AND LRB</option>
                                        <option>INDUSTRIAL</option>
                                        <option>THRIFT AND CREDIT</option>
                                        <option>LABOUR CONTRACT</option>
                                        <option>HOUSING</option>
                                        <option>OTHERS TYPES</option>
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
$("#Select1").change(function(){
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
