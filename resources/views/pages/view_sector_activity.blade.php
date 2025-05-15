<x-layout>
    <x-navigation  title="{{ $Datas->Name_of_the_Society }}" Nav="Sector and Activies" />
 <!--begin::App Main-->
 <main class="app-main">
    
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-md-12">
            
            <!-- /.card -->
            <div class="card mb-4">
              <div class="card-header">
                <h5 class="card-title">SECTOR</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                @if($Datas->Sector_Type=="PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS)")
                @if($sector!=null)
                <table class="table table-bordered table-sm">
               
                    
                  <tbody>
                    
                    <tr class="align-middle">
                        <th colspan="4" class="text-center">KCC LOAN AVAILED DURING THE YEAR CURRENT YEAR</th>
                    </tr>
                    
                    <tr>
                       <th>Amount Santioned:</th>
                        <td>{{$sector->amount_sanctioned}}</td>
                       <th>Nos. of member in which loans was sanctioned:</th>
                        <td>{{$sector->nos_of_member_loan_for}}</td>
                    </tr>
                   <tr>
                    <th>Purpose of Which Loans was taken for:</th>
                        <td>{{$sector->purpose_taken_for;}}</td>
                   </tr>
                      <tr class="align-middle">
                        <th colspan="4" class="text-center">NO. OF KCC LOAN ISSUED TO MEMBERS DURING THE CURRENT YEAR</th>
                    </tr>
                    @php
                    $jan1=json_decode($sector->female_clan);
                    $jan2=json_decode($sector->male_clan);
                    @endphp
                    @forEach(json_decode($sector->clan) as $key=> $data)
                    @if($data =="ST")
                        <tr>
                            <th>Male ST:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female ST:</th>
                        <td>{{$jan1[$key]}}</td>
                        </tr>
                    @elseif($data =="SC")
                         <tr>
                            <th>Male SC:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female SC:</th>
                        <td>{{$jan1[$key]}}</td>
                         </tr>
                    @elseif($data =="Gen or Other")
                     <tr>
                        <th>Male Gen or Other:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female Gen or Other:</th>
                        <td>{{$jan1[$key]}}</td>
                     </tr>
                    @endif
                    @endforeach
                     <tr class="align-middle">
                        <th colspan="4" class="text-center">LOAN  RECOVERY  DURING THE CURRENT YEAR</th>
                    </tr>
                    @php
                    $jan1=json_decode($sector->recovery_female_clan);
                    $jan2=json_decode($sector->recovery_male_clan);
                    @endphp
                    @forEach(json_decode($sector->recovery_clan) as $key=> $data)
                    @if($data =="ST")
                        <tr>
                            <th>Male ST:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female ST:</th>
                        <td>{{$jan1[$key]}}</td>
                        </tr>
                    @elseif($data =="SC")
                         <tr>
                            <th>Male SC:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female SC:</th>
                        <td>{{$jan1[$key]}}</td>
                         </tr>
                    @elseif($data =="Gen or Other")
                     <tr>
                        <th>Male Gen or Other:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female Gen or Other:</th>
                        <td>{{$jan1[$key]}}</td>
                     </tr>
                    @endif
                    @endforeach
                     <tr class="align-middle">
                        <th colspan="4" class="text-center">TOTAL AMOUNT RECOVERY</th>
                    </tr>
                    
                    <tr>
                       <th>Principal Amount:</th>
                        <td>{{$sector->principal_amount}}</td>
                       <th>Interest Amount:</th>
                        <td>{{$sector->interest_amount}}</td>
                    </tr>
                    <tr class="align-middle">
                        <th colspan="4" class="text-center">KCC LOAN OUTSTANDING FOR THE LAST FIVE YEARS</th>
                    </tr>
                    @php
                        $jan1=json_decode($sector->outstanding_p_amount);
                        $jan2=json_decode($sector->outstanding_interest);
                    @endphp
                    @foreach(json_decode($sector->years) as $key => $data)
                    <tr>
                       <th>{{$key+1}} Years Principal Amount:</th>
                        <td>{{$jan1[$key]}}</td>
                       <th>{{$key+1}} Years Interest Amount:</th>
                        <td>{{$jan2[$key]}}</td>
                       
                    </tr>
                    @endforeach
                    <tr class="align-middle">
                        <th colspan="4" class="text-center">NO. OF OUTSTANDING LOANEE MEMBERS</th>
                    </tr>
                     @php
                        $jan1=json_decode($sector->outstandingloanee_female);
                        $jan2=json_decode($sector->outstandingloanee_male);
                    @endphp
                    @forEach(json_decode($sector->recovery_clan) as $key=> $data)
                    @if($data =="ST")
                        <tr>
                            <th>Male ST:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female ST:</th>
                        <td>{{$jan1[$key]}}</td>
                        </tr>
                    @elseif($data =="SC")
                         <tr>
                            <th>Male SC:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female SC:</th>
                        <td>{{$jan1[$key]}}</td>
                         </tr>
                    @elseif($data =="Gen or Other")
                     <tr>
                        <th>Male Gen or Other:</th>
                        <td>{{$jan2[$key]}}</td>
                       <th>Female Gen or Other:</th>
                        <td>{{$jan1[$key]}}</td>
                     </tr>
                    @endif
                    @endforeach
                    <tr>
                       <th>Defaulters Nos.:</th>
                        <td>{{$sector->defaulter_no}}</td>
                       <th>Defaulters Amount:</th>
                        <td>{{$sector->defaulter_amount}}</td>
                    </tr>
                    <tr class="align-middle">
                        <th colspan="4" class="text-center">PROVISION FOR NPA (KCC)</th>
                    </tr>
                    
                    <tr>
                       <th>Principal:</th>
                        <td>{{$sector->npa_principal}}</td>
                       <th>Interest:</th>
                        <td>{{$sector->npa_interest}}</td>
                    </tr>
                      
                  </tbody>
                </table>
                <div class="modal-footer">
                    <a href="/pacs/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                @else
                <h1>No information</h1>
                  <a href="/pacs/{{$Datas->id}}"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                @endif
                @elseif($Datas->Sector_Type=="IVCS")
                @if($sector!=null)
                  <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">INTEGRATED VILLAGE COOPERATIVE SOCIETIES </h3></div></div>
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6">
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Activity</th>
                          <td>{{$sector->activity}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of the Household Covered by the Society</th>
                          <td>{{$sector->household_covered}}</td>
                        </tr>
                        <tr>
                          <th>Corpus Fund</th>
                          <td>{{$sector->corpus_fund}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    
                    <div class="col-sm-6"><h5>SHARE/SHARE-HOLDERS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of Share Holders/Member</th>
                          <td>{{$sector->share_holder_member_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Share Subscribe</th>
                          <td>{{$sector->nos_of_share_subscribe}}</td>
                        </tr>
                        <tr>
                          <th>Amount of Share Capitals</th>
                          <td>{{$sector->amount_share_capitals}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DEPOSITS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Saving Accounts</th>
                          <td>{{$sector->nos_saving_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of Saving Mobilised</th>
                          <td>{{$sector->total_saving_mobilised}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of R.D. Account</th>
                          <td>{{$sector->nos_rd_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of R.D. Mobilised</th>
                          <td>{{$sector->total_rd_mobilised}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of F.D. Account</th>
                          <td>{{$sector->nos_fd_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Amount of F.D. Mobilised</th>
                          <td>{{$sector->total_fd_mobilised}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>LOAN/BORROWERS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Loan Account/Borrowers</th>
                          <td>{{$sector->nos_loanorborrower_account}}</td>
                        </tr>
                        <tr>
                          <th>Total Loan Amount Disbured</th>
                          <td>{{$sector->total_loan_disbured}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Outstanding Borrowers</th>
                          <td>{{$sector->outstanding_borrower}}</td>
                        </tr>
                        <tr>
                          <th>Outstanding Amount</th>
                          <td>{{$sector->outstanding_amount}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Product Kept in Collection Market Centre (CMC)</th>
                          <td>{{$sector->product_cmc}}</td>
                        </tr>
                        <tr>
                          <th>Tools and Machinery Available at Custom Hiring Centre</th>
                          <td>{{$sector->machinery_tool_CHC}}</td>
                        </tr>
                        <tr>
                          <th>Agriculture Farming/Cultivation Item</th>
                          <td>{{$sector->agriculture_item}}</td>
                        </tr>
                        <tr>
                          <th>Agriculture Farming/Cultivation Area</th>
                          <td>{{$sector->agriculture_area}}</td>
                        </tr>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Item</th>
                          <td>{{$sector->horticulture_item}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Area</th>
                          <td>{{$sector->horticulture_area}}</td>
                        </tr>
                        <tr>
                          <th>Horticulture Plantation/Cultivation Area</th>
                          <td>{{$sector->horticulture_area}}</td>
                        </tr>
                        <tr>
                          <th>Livestock</th>
                          <td>{{$sector->livestock}}</td>
                        </tr>
                        <tr>
                          <th>Tading/Marketting</th>
                          <td>{{$sector->marketing_trading}}</td>
                        </tr>
                        <tr>
                          <th>Grocery Consumer Store</th>
                          <td>{{$sector->consumer_store}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/ivcs/{{$Datas->id}}"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/ivcs/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                @endif
              </div>
                @else
                @if($Datas->Sector_Type=="TOURISM")

                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>FLOW OF TOURISTS (PER ANNUM)</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Domestic</th>
                          <td>{{$sector->deomestic_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Foreign</th>
                          <td>{{$sector->foreign_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Entry Fee (per Anum)</th>
                          <td>{{$sector->entry_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Parking Fee (per Anum)</th>
                          <td>{{$sector->parking_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Other Fee (per Anum)</th>
                          <td>{{$sector->other_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. of Guest House/Logde</th>
                          <td>{{$sector->total_guest_house_or_lodge}}</td>
                        </tr>
                        <tr>
                          <th>Income from Guest House/Logde</th>
                          <td>{{$sector->income_from_guest_house_or_lodge}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER INCOME PER ANNUM</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Source</th>
                          <td>{{$sector->other_source}}</td>
                        </tr>
                        <tr>
                          <th>Value</th>
                          <td>{{$sector->other_value}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Male Guide</th>
                          <td>{{$sector->male_guide}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Female Guide</th>
                          <td>{{$sector->female_guide}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Product</th>
                          <td>{{$sector->product_promotion}}</td>
                        </tr>
                        <tr>
                          <th>Sales Per Anum</th>
                          <td>{{$sector->sale_of_product_annually}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</h5>
                      <table class="table">
                        <thead>
                          <th>Nos.</th>
                          <th>Name</th>
                          <th>Total Number</th>
                        </thead>
                      <tbody>
                        @php
                          $jan1=json_decode($sector->Equipments_Nos);
                        @endphp
                        @forEach(json_decode($sector->Equipments_Name) as $key => $data)
                        <tr>
                          <td>{{$key+1}}.</td>
                          <td>{{$data}}</td>
                          <td>{{$jan1[$key]}}</td>
                        </tr>
                        
                       @endforeach
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif


                @elseif($Datas->Sector_Type=="CONSUMER")


                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>CONSUMER</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Departmental Store</th>
                          <td>{{$sector->departmental_store}}</td>
                        </tr>
                        <tr>
                          <th>Retails Units</th>
                          <td>{{$sector->retails_unit}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Of Branch</th>
                          <td>{{$sector->no_of_branch}}</td>
                        </tr>
                        <tr>
                          <th>Closing Stock Value</th>
                          <td>{{$sector->closing_stock}}</td>
                        </tr>
                        <tr>
                          <th>Purchase During a Year</th>
                          <td>{{$sector->purchase_date}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>SALE OF  CONSUMER GOODS</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>item Name</th>
                          <td>{{$sector->item}}</td>
                        </tr>
                        <tr>
                          <th>Total Sale</th>
                          <td>{{$sector->total_sale}}</td>
                        </tr>
                        <tr>
                          <th>Controlled Wholesale</th>
                          <td>{{$sector->Controll_wholesale}}</td>
                        </tr>
                        <tr>
                          <th>Controlled Retail</th>
                          <td>{{$sector->controll_retail}}</td>
                        </tr>
                        <tr>
                          <th>Un-Controlled Wholesale</th>
                          <td>{{$sector->uncontroll_wholesale}}</td>
                        </tr>
                        <tr>
                          <th>Un-Controlled Retail</th>
                          <td>{{$sector->uncontroll_retail}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/consumer/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif


                


                @elseif(strtoupper($Datas->Sector_Type)=="DAIRY")

                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. Of Milch Cows</th>
                          <td>{{$sector->Nos_of_milch_cow}}</td>
                        </tr>
                        <tr>
                          <th>Total Value of Milch Cow</th>
                          <td>{{$sector->total_value_of_Milch_cow}}</td>
                        </tr>
                         <tr>
                          <th>Nos. Of Cowshed</th>
                          <td>{{$sector->no_of_cowshed}}</td>
                        </tr>
                        <tr>
                          <th>Others Items</th>
                          <td>{{$sector->other_item}}</td>
                        </tr>
                        <tr>
                          <th>Other No.</th>
                          <td>{{$sector->other_no}}</td>
                        </tr>
                        <tr>
                          <th>Other Amount</th>
                          <td>{{$sector->other_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>MILK PROCURED</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Quantity in Litres</th>
                          <td>{{$sector->produce_in_litre}}</td>
                        </tr>
                        <tr>
                          <th>Production Value</th>
                          <td>{{$sector->produce_value}}</td>
                        </tr>
                        <tr>
                          <th>Unsold Milk in Litre</th>
                          <td>{{$sector->usold_litre}}</td>
                        </tr>
                         <tr>
                          <th>Unsold Milk Value</th>
                          <td>{{$sector->unsold_value}}</td>
                        </tr>
                         <tr>
                          <th>Milk collection Unit Facilities</th>
                          <td>{{$sector->collection_facility}}</td>
                        </tr>
                        <tr>
                          <th>Milk Testing Facilities</th>
                          <td>{{$sector->testing_facility}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine (Per Anum)</th>
                          <td>{{$sector->sale_of_feed_medicine}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine Value</th>
                          <td>{{$sector->sale_of_feed_medicine_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DAIRY PRODUCT SOLD</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Item Produced</th>
                          <td>{{$sector->dairy_product_item}}</td>
                        </tr>
                        <tr>
                          <th>Produced Item Value</th>
                          <td>{{$sector->dairy_product_value}}</td>
                        </tr>
                       
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  
                @elseif($Datas->Sector_Type=="PROCESSING")



                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>PROCESSING UNIT / FACTORY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of Item</th>
                          <td>{{$sector->item_name}}</td>
                        </tr>
                        <tr>
                          <th>Item Value</th>
                          <td>{{$sector->item_value}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PROCESSING MACHINE </h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of the Item</th>
                          <td>{{$sector->process_machine_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of the Item</th>
                          <td>{{$sector->process_item_Nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Item</th>
                          <td>{{$sector->process_item_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>SALE OF PRODUCT</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Item</th>
                          <td>{{$sector->sale_of_item_name}}</td>
                        </tr>
                        <tr>
                          <th>Quantity</th>
                          <td>{{$sector->sale_of_item_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Amount</th>
                          <td>{{$sector->sale_of_item_amount}}</td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PACKAGING</h5>
                      <table class="table">
                        
                      <tbody>
                        <tr>
                          <th>Packaging</th>
                          <td>{{$sector->packing}}</td>
                        </tr>
                        <tr>
                          <th>Types of Packaging</th>
                          <td>{{$sector->packaging_type}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                




                @elseif($Datas->Sector_Type=="INDUSTRIAL")


                
                <a href="/industry/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information</button></a>
                @elseif($Datas->Sector_Type=="TRANSPORT")


                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TRANSPORT FACILITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Goods Vehicles</th>
                          <td>{{$sector->nos_of_Goods_vehicle}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Passenger Vehicles</th>
                          <td>{{$sector->no_of_passenger_vehichle}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>TYPES OF VEHICLES</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Vehicle Type</th>
                          <td>{{$sector->vehicle_type}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Vehicle</th>
                          <td>{{$sector->vehicle_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Vehicle</th>
                          <td>{{$sector->vehicle_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Other Assets Name</th>
                          <td>{{$sector->other_asset_name}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Other Assets</th>
                          <td>{{$sector->other_asset_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the other Assets</th>
                          <td>{{$sector->other_asset_value}}</td>
                        </tr>
                        <tr>
                          <th>income from services providers</th>
                          <td>{{$sector->other_asset_income}}</td>
                        </tr>
                        <tr>
                          <th>Others Total</th>
                          <td>{{$sector->other_total}}</td>
                        </tr>
                        <tr>
                          <th>Other Total Wages</th>
                          <td>{{$sector->others_wages_total}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DRIVERS</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Number of Driver</th>
                          <td>{{$sector->total_driver}}</td>
                        </tr>
                        <tr>
                          <th>Total Wages Paid to Driver</th>
                          <td>{{$sector->total_driver_wages}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper</th>
                          <td>{{$sector->total_helper}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper Wages</th>
                          <td>{{$sector->total_helper_wages}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>


                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                



                @elseif(strtoupper($Datas->Sector_Type)=="FARMING" || strtoupper($Datas->Sector_Type)=="HORTICULTURE")
                
                    @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>MEMBERSHIP</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>ST Male</th>
                          <td>{{$sector->st_male}}</td>
                        </tr>
                        <tr>
                          <th>ST Female</th>
                          <td>{{$sector->st_female}}</td>
                        </tr>
                        <tr>
                          <th>SC Male</th>
                          <td>{{$sector->sc_male}}</td>
                        </tr>
                        <tr>
                          <th>SC Female</th>
                          <td>{{$sector->sc_female}}</td>
                        </tr>
                        <tr>
                          <th>Of Which Landholders</th>
                          <td>{{$sector->which_landholder}}</td>
                        </tr>
                        <tr>
                          <th>Of Which Argriculture Labourers </th>
                          <td>{{$sector->which_agriculture}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FARMING ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Agri/Horti Produce</th>
                          <td>{{$sector->type_produce_agriorhorti}}</td>
                        </tr>
                        <tr>
                          <th>Production In Quantity</th>
                          <td>{{$sector->production_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Amount</th>
                          <td>{{$sector->farming_activities_amount}}</td>
                        </tr>
                        <tr>
                          <th>Sale  Amount in Quantity</th>
                          <td>{{$sector->produce_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sale Amount</th>
                          <td>{{$sector->produce_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   
                  </div>
                  <div class="modal-footer">
                    <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                





                @elseif(strtoupper($Datas->Sector_Type)=="MARKETTING")
                <a href="/market/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information</button></a>
                @elseif(strtoupper($Datas->Sector_Type)=="PIGGERY POULTRY AND OTHER LIVESTOCK")
                <a href="/livestock/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information</button></a>
                @elseif(strtoupper($Datas->Sector_Type)=="HOUSING")

                <a href="/housing/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information</button></a>
                @elseif(strtoupper($Datas->Sector_Type)=="FISHERY")

                @if($sector!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>Nos. of Fisherman</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Male</th>
                          <td>{{$sector->male_fisher}}</td>
                        </tr>
                        <tr>
                          <th>Female</th>
                          <td>{{$sector->female_fisher}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>Asset</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Total Nos. Of Fish Pond</th>
                          <td>{{$sector->total_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Fish Pond (Hectares)</th>
                          <td>{{$sector->area_of_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Fish Pond</th>
                          <td>{{$sector->value_of_fish_pond}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. Of Nursery Pond</th>
                          <td>{{$sector->nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Nursery Pond (Hectares)</th>
                          <td>{{$sector->area_of_nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Nursery Pond</th>
                          <td>{{$sector->value_of_nursery_pond}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Fish Reared</th>
                          <td>{{$sector->type_of_fish_reared}}</td>
                        </tr>
                        <tr>
                          <th>Quantity in Kg</th>
                          <td>{{$sector->fish_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Fresh Fish and Others</th>
                          <td>{{$sector->sales_of_fresh_fish}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                     <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Dry Fish Value</th>
                          <td>{{$sector->dry_fish}}</td>
                        </tr>
                        <tr>
                          <th>Smoke Fish Value</th>
                          <td>{{$sector->smoke_fish}}</td>
                        </tr>
                        <tr>
                          <th>Sale of Fishing Material and Others</th>
                          <td>{{$sector->fishing_material_other}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                
                
                @elseif(strtoupper($Datas->Sector_Type)=="HANDICRAFT")


                @if($sector!=null)
                      <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>CANE & BAMBOO  WORK</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Specify Items Produced</th>
                          <td>{{$sector->item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$sector->nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Wages Paid</th>
                          <td>{{$sector->wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Sales Turn Over</th>
                          <td>{{$sector->sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Speify Items Produced</th>
                          <td>{{$sector->other_item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$sector->other_nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Others Wages Paid</th>
                          <td>{{$sector->other_wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Others Sales Turn Over</th>
                          <td>{{$sector->other_sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    
                  <div class="modal-footer">
                    <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif



                
                
                @elseif(strtoupper($Datas->Sector_Type)=="HANDLOOM WEAVERS")
                <a href="/handloom/{{$Datas->id;}}/Act1"><button type="button" class="btn btn-outline-dark">Click here to add information/button></a>
                
                @endif
                
                @endif
              </div>
              <!-- /.card-body -->
              <div class="card-header">
                
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-I: {{strtoupper($Activity->Primary_Activity)}}</h3></div></div>
                @if($Activity->Primary_Activity=="fishery")
                @if($Activity1!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>Nos. of Fisherman</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Male</th>
                          <td>{{$Activity1->male_fisher}}</td>
                        </tr>
                        <tr>
                          <th>Female</th>
                          <td>{{$Activity1->female_fisher}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>Asset</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Total Nos. Of Fish Pond</th>
                          <td>{{$Activity1->total_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Fish Pond (Hectares)</th>
                          <td>{{$Activity1->area_of_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Fish Pond</th>
                          <td>{{$Activity1->value_of_fish_pond}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. Of Nursery Pond</th>
                          <td>{{$Activity1->nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Area of Nursery Pond (Hectares)</th>
                          <td>{{$Activity1->area_of_nursery_pond}}</td>
                        </tr>
                        <tr>
                          <th>Value of Nursery Pond</th>
                          <td>{{$Activity1->value_of_nursery_pond}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Fish Reared</th>
                          <td>{{$Activity1->type_of_fish_reared}}</td>
                        </tr>
                        <tr>
                          <th>Quantity in Kg</th>
                          <td>{{$Activity1->fish_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Fresh Fish and Others</th>
                          <td>{{$Activity1->sales_of_fresh_fish}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                     <div class="col-sm-6"><h5>FISH CATCHED/REARED & SALES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Dry Fish Value</th>
                          <td>{{$Activity1->dry_fish}}</td>
                        </tr>
                        <tr>
                          <th>Smoke Fish Value</th>
                          <td>{{$Activity1->smoke_fish}}</td>
                        </tr>
                        <tr>
                          <th>Sale of Fishing Material and Others</th>
                          <td>{{$Activity1->fishing_material_other}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/fishery/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif
                  @elseif($Activity->Primary_Activity=="transport")

                  @if($Activity1!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TRANSPORT FACILITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. of Goods Vehicles</th>
                          <td>{{$Activity1->nos_of_Goods_vehicle}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Passenger Vehicles</th>
                          <td>{{$Activity1->no_of_passenger_vehichle}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>TYPES OF VEHICLES</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Vehicle Type</th>
                          <td>{{$Activity1->vehicle_type}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Vehicle</th>
                          <td>{{$Activity1->vehicle_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Vehicle</th>
                          <td>{{$Activity1->vehicle_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>OTHERS TYPES OF ASSETS RELATED WITH ACTIVITIES</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Other Assets Name</th>
                          <td>{{$Activity1->other_asset_name}}</td>
                        </tr>
                        <tr>
                          <th>Total Number of Other Assets</th>
                          <td>{{$Activity1->other_asset_nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the other Assets</th>
                          <td>{{$Activity1->other_asset_value}}</td>
                        </tr>
                        <tr>
                          <th>income from services providers</th>
                          <td>{{$Activity1->other_asset_income}}</td>
                        </tr>
                        <tr>
                          <th>Others Total</th>
                          <td>{{$Activity1->other_total}}</td>
                        </tr>
                        <tr>
                          <th>Other Total Wages</th>
                          <td>{{$Activity1->others_wages_total}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DRIVERS</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Total Number of Driver</th>
                          <td>{{$Activity1->total_driver}}</td>
                        </tr>
                        <tr>
                          <th>Total Wages Paid to Driver</th>
                          <td>{{$Activity1->total_driver_wages}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper</th>
                          <td>{{$Activity1->total_helper}}</td>
                        </tr>
                        <tr>
                          <th>Total Helper Wages</th>
                          <td>{{$Activity1->total_helper_wages}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>


                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/transport/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif

                  @elseif($Activity->Primary_Activity=="dairy")


                  @if($Activity1!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>TOTAL ASSETS RELATED WITH BUSINESS ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Nos. Of Milch Cows</th>
                          <td>{{$Activity1->Nos_of_milch_cow}}</td>
                        </tr>
                        <tr>
                          <th>Total Value of Milch Cow</th>
                          <td>{{$Activity1->total_value_of_Milch_cow}}</td>
                        </tr>
                         <tr>
                          <th>Nos. Of Cowshed</th>
                          <td>{{$Activity1->no_of_cowshed}}</td>
                        </tr>
                        <tr>
                          <th>Others Items</th>
                          <td>{{$Activity1->other_item}}</td>
                        </tr>
                        <tr>
                          <th>Other No.</th>
                          <td>{{$Activity1->other_no}}</td>
                        </tr>
                        <tr>
                          <th>Other Amount</th>
                          <td>{{$Activity1->other_amount}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>MILK PROCURED</h5> 
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <th>Quantity in Litres</th>
                          <td>{{$Activity1->produce_in_litre}}</td>
                        </tr>
                        <tr>
                          <th>Production Value</th>
                          <td>{{$Activity1->produce_value}}</td>
                        </tr>
                        <tr>
                          <th>Unsold Milk in Litre</th>
                          <td>{{$Activity1->usold_litre}}</td>
                        </tr>
                         <tr>
                          <th>Unsold Milk Value</th>
                          <td>{{$Activity1->unsold_value}}</td>
                        </tr>
                         <tr>
                          <th>Milk collection Unit Facilities</th>
                          <td>{{$Activity1->collection_facility}}</td>
                        </tr>
                        <tr>
                          <th>Milk Testing Facilities</th>
                          <td>{{$Activity1->testing_facility}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine (Per Anum)</th>
                          <td>{{$Activity1->sale_of_feed_medicine}}</td>
                        </tr>
                        <tr>
                          <th>Sales of Feeds and Medicine Value</th>
                          <td>{{$Activity1->sale_of_feed_medicine_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <div class="col-sm-6"><h5>DAIRY PRODUCT SOLD</h5> 
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>Item Produced</th>
                          <td>{{$Activity1->dairy_product_item}}</td>
                        </tr>
                        <tr>
                          <th>Produced Item Value</th>
                          <td>{{$Activity1->dairy_product_value}}</td>
                        </tr>
                       
                      </tbody>
                    </table>
                    </div>



                  </div>
                  </div>
                   <div class="modal-footer">
                    <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/dairy/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a>
                  @endif




                @endif
                 
              </div>
              
              <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-II: {{strtoupper($Activity->Secondary_Activity)}}</h3></div></div>
                @if($Activity->Secondary_Activity=="tourism")
                @if($Activity2!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>FLOW OF TOURISTS (PER ANNUM)</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Domestic</th>
                          <td>{{$Activity2->deomestic_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Foreign</th>
                          <td>{{$Activity2->foreign_tourist}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Entry Fee (per Anum)</th>
                          <td>{{$Activity2->entry_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Parking Fee (per Anum)</th>
                          <td>{{$Activity2->parking_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Collection of Other Fee (per Anum)</th>
                          <td>{{$Activity2->other_fee_annually}}</td>
                        </tr>
                        <tr>
                          <th>Total Nos. of Guest House/Logde</th>
                          <td>{{$Activity2->total_guest_house_or_lodge}}</td>
                        </tr>
                        <tr>
                          <th>Income from Guest House/Logde</th>
                          <td>{{$Activity2->income_from_guest_house_or_lodge}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER INCOME PER ANNUM</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Source</th>
                          <td>{{$Activity2->other_source}}</td>
                        </tr>
                        <tr>
                          <th>Value</th>
                          <td>{{$Activity2->other_value}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Male Guide</th>
                          <td>{{$Activity2->male_guide}}</td>
                        </tr>
                        <tr>
                          <th>Nos. Female Guide</th>
                          <td>{{$Activity2->female_guide}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>PRODUCT PRODUCED FOR THE PROMOTIONAL ACTIVIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Types of Product</th>
                          <td>{{$Activity2->product_promotion}}</td>
                        </tr>
                        <tr>
                          <th>Sales Per Anum</th>
                          <td>{{$Activity2->sale_of_product_annually}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>OTHER ASSETS RELATED TO THE ACTIVITY OF THE SOCIETY</h5>
                      <table class="table">
                        <thead>
                          <th>Nos.</th>
                          <th>Name</th>
                          <th>Total Number</th>
                        </thead>
                      <tbody>
                        @php
                          $jan1=json_decode($Activity2->Equipments_Nos);
                        @endphp
                        @forEach(json_decode($Activity2->Equipments_Name) as $key => $data)
                        <tr>
                          <td>{{$key+1}}.</td>
                          <td>{{$data}}</td>
                          <td>{{$jan1[$key]}}</td>
                        </tr>
                        
                       @endforeach
                        
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                   @else
                  <h1>No information</h1>
                  <a href="/tourism/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                  @elseif($Activity->Secondary_Activity=="handicraft")
                  @if($Activity2!=null)
                      <div class="container">
                      <div class="row">
                      <div class="col-sm-6"><h5>CANE & BAMBOO  WORK</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Specify Items Produced</th>
                          <td>{{$Activity2->item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$Activity2->nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Wages Paid</th>
                          <td>{{$Activity2->wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Sales Turn Over</th>
                          <td>{{$Activity2->sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>
                   

                      <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Speify Items Produced</th>
                          <td>{{$Activity2->other_item_produce}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Craftsmen Employed</th>
                          <td>{{$Activity2->other_nos_of_craftsmen}}</td>
                        </tr>
                        <tr>
                          <th>Others Wages Paid</th>
                          <td>{{$Activity2->other_wages_paid}}</td>
                        </tr>
                        <tr>
                          <th>Others Sales Turn Over</th>
                          <td>{{$Activity2->other_sales_turnover}}</td>
                        </tr>
                      
                        </tbody>
                      </table>
                      </div>


                    </div>
                   
                    </div>
                    </div>
                  <div class="modal-footer">
                    <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/handicraft/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif

                @endif
                
              </div>
              <div class="card-header">
                <div class="card-header"><div class="card-title"><h3 class="card-title">ACTIVITIES-III: {{strtoupper($Activity->Tertiary_Activity)}}</h3></div></div>
                @if($Activity->Tertiary_Activity=="processing")
                @if($Activity3!=null)
                  <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>PROCESSING UNIT / FACTORY</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of Item</th>
                          <td>{{$Activity3->item_name}}</td>
                        </tr>
                        <tr>
                          <th>Item Value</th>
                          <td>{{$Activity3->item_value}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PROCESSING MACHINE </h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Name of the Item</th>
                          <td>{{$Activity3->process_machine_name}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of the Item</th>
                          <td>{{$Activity3->process_item_Nos}}</td>
                        </tr>
                        <tr>
                          <th>Value of the Item</th>
                          <td>{{$Activity3->process_item_value}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-sm-6"><h5>SALE OF PRODUCT</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Item</th>
                          <td>{{$Activity3->sale_of_item_name}}</td>
                        </tr>
                        <tr>
                          <th>Quantity</th>
                          <td>{{$Activity3->sale_of_item_quantity}}</td>
                        </tr>
                        <tr>
                          <th>Amount</th>
                          <td>{{$Activity3->sale_of_item_amount}}</td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                    </div>
                    <div class="col-sm-6"><h5>PACKAGING</h5>
                      <table class="table">
                        
                      <tbody>
                        <tr>
                          <th>Packaging</th>
                          <td>{{$Activity3->packing}}</td>
                        </tr>
                        <tr>
                          <th>Types of Packaging</th>
                          <td>{{$Activity3->packaging_type}}</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                   </div>
                  </div>
                  <div class="modal-footer">
                    <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  </div>
                  @else
                  <h1>No information</h1>
                  <a href="/processing/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                  @elseif($Activity->Tertiary_Activity=="other")
                  @if($Activity3!=null)
                    <div class="container">
                   <div class="row">
                    <div class="col-sm-6"><h5>SCHOOL/MUSIC/COMPUTER/COACHING CENTRE</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Course Offerred</th>
                          <td>{{$Activity3->course_offered}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Student</th>
                          <td>{{$Activity3->nos_of_student}}</td>
                        </tr>
                        <tr>
                          <th>Course Fee</th>
                          <td>{{$Activity3->course_fee}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Teacing Staff</th>
                          <td>{{$Activity3->no_of_teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Nos. of Non Teaching Staff</th>
                          <td>{{$Activity3->no_of_non_teaching_staff}}</td>
                        </tr>
                        <tr>
                          <th>Salary To Staff</th>
                          <td>{{$Activity3->salary_to_staff}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                    
                    <div class="col-sm-6"><h5>OTHER ACTIVITIES</h5>
                      <table class="table">
                      <tbody>
                        <tr>
                          <th>Service Provide</th>
                          <td>{{$Activity3->service_provided}}</td>
                        </tr>
                        <tr>
                          <th>Number of Employee involved</th>
                          <td>{{$Activity3->employee}}</td>
                        </tr>
                        <tr>
                          <th>Wages paid</th>
                          <td>{{$Activity3->wage_paid}}</td>
                        </tr>
                        <tr>
                          <th>Total Turnover</th>
                          <td>{{$Activity3->turn_over}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>


                   </div>
                  
                  </div>
                  <div class="modal-footer">
                    <a href="/other/{{$Datas->id}}/Act1"><button type="button" class="btn btn-secondary">Edit</button></a> 
                  
                  
                  @else
                   <h1>No information</h1>
                  <a href="/other/{{$Datas->id}}/Act1"><button type="button" class="btn btn-outline-dark">Click Here to Add</button></a> 
                  @endif
                @endif
                
              </div>
            </div>
            <!-- /.card -->
          </div>
         
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->

</x-layout>