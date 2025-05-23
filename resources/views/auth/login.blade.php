<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MegCoop | Login Page</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="MegCoop| Login Page" />
    <meta name="author" content="ColorlibHQ" />
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
 
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../../../dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="login-page bg-body-secondary">
    <div class="login-box">
      
      <!-- /.login-logo -->
      <div class="card">
        <div class="login-logo">
          <a href="../index2.html"><b>Administrator</b></a>
        </div>
        <div class="card-body login-card-body">
       
          <form  action="/auth_district" method="post" >
            @csrf
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email"  required value="{{old('email')}}"/>
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
              
                

                 
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password" required/>
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
           
            @error('email')
            <div class="input-group mb-3">
            <div style="color:red">{{$message}}</div>
            </div>
            @enderror
               
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
       
          <!-- /.social-auth-links -->
          <p class="mb-1"><a href="forgot-password.html">I forgot my password</a></p>
          
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
   
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../../../dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
 <!--begin::JavaScript-->

<!--end::JavaScript-->
  </body>
  <!--end::Body-->
</html>
