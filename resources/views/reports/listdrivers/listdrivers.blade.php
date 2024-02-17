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
                <span class="text-muted fw-light">جدول‌داده /</span> گزارش خودروهای متخلف
            </h4>

                   <!-- Column Search -->
                   <div class="card">
                    <h5 class="card-header heading-color">گزارش خودروهای متخلف</h5>
                    <div class="card-datatable text-nowrap">
                      <table class="dt-column-search table table-bordered">

                        <thead>
                            <tr>
                                <th>نام راننده</th>
                                <th>نام ایستگاه مبدا</th>
                                <th>نام ایستگاه مقصد</th>
                                <th>تاریخ</th>
                                <th>مغایرت</th>
                                <th>شماره بارنامه</th>
                                <th>گزارش تخلف</th>
                                <th>وضعیت</th>
                                <th>نمایش جزئیات</th>
                              </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>نام راننده</th>
                                <th>نام ایستگاه مبدا</th>
                                <th>نام ایستگاه مقصد</th>
                                <th>تاریخ</th>
                                <th>مغایرت</th>
                                <th>شماره بارنامه</th>
                                <th>گزارش تخلف</th>
                                <th>وضعیت</th>
                                <th>نمایش جزئیات</th>
                              </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <!--/ Column Search -->
        </div>

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
    <script src="../../assets/js/tables-datatables-driver.js"></script>
@endsection
