<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Labour Contract Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">LABOUR CONTRACT
              @if(($msg ?? '')!="")
                        <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                        @endif
              @error('Society_Id')
                      <div style="color:red">Itz Seem Data is alreday Save. Please Update to Continue</div>
                      @enderror
            </div></div>

            @if(!empty($activities->society_operation))
            <form class="needs-validation" action="/labour/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/labour" method ="POST" novalidate>
                @csrf
            @endif
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
              <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

              <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
              <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                <div class="card-body">
                    <div class="card-body">
                      <div class="row g-2">
                        <div class="col-md-3">
                          <label for="validationCustom01" class="form-label">Society Operation</label>
                          <select Name="society_operation" class="form-select target" id="selectid3" required>
                              <option selected disabled value="">Choose...</option>
                              <option  @if(!empty($activities->society_operation))  @if($activities->society_operation=="Rural Area") selected @endif  @endif>Rural Area</option>
                              <option @if(!empty($activities->society_operation))   @if($activities->society_operation=="Urban Area") selected @endif @endif>Urban Area</option>
                              <option @if(!empty($activities->society_operation))   @if($activities->society_operation=="Both") selected @endif @endif>Both</option>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                       </div>
                     </div>
                    <div class="card-header"><div class="card-title">MEMBERSHIP INVOLVED IN CONTRACT WORKS</div></div>
                    <div class="card-body">
                            <div class="row g-2" >
                              <x-column_-input  title="ST" Name="ST" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->ST ?? '')}}"/>
                              <x-column_-input  title="SC" Name="SC" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->SC ?? '')}}"/>
                              <x-column_-input  title="Total" Name="total" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->household_covered ?? '')}}"/>
                              <x-column_-input  title="Of which is labourer" Name="of_which_borrower" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->of_which_borrower ?? '')}}"/>
                              <x-column_-input  title="Other Specify" Name="other_specify" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->other_specify ?? '')}}"/>
                              <x-column_-input  title="No of Workers" Name="no_of_worker" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->no_of_worker ?? '')}}"/>
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">VALUE OF CONTRACTS EXECUTED DURING THE YEAR (WORK AWARDING AGENCIES)</div></div>
                    <div class="card-body">
                            <div class="row g-2" >
                              <x-column_-input  title="Government Body" Name="Govt_body" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->Govt_body ?? '')}}"/>
                              <x-column_-input  title="Local Body" Name="local_body" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->local_body ?? '')}}"/>
                              <x-column_-input  title="Other" Name="other" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->other ?? '')}}"/>
                              
                            </div>
                            <div class="row g-2" >
                              <x-column_-input  title="Income Earned" Name="income_earned" id="" placeholder="Eg-" div_class="col-md-2" val="{{($activities->income_earned ?? '')}}"/>
                            </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                  @if(!empty($activities->society_operation))
                        <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                         <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
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