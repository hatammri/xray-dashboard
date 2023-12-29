@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="../../assets/vendor/css/pages/ui-carousel.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">المان‌های رابط کاربری /</span> گردونه
            </h4>

            <div class="row">
                <!-- Gallery effect-->
                <div class="col-12">

                    <div class="card">
                        <!-- Pricing Plans -->
                        <div class="pb-sm-5 pb-2 rounded-top">
                            <div class="container py-5">
                                <h2 class="text-center mb-3 secondary-font">پلن مناسب را برای سایت خود پیدا کنید</h2>
                                <p class="text-center">
                                    با ما شروع کنید - گزینه‌ای عالی برای افراد و تیم‌ها. یک پلن اشتراک متناسب با نیازهای خود
                                    انتخاب کنید.
                                </p>
                                <h6 class="text-muted mt-3">گالری تصاویر اسکن شده</h6>
                                <div id="swiper-gallery">
                                    <div class="swiper gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/6.jpg)">
                                                تصویر 1
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/5.jpg)">
                                                تصویر 2
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/7.jpg)">
                                                تصویر 3
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/10.jpg)">
                                                تصویر 4
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/16.jpg)">
                                                تصویر 5
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next swiper-button-white"></div>
                                        <div class="swiper-button-prev swiper-button-white"></div>
                                    </div>
                                    <div class="swiper gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/6.jpg)">
                                                اسلاید 1
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/5.jpg)">
                                                اسلاید 2
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/7.jpg)">
                                                اسلاید 3
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/10.jpg)">
                                                اسلاید 4
                                            </div>
                                            <div class="swiper-slide"
                                                style="background-image: url(../../assets/img/backgrounds/16.jpg)">
                                                اسلاید 5
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5">
                                    <h2 class="text-center mb-3 secondary-font">پلن مناسب را برای سایت خود پیدا کنید</h2>
                                    <p class="text-center">
                                        با ما شروع کنید - گزینه‌ای عالی برای افراد و تیم‌ها. یک پلن اشتراک متناسب با نیازهای خود
                                        انتخاب کنید.
                                    </p>
                                </div>

                                <div class="row mx-0 gy-3">
                                    <!-- Starter -->
                                    <div class="col-xl mb-lg-0 lg-4">
                                        <div class="card border-2 border-info">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                                    <h5 class="text-start text-uppercase mb-0">اطلاعات ایستگاه مبدا</h5>
                                                    <span class="badge bg-info rounded-pill">مبدا</span>
                                                </div>

                                                <div class="text-center position-relative mt-n1 mb-4 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <h4 class="price-toggle text-info price-yearly mb-0">
                                                            <small>نام مرکز: گمرک میرجاوه</small></h4>
                                                        <h4 class="price-toggle text-info price-monthly mb-0 d-none">
                                                            <small>نام مرکز: گمرک میرجاوه</small></h4>
                                                       </h4>
                                                    </div>
                                                    <small
                                                        class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">
                                                        شماره بارنامه / BR3547</small>
                                                    </div>

                                                <p>تمامی موارد پایه برای کسب و کار های در حال شروع</p>

                                                <hr>

                                                <ul class="list-unstyled pt-2 pb-1 lh-1-85">
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-info me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        تا 10 کاربر
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-info me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        150+ اجزاء
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-info me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        پشتیبانی پایه در گیت‌هاب
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                                            <i class="bx bx-x fs-5 lh-1"></i>
                                                        </span>
                                                        به‌روزرسانی‌های ماهانه
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                                            <i class="bx bx-x fs-5 lh-1"></i>
                                                        </span>
                                                        یکپارچه سازی
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                                            <i class="bx bx-x fs-5 lh-1"></i>
                                                        </span>
                                                        پشتیبانی کامل
                                                    </li>
                                                </ul>

                                                <a href="auth-register-basic.html"
                                                    class="btn btn-label-info d-grid w-100">شروع کنید</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Exclusive -->
                                    <div class="col-xl mb-lg-0 lg-4">
                                        <div class="card border border-2 border-primary">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                                    <h5 class="text-start text-uppercase mb-0">اطلاعات ایستگاه مقصد</h5>
                                                    <span class="badge bg-primary rounded-pill">مقصد</span>
                                                </div>

                                                <div class="text-center position-relative mt-n1 mb-4 pb-3">
                                                    <div class="d-flex align-items-center">
                                                        <h1 class="price-toggle text-primary price-yearly mb-0">
                                                            <small>تومان</small> 99</h1>
                                                        <h1 class="price-toggle text-primary price-monthly mb-0 d-none">
                                                            <small>تومان</small> 199</h1>
                                                        <sub class="h5 text-muted pricing-duration mb-1 mb-md-0 ms-1"> /
                                                            ماهانه</sub>
                                                    </div>
                                                    <small
                                                        class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">1,188
                                                        تومان / سال</small>
                                                </div>
                                                <p>گزینه‌ای مناسب برای کسب و کارهای در حال رشد</p>

                                                <hr>

                                                <ul class="list-unstyled pt-2 pb-1 lh-1-85">
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        تا 10 کاربر
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        150+ اجزاء
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        پشتیبانی پایه در گیت‌هاب
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                                                            <i class="bx bx-check bx-xs"></i>
                                                        </span>
                                                        به‌روزرسانی‌های ماهانه
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                                            <i class="bx bx-x fs-5 lh-1"></i>
                                                        </span>
                                                        یکپارچه سازی
                                                    </li>
                                                    <li class="mb-2">
                                                        <span
                                                            class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                                                            <i class="bx bx-x fs-5 lh-1"></i>
                                                        </span>
                                                        پشتیبانی کامل
                                                    </li>
                                                </ul>

                                                <a href="auth-register-basic.html"
                                                    class="btn btn-primary d-grid w-100">شروع کنید</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="pricing-plans-comparison">
                            <div class="container py-5 mt-0 my-md-4">
                                <div class="row">
                                    <div class="col-12 text-center mb-4">
                                        <h2 class="mb-2 secondary-font">یک پلن متناسب با خودتان را انتخاب کنید</h2>
                                        <p>خیالتان راحت باشد، ما ضمانت بازگشت وجه 48 ساعته داریم!</p>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table text-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <p class="h5 mb-2">ویژگی‌ها</p>
                                                            <span class="text-body">ویژگی هایی منحصر به فرد</span>
                                                        </th>
                                                        <th scope="col">
                                                            <p class="h5 mb-2">برای شروع</p>
                                                            <span class="text-body">رایگان</span>
                                                        </th>
                                                        <th scope="col" class="pt-3">
                                                            <p class="h5 mb-2 position-relative">
                                                                حرفه ای
                                                                <span
                                                                    class="badge rounded-pill bg-warning badge-center mt-n3 position-absolute"><i
                                                                        class="bx bxs-star"></i></span>
                                                            </p>
                                                            <span class="text-body">49,000 تومان / ماه</span>
                                                        </th>
                                                        <th scope="col">
                                                            <p class="h5 mb-2">سازمان</p>
                                                            <span class="text-body">99,000 تومان / ماه</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>14 روز آزمایش رایگان</td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>بدون محدودیت کاربر</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>پشتیبانی محصول</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>پشتیبانی با ایمیل</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-label-primary badge-sm text-uppercase">افزودنی
                                                                موجود است</span>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>یکپارچه سازی</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>حذف نماد برند از جلو</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge bg-label-primary badge-sm text-uppercase">افزودنی
                                                                موجود است</span>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>پشتیبانی و نگهداری فعال</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>ذخیره داده به مدت 365 روز</td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-x text-secondary bx-sm"></i>
                                                        </td>
                                                        <td>
                                                            <i class="bx bx-check text-success bx-sm"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="border-0"></td>
                                                        <td class="border-0">
                                                            <a href="auth-register-basic.html"
                                                                class="btn text-nowrap btn-label-primary">انتخاب پلن</a>
                                                        </td>
                                                        <td class="border-0">
                                                            <a href="auth-register-basic.html"
                                                                class="btn text-nowrap btn-primary">انتخاب پلن</a>
                                                        </td>
                                                        <td class="border-0">
                                                            <a href="auth-register-basic.html"
                                                                class="btn text-nowrap btn-label-primary">انتخاب پلن</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Plans Comparison -->
                        <!-- FAQS -->
                        <div class="pricing-faqs bg-alt-pricing rounded-bottom">
                            <div class="container py-5 px-lg-5">
                                <div class="row mt-0 mt-md-4">
                                    <div class="col-12 text-center mb-4">
                                        <h4 class="mb-2 secondary-font">سوالات متداول</h4>
                                        <p>اجازه بدهید به دستیابی به جواب متداول ترین سوالاتی که ممکن است داشته باشید کمک
                                            کنیم.</p>
                                    </div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-12">
                                        <div id="faq" class="accordion accordion-header-primary">
                                            <div class="card accordion-item active">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" aria-expanded="true"
                                                        data-bs-target="#faq-1" aria-controls="faq-1">
                                                        چه چیزی برای محدودیت 100 پاسخ به حساب می آید؟
                                                    </button>
                                                </h6>

                                                <div id="faq-1" class="accordion-collapse collapse show"
                                                    data-bs-parent="#faq">
                                                    <div class="accordion-body lh-2">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                        ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                                        کاربردهای
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card accordion-item">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-2" aria-expanded="false"
                                                        aria-controls="faq-2">
                                                        پرداخت ها را چگونه پردازش می کنید؟
                                                    </button>
                                                </h6>
                                                <div id="faq-2" class="accordion-collapse collapse"
                                                    data-bs-parent="#faq">
                                                    <div class="accordion-body lh-2">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در
                                                        ستون و سطرآنچنان که
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card accordion-item">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-3" aria-expanded="false"
                                                        aria-controls="faq-3">
                                                        چه روش‌های پرداختی را می پذیرید؟
                                                    </button>
                                                </h6>
                                                <div id="faq-3" class="accordion-collapse collapse"
                                                    data-bs-parent="#faq">
                                                    <div class="accordion-body lh-2">لورم ایپسوم متن ساختگی با تولید سادگی
                                                        نامفهوم از صنعت چاپ</div>
                                                </div>
                                            </div>

                                            <div class="card accordion-item">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-4" aria-expanded="false"
                                                        aria-controls="faq-4">
                                                        آیا ضمانت بازگشت وجه دارید؟
                                                    </button>
                                                </h6>
                                                <div id="faq-4" class="accordion-collapse collapse"
                                                    data-bs-parent="#faq">
                                                    <div class="accordion-body lh-2">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card accordion-item mb-0 mb-md-4">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#faq-5" aria-expanded="false"
                                                        aria-controls="faq-5">
                                                        من سوالات بیشتری دارم. از کجا می توانم کمک بگیرم؟
                                                    </button>
                                                </h6>
                                                <div id="faq-5" class="accordion-collapse collapse"
                                                    data-bs-parent="#faq">
                                                    <div class="accordion-body lh-2">
                                                        لطفا <a href="javascript:void(0);">تماس</a> بگیرید با ما در صورت
                                                        داشتن سوالی دیگر. ما آماده راهنمایی هستیم!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ FAQS -->
                    </div>
                </div>
                <!-- / Content -->
                {{-- <!-- Multiple slides -->
                <div class="col-12 mb-4">
                    <h6 class="text-muted mt-3">چند اسلایدی</h6>
                    <div class="swiper" id="swiper-multiple-slides">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/13.jpg)">
                                اسلاید 1
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/19.jpg)">
                                اسلاید 2
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/18.jpg)">
                                اسلاید 3
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/7.jpg)">
                                اسلاید 4
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/20.jpg)">
                                اسلاید 5
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- 3D coverflow effect -->
                <div class="col-12 mb-4">
                    <h6 class="text-muted mt-3">جلوه کاور 3 بعدی</h6>
                    <div class="swiper" id="swiper-3d-coverflow-effect">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/20.jpg)">
                                اسلاید 1
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/7.jpg)">
                                اسلاید 2
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/13.jpg)">
                                اسلاید 3
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/19.jpg)">
                                اسلاید 4
                            </div>
                            <div class="swiper-slide" style="background-image: url(../../assets/img/elements/18.jpg)">
                                اسلاید 5
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div> --}}



            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
@section('scripts')
    <script src="../../assets/vendor/libs/swiper/swiper.js"></script>
    <script src="../../assets/js/ui-carousel.js"></script>
@endsection
