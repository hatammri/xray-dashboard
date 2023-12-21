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

            <!-- Advanced Search -->
            <div class="card">
                <h5 class="card-header heading-color">جزئیات مغایرت بارنامه BR9654</h5>
                <!--Search Form -->
                <div class="card-datatable table-responsive">
                    <table class="dt-advanced-search table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>QR_Code</th>
                                <th>X_Ray</th>
                                <th>رفتار سگ</th>
                                <th>مشاهدات‌ کاربر</th>
                                <th>نتیجه</th>
                                <th>توضیحات</th>
                                <th>نمایش جزئیات</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th>QR_Code</th>
                                <th>X_Ray</th>
                                <th>رفتار سگ</th>
                                <th>مشاهدات‌ کاربر</th>
                                <th>نتیجه</th>
                                <th>توضیحات</th>
                                <th>نمایش جزئیات</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--/ Advanced Search -->
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
    <script src="../../assets/js/tables-datatables-compaire.js"></script>
@endsection
