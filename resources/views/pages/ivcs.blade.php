<x-layout>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="IVCS" />
        <div class="card card-info card-outline mb-4">
            @if(!empty($activities->activity))
            <form class="needs-validation" action="/ivcs/{{$Datas->id}}" method="POST" novalidate>
              @csrf
              @method("PUT")
            @else
            <form class="needs-validation" action="/ivcs" method ="POST" novalidate>
                @csrf
            @endif
            
                 
               <input type="hidden" name="Name_of_society" value="{{ $Datas->Name_of_the_Society }}">
               <input type="hidden" name="Society_Id" value="{{ $Datas->id }}">
                      <div class="card-header"><div class="card-title">INTEGRATED VILLAGE COOPERATIVE SOCIETIES (IVCS)
                        @if(($msg ?? '')!="")
                        <div style="color:green"><h3> <i class="bi bi-check-circle-fill"></i>{{$msg}}</h3></div>
                        @endif
                        @error('Society_Id')
                        
                        <div style="color:red"><h2><i class="bi bi-x-square"></i>Itz Seem Data is already Save. Please Update to Continue</h2></div>
                        @enderror    
                    </div></div>
                      <div class="card-body">
                        <div class="row g-2">
                            <!--begin::Col-->
                              <div class="col-md-3">
                                  <label for="" class="form-label">Activity</label>
                                  <select name="activity" class="form-select" required>
                                      <option selected disabled value="">Choose...</option>
                                      <option  @if(!empty($activities->activity))  @if($activities->activity=="Primary") selected @endif  @endif>Primary</option>
                                      <option @if(!empty($activities->activity))   @if($activities->activity=="Secondary") selected @endif @endif>Secondary</option>
                                      <option @if(!empty($activities->activity))   @if($activities->activity=="Tertiary") selected @endif @endif>Tertiary</option>
                                  </select>
                                  <div class="valid-feedback">Looks good!</div>
                                  <div class="invalid-feedback">This field is required. Can't be empty</div>
                              </div>
                              <!--end::Col-->
                              <x-column_-input  title="Nos. of the Household Covered by the Society" Name="household_covered" id="" placeholder="Eg-100" div_class="col-md-4" val="{{($activities->household_covered ?? '')}}"/>
                        </div>
                    </div>
                      <div class="card-header"><div class="card-title">SHARE/SHARE-HOLDERS</div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Name of Share Holders/Member" Name="share_holder_member_name"  placeholder="Eg-John" div_class="col-md-4" val="{{($activities->share_holder_member_name ?? '')}}"/>
                                <x-column_-input  title="Nos. of Share Subscribe" Name="nos_of_share_subscribe"  placeholder="Eg-10" div_class="col-md-4" val="{{($activities->nos_of_share_subscribe ?? '')}}"/>
                                <x-column_-input  title="Amount of Share Capitals" Name="amount_share_capitals"  placeholder="Eg- 1000" div_class="col-md-4" val="{{($activities->amount_share_capitals ?? '')}}"/>
                                
                              </div>
                      </div>

                      <div class="card-header"><div class="card-title">DEPOSITS</div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Nos. of Saving Accounts" Name="nos_saving_account"  placeholder="Eg-2" div_class="col-md-3" val="{{($activities->nos_saving_account ?? '')}}"/>
                                <x-column_-input  title="Total Amount of Saving Mobilised" Name="total_saving_mobilised"  placeholder="Eg-100 " div_class="col-md-3" val="{{($activities->total_saving_mobilised ?? '')}}"/>
                                <x-column_-input  title="Nos. of R.D. Account" Name="nos_rd_account"  placeholder="Eg-1" div_class="col-md-3" val="{{($activities->nos_rd_account ?? '')}}"/>
                                <x-column_-input  title="Total Amount of R.D. Mobilised" Name="total_rd_mobilised"  placeholder="Eg- 1000" div_class="col-md-3" val="{{($activities->total_rd_mobilised ?? '')}}"/>
                                <x-column_-input  title="Nos. of F.D. Account" Name="nos_fd_account"  placeholder="Eg-4" div_class="col-md-3" val="{{($activities->nos_fd_account ?? '')}}"/>
                                <x-column_-input  title="Total Amount of F.D. Mobilised" Name="total_fd_mobilised"  placeholder="Eg- 100" div_class="col-md-3" val="{{($activities->total_fd_mobilised ?? '')}}"/>
                              </div>
                      </div>
                      <div class="card-body">
                        <div class="row g-2">
                           
                          <x-column_-input  title="Corpus Fund" Name="corpus_fund"  placeholder="Eg-1000" div_class="col-md-3" val="{{($activities->corpus_fund ?? '')}}"/>
                             
                        </div>
                    </div>

                <div class="card-header"><div class="card-title">LOAN/BORROWERS</div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Nos. of Loan Account/Borrowers" Name="nos_loanorborrower_account"  placeholder="Eg-2" div_class="col-md-3" val="{{($activities->nos_loanorborrower_account ?? '')}}"/>
                                <x-column_-input  title="Total Loan Amount Disbured" Name="total_loan_disbured"  placeholder="Eg-100 " div_class="col-md-3" val="{{($activities->total_loan_disbured ?? '')}}"/>
                                <x-column_-input  title="Nos. of Outstanding Borrowers" Name="outstanding_borrower"  placeholder="Eg-1" div_class="col-md-3" val="{{($activities->outstanding_borrower ?? '')}}"/>
                                <x-column_-input  title="Outstanding Amount" Name="outstanding_amount"  placeholder="Eg- 1000" div_class="col-md-3" val="{{($activities->outstanding_amount ?? '')}}"/>
                                
                              </div>
                      </div>

                      <div class="card-header"><div class="card-title">OTHER ACTIVITIES </div></div>
                      <div class="card-body">
                              <div class="row g-2">
                                 
                                <x-column_-input  title="Product Kept in Collection Market Centre (CMC)" Name="product_cmc"  placeholder="Eg- what available in CMC" div_class="col-md-3" val="{{($activities->product_cmc ?? '')}}"/>
                                <x-column_-input  title="Tools and Machinery Available at Custom Hiring Centre" Name="machinery_tool_CHC"  placeholder="Eg- what available " div_class="col-md-3" val="{{($activities->total_loan_disbured ?? '')}}"/>
                                <x-column_-input  title="Agriculture Farming/Cultivation Item" Name="agriculture_item" placeholder="Eg-Maize, Pulse Etc" div_class="col-md-3" val="{{($activities->agriculture_item ?? '')}}"/>
                                <x-column_-input  title="Agriculture Farming/Cultivation Area" Name="agriculture_area"  placeholder="Eg- 1000" div_class="col-md-3" val="{{($activities->agriculture_area ?? '')}}"/>
                                <x-column_-input  title="Horticulture Plantation/Cultivation Item" Name="horticulture_item" placeholder="Eg-Pineapple, Banana Etc" div_class="col-md-3" val="{{($activities->horticulture_item ?? '')}}"/>
                                <x-column_-input  title="Horticulture Plantation/Cultivation Area" Name="horticulture_area"  placeholder="Eg- 1000" div_class="col-md-3" val="{{($activities->horticulture_area ?? '')}}"/>
                                <x-column_-input  title="Livestock" Name="livestock"  placeholder="Eg- Breeding, Fattening, Dairy Etc" div_class="col-md-3" val="{{($activities->livestock ?? '')}}"/>
                                </div>
                      </div>

                      <div class="card-body">
                        <div class="row g-2">
                           
                          <x-column_-input  title="Tading/Marketting" Name="marketing_trading"  placeholder="Eg- Bromstick, Ginger, Pepper Etc" div_class="col-md-3" val="{{($activities->marketing_trading ?? '')}}"/>
                          <x-column_-input  title="Grocery Consumer Store" Name="consumer_store"  placeholder="Eg- Food production, Clothing, Stationery items " div_class="col-md-3" val="{{($activities->consumer_store ?? '')}}"/>
                         
                          </div>
                        </div>

                      <div class="card-footer">
                        @if(!empty($activities->activity))
                        <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                        <button type="submit" class="btn btn-primary">Update</button>
                        @else
                         <a href="/Sector_view"><button type="button" class="btn btn-secondary">Back</button></a> 
                          <button type="submit" class="btn btn-primary">Save</button>
                          @endif
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
                '<div id="row2" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen/Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });

        $("#rowAdder1").click(function () {
            newRowAdd =
                '<div id="row1" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="recovery_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen or Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_male_clan[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="recovery_female_clan[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow1" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput1').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow1", function () {
            $(this).parents("#row1").remove();
        });
        var i=2;
        $("#rowAdder3").click(function () {
            
           
            newRowAdd =
                '<div id="row3" class="row g-2">'+
                '<div class="col-md-2">' +
                '<input name="years[]" type="text" class="form-control" placeholder="Eg- 10" required value="'+i+
                '" > </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_p_amount[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstanding_interest[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            i++;
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
            i--;
        });

        $("#rowAdder4").click(function () {
            newRowAdd =
                '<div id="row4" class="row g-2">'+
                '<div class="col-md-3">'+
                '<select name="outstandingloanee_clan[]" class="form-select" required>'+
                '<option selected disabled value="">Choose...</option>'+
                ' <option >ST</option>'+
                '<option>SC</option>'+
                '<option>Gen or Other</option>'+
                '</select>'+
                '<div class="valid-feedback">Looks good!</div>'+
                ' <div class="invalid-feedback">This field is required.</div>'+
                '</div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_male[]" type="text" class="form-control" placeholder="Eg- 10" required> </div>'+
                '<div class="col-md-2">' +
                '<input name="outstandingloanee_female[]" type="text" class="form-control" placeholder="Eg- 20" required> </div>'+
                '<button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput4').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow4", function () {
            $(this).parents("#row4").remove();
        });
</script>
