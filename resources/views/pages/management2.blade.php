<x-layout>
  @isset($Datas->Name_of_the_Society)
<x-navigation title="{{$Datas->Name_of_the_Society}}" Nav="Management II"/>
  @else
<x-navigation title="{{ Session()->get('Sooos'); }}" Nav="Management II"/>
  @endisset
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-git.js"></script> --}}
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   <div class="card card-info card-outline mb-4">
                  

                 
            <form class="needs-validation" action="/capitals" method ="POST"  novalidate>
              @csrf
                   @if(!empty($Datas->Name_of_the_Society))
                          <input type="hidden" name="Name_of_society2525" value="{{$Datas->Name_of_the_Society}}">
                        <input type="hidden" name="id_of_society2525" value="{{$Datas->id}}">
                          @else
                          <input type="hidden" name="Name_of_society2525" value="{{ Session()->get('Sooos'); }}">
                          <input type="hidden" name="id_of_society2525" value="{{ Session()->get('id_key'); }}">
                          @endif
                    {{-- <input type="hidden" name="Name_of_society2525" value="{{ Session()->get('Sooos'); }}">
                    <input type="hidden" name="id_of_society2525" value="{{ Session()->get('id_key'); }}"> --}}
                    <div class="card-header"><div class="card-title">DETAILS OF THE CHAIRMAN/PRESIDENT</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                               
                              <x-column_-input  title="Name" Name="President_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Age/Date of Birth" Name="President_DOB" id="President_DOB" placeholder="2003-11-19" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Contact No." Name="President_Contact" id="validationCustom09" placeholder="Eg-9856678090" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Email" Name="President_Email" id="validationCustom09" placeholder="Eg-johndeo@email.com" div_class="col-md-3" required="required"/>

                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">DETAILS OF THE SECRETARY</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                              <x-column_-input  title="Name" Name="Secretary_Name" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Age/Date of Birth" Name="Secretary_DOB" id="Secretary_DOB" placeholder="2003-11-19" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Contact No." Name="Secretary_Contact" id="validationCustom09" placeholder="Eg-9856678090" div_class="col-md-3" required="required"/>
                              <x-column_-input  title="Email" Name="Secretary_Email" id="validationCustom09" placeholder="Eg-johndeo@email.com" div_class="col-md-3" required="required"/>
                                
                            </div>
                    </div>
                    <div class="card-header"><div class="card-title">NAME OF THE MANAGING COMMITTEE MEMBERS / BOARD OF DIRECTOR</div></div>
                    <div class="card-body">
                            <div id="newinput" class="row g-2">
                               
                                <x-column_-input  title="Name of The Member" Name="Member_Name[]" id="validationCustom09" placeholder="Eg-John-Deo" div_class="col-md-4" required="required"/>
                                <x-column_-input title="Contact No" id="validationCustom10" Name="Member_Contact[]"  placeholder="Eg-9856678090" div_class="col-md-4" required="required"/>
                                
                                <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                            </div>
                    </div>
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Save</button>
                </div>
            </form>
                  <!--end::Form-->
                  <!--begin::JavaScript-->
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
                  <script type="text/javascript">
        $("#rowAdder").click(function () {
            newRowAdd =
                '<div id="row" class="row g-2"><div class="col-md-4">' +
                '<input name="Member_Name[]" type="text" class="form-control" placeholder="Eg-John-Deo" required> </div>'+
                '<div class="col-md-4">' +
                '<input name="Member_Contact[]" type="text" class="form-control" placeholder="Eg-9856678090" required> </div>'+
                '<button type="button" id="DeleteRow" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>
                  <!--end::JavaScript-->
</div>
</x-layout>

    