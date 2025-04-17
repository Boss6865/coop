<x-layout>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="DetailsView" />
        <div class="card card-info card-outline mb-4">
                  

                 
            <form class="needs-validation" action="/capitals" method ="POST"  novalidate>
              @csrf
                   
                    <div class="card-header"><div class="card-title">MULTI-PURPOSE  SECTOR ::</div></div>
                    <div class="card-body">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Activity 1</label>
                                    <select name="CDF_Paid" class="form-select target2" id="Select1" required>
                                        <option selected disabled value="">Choose...</option>
                                        
                                        <option value="/handloom/{{$Datas->id;}}" @if(Session()->get('sector')=="HANDLOOM") selected @endif>HANDLOOM</option>
                                        <option value="/handicraft/{{$Datas->id;}}" @if(Session()->get('sector')=="HANDICRAFT") selected @endif>HANDICRAFT</option>
                                        <option value="/consumer/{{$Datas->id;}}" @if(Session()->get('sector')=="CONSUMER") selected @endif>CONSUMER</option>
                                        <option value="/dairy/{{$Datas->id;}}" @if(Session()->get('sector')=="DAIRY") selected @endif>DAIRY</option>
                                        <option value="/farming/{{$Datas->id;}}" @if(Session()->get('sector')=="FARMING") selected @endif>FARMING</option>
                                        <option value="/handloom/{{$Datas->id;}}"> FISHERIES</option>
                                        <option value="/handloom/{{$Datas->id;}}"> MARKETING</option>
                                        <option value="/handloom/{{$Datas->id;}}"> PROCESSING</option>
                                        <option value="/handloom/{{$Datas->id;}}"> TRANSPORT</option>
                                        <option value="/handloom/{{$Datas->id;}}"> LIVESTOCK</option>
                                        <option value="/handloom/{{$Datas->id;}}" value="TOURISMANDLRB"> TOURISM AND LRB</option>
                                        <option value="/handloom/{{$Datas->id;}}"> INDUSTRIAL</option>
                                        <option value="/handloom/{{$Datas->id;}}"> THRIFT AND CREDIT</option>
                                        <option value="/handloom/{{$Datas->id;}}"> LABOUR CONTRACT</option>
                                        <option value="/handloom/{{$Datas->id;}}"> HOUSING</option>
                                        <option value="OTHERSTYPES"> OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Activity 2</label>
                                    <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
                                        <option selected disabled value="">Choose...</option>
                                        
                                        <option> HANDLOOM</option>
                                        <option> HANDICRAFT</option>
                                        <option> CONSUMER</option>
                                        <option> DAIRY</option>
                                        <option> FARMING</option>
                                        <option> FISHERIES</option>
                                        <option> MARKETING</option>
                                        <option> PROCESSING</option>
                                        <option> TRANSPORT</option>
                                        <option> LIVESTOCK</option>
                                        <option> TOURISM AND LRB</option>
                                        <option> INDUSTRIAL</option>
                                        <option> THRIFT AND CREDIT</option>
                                        <option> LABOUR CONTRACT</option>
                                        <option> HOUSING</option>
                                        <option> OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Activity 3</label>
                                    <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option> HANDLOOM</option>
                                        <option> HANDICRAFT</option>
                                        <option> CONSUMER</option>
                                        <option> DAIRY</option>
                                        <option> FARMING</option>
                                        <option> FISHERIES</option>
                                        <option> MARKETING</option>
                                        <option> PROCESSING</option>
                                        <option> TRANSPORT</option>
                                        <option> LIVESTOCK</option>
                                        <option> TOURISM AND LRB</option>
                                        <option> INDUSTRIAL</option>
                                        <option> THRIFT AND CREDIT</option>
                                        <option> LABOUR CONTRACT</option>
                                        <option> HOUSING</option>
                                        <option> OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Activity 4</label>
                                    <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option> HANDLOOM</option>
                                        <option> HANDICRAFT</option>
                                        <option> CONSUMER</option>
                                        <option> DAIRY</option>
                                        <option> FARMING</option>
                                        <option> FISHERIES</option>
                                        <option> MARKETING</option>
                                        <option> PROCESSING</option>
                                        <option> TRANSPORT</option>
                                        <option> LIVESTOCK</option>
                                        <option> TOURISM AND LRB</option>
                                        <option> INDUSTRIAL</option>
                                        <option> THRIFT AND CREDIT</option>
                                        <option> LABOUR CONTRACT</option>
                                        <option> HOUSING</option>
                                        <option> OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Activity 5</label>
                                    <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
                                        <option selected disabled value="">Choose...</option>
                                       
                                        <option> HANDLOOM</option>
                                        <option> HANDICRAFT</option>
                                        <option> CONSUMER</option>
                                        <option> DAIRY</option>
                                        <option> FARMING</option>
                                        <option> FISHERIES</option>
                                        <option> MARKETING</option>
                                        <option> PROCESSING</option>
                                        <option> TRANSPORT</option>
                                        <option> LIVESTOCK</option>
                                        <option> TOURISM AND LRB</option>
                                        <option> INDUSTRIAL</option>
                                        <option> THRIFT AND CREDIT</option>
                                        <option> LABOUR CONTRACT</option>
                                        <option> HOUSING</option>
                                        <option> OTHERS TYPES</option>
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Other</label>
                                    <select name="CDF_Paid" class="form-select target2" id="selectid2" required>
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
                    </div>
                    <div class="modal-footer">
                    
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                   
            </form>
        </div>
        
        <!-- Button trigger modal -->

        
  <!-- Modal -->
  <div class="modal fade" id="HANDLOOM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">HANDLOOM</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
                <div class="row g-2">
                  <x-column_-input  title="No. Of Looms Owned" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Whether Society Use Natural Dyes</label>
                    <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                </div>
                  <x-column_-input  title="No. Of Dyeing Houses Owned" Name="Share_face_value" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  <x-column_-input  title="Name Of The Items Produced" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  <x-column_-input  title="Total Handloom Sale" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  <x-column_-input  title="Total Powerloom Sale" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  <x-column_-input  title="Total others Sale" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                  
                    <div class="col-md-4">
                     <label for="validationCustom01" class="form-label">Local Market</label>
                     <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                         <option selected disabled value="">Choose...</option>
                         <option>Yes</option>
                         <option>No</option>
                     </select>
                     <div class="valid-feedback">Looks good!</div>
                     <div class="invalid-feedback">This field is required. Can't be empty</div>
                  </div>
                
                <x-column_-input  title="Amount" Name="Authorize_share_capital" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Export</label>
                    <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                 </div>
                <x-column_-input  title="Amount" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <x-column_-input  title="Production Employee" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <x-column_-input  title="Administration Employee" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <x-column_-input  title="Others Employee" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <x-column_-input  title="Wage Paid" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <x-column_-input  title="Sale Depot" Name="No_of_looms_own" id="validationCustom09" placeholder="Eg-100" div_class="col-md-4"/>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Whether Own Workshed</label>
                    <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">This field is required. Can't be empty</div>
                 </div>
                 <div class="card-header"><div class="card-title">Value Of Yarn & Other Raw Materials</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Production Name" Name="Equipments_Name" id="validationCustom09" placeholder="Eg-Jainsem" div_class="col-md-3"/>
                          <x-column_-input  title="Production Quantity" Name="Equipments_Nos" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Production Amount" Name="Equipments_Nos" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                         
                        </div>
                        <div class="row g-2">
                            <x-column_-input  title="Purchase Name" Name="Equipments_Name" id="validationCustom09" placeholder="Eg-Jainsem" div_class="col-md-3"/>
                            <x-column_-input  title="Purchase Quantity" Name="Equipments_Nos" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                            <x-column_-input  title="Purchase Amount" Name="Equipments_Nos" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                           
                          </div>

                </div>
                <div class="card-header"><div class="card-title">No Of Other Equipments</div></div>
                <div class="card-body">
                        <div class="row g-2" id="newinput">
                          <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" div_class="col-md-8"/>
                          <x-column_-input  title="Total No." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <button type="button" id="rowAdder" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            
          </form>
        </div>
        </div>
       
      </div>
    </div>
  </div>


   <!-- Modal -->
   <div class="modal fade" id="HANDICRAFT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">HANDICRAFT</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">CANE & BAMBOO  WORK</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Speify Items Produced" Name="Equipments_Name[]" id="validationCustom09" placeholder="E.g " div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Craftsmen Employed" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Wages Paid" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Sales Turn Over" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>

                </div>
                <div class="card-header"><div class="card-title">OTHER ACTIVITIES ( WOOD WORK, JUTE ETC)</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Speify Items Produced" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Craftsmen Employed" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Wages Paid" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Sales Turn Over" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>

                </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal -->
   <div class="modal fade" id="CONSUMER" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">CONSUMER</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">MARK WHEREVER APPLICABLE</div></div>
                <div class="card-body">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Departmental Store</label>
                                <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                             </div>
                             <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Retails Units</label>
                                <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">This field is required. Can't be empty</div>
                             </div>
                          {{-- <x-column_-input  title="Departmental Store" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Retails Units" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/> --}}
                          
                          <x-column_-input  title="Nos. Of Branch" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Closing Stock Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Purchase During a Year" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>

                </div>
                <div class="card-header"><div class="card-title"> SALE OF  CONSUMER GOODS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Specify" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-6"/>
                          <x-column_-input  title="Total Sale" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Controlled Wholesale" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-6"/>
                          <x-column_-input  title="Controlled Retail" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-6"/>
                          <x-column_-input  title="Un-Controlled Wholesale" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-6"/>
                          <x-column_-input  title="Un-Controlled Wholesale" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-6"/>
                        </div>

                </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="DAIRY" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">DAIRY</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Nos. Of Milch Cows" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Total Value of Milch Cow" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. Of Cowshed" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                        <div class="row g-2">
                          <x-column_-input  title="Others Items (Specify)" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Other No." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Other Amount" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title"> MILK PROCURED</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Quantity in Litres" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
                <div class="card-header"><div class="card-title"> MILK UNSOLD</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Quantity in Litres" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
                <div class="card-header"><div class="card-title"> DAIRY PRODUCT SOLD</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Item (Specify)" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <div class="col-md-3">
                            <label for="validationCustom01" class="form-label">Milk collection Unit Facilities</label>
                            <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">This field is required. Can't be empty</div>
                         </div>
                         <div class="col-md-3">
                          <label for="validationCustom01" class="form-label">Milk Testing Facilities</label>
                          <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                              <option selected disabled value="">Choose...</option>
                              <option>Yes</option>
                              <option>No</option>
                          </select>
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">This field is required. Can't be empty</div>
                       </div>
                       <div class="col-md-3">
                        <label for="validationCustom01" class="form-label">Sales of Feeds and Medicine (Per Anum)</label>
                        <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field is required. Can't be empty</div>
                     </div>
                     <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>

                </div>
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="FARMING" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">FARMING</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">MEMBERSHIP</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="ST Male" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="ST Female" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="SC Male" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="SC Feale" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                        <div class="row g-2">
                          <x-column_-input  title="Of Which Landholders (in Nos)" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Of Which Argriculture Labourers (in Nos)" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                <div class="card-header"><div class="card-title">FARMING ACTIVITIES</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Types of Agri/Horti Produce" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Production In Quantity" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Amount" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
                <div class="card-header"><div class="card-title"> SALE OF PRODUCE	</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Quantity" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Amount" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
               
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="FISHERIES" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">FISHERIES</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">NO. OF FISHERMEN</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Male" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Female" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">ASSETS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Total Nos. Of Fish Pond" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Area of Fish Pond (Hectares)" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value of Fish Pond" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                        <div class="row g-2">
                          <x-column_-input  title="Total Nos. Of Nursery Pond" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Area of Nursery Pond (Hectares)" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value of Nursery Pond" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
                <div class="card-header"><div class="card-title"> FISH CATCHED/REARED & SALES	</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Types of Fish Reared" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="In Quantity" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Sales of Fresh Fish and Others" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                        <div class="row g-2">
                          <x-column_-input  title="Dry Fish Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Smoke Fish Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Sale of Fishing Material and Others" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>

                </div>
               
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  
  <div class="modal fade" id="MARKETING" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">MARKETING</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">AGRICULTURE INPUTS SUCH AS SEED, FERTILIZERS ETC. (SPECIFY)</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Type" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Quantity" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">AGRICULTURE/HORTICULTURE/ OTHER PRODUCES</div></div>
                <div class="card-body">
                        <div id="newinput2" class="row g-2">
                          <x-column_-input  title="Name of the Product Produces" Name="product_name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Quantity" Name="product_quantity[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Values" Name="product_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <button type="button" id="rowAdder2" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                       
                </div>
                
               
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="PROCESSING" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">PROCESSING</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">PROCESSING UNIT / FACTORY</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Name of Item" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">PROCESSING MACHINE (SPECIFY)</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Name of the Item" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of the Item" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value of the Item" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                <div class="card-header"><div class="card-title">SALE OF PRODUCT	</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Item" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Quantity" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Amount" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                <div class="card-header"><div class="card-title">PACKAGING</div></div>
                <div class="card-body">
                        <div class="row g-2">
                           <div class="col-md-3">
                             <label for="validationCustom01" class="form-label">Packaging</label>
                             <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>Yes</option>
                                 <option>No</option>
                             </select>
                             <div class="valid-feedback">Looks good!</div>
                             <div class="invalid-feedback">This field is required. Can't be empty</div>
                          </div>
                          <x-column_-input  title="Types of Packaging" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>

            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="TRANSPORT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">TRANSPORT</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">TRANSPORT FACILITIES</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Nos. of Goods Vehicles" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-d" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Passenger Vehicles" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">TYPES OF VEHICLES</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Nos." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                <div class="card-header"><div class="card-title">OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Nos." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="income from services providers" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                </div>
                <div class="card-header"><div class="card-title">DRIVERS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Nos." Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg- 10" div_class="col-md-3"/>
                          <x-column_-input  title="Wages" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2000" div_class="col-md-3"/>
                        </div>
                </div>

                <div class="card-header"><div class="card-title">HELPERS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Nos." Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg- 10" div_class="col-md-3"/>
                          <x-column_-input  title="Wages" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2000" div_class="col-md-3"/>
                        </div>
                </div>

                <div class="card-header"><div class="card-title">OTHERS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Nos." Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg- 10" div_class="col-md-3"/>
                          <x-column_-input  title="Wages" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2000" div_class="col-md-3"/>
                        </div>
                </div>
        

            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="LIVESTOCK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">LIVESTOCK</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">FIXED ASSETS ON LIVESTOCK</div></div>
                <div class="card-body">
                        <div class="row g-2" id="newinput3">  
                          <x-column_-input  title="Name of Livestock" Name="livestock_Name[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Sheds" Name="shed_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value of Sheds" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <button type="button" id="rowAdder3" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                <div class="card-header"><div class="card-title">ASSETS ON LIVESTOCKS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Nos." Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="TOURISMANDLRB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">TOURISM AND LRB</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">FLOW OF TOURISTS  (PER ANNUM)</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Domestic" Name="livestock_Name[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="Foreign" Name="shed_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Collection of Entry Fee (per Anum)" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Collection of Parking Fee (per Anum)" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Collection of Other Fee (per Anum)" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Total Nos. of Guest House/Logde" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Income from Guest House/Logde" Name="shed_value[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">OTHER INCOME PER ANNUM</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Source" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Grocery/Clothing/Household Items/Stationery Items Etc" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Male Guide" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. Female Guide" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                <div class="card-header"><div class="card-title">PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES  </div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Types of Product" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3"/>
                          <x-column_-input  title="Sales Per Anum" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                

                <div class="card-header"><div class="card-title">OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</div></div>
                <div class="card-body">
                        <div class="row g-2" id="newinput4">
                          <x-column_-input  title="Name" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-Boat,Kayak, Life Jacket" div_class="col-md-3"/>
                          <x-column_-input  title="Nos" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <button type="button" id="rowAdder4" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                </div>
                
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  
  <div class="modal fade" id="INDUSTRIAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">INDUSTRIAL</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">FLOW OF TOURISTS  (PER ANNUM)</div></div>
                <div class="card-body">
                        <div class="row g-2" id="newinput5">  
                          <x-column_-input  title="Type of Business" Name="type_of_Business[]" id="validationCustom09" placeholder="Eg-Pottery, Carpentry" div_class="col-md-2"/>
                          <x-column_-input  title="Item Produced/Service" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-2"/>
                          <x-column_-input  title="Nos. of Person Employed" Name="person_employed[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Wages Paid" Name="wages_paid[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Sales TurnOver" Name="slaes_turnover[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <button type="button" id="rowAdder5" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                <div class="card-header"><div class="card-title">TRAINING CENTRE</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Cources Offered" Name="Equipments_Name[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. Of Trainnee" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Course Fee" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Teaching Staff" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Non-Teaching Staff" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Salary To Staff" Name="Equipments_Nos[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          
                        </div>
                </div>
                
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="THRIFTANDCREDIT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">THRIFT AND CREDIT</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">THRIFT CONTRIBUTION PER ANNUM</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Contribution During The Year" Name="type_of_Business[]" id="validationCustom09" placeholder="Eg-Pottery, Carpentry" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Members Contributed" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          
                          
                        </div>
                <div class="card-header"><div class="card-title">LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</div></div>
                <div class="card-body">
                        <div class="row g-2"  id="newinput6">
                          <x-column_-input  title="Types of Loan Members Borrowing " Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          <x-column_-input  title="Total No. of ST Members Borrowing " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          <x-column_-input  title="Total No. of SC Members Borrowing" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Total No. of Gen/Other Members Borrowing" Name="borrowing_loan_GO[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Total Amount Issues for Members Borrowing" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <button type="button" id="rowAdder6" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                </div>
                
                <div class="card-header"><div class="card-title">LOAN  RECOVERY  DURING THE CURRENT YEAR</div></div>
                <div class="card-body">
                        <div class="row g-2"  id="newinput7">
                          <x-column_-input  title="Types of Loan" Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="SC" Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="ST" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Gen/Other" Name="borrowing_loan_GO[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Principal" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Interest" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <button type="button" id="rowAdder7" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                </div>

                <div class="card-header"><div class="card-title">OUTSTANDING LOAN  DURING THE CURRENT YEAR</div></div>
                <div class="card-body">
                        <div class="row g-2"  id="newinput8">
                          <x-column_-input  title="Types of Loan" Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          <x-column_-input  title="SC" Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          <x-column_-input  title="ST" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Gen/Other" Name="borrowing_loan_GO[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Principal" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Interest" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Defaulters Nos." Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <x-column_-input  title="Defaulters Amount." Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-2"/>
                          <button type="button" id="rowAdder8" class="col-md-1"><i class="fa fa-plus" style="font-size:20px;color:violet">Add</i></button>
                        </div>
                </div>
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="LABOURCONTRACT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">LABOUR CONTRACT</h5>
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
                <div class="card-body">
                  <div class="row g-2">
                    <div class="col-md-3">
                      <label for="validationCustom01" class="form-label">Society Operation</label>
                      <select Name="Primary_Activity" class="form-select target" id="selectid3" required>
                          <option selected disabled value="">Choose...</option>
                          <option>Rural Area</option>
                          <option>Urban Area</option>
                          <option>Both</option>
                      </select>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">This field is required. Can't be empty</div>
                   </div>
                 </div>
                <div class="card-header"><div class="card-title">MEMBERSHIP INVOLVED IN CONTRACT WORKS</div></div>
                <div class="card-body">
                        <div class="row g-2" >
                          <x-column_-input  title="Types of Loan Members Borrowing " Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          <x-column_-input  title="Total No. of ST Members Borrowing " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-2"/>
                          
                        </div>
                </div>
                
            </div>
            </div>
          </form>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="HOUSING" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">HOUSING</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">BORROWINGS</div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Government" Name="type_of_Business[]" id="validationCustom09" placeholder="Eg-Pottery, Carpentry" div_class="col-md-3"/>
                          <x-column_-input  title="Dentral Fianance Agency" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="Housing and Urban Development Coporation" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="State Co-operative fiance Societies" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="National Housing Bank" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                          <x-column_-input  title="Other Fianancial Institution" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Eg-Poultry, Piggery" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">FIXED ASSETS</div></div>
                <div class="card-body">
                        <div class="row g-2"  id="newinput6">
                          <x-column_-input  title="Land " Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Building " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Others " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                        </div>
                </div>
                
                <div class="card-header"><div class="card-title">LOANS</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Advance Year of issue" Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="ADvance Amount" Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Recovery Principal" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Recovery Interest" Name="borrowing_loan_GO[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Outstanding Principal" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="Outstanding Interest" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="overdue Principal" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                          <x-column_-input  title="overdue Interest" Name="borrowing_loan_issues[]" id="validationCustom09" placeholder="Eg-2" div_class="col-md-3"/>
                         
                        </div>
                </div>

                <div class="card-header"><div class="card-title">INDEPENDENT HOUSES CONSTRUCTED DURING THE YEAR</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Number (By Society)" Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Value (By Society)" Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Number (By Members)" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-3" div_class="col-md-3"/>
                          <x-column_-input  title="Value (By Members)" Name="borrowing_loan_GO[]" id="validationCustom09" placeholder="Eg-3" div_class="col-md-3"/>
                        </div>
                </div>

                <div class="card-header"><div class="card-title">INDEPENDENT HOUSE CON- SRUCTED UPTO THE END OF THE  YEAR</div></div>
                <div class="card-body">
                        <div class="row g-2">
                          <x-column_-input  title="Number" Name="borrowing_loan[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Value" Name="borrowing_loan_st[]" id="validationCustom09" placeholder="Eg-DCA, Graphic Designer" div_class="col-md-3"/>
                          <x-column_-input  title="Income earned" Name="borrowing_loan_sc[]" id="validationCustom09" placeholder="Eg-3" div_class="col-md-3"/>
                          
                        </div>
                </div>
            </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="OTHERSTYPES" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">OTHERS TYPES</h5>
            
          </div>
        <div class="modal-body">
          <form class="needs-validation" novalidate>
            <div class="card-body">
              
                <div class="card-header"><div class="card-title">SCHOOL/MUSIC/COMPUTER/COACHING CENTRE </div></div>
                <div class="card-body">
                        <div class="row g-2">  
                          <x-column_-input  title="Course Offerred" Name="type_of_Business[]" id="validationCustom09" placeholder="Eg" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Student" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Example" div_class="col-md-3"/>
                          <x-column_-input  title="Course Fee" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Example" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Teacing Staff" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Example" div_class="col-md-3"/>
                          <x-column_-input  title="Nos. of Non Teaching Staff" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Example" div_class="col-md-3"/>
                          <x-column_-input  title="Salary To Staff" Name="name_of_item_produced[]" id="validationCustom09" placeholder="Example" div_class="col-md-3"/>
                        </div>
                <div class="card-header"><div class="card-title">OTHER ACTIVITIES</div></div>
                <div class="card-body">
                        <div class="row g-2"  id="newinput6">
                          <x-column_-input  title="Service Provide (specify) " Name="borrowing_loan[]" id="validationCustom09" placeholder="write Something" div_class="col-md-3"/>
                          <x-column_-input  title="Number of Employee involved " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="write Something" div_class="col-md-3"/>
                          <x-column_-input  title="Wages paid " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="write Something" div_class="col-md-3"/>
                          <x-column_-input  title="Total Turnover " Name="borrowing_loan_st[]" id="validationCustom09" placeholder="write Something" div_class="col-md-3"/>
                        </div>
                </div>
               
            </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
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
<script>
   
   
        $("#rowAdder2").click(function () {
            newRowAdd =
                '<div id="row2" class="row g-2"><div class="col-md-3">' +
                '<input name="product_name[]" type="text" class="form-control" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="product_quantity[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="product_value[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow2" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput2').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow2", function () {
            $(this).parents("#row2").remove();
        });

        $("#rowAdder3").click(function () {
            newRowAdd =
                '<div id="row3" class="row g-2"><div class="col-md-3">' +
                '<input name="livestock_Name[]" type="text" class="form-control" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" required> </div>'+
                '<div class="col-md-3">' +
                '<input name="shed_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="shed_value[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow3" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput3').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow3", function () {
            $(this).parents("#row3").remove();
        });
        $("#rowAdder4").click(function () {
            newRowAdd =
                '<div id="row4" class="row g-2"><div class="col-md-3">' +
                '<input name="Equipments_Name[]" type="text" class="form-control" placeholder="Eg-Spinning Machine, Jacquard,Knitting Machine,Sewing Machine and others" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="Equipments_Nos[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow4" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput4').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow4", function () {
            $(this).parents("#row4").remove();
        });
        $("#rowAdder5").click(function () {
            newRowAdd =
                '<div id="row5" class="row g-2"><div class="col-md-2">' +
                '<input name="type_of_Business[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="name_of_item_produced[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="person_employed[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="wages_paid[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="slaes_turnover[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow5" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput5').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow5", function () {
            $(this).parents("#row5").remove();
        });
        $("#rowAdder6").click(function () {
            newRowAdd =
                '<div id="row6" class="row g-2"><div class="col-md-2">' +
                '<input name="borrowing_loan[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_st[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow6" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput6').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow6", function () {
            $(this).parents("#row6").remove();
        });

        $("#rowAdder7").click(function () {
            newRowAdd =
                '<div id="row7" class="row g-2"><div class="col-md-3">' +
                '<input name="borrowing_loan[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="borrowing_loan_st[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-3">' +
                  '<input name="borrowing_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-3">' +
                  '<input name="borrowing_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-3">' +
                  '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-3">' +
                    '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow7" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput7').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow7", function () {
            $(this).parents("#row7").remove();
        });

        $("#rowAdder8").click(function () {
            newRowAdd =
                '<div id="row8" class="row g-2"><div class="col-md-2">' +
                '<input name="borrowing_loan[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_st[]" type="text" class="form-control" placeholder="Eg-Pottery, Carpentry" required> </div>'+
                '<div class="col-md-2">' +
                  '<input name="borrowing_loan_sc[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_GO[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                  '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                  '<div class="col-md-2">' +
                    '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                    '<div class="col-md-2">' +
                      '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                      '<div class="col-md-2">' +
                    '<input name="borrowing_loan_issues[]" type="text" class="form-control" placeholder="Eg- 2" required> </div>'+
                '<button type="button" id="DeleteRow8" class="col-md-1"><i class="fa fa-minus" style="font-size:20px;color:red"></i></button></div>';

            $('#newinput8').append(newRowAdd);
            
        });

        $("body").on("click", "#DeleteRow8", function () {
            $(this).parents("#row8").remove();
        });
  </script>