<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MegCoop | Login Page</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="MegCoop| Admin Login" />
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
  <body class="login-page bg-body-secondary bg-image"
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
    <img src="../../dist/assets/img/avatar.png" class="rounded-circle shadow" alt="User Image" style="width:7%">
   
   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <form class="form-signin w-110">
   
      <h1 class="h3 mb-3 font-weight-normal text-center text-success-emphasis">ADMIN</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" class="form-control mb-4 w-150" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required>
      <div class="checkbox mb-3">
        {{-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label> --}}
        
      </div>
      <button class="btn btn-lg btn-secondary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-center text-dark-emphasis">&copy; 2025-2026</p>
    </form>
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
