@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">

@endsection
@section('content')
   <!-- Content wrapper -->
   <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">جدول‌های داده /</span> پیشرفته
      </h4>

      <!-- Ajax Sourced Server-side -->
      <div class="card">
        <h5 class="card-header heading-color">منبع با Ajax از سمت سرور</h5>
        <div class="card-datatable text-nowrap">
          <table class="datatables-ajax table table-bordered">
            <thead>
              <tr>
                <th>نام کامل</th>
                <th>ایمیل</th>
                <th>شغل</th>
                <th>دفتر</th>
                <th>تاریخ شروع</th>
                <th>حقوق</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <!--/ Ajax Sourced Server-side -->

      <hr class="my-5">

      <!-- Column Search -->
      <div class="card">
        <h5 class="card-header heading-color">جستجوی ستون</h5>
        <div class="card-datatable text-nowrap">
          <table class="dt-column-search table table-bordered">
            <thead>
              <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شغل</th>
                <th>شهر</th>
                <th>تاریخ</th>
                <th>حقوق</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شغل</th>
                <th>شهر</th>
                <th>تاریخ</th>
                <th>حقوق</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!--/ Column Search -->

      <hr class="my-5">

      <!-- Advanced Search -->
      <div class="card">
        <h5 class="card-header heading-color">جستجوی پیشرفته</h5>
        <!--Search Form -->
        <div class="card-body">
          <form class="dt_adv_search" method="POST">
            <div class="row">
              <div class="col-12">
                <div class="row g-3">
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">نام:</label>
                    <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="جان اسنو" data-column-index="0">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">ایمیل:</label>
                    <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com" data-column-index="1">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">مقام:</label>
                    <input type="text" class="form-control dt-input" data-column="3" placeholder="طراح وب" data-column-index="2">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">شهر:</label>
                    <input type="text" class="form-control dt-input" data-column="4" placeholder="تبریز" data-column-index="3">
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">تاریخ:</label>
                    <div class="mb-0">
                      <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4" name="dt_date">
                      <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date">
                      <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-4">
                    <label class="form-label">حقوق:</label>
                    <input type="text" class="form-control dt-input" data-column="6" placeholder="10000" data-column-index="5">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <hr class="mt-0">
        <div class="card-datatable table-responsive">
          <table class="dt-advanced-search table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th>نام گمرک</th>
                <th>نام دستگاه</th>
                <th>شهر</th>
                <th>تاریخ نصب</th>
                <th>تاریخ</th>
                <th>اپراتور</th>
                <th>اسکن</th>
                <th>مغایرت</th>
                <th>وضعیت</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>نام گمرک</th>
                <th>نام دستگاه</th>
                <th>شهر</th>
                <th>تاریخ نصب</th>
                <th>تاریخ</th>
                <th>اپراتور</th>
                <th>اسکن</th>
                <th>مغایرت</th>
                <th>وضعیت</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!--/ Advanced Search -->

      <hr class="my-5">

      <!-- Responsive Datatable -->
      <div class="card">
        <h5 class="card-header heading-color">جدول‌داده واکنش‌گرا</h5>
        <div class="card-datatable table-responsive">
          <table class="dt-responsive table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شغل</th>
                <th>شهر</th>
                <th>تاریخ</th>
                <th>حقوق</th>
                <th>سن</th>
                <th>تجربه شغلی</th>
                <th>وضعیت</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شغل</th>
                <th>شهر</th>
                <th>تاریخ</th>
                <th>حقوق</th>
                <th>سن</th>
                <th>تجربه شغلی</th>
                <th>وضعیت</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!--/ Responsive Datatable -->
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-fluid d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          طراحی شده با ❤️ ارائه شده در وب‌سایت
          <a href="https://rtl-theme.com" target="_blank" class="footer-link fw-semibold">راست‌چین</a>
        </div>
        <div>
          <a href="https://rtl-theme.com" class="footer-link me-4" target="_blank">لایسنس</a>
          <a href="https://rtl-theme.com" target="_blank" class="footer-link me-4">قالب‌های بیشتر</a>

          <a href="https://v3dboy.ir/previews/html/frest/documentation" target="_blank" class="footer-link me-4">مستندات</a>

          <a href="https://rtl-theme.com" target="_blank" class="footer-link d-none d-sm-inline-block">پشتیبانی</a>
        </div>
      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
@endsection
@section('scripts')
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/i18n/fa.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/jdate/jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr-jdate.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/l10n/fa-jdate.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/tables-datatables-scanners.js"></script>

@endsection
