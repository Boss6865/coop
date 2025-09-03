<x-layout>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <x-navigation Nav="information" />
   <!--begin::Form Validation-->
   <div class="card card-info card-outline mb-4">
                    <!--begin::Header-->
          <div class="card-header"><div class="card-title">BASIC DETAILS</div></div>
                    <!--end::Header-->
                    <!--begin::Form-->
              <form class="needs-validation" action="/management1" method ="POST" novalidate>
              @csrf        
              <!--begin::Body-->
                  <div class="card-body">
                        <!--begin::Row-->
                      <div class="row g-2">
                          <!--begin::Col-->
                          <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Name Of The Cooperative Society</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom01"
                              value=""
                              name="Name_of_the_Society"
                              required
                              placeholder="Name Of The Cooperative Society"
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">Registration No.</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Registration_No"
                              placeholder="Registration No."
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                          <input type="hidden" name="Board" value="Board">
                          <input type="hidden" name="Pan" value="pan">
                           <!--begin::Col-->
                  <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Date Of Registration</label>
                            <input
                              type="text"
                              class="form-control"
                              id="Date_of_registration"
                              value=""
                               name="Date_of_registration"
                              required
                              placeholder="Date Of Registration"
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                      <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Type / Sector</label>
                            <select class="form-select" name="Sector_Type" id="Sector" required>
                              <option selected disabled value="">Choose...</option>
                              
                            </select>
                            <div class="col-md-12" style="display:none" id="other_mention_here">
                         
                            <input
                              type="text"
                              class="form-control"
                              id="other_mention"
                              value=""
                              name="other_mention"
                            />
                          </div>
                            
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">E-MAIL ID of the Society</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Email"
                              placeholder="Email"
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">PAN NO. of the Society</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                               name="Pan_of_Society"
                              placeholder="PAN No."
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                   
                      <!--end::Body-->
                      <div class="card-header"><div class="card-title">Location of the Society</div></div>
                     
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Area</label>
                            <select class="form-select" name="Location_Area" id="Select_Area" required>
                              <option selected disabled value="">Choose...</option>
                              <option>Rural</option>
                              <option>Urban</option>
                              
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">District</label>
                            <select class="form-select"  name="District" id="Select_District" required>
                              <option selected disabled value="">District</option>
                              
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">C&RD Block</label>
                            <select class="form-select" name="Block" id="Select_Block" required>
                              <option selected disabled value="">Choose...</option>
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">Circle</label>
                            <select class="form-select" name="Circle" id="Select_Circle" required>
                              <option selected disabled value="">Choose...</option>
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
  
                          <div class="card-header"><div class="card-title">Address of the Society</div></div>
                  
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">VILLAGE / LOCALITY / WARD</label>
                            <select class="form-select" name="Village" id="Select_village" required>
                              <option selected disabled value="">Choose...</option>
                              
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">Post Office</label>
                          
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Post_office"
                              placeholder="E.g Shillong B.P.O."
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Police Station</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Police_Station"
                              placeholder="E.g Raliang Police Station"
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-3">
                            <label for="validationCustom02" class="form-label">Pincode</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Pincode"
                              placeholder="E.g 793001"
                              required
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
              
  
                          <div class="card-header"><div class="card-title">Area of Operation</div></div>
                      <div class="card-body">
                        <!--begin::Row-->
                        <div class="row">
                          <!--begin::Col-->
                        <div class="col-5">
                          <select class="form-select"  name="Operation_District" id="Select_District1" required>
                              <option selected disabled value="">Choose District</option>
                              
                            </select>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-1">
                          <input type="text" class="form-control" placeholder="Total No." id="GetTotal" disabled />
                        </div>
                        <!--end::Col-->
                        
                        <!--begin::Col-->
                        <select class="js-example-basic-multiple" name="Operation_villages1" id="js-example-basic-single"">
                              <option value="0">Choose...</option>
                           
                            </select>
                        <input type="hidden" name="Operation_villages" id="villageselected"/>
                        <!--end::Col-->
                      </div>
                         <!--end::Row-->
                          
                          
                         
                         
                          
                          <div class="card-header"><div class="card-title">FUNCTIONING</div></div>
                      <div class="card-body">
                        <!--begin::Row-->
                      <div class="row g-2">
                          <!--begin::Col-->
                          <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Affiliation</label>
                            <select class="form-select" name="Affiliation" id="Affiliation" required">
                              <option selected disabled value="">Choose...</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                      </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Present Status Of The Society</label>
                            <select class="form-select" name="Status" id="validationCustom04" required onchange="HideMe(this.value)">
                              <option selected disabled value="">Choose...</option>
                              <option value="Function">Function</option>
                              <option value="Non-function">Non-function</option>
                              <option value="Under-Liquidation">Under Liquidation</option>
                            </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                          <!--end::Col-->
                        <div class="card-body">
                        <div class="row g-2" id="mydiv" hidden>
                        
                                  <!--begin::Col-->
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Nos Of Years The Society Have Stop Functioning</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationCustom02"
                              value=""
                              name="Years_of_Non_function"
                              placeholder="Enter Number of Years"
                            />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                          </div>
                          <!--end::Col-->
                         
                         
                          <!--begin::Col-->
                          <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Section 61/62 Conducted Or Not (Mentioned Date/Year)
                            <select class="form-select" name="" id="No1"  onchange="">
                              <option selected disabled value="">Choose...</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                              
                            </select>
                            <input
                              type="text"
                              class="form-control col-md-6"
                              id="Section_Conducted"
                              value=""
                              name="Section_Conducted"
                              placeholder="Enter Here"
                              disabled
                            />
                            </label>
                            
                            
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Cancellation Under Section 66 Yes / No (Mentioned Date/Year)
                            <select class="form-select" name="" id="Yes1" onchange="">
                              <option selected disabled value="">Choose...</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                              
                            </select>
                            <input
                              type="text"
                              class="form-control col-md-6"
                              id="Cancellation_Section"
                              value=""
                              name="Section_Cancellation"
                              placeholder="Enter Here"
                              disabled
                            />
                            </label>
                            
                            
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                        </div>
                         <!--end::Col-->
                </div>
                
                         
                  </div>
  </div>      
                      <!--begin::Footer-->
                  <div class="card-footer">
                        <button class="btn btn-info" type="submit">Save</button>
                  </div>
                      <!--end::Footer-->
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
  
                      function HideMe(val){
                        
                          let element = document.getElementById("mydiv");
                          let hidden = element.getAttribute("hidden");
                          if (val=="Non-function") {
                              element.removeAttribute("hidden");
                              
                           } else {
                              element.setAttribute("hidden", "hidden");
                          
                          }
                      }
                      
                    </script>
                    <!--end::JavaScript-->
  </div>
                  <!--end::Form Validation-->
  </x-layout>
  
  <script>
    //get Sector through JSON
  $(document).ready(function(){
          $.getJSON("assets/Sector_Name.json", function(data){
                  for(i=0;i<data.length;i++)
                  {
                    $('#Sector').append($('<option>').val(data[i].Sector_Name).text(data[i].Sector_Name));
                  }
            
          }).fail(function(){
              console.log("An error has occurred.");
          });
      });
  $("#Sector").on("change",function(){
    var sector =$("#Sector").val();
    if(sector=="OTHER TYPES"){
     $('#other_mention_here').show();
      $("#other_mention_here input").focus();
    }else{
      $('#other_mention_here').hide();
    }
  });
      // end of sector json
      //start of rural and urban district json
      $( "#Select_Area" ).on( "change", function() {
        var Area= $( "#Select_Area" ).val();
        if(Area=="Rural"){
          $.getJSON("assets/District.json", function(data){
            $("#Select_District").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose District",
                    Selected:true
                  }));
                  for(i=0;i<data.length;i++)
                  {
                    $('#Select_District').append($('<option>').val(data[i].Dist_Name).text(data[i].Dist_Name));
                  }
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
          
        } else if(Area=="Urban"){
          $.getJSON("assets/Urban_District.json", function(data){
                  $("#Select_District").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose District",
                    Selected:true
                  }));
  
                  for(i=0;i<data.length;i++)
                  {
                    $('#Select_District').append($('<option>').val(data[i].Dist_Name).text(data[i].Dist_Name));
                    
                  }
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
        }
        
      });
  
      //end of rural and urban district json
  
  //start to add block district wise
  
  $( "#Select_District" ).on( "change", function() {
    
        var District= $( "#Select_District" ).val();
       
          $.getJSON("assets/Dist_block.json", function(data){
            var data_filter = data.filter(element => element.Dist_Name ==District);
           
  
            $("#Select_Block").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose Block",
                    Selected:true
                  }));
                  for(i=0;i<data_filter.length;i++)
                  {
                    $('#Select_Block').append($('<option>').val(data_filter[i].Block_Name).text(data_filter[i].Block_Name));
                  }
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
          $.getJSON("assets/Circle_Name.json", function(data){
            var data_filter = data.filter(element => element.Dist_Name ==District);
           
  
            $("#Select_Circle").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose...",
                    Selected:true
                  }));
                  //console.log(data_filter);
                  for(i=0;i<data_filter.length;i++)
                  {
                    $('#Select_Circle').append($('<option>').val(data_filter[i].Circle_Name).text(data_filter[i].Circle_Name));
                  }
                  if(data_filter.length==0){
                    console.log("Enter");
                    $('#Select_Circle').append($('<option>').val("Not Available").text("Not Available").attr('selected','selected'));
                  }
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
  
        
      });
  
  
  //end of select block
  
  //start to add Village
  
  $( "#Select_Block" ).on( "change", function() {
        var Block= $( "#Select_Block" ).val();
        var Area= $( "#Select_Area" ).val();
        if(Area=="Rural"){
          $.getJSON("assets/Dist_Block_Vill.json", function(data){
            var data_filter = data.filter(element => element.Block_Name ==Block);
           //console.log(data_filter);
              
            $("#Select_village").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose Village",
                    Selected:true
                  }));
                  for(i=0;i<data_filter.length;i++)
                  {
                    $('#Select_village').append($('<option>').val(data_filter[i].Vill_Name).text(data_filter[i].Vill_Name));
                  }
                  
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
          }else if(Area=="Urban"){
             $.getJSON("assets/urban_village.json", function(data){
            var data_filter = data.filter(element => element.Block_Name ==Block);
           //console.log(data_filter);
              
            $("#Select_village").empty().append($('<option>', {
                    disabled: true,
                    value:"",
                    text: "Choose Village",
                    Selected:true
                  }));
                  for(i=0;i<data_filter.length;i++)
                  {
                    $('#Select_village').append($('<option>').val(data_filter[i].Vill_Name).text(data_filter[i].Vill_Name));
                  }
                  
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
          }
          
  
        
      });
  
  
  //end of village
  
  //Start: Affiliation
   $('#Affiliation').on("change",function() {
      var value= $( "#Affiliation" ).val();
        if(value=="Yes"){
          $('#Affiliation').removeAttr('value');
          $.getJSON("assets/affiliation.json", function(data){
                //console.log(data);
                for(i=0;i<data.length;i++)
                {
                   $('#Affiliation').append($('<option>').val(data[i].Affiliation).text(data[i].Affiliation));
                }
          
            }).fail(function(){
            //console.log("Fail to load Rural District");
        });
        }else if(value=="No"){
          $('#Affiliation').empty();
          $('#Affiliation').append($('<option>').val("Yes").text("Yes"));
            $('#Affiliation').append($('<option selected>').val("No").text("No"));
        }
      
   });
 

  $(document).ready(function() {

        $.getJSON("assets/District.json", function(data){
            
                  for(i=0;i<data.length;i++)
                  {
                    $('#Select_District1').append($('<option>').val(data[i].Dist_Name).text(data[i].Dist_Name));
                  }
            
              }).fail(function(){
              console.log("Fail to load Rural District");
          });
          
  
      
    });
  //End: affiliation
  
      $('#js-example-basic-single').select2({
        tags: "true",
        placeholder: 'Choose Villages',
    multiple:true,
    width: '50%',
    style:null,
    allowClear: true
  });
  
  
  $('#Select_District1').on("change",function() {
    var Dist_name=$('#Select_District1').val();
    var Area= $( "#Select_Area" ).val();
        if(Area=="Rural"){
           $("#js-example-basic-single").empty();
    $("#GetTotal").val("");
        //console.log(Dist_name);
        $.getJSON("assets/Dist_block.json", function(data){
          
          var data_filter = data.filter(element => element.Dist_Name ==Dist_name);
                
                for(i=0;i<data_filter.length;i++)
                {
                  //$('#js-example-basic-single').append($('<optgroup>').text(data_filter[i].Block_Name));
                  //console.log(data_filter[i].Block_Name);
                  var bname=data_filter[i].Block_Name;
                  
                  
                  multiply(bname);
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });
        }else if(Area=="Urban"){
          $("#js-example-basic-single").empty();
    $("#GetTotal").val("");
        //console.log(Dist_name);
        $.getJSON("assets/Dist_block.json", function(data){
          
          var data_filter = data.filter(element => element.Dist_Name ==Dist_name);
                
                for(i=0;i<data_filter.length;i++)
                {
                  //$('#js-example-basic-single').append($('<optgroup>').text(data_filter[i].Block_Name));
                  //console.log(data_filter[i].Block_Name);
                  var bname=data_filter[i].Block_Name;
                  
                  
                  multiply(bname);
                }
          
            }).fail(function(){
            console.log("Fail to load Rural District");
        });
        }
   
  
      // console.log($('#Select_District1').find(':selected').data('custom-attribute'));
    });
  
  
    function multiply(bname) {
      var Area= $( "#Select_Area" ).val();
        if(Area=="Rural"){
          $.getJSON("assets/Village_combine.json", function(data2){
                    // console.log(bname);
                          var $optGroup = '<optgroup label ="'+bname+'">';
                          var data_filter2 = data2.filter(element => element.Block_Name ==bname);
                          //console.log(data_filter2);
                          
                          for(j=0;j<data_filter2.length;j++)
                      {
                        
                        $optGroup+='<option>'+data_filter2[j].Vill_Name+'</option>';
                          //$('#js-example-basic-single').append($('<option>').val(data_filter2[j].Vill_Name ).text(data_filter2[j].Vill_Name ));
                          
                      }
                    
                      
                      $('#js-example-basic-single').append($optGroup);
                        });
        }else if(Area=="Urban"){
          $.getJSON("assets/Village_combine.json", function(data2){
                    
                          var $optGroup = '<optgroup label ="'+bname+'">';
                          
                          var data_filter2 = data2.filter(element => element.Block_Name ==bname);
                          //console.log(data_filter2);
                          
                          for(j=0;j<data_filter2.length;j++)
                      {
                        
                        $optGroup+='<option>'+data_filter2[j].Vill_Name+'</option>';
                          //$('#js-example-basic-single').append($('<option>').val(data_filter2[j].Vill_Name ).text(data_filter2[j].Vill_Name ));
                          
                      }
                   
                      
                      $('#js-example-basic-single').append($optGroup);
                        });
        }
      
                      
    //console.log(bname)
  }
  
  $( "#js-example-basic-single" ).on( "change", function() {
        var valueof=$( "#js-example-basic-single" ).val();
      $("#GetTotal").val(valueof.length);
         
      $("#villageselected").val(valueof);
      //console.log(valueof);
        
      });
  
  
  
  $( "#No1" ).on( "change", function() {
    var conceptName = $('#No1').find(":selected").val();
  
    if(conceptName=="Yes"){
      $("#Section_Conducted").prop('disabled', false);
    }else {
        $("#Section_Conducted").prop('disabled', true);
      }
    
    //console.log(conceptName);
  
  });
  $( "#Yes1" ).on( "change", function() {
    var conceptName = $('#Yes1').find(":selected").val();
    if(conceptName=="Yes"){
      $("#Cancellation_Section").prop('disabled', false);
    }else {
        $("#Cancellation_Section").prop('disabled', true);
      }
    //console.log(conceptName);
  
  });
  
  
  </script>
  <script>
    $('#Date_of_registration').datepicker({
        uiLibrary: 'bootstrap5',
        format: 'dd-mm-yyyy'
    });
</script>