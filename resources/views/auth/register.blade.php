<x-layout>
    <x-navigation  Nav="Register New User" />
    <div class="card card-info card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">Create New User</div></div>
        <form class="needs-validation" action="/register" method ="POST" novalidate>
            @csrf
            <div class="card-body">
                <div class="row mb-3 ">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">User District</label>
                    <div class="col-md-4 col-sm-10">
                        <select class="form-select"  name="name" id="District_Name" required>
                            <option selected disabled value="">Choose District</option>
                            @forEach(json_decode(file_get_contents('assets/District.json')) as $sector)
                            
                            <option {{old('name')==$sector->Dist_Name? 'selected':''}}>{{ $sector->Dist_Name}}</option>
                            @endforeach
                          </select>
                      <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Choose an Option</div>
                        @error('name')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-md-4 col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" required value="{{old('email')}}"/>
                      <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field Cannot Be Blank</div>
                        @error('email')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-md-4 col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputEmail3" required/>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">This field Cannot Be Blank</div>
                      @error('password')
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-md-4 col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control" id="inputEmail3" required/>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">This field Cannot Be Blank</div>
                    </div>
                  </div>
                  {{-- <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-md-4 col-sm-10">
                        <select class="form-select"  name="Status" id="Status" required>
                            <option selected disabled value="">Choose</option>
                            <option>Enabled</option>
                            <option>Disabled</option>
                            
                          </select>
                      <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">This field Cannot Be Blank</div>
                    </div>
                  </div> --}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Create User</button>
                <button type="submit" class="btn float-end">Cancel</button>
              </div>
        </form>
    </div>

</x-layout>
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
  <!--end::JavaScript-->