<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>داشبورد - تجزیه و تحلیل | فرست - قالب مدیریت بوت‌استرپ</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../../assets/css/demo.css">
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/rtl.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1" src="{{ asset('/assets/img/logo/sapa.png')}}">

              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">SAPA</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
              <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Layouts -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">برنامه‌ها و صفحات</span></li>
            <li class="menu-item active" >
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div >داشبورد</div>
              </a>
            </li>
            <!-- Apps & Pages -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">برنامه‌ها و صفحات</span></li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div >پرسنل</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div >تخصص</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div >سگ‌های‌ موادیاب</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div >گزارشات</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-invoice-list.html" class="menu-link">
                    <div data-i18n="List">لیست</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-preview.html" class="menu-link">
                    <div data-i18n="Preview">پیش‌نمایش</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-edit.html" class="menu-link">
                    <div data-i18n="Edit">ویرایش</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-add.html" class="menu-link">
                    <div data-i18n="Add">افزودن</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Users">کاربران</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-user-list.html" class="menu-link">
                    <div data-i18n="List">لیست</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="View">نمایش</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-user-view-account.html" class="menu-link">
                        <div data-i18n="Account">حساب</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-security.html" class="menu-link">
                        <div data-i18n="Security">امنیت</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">اعلان‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-connections.html" class="menu-link">
                        <div data-i18n="Connections">اتصالات</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div >رانندگان</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="app-user-list.html" class="menu-link">
                      <div data-i18n="List">لیست</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <div data-i18n="View">نمایش</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-user-view-account.html" class="menu-link">
                          <div data-i18n="Account">حساب</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-user-view-security.html" class="menu-link">
                          <div data-i18n="Security">امنیت</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-user-view-billing.html" class="menu-link">
                          <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-user-view-notifications.html" class="menu-link">
                          <div data-i18n="Notifications">اعلان‌ها</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-user-view-connections.html" class="menu-link">
                          <div data-i18n="Connections">اتصالات</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Pages">صفحات</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="User Profile">پروفایل کاربر</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-profile-user.html" class="menu-link">
                        <div data-i18n="Profile">پروفایل</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-teams.html" class="menu-link">
                        <div data-i18n="Teams">تیم‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-projects.html" class="menu-link">
                        <div data-i18n="Projects">پروژه‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-connections.html" class="menu-link">
                        <div data-i18n="Connections">اتصالات</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Account Settings">تنظیمات حساب</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">حساب</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-security.html" class="menu-link">
                        <div data-i18n="Security">امنیت</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">صورتحساب و پلن‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">اعلان‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">اتصالات</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-faq.html" class="menu-link">
                    <div data-i18n="FAQ">سوالات متداول</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Help Center">مرکز راهنمایی</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-help-center-landing.html" class="menu-link">
                        <div data-i18n="Landing">فرود</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-categories.html" class="menu-link">
                        <div data-i18n="Categories">دسته‌بندی‌ها</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-help-center-article.html" class="menu-link">
                        <div data-i18n="Article">مقاله</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-pricing.html" class="menu-link">
                    <div data-i18n="Pricing">قیمت گذاری</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Misc">متفرقه</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Error">خطا</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                        <div data-i18n="Under Maintenance">در دست تعمیر</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                        <div data-i18n="Coming Soon">به زودی</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                        <div data-i18n="Not Authorized">غیر مجاز</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">نمودارها و نقشه‌ها</span></li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div data-i18n="Charts">نمودارها</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="charts-apex.html" class="menu-link">
                    <div data-i18n="Apex Charts">نمودارهای Apex</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="charts-chartjs.html" class="menu-link">
                    <div data-i18n="ChartJS">نمودارهای ChartJS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div data-i18n="Leaflet Maps">نقشه‌های Leaflet</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">متفرقه</span></li>
            <li class="menu-item">
              <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">پشتیبانی</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">مستندات</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">
              <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                  <i class="bx bx-menu bx-sm"></i>
                </a>
              </div>

              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                  <div class="nav-item navbar-search-wrapper mb-0">
                    <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                      <i class="bx bx-search-alt bx-sm"></i>
                      <span class="d-none d-md-inline-block text-muted">جستجو <span class="d-inline-block" dir="ltr">(Ctrl+/)</span></span>
                    </a>
                  </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">


                  <!-- Style Switcher -->
                  <li class="nav-item me-2 me-xl-0">
                    <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                      <i class="bx bx-sm"></i>
                    </a>
                  </li>
                  <!--/ Style Switcher -->

                  <!-- Quick links  -->
                  <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      <i class="bx bx-grid-alt bx-sm"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                      <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h5 class="text-body mb-0 me-auto secondary-font">میانبرها</h5>
                          <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="افزودن میانبر"><i class="bx bx-sm bx-plus-circle"></i></a>
                        </div>
                      </div>
                      <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-calendar fs-4"></i>
                            </span>
                            <a href="app-calendar.html" class="stretched-link">تقویم</a>
                            <small class="text-muted mb-0">قرارهای ملاقات</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-food-menu fs-4"></i>
                            </span>
                            <a href="app-invoice-list.html" class="stretched-link">برنامه صورتحساب</a>
                            <small class="text-muted mb-0">مدیریت حساب‌ها</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-user fs-4"></i>
                            </span>
                            <a href="app-user-list.html" class="stretched-link">برنامه کاربر</a>
                            <small class="text-muted mb-0">مدیریت کاربران</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-check-shield fs-4"></i>
                            </span>
                            <a href="app-access-roles.html" class="stretched-link">مدیریت نقش‌‌ها</a>
                            <small class="text-muted mb-0">مجوزها</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                            </span>
                            <a href="index.html" class="stretched-link">داشبورد</a>
                            <small class="text-muted mb-0">پروفایل کاربر</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-cog fs-4"></i>
                            </span>
                            <a href="pages-account-settings-account.html" class="stretched-link">تنظیمات</a>
                            <small class="text-muted mb-0">تنظیمات حساب</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-help-circle fs-4"></i>
                            </span>
                            <a href="pages-help-center-landing.html" class="stretched-link">مرکز راهنمایی</a>
                            <small class="text-muted mb-0">سوالات متداول و مقالات</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                              <i class="bx bx-window-open fs-4"></i>
                            </span>
                            <a href="modal-examples.html" class="stretched-link">مودال‌ها</a>
                            <small class="text-muted mb-0">پاپ‌آپ‌های کاربردی</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Quick links -->

                  <!-- Notification -->
                  <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                      <i class="bx bx-bell bx-sm"></i>
                      <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                      <li class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h5 class="text-body mb-0 me-auto secondary-font">اعلان‌ها</h5>
                          <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="همه را به عنوان خوانده شده علامت بزن"><i class="bx fs-4 bx-envelope-open"></i></a>
                        </div>
                      </li>
                      <li class="dropdown-notifications-list scrollable-container">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">تبریک می‌گوییم کلارک</h6>
                                <p class="mb-1">شما نشان فروشنده برتر ماه را برنده شدید</p>
                                <small class="text-muted">1 ساعت قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-danger">اک</span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">دیوید بکهام</h6>
                                <p class="mb-1">درخواست شما را قبول کرد.</p>
                                <small class="text-muted">12 ساعت قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">پیام جدید</h6>
                                <p class="mb-1">شما پیام جدید از ناتالی دارید</p>
                                <small class="text-muted">1 ساعت قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">هورا! شما سفارش جدید دارید</h6>
                                <p class="mb-1">شرکت گوگل یک سفارش جدید ثبت کرد</p>
                                <small class="text-muted">1 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">برنامه مورد تایید قرار گرفت</h6>
                                <p class="mb-1">برنامه پروژه مدیریت شما پذیرفته شد.</p>
                                <small class="text-muted">2 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">گزارش ماهانه ایجاد شد</h6>
                                <p class="mb-1">گزارش ماهانه ماه خرداد ایجاد شد</p>
                                <small class="text-muted">3 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">ارسال درخواست ارتباط</h6>
                                <p class="mb-1">پیتر یک درخواست ارتباط برای شما ارسال کرد</p>
                                <small class="text-muted">4 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">پیام جدید از جین</h6>
                                <p class="mb-1">شما پیام جدید از سمت جین دارید</p>
                                <small class="text-muted">5 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                  <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                </div>
                              </div>
                              <div class="flex-grow-1">
                                <h6 class="mb-1">میزان مصرف CPU بالاست</h6>
                                <p class="mb-1">میران مصرف CPU در حال حاضر 88.63% است</p>
                                <small class="text-muted">5 روز قبل</small>
                              </div>
                              <div class="flex-shrink-0 dropdown-notifications-actions">
                                <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown-menu-footer border-top">
                        <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                          مشاهده همه اعلان‌ها
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ Notification -->

                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">محمدرضا حاتمیان</span>
                              <small>مدیر</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-profile-user.html">
                          <i class="bx bx-user me-2"></i>
                          <span class="align-middle">پروفایل من</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                          <i class="bx bx-cog me-2"></i>
                          <span class="align-middle">تنظیمات</span>
                        </a>
                      </li>

                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-help-center-landing.html">
                          <i class="bx bx-support me-2"></i>
                          <span class="align-middle">راهنمایی</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="pages-faq.html">
                          <i class="bx bx-help-circle me-2"></i>
                          <span class="align-middle">سوالات متداول</span>
                        </a>
                      </li>

                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">خروج</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>

              <!-- Search Small Screens -->
              <div class="navbar-search-wrapper search-input-wrapper d-none">
                <input type="text" class="form-control search-input container-fluid border-0" placeholder="جستجو ..." aria-label="Search...">
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
              </div>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Website Analytics-->
                <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">آمار وب‌سایت</h5>
                      <div class="dropdown primary-font">
                        <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
                          <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                          <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                          <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-2">
                      <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                        <div class="user-analytics text-center me-2">
                          <i class="bx bx-user me-1"></i>
                          <span>کاربران</span>
                          <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="success" data-series="35"></div>
                            <h3 class="mb-0">61K</h3>
                          </div>
                        </div>
                        <div class="sessions-analytics text-center me-2">
                          <i class="bx bx-pie-chart-alt me-1"></i>
                          <span>جلسات</span>
                          <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="warning" data-series="76"></div>
                            <h3 class="mb-0">92K</h3>
                          </div>
                        </div>
                        <div class="bounce-rate-analytics text-center">
                          <i class="bx bx-trending-up me-1"></i>
                          <span>نرخ نوسان</span>
                          <div class="d-flex align-items-center mt-2">
                            <div class="chart-report" data-color="danger" data-series="65"></div>
                            <h3 class="mb-0">72.6%</h3>
                          </div>
                        </div>
                      </div>
                      <div id="analyticsBarChart"></div>
                    </div>
                  </div>
                </div>

                <!-- Referral, conversion, impression & income charts -->
                <div class="col-lg-6 col-md-12">
                  <div class="row">
                    <!-- Referral Chart-->
                    <div class="col-sm-6 col-12 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <h2 class="mb-1">32,690</h2>
                          <span class="text-muted">ارجاع 40%</span>
                          <div id="referralLineChart"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Conversion Chart-->
                    <div class="col-sm-6 col-12 mb-4">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between pb-3">
                          <div class="conversion-title">
                            <h5 class="card-title mb-1">تبدیل</h5>
                            <p class="mb-0 text-muted primary-font">
                              60%
                              <i class="bx bx-chevron-up text-success"></i>
                            </p>
                          </div>
                          <h2 class="mb-0 primary-font">89k</h2>
                        </div>
                        <div class="card-body">
                          <div id="conversionBarchart"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Impression Radial Chart-->
                    <div class="col-sm-6 col-12 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <div id="impressionDonutChart" class="mt-2"></div>
                        </div>
                      </div>
                    </div>
                    <!-- Growth Chart-->
                    <div class="col-sm-6 col-12">
                      <div class="row">
                        <div class="col-12 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="avatar">
                                    <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-user fs-4"></i></span>
                                  </div>
                                  <div class="card-info">
                                    <h5 class="card-title mb-0 me-2 primary-font">38,566</h5>
                                    <small class="text-muted">تبدیل</small>
                                  </div>
                                </div>
                                <div id="conversationChart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="avatar">
                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-dollar fs-4"></i></span>
                                  </div>
                                  <div class="card-info">
                                    <h5 class="card-title mb-0 me-2 primary-font">53,659</h5>
                                    <small class="text-muted">درآمد</small>
                                  </div>
                                </div>
                                <div id="incomeChart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Referral, conversion, impression & income charts -->

                <!-- Activity -->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <h5 class="card-title mb-0">فعالیت</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex align-items-center mb-4 pb-2">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-cube"></i></span>
                          </div>
                          <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-2">
                              <span>کل فروش</span>
                              <span class="text-muted">2,459</span>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-primary" style="width: 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4 pb-2">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-dollar"></i></span>
                          </div>
                          <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-2">
                              <span>درآمد</span>
                              <span class="text-muted">8,478</span>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-4 pb-2">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-trending-up"></i></span>
                          </div>
                          <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-2">
                              <span>بودجه</span>
                              <span class="text-muted">12,490</span>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-check"></i></span>
                          </div>
                          <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between mb-2">
                              <span>وظایف</span>
                              <span class="text-muted">184</span>
                            </div>
                            <div class="progress" style="height: 6px">
                              <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Activity -->

                <!-- Profit Report & Registration -->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-12 mb-4">
                      <div class="card h-100">
                        <div class="card-header">
                          <h5 class="card-title mb-2">گزارش سود</h5>
                        </div>
                        <div class="card-body d-flex align-items-end justify-content-between">
                          <div class="d-flex justify-content-between align-items-center gap-3 w-100 mb-1">
                            <div class="d-flex align-content-center">
                              <div class="chart-report mt-n1" data-color="danger" data-series="25"></div>
                              <div class="chart-info">
                                <h5 class="mb-1 lh-inherit">12k تومان</h5>
                                <small class="text-muted">1400</small>
                              </div>
                            </div>
                            <div class="d-flex align-content-center">
                              <div class="chart-report mt-n1" data-color="info" data-series="50"></div>
                              <div class="chart-info">
                                <h5 class="mb-1 lh-inherit">64k تومان</h5>
                                <small class="text-muted">1401</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-4">
                      <div class="card h-100">
                        <div class="card-header pb-2">
                          <h5 class="card-title mb-0">ثبت نام</h5>
                        </div>
                        <div class="card-body pb-2">
                          <div class="d-flex justify-content-between align-items-end gap-3">
                            <div class="mb-3">
                              <div class="d-flex align-content-center align-items-center">
                                <h5 class="mb-0">58.4k</h5>
                                <i class="bx bx-chevron-up text-success"></i>
                              </div>
                              <small class="text-success">12.8%</small>
                            </div>
                            <div id="registrationsBarChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Profit Report & Registration -->

                <!-- Sales -->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-start justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2 mb-1">فروش‌ها</h5>
                        <small class="card-subtitle text-muted">محاسبه شده در 7 روز اخیر</small>
                      </div>
                      <div class="dropdown primary-font">
                        <button class="btn p-0" type="button" id="salesReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesReport">
                          <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                          <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                          <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="salesChart" class="mt-2"></div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-3">
                          <span class="text-primary me-2 pt-1"><i class="bx bx-up-arrow-alt bx-sm"></i></span>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">بیشترین فروش</h6>
                              <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">شنبه</small>
                            </div>
                            <div class="item-progress">28.6k</div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <span class="text-secondary me-2 pt-1"><i class="bx bx-down-arrow-alt bx-sm"></i></span>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">کمترین فروش</h6>
                              <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">پنجشنبه</small>
                            </div>
                            <div class="item-progress">7.9k</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Sales -->

                <!-- Growth Chart-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <div class="dropdown mb-3 mt-2">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          1401
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonSec">
                          <a class="dropdown-item" href="javascript:void(0);">1399</a>
                          <a class="dropdown-item" href="javascript:void(0);">1400</a>
                          <a class="dropdown-item" href="javascript:void(0);">1401</a>
                        </div>
                      </div>
                      <div id="growthRadialChart"></div>
                      <h6 class="mb-0">62% رشد در سال 1401</h6>
                    </div>
                  </div>
                </div>
                <!-- Growth Chart-->

                <!-- Finance Summary -->
                <div class="col-md-7 col-lg-7 mb-4 mb-md-0">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center me-3">
                        <img src="../../assets/img/avatars/4.png" alt="آواتار" class="rounded-circle me-3" width="54">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">گزارش مالی برای امیلیا کلارک</h5>
                          <small class="text-muted primary-font">یک برنامه عالی برای مدیریت پروژه</small>
                        </div>
                      </div>
                      <div class="dropdown btn-pinned primary-font">
                        <button class="btn p-0" type="button" id="financoalReport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="financoalReport">
                          <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                          <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                          <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-wrap gap-4 mb-5 mt-4">
                        <div class="d-flex flex-column me-2">
                          <h6>تاریخ شروع</h6>
                          <span class="badge bg-label-success">2 فروردین 1401</span>
                        </div>
                        <div class="d-flex flex-column me-2">
                          <h6>تاریخ پایان</h6>
                          <span class="badge bg-label-danger">6 اردیبهشت 1401</span>
                        </div>
                        <div class="d-flex flex-column me-2">
                          <h6>اعضا</h6>
                          <ul class="list-unstyled me-2 d-flex align-items-center avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک" class="avatar avatar-xs pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-xs pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-xs pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="دیوید بکهام" class="avatar avatar-xs pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/14.png" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جسیکا آلبا" class="avatar avatar-xs pull-up">
                              <img class="rounded-circle" src="../../assets/img/avatars/10.png" alt="آواتار">
                            </li>
                          </ul>
                        </div>
                        <div class="d-flex flex-column me-2">
                          <h6>بودجه</h6>
                          <span>249 میلیارد تومان</span>
                        </div>
                        <div class="d-flex flex-column me-2">
                          <h6>هزینه‌ها</h6>
                          <span>82k تومان</span>
                        </div>
                      </div>
                      <div class="d-flex flex-column flex-grow-1">
                        <span class="text-nowrap lh-1-85 d-block mb-2">پیشرفت امیلیا کلارک</span>
                        <div class="progress w-100 mb-3" style="height: 8px">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="lh-1-85">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در</span>
                    </div>
                    <div class="card-footer border-top">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item"><i class="bx bx-check"></i> 74 وظیفه</li>
                        <li class="list-inline-item"><i class="bx bx-chat"></i> 678 دیدگاه</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Finance Summary -->

                <!-- Activity Timeline -->
                <div class="col-md-5 col-lg-5 mb-0">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between mb-3">
                      <h5 class="card-title m-0 me-2">خط زمانی فعالیت</h5>
                      <div class="dropdown primary-font">
                        <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                          <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                          <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                          <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <!-- Activity Timeline -->
                      <ul class="timeline">
                        <li class="timeline-item timeline-item-transparent ps-4">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event pb-2">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0 mt-n1">12 صورتحساب پرداخت شد</h6>
                              <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">12 دقیقه قبل</small>
                            </div>
                            <p class="mb-2">صورتحساب ها به شرکت پرداخت شد</p>
                            <div class="d-flex">
                              <a href="javascript:void(0)" class="me-3">
                                <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="23" class="me-2">
                                <span class="fw-bold text-body">invoices.pdf</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event pb-2">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0 mt-n1">ملاقات با مشتری</h6>
                              <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">45 دقیقه قبل</small>
                            </div>
                            <p class="mb-2">ملاقات برای پروژه با استیو در 10:15 ق.ظ</p>
                            <div class="d-flex flex-wrap align-items-center">
                              <div class="avatar me-3 mt-1">
                                <img src="../../assets/img/avatars/1.png" alt="آواتار" class="rounded-circle">
                              </div>
                              <div>
                                <h6 class="mb-1">بیل گیتس (مشتری)</h6>
                                <span class="text-muted">بنیان‌گذار مایکروسافت</span>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event pb-0">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0 mt-n1">ایجاد یک پروژه جدید برای مشتری</h6>
                              <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">2 روز قبل</small>
                            </div>
                            <p class="mb-2">5 عضو تیم در یک پروژه</p>
                            <div class="d-flex align-items-center avatar-group">
                              <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک">
                                <img src="../../assets/img/avatars/5.png" alt="آواتار" class="rounded-circle">
                              </div>
                              <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس">
                                <img src="../../assets/img/avatars/12.png" alt="آواتار" class="rounded-circle">
                              </div>
                              <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر">
                                <img src="../../assets/img/avatars/9.png" alt="آواتار" class="rounded-circle">
                              </div>
                              <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین">
                                <img src="../../assets/img/avatars/6.png" alt="آواتار" class="rounded-circle">
                              </div>
                              <div class="avatar avatar-sm pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="اولیور کویین">
                                <img src="../../assets/img/avatars/14.png" alt="آواتار" class="rounded-circle">
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-end-indicator">
                          <i class="bx bx-check-circle"></i>
                        </li>
                      </ul>
                      <!-- /Activity Timeline -->
                    </div>
                  </div>
                </div>
                <!--/ Activity Timeline -->
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>
  </body>
</html>
