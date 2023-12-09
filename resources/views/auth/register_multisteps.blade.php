<!DOCTYPE html>
<html lang="fa" class="light-style customizer-hide" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>ثبت نام چند مرحله‌ای - صفحات | فرست - قالب مدیریت بوت‌استرپ</title>

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
    <!-- Vendor -->
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css">

    <!-- Page CSS -->

    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
      <div class="authentication-inner row m-0">
        <!-- Left Text -->
        <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
          <div class="w-px-400">
            <img src="../../assets/img/illustrations/create-account-light.png" class="img-fluid scaleX-n1-rtl" alt="multi-steps" width="600" data-app-light-img="illustrations/create-account-light.png" data-app-dark-img="illustrations/create-account-dark.png">
          </div>
        </div>
        <!-- /Left Text -->

        <!--  Multi Steps Registration -->
        <div class="d-flex col-lg-8 authentication-bg p-sm-5 p-3 justify-content-center">
          <div class="d-flex flex-column w-px-700">
            <!-- Logo -->
            <div class="app-brand border-bottom mx-3 mb-4">
              <a href="index.html" class="app-brand-link gap-2 mb-3">
                <span class="app-brand-logo demo">
                    <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1" src="{{ asset('/assets/img/logo/sapa.png')}}">

                </span>
                <span class="app-brand-text demo h3 mb-0 fw-bold">شرکت صنایع الکترونیک ایران</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="my-auto">
              <div id="multiStepsValidation" class="bs-stepper shadow-none">
                <div class="bs-stepper-header">
                  <div class="step" data-target="#accountDetailsValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-home"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">حساب</span>
                        <span class="bs-stepper-subtitle">جزئیات حساب</span>
                      </span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#personalInfoValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-user"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">شخصی</span>
                        <span class="bs-stepper-subtitle">اطلاعات را وارد کنید</span>
                      </span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#billingLinksValidation">
                    <button type="button" class="step-trigger">
                      <span class="bs-stepper-circle">
                        <i class="bx bx-detail"></i>
                      </span>
                      <span class="bs-stepper-label">
                        <span class="bs-stepper-title">صورتحساب</span>
                        <span class="bs-stepper-subtitle">جزئیات پرداخت</span>
                      </span>
                    </button>
                  </div>
                </div>
                <div class="bs-stepper-content pt-4">
                  <form id="multiStepsForm" onsubmit="return false">
                    <!-- Account Details -->
                    <div id="accountDetailsValidation" class="content">
                      <div class="content-header mb-3">
                        <h4 class="secondary-font">اطلاعات حساب</h4>
                        <span>اطلاعات حساب خود را وارد کنید</span>
                      </div>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsUsername">نام کاربری</label>
                          <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control text-start" placeholder="johndoe" dir="ltr">
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsEmail">ایمیل</label>
                          <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control text-start" placeholder="john.doe@email.com" aria-label="john.doe@email.com" dir="ltr">
                        </div>
                        <div class="col-sm-6 form-password-toggle">
                          <label class="form-label" for="multiStepsPass">رمز عبور</label>
                          <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control text-start" placeholder="············" aria-describedby="multiStepsPass2" dir="ltr">
                            <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                        <div class="col-sm-6 form-password-toggle">
                          <label class="form-label" for="multiStepsConfirmPass">تایید رمز عبور</label>
                          <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control text-start" placeholder="············" aria-describedby="multiStepsConfirmPass2" dir="ltr">
                            <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="multiStepsURL">لینک پروفایل</label>
                          <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control text-start" placeholder="johndoe/profile" aria-label="johndoe" dir="ltr">
                        </div>
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-label-secondary btn-prev" disabled>
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="d-sm-inline-block d-none">قبلی</span>
                          </button>
                          <button class="btn btn-primary btn-next">
                            <span class="d-sm-inline-block d-none me-sm-1 me-0">بعدی</span>
                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- Personal Info -->
                    <div id="personalInfoValidation" class="content">
                      <div class="content-header mb-3">
                        <h4 class="secondary-font">اطلاعات شخصی</h4>
                        <span>اطلاعات شخصی خود را وارد کنید</span>
                      </div>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsFirstName">نام</label>
                          <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="جان">
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsLastName">نام خانوادگی</label>
                          <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="اسنو">
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsMobile">موبایل</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile text-start" placeholder="202 555 0111" dir="ltr">
                            <span class="input-group-text">IR (+98)</span>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsPincode">پین‌کد</label>
                          <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode text-start" placeholder="کد پستی" maxlength="6" dir="ltr">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="multiStepsAddress">آدرس</label>
                          <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="آدرس">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="multiStepsArea">نشان اختصاصی</label>
                          <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="منطقه / نشان اختصاصی">
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsCity">شهر</label>
                          <input type="text" id="multiStepsCity" class="form-control" placeholder="تبریز">
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="multiStepsState">استان</label>
                          <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                            <option value="">انتخاب</option>
                            <option value="AL">آذربایجان شرقی</option>
                            <option value="AK">آذربایجان غربی</option>
                            <option value="AZ">اردبیل</option>
                            <option value="AR">اصفهان </option>
                            <option value="CA">البرز </option>
                            <option value="CO">ایلام </option>
                            <option value="CT">بوشهر </option>
                            <option value="DE">تهران </option>
                            <option value="DC">چهارمحال و بختیاری</option>
                            <option value="FL">خراسان جنوبی</option>
                            <option value="GA">خراسان رضوی</option>
                            <option value="HI">خراسان شمالی</option>
                            <option value="ID">خوزستان </option>
                            <option value="IL">زنجان </option>
                            <option value="IN">سمنان </option>
                            <option value="IA">سیستان و بلوچستان</option>
                            <option value="KS">فارس </option>
                            <option value="KY">قزوین </option>
                            <option value="LA">قم </option>
                            <option value="ME">کردستان </option>
                            <option value="MD">کرمان </option>
                            <option value="MA">کرمانشاه </option>
                            <option value="MI">کهگیلویه و بویراحمد</option>
                            <option value="MN">گلستان </option>
                            <option value="MS">گیلان </option>
                            <option value="MO">لرستان</option>
                            <option value="MT">مازندران </option>
                            <option value="NE">مرکزی </option>
                            <option value="NV">هرمزگان </option>
                            <option value="NH">همدان </option>
                            <option value="NJ">یزد</option>
                            <option value="NM">کرج</option>
                            <option value="NY">تبریز</option>
                            <option value="NC">لورم ایپسوم متن</option>
                            <option value="ND">قم</option>
                            <option value="OH">لورم</option>
                            <option value="OK">لورم ایپسوم</option>
                            <option value="OR">اصفهان</option>
                            <option value="PA">لورم ایپسوم متن</option>
                            <option value="RI">لورم ایپسوم متن</option>
                            <option value="SC">لورم ایپسوم متن</option>
                            <option value="SD">لورم ایپسوم متن</option>
                            <option value="TN">لورم ایپسوم</option>
                            <option value="TX">تبریز</option>
                            <option value="UT">بندرعباس</option>
                            <option value="VT">لورم ایپسوم</option>
                            <option value="VA">لورم ایپسوم</option>
                            <option value="WA">رشت</option>
                            <option value="WV">لورم ایپسوم متن</option>
                            <option value="WI">لورم ایپسوم</option>
                            <option value="WY">کرمان</option>
                          </select>
                        </div>
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-primary btn-prev">
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="d-sm-inline-block d-none">قبلی</span>
                          </button>
                          <button class="btn btn-primary btn-next">
                            <span class="d-sm-inline-block d-none me-sm-1 me-0">بعدی</span>
                            <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- Billing Links -->
                    <div id="billingLinksValidation" class="content">
                      <div class="content-header mb-3">
                        <h4 class="secondary-font">انتخاب پلن</h4>
                        <span>پلن متناسب با نیاز خود را انتخاب کنید</span>
                      </div>
                      <!-- Custom plan options -->
                      <div class="row gap-md-0 gap-3 mb-5">
                        <div class="col-md">
                          <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="basicOption">
                              <span class="custom-option-body mb-1">
                                <span class="d-block h4">پایه</span>
                                <small class="d-block">یک شروع ساده برای استارت‌آپ‌ها و دانش آموزان</small>
                                <span class="d-flex justify-content-center align-items-center mb-n2">
                                  <sup class="text-primary fs-big lh-1 pt-1">تومان</sup>
                                  <span class="display-5 h1 fw-normal mb-0 mx-1 text-primary">0</span>
                                  <span class="pt-2 pt-md-3">/ ماهانه</span>
                                </span>
                              </span>
                              <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="basicOption">
                            </label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="standardOption">
                              <span class="custom-option-body mb-1">
                                <span class="d-block h4">استاندارد</span>
                                <small class="d-block">برای کسب و کار های کوچک تا متوسط</small>
                                <span class="d-flex justify-content-center align-items-center mb-n2">
                                  <sup class="text-primary fs-big lh-1 pt-1">تومان</sup>
                                  <span class="display-5 h1 fw-normal mb-0 mx-1 text-primary">99</span>
                                  <span class="pt-2 pt-md-3">/ ماهانه</span>
                                </span>
                              </span>
                              <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="standardOption" checked>
                            </label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="enterpriseOption">
                              <span class="custom-option-body mb-1">
                                <span class="d-block h4">سازمان</span>
                                <small class="d-block">راهکاری جامع برای سازمان ها و نهاد ها</small>
                                <span class="d-flex justify-content-center align-items-center mb-n2">
                                  <sup class="text-primary fs-big lh-1 pt-1">تومان</sup>
                                  <span class="display-5 h1 fw-normal mb-0 mx-1 text-primary">499</span>
                                  <span class="pt-2 pt-md-3">/ سالانه</span>
                                </span>
                              </span>
                              <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="enterpriseOption">
                            </label>
                          </div>
                        </div>
                      </div>
                      <!--/ Custom plan options -->
                      <div class="content-header mb-3">
                        <h4 class="secondary-font">اطلاعات پرداخت</h4>
                        <small>اطلاعات کارت خود را وارد کنید</small>
                      </div>
                      <!-- Credit Card Details -->
                      <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label w-100" for="multiStepsCard">شماره کارت</label>
                          <div class="input-group input-group-merge">
                            <input id="multiStepsCard" class="form-control multi-steps-card text-start" name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898" aria-describedby="multiStepsCardImg" dir="ltr">
                            <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <label class="form-label" for="multiStepsName">نام روی کارت</label>
                          <input type="text" id="multiStepsName" class="form-control" name="multiStepsName" placeholder="جان اسنو">
                        </div>
                        <div class="col-6 col-md-4">
                          <label class="form-label" for="multiStepsExDate">تاریخ انقضا</label>
                          <input type="text" id="multiStepsExDate" class="form-control multi-steps-exp-date text-start" name="multiStepsExDate" placeholder="YY/MM" dir="ltr">
                        </div>
                        <div class="col-6 col-md-3">
                          <label class="form-label" for="multiStepsCvv">کد CVV</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv text-start" name="multiStepsCvv" maxlength="4" placeholder="654" dir="ltr">
                            <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="شماره CVV کارت"></i></span>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between mt-4">
                          <button class="btn btn-primary btn-prev">
                            <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                            <span class="d-sm-inline-block d-none">قبلی</span>
                          </button>
                          <button type="submit" class="btn btn-success btn-next btn-submit">ثبت</button>
                        </div>
                      </div>
                      <!--/ Credit Card Details -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Multi Steps Registration -->
      </div>
    </div>

    <script>
      // Check selected custom option
      window.Helpers.initCustomOptionCheck();
    </script>

    <!-- / Content -->

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
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/select2/i18n/fa.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/pages-auth-multisteps.js"></script>
  </body>
</html>
