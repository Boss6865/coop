<x-layout>
    <x-navigation title="{{ $Datas->Name_of_the_Society }}" Nav="PACS" />
    <main class="app-main">
 
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row g-4 mb-4">
        <div class="col-12 card-outline mb-4">
          <!-- Default box -->
          <div class="card direct-chat direct-chat-warning">
            <div class="card-header ">
              <h3 class="card-title ">PRIMARY AGRICULTURAL CREDIT SOCITIES (PACS) DEATILS OF SOCIETY</h3>
              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-collapse"
                  title="Collapse"
                >
                  <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                  <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-lte-toggle="card-remove"
                  title="Remove"
                >
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                @isset($activities->activity)
                @else
                <div style="color:red">
                    <h2> <i class="bi bi-x-lg"></i> No information Available</h2>
                    <a href="/pacs/{{$Datas->id}}"><button class="btn btn-outline-dark">Click Here to Add information</button></a>
                </div>
                <table class="table">
                  
                  <tbody>
                    <tr>
                      <th scope="row"></th>
                      <th>Activity</th>
                      <td>Otto</td>
                      <th>Amount Sanctioned</th>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th>Nos. of member in which loans was sanctioned</th>
                      <td>member in which loans was sanctioned</td>
                      <th>Purpose of Which Loans was taken for</th>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <th>Activity</th>
                      <td>Otto</td>
                      <th>Amount Sanctioned</th>
                      <td>member in which loans was sanctioned/td>
                    </tr>
                  </tbody>
                </table>
                @endisset
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>

</x-layout>