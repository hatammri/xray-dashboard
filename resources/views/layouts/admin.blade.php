<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>داشبورد - تجزیه و تحلیل | فرست - قالب مدیریت بوت‌استرپ</title>

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
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/apex-charts/apex-charts.css')}}">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    @yield('content')
    <!-- / Layout wrapper -->

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
    <script src="{{ asset('/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/assets/js/dashboards-analytics.js')}}"></script>
  </body>
</html>
