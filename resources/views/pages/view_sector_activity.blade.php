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
                @if(!empty($sector->amount_sanctioned))
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
                @else
                <h3>No information Available</h3> <a href="/pacs/{{$Datas->id}}"><button>Click here to add information</button></a>
                @endif
              </div>
              <!-- /.card-body -->
              <div class="card-header">
                <h3 class="card-title">ACTIVITIES-I</h3>
              </div>
              <div class="card-body p-0">
              
              </div>
              <div class="card-header">
                <h3 class="card-title">ACTIVITIES - II</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               
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