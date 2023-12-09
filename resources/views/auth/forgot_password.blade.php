<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>ورود پایه |  داشبورد مدیریت شرکت صنایع الکترونیک ایران</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/img/favicon/favicon.ico')}}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/boxicons.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/flag-icons.css')}}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/rtl/rtl.css')}}">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.css')}}">
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}">

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/pages/page-auth.css')}}">
    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Forgot Password -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1" src="{{ asset('/assets/img/logo/sapa.png')}}">
                  </span>
                  <span class="app-brand-text demo h3 mb-0 fw-bold">صاپا</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-3 secondary-font">رمز عبور را فراموش کردید؟</h4>
              <p class="mb-4">ایمیل خود را وارد کنید و ما دستورالعمل های لازم را برای بازنشانی رمز عبور برای شما ارسال خواهیم کرد.</p>
              <form id="formAuthentication" class="mb-3" action="auth-reset-password-basic.html" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">ایمیل</label>
                  <input type="text" class="form-control text-start" id="email" name="email" placeholder="ایمیل خود را وارد کنید" autofocus dir="ltr">
                </div>
                <button class="btn btn-primary d-grid w-100">ارسال لینک بازنشانی</button>
              </form>
              <div class="text-center">
                <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                  بازگشت به ورود
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ asset('/assets/vendor/libs/hammer/hammer.js')}}"></script>

    <script src="{{ asset('/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{ asset('/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{ asset('/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/pages-auth.js')}}"></script>
  </body>
</html>
