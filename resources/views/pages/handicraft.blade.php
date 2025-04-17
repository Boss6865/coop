<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Handicraft Sector" />
        <div class="card card-info card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header"><div class="card-title">HANDICRAFT</div></div>
            <form class="needs-validation" action="/handicraft" method="POST" novalidate>
                @csrf
                {{-- <input type="hidden" name="Name_of_society" value="{{ Session()->get('Sooos'); }}">
               <input type="hidden" name="Society_Id" value="{{ Session()->get('id_key'); }}"> --}}

               <input type="hidden" name="Name_of_society" value="Iakrehlang Saphai IVCS Ltd.}}">
               <input type="hidden" name="Society_Id" value="51">
                <div class="card-body">
                  
                    <div class="card-header"><div class="card-title">CANE & BAMBOO  WORK</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Speify Items Produced" Name="item_produce" id="" placeholder="E.g Bucket" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Craftsmen Employed" Name="nos_of_craftsmen" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Wages Paid" Name="wages_paid" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <x-column_-input  title="Sales Turn Over" Name="sales_turnover" id="" placeholder="Eg-20000" div_class="col-md-3"/>
                            </div>
    
                    </div>
                    <div class="card-header"><div class="card-title">OTHER ACTIVITIES ( WOOD WORK, JUTE ETC)</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Speify Items Produced" Name="other_item_produce" id="" placeholder="Eg-Bucket" div_class="col-md-3"/>
                              <x-column_-input  title="Nos. of Craftsmen Employed" Name="other_nos_of_craftsmen" id="" placeholder="Eg-2" div_class="col-md-3"/>
                              <x-column_-input  title="Wages Paid" Name="other_wages_paid" id="" placeholder="Eg-200" div_class="col-md-3"/>
                              <x-column_-input  title="Sales Turn Over" Name="other_sales_turnover" id="" placeholder="Eg-20000" div_class="col-md-3"/>
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