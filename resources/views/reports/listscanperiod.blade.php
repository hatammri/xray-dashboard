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
                <h5 class="card-header heading-color">جستجوی پیشرفته</h5>
                <!--Search Form -->
                <div class="card-body">
                    <form class="dt_adv_search" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label"> نام گمرک:</label>
                                        <select id="country" class="select2 form-select">
                                            <option value="">همه موارد</option>
                                            <option value="Australia">میرجاوه</option>
                                            <option value="Bangladesh">جلفا</option>
                                            <option value="Belarus">لطف آباد</option>
                                            <option value="Brazil">بازرگان</option>
                                            <option value="Canada">پرویزخان</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label"> نام دستگاه:</label>
                                        <select id="country" class="select2 form-select">
                                            <option value="">همه موارد</option>
                                            <option value="Australia">بهیار 1</option>
                                            <option value="Bangladesh">ساپا 1</option>
                                            <option value="Belarus">ناک تک 3</option>
                                            <option value="Brazil">ساپا 2</option>
                                            <option value="Canada">ناک تک 2</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="form-label"> وضعیت دستگاه:</label>
                                        <select id="country" class="select2 form-select">
                                            <option value="">همه موارد</option>
                                            <option value="Australia">فعال</option>
                                            <option value="Bangladesh">غیر فعال</option>
                                        </select>
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
                                        <label class="form-label">تاریخ:</label>
                                        <div class="mb-0">
                                          <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5" placeholder="تاریخ شروع تا پایان" data-column-index="4" name="dt_date">
                                          <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5" data-column-index="4" name="value_from_start_date">
                                          <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date" data-column="5" data-column-index="4">
                                        </div>
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
                                <th>اپراتورها</th>
                                <th>تاریخ نصب</th>
                                <th>از تاریخ</th>
                                <th>تا تاریخ</th>
                                <th>تعداداسکن</th>
                                <th>تعداد مغایرت</th>
                                <th>وضعیت</th>
                                <th>جزئیات</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>نام گمرک</th>
                                <th>نام دستگاه</th>
                                <th>نام کاربر</th>
                                <th>تاریخ نصب</th>
                                <th>از تاریخ</th>
                                <th>تا تاریخ</th>
                                <th>تعداد اسکن</th>
                                <th>تعداد مغایرت</th>
                                <th>وضعیت</th>
                                <th>جزئیات</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--/ Advanced Search -->


        </div>
        <!-- / Content -->
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
    <script src="../../assets/js/tables-datatables-advanced.js"></script>

@endsection
