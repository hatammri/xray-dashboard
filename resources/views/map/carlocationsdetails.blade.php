@extends('index')
@section('csslink')
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css">
    <link rel="stylesheet" href="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.css" />
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>
    <script src="../../assets/vendor/js/Polyline.encoded.js"></script>

    <style>
        body {
            height: 100vh;
            width: 100vw;
            margin: 0;
        }

        #map {
            height: 100%;
            width: 100%;
        }
    </style>
@endsection

@section('content')

   <!-- Content wrapper -->
   <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">راننده / مشاهده /</span> موقعیت
      </h4>
      <div class="row gy-4">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
          <!-- User Card -->
          <div class="card mb-4">
            <div class="card-body">
              <div class="user-avatar-section">
                <div class="d-flex align-items-center flex-column">
                  <img class="img-fluid rounded my-4" src="../../assets/img/drivers/1.jpg" height="170" width="170" alt="User avatar">
                  <div class="user-info text-center">
                    <h5 class="mb-2">رسول محمدی</h5>
                    <span class="badge bg-label-secondary">راننده</span>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                <div class="d-flex align-items-center me-4 mt-3 gap-3">
                  <span class="badge bg-label-primary p-2 rounded mt-1"><i class="bx bx-check bx-sm"></i></span>
                  <div>
                    <h5 class="mb-0">1.23k</h5>
                    <span>وظیفه انجام شده</span>
                  </div>
                </div>
                <div class="d-flex align-items-center me-4 mt-3 gap-3">
                    <span class="badge bg-label-primary p-2 rounded mt-1"><i class="bx bx-check bx-sm"></i></span>
                    <div>
                      <h5 class="mb-0">1.23k</h5>
                      <span>وظیفه انجام شده</span>
                    </div>
                  </div>
               
              </div>
              <h5 class="pb-2 border-bottom mb-4 secondary-font">جزئیات</h5>
              <div class="info-container">
                <ul class="list-unstyled">
                  <li class="mb-3">
                    <span class="fw-bold me-2">نام کاربری:</span>
                    <span>violet.dev</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">ایمیل:</span>
                    <span>vafgot@gmail.com</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">وضعیت:</span>
                    <span class="badge bg-label-success">فعال</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">نقش:</span>
                    <span>راننده</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">شماره بارنامه:</span>
                    <span>Tax-8965</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">تماس:</span>
                    <span class="d-inline-block" dir="ltr">09154569857</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">مبدا:</span>
                    <span>ایستگاه تهران</span>
                  </li>
                  <li class="mb-3">
                    <span class="fw-bold me-2">مقصد:</span>
                    <span>گمرک بازرگان</span>
                  </li>
                </ul>
                <div class="d-flex justify-content-center pt-3">
                  <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">ویرایش</a>
                  <a href="javascript:;" class="btn btn-label-danger suspend-user">تعلیق</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /User Card -->

        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

            <div id="map"></div>

        </div>
        <!--/ User Content -->
      </div>




      <!-- /Modal -->
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
    <script src="../../assets/js/tables-datatables-contradictions2.js"></script>
    <script>

        // example of response data from direction-API v4
        // request URL : https://api.neshan.org/v4/direction?type=car&origin=35.700785062128666,51.38881156907395&destination=35.703189177622946,51.3908984545814&alternative=false

        var exampleResponse = {
  "routes": [
    {
      "overview_polyline": {
        "points": "o|byEqxtxHllCttZ_gEt__@yuMte`@kmNp{JsvrAlqgDpwu@jfaAhBpw`@msMl}]i|VbnTopkAfxpBybEb}k@ksM~s]_fh@bp[e`^r{e@y{@zbzA_nWxk[_zOf|o@}`UvqK}|KfuU}jo@fn@o|Sb`PenPntWmuPzhrAmnVdlDwl]tbo@yuH|pc@wdXuwAwnq@hw^oo\\ucGufKffKeuA~fX"
      },
      "legs": [
        {
          "summary": "آزادراه قزوین - زنجان - آزادراه پیامبر اعظم",
          "distance": {
            "value": 780719,
            "text": "۸۰۰ کیلومتر"
          },
          "duration": {
            "value": 30481,
            "text": "۸ ساعت ۲۸ دقیقه"
          },
          "steps": [
            {
              "name": "بیست و دوم",
              "instruction": "در جهت غرب در بیست و دوم قرار بگیرید",
              "bearing_after": 272,
              "type": "depart",
              "modifier": "right",
              "distance": {
                "value": 35,
                "text": "۳۵ متر"
              },
              "duration": {
                "value": 14,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "o|byEqxtxH?VFp@",
              "start_location": [
                51.393531,
                35.737198
              ]
            },
            {
              "name": "بیست متری پنجم",
              "instruction": "در بیست متری پنجم به مسیر خود ادامه دهید",
              "bearing_after": 213,
              "type": "new name",
              "modifier": "left",
              "distance": {
                "value": 205,
                "text": "۲۲۵ متر"
              },
              "duration": {
                "value": 54,
                "text": "۱ دقیقه"
              },
              "polyline": "g|byEgvtxHHFLANIrAsBbCuD",
              "start_location": [
                51.393156,
                35.737157
              ]
            },
            {
              "name": "ابطحی غربی",
              "instruction": "به سمت ابطحی غربی، به چپ برانید",
              "bearing_after": 91,
              "type": "turn",
              "modifier": "slight left",
              "distance": {
                "value": 50,
                "text": "۵۰ متر"
              },
              "duration": {
                "value": 13,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "gtbyEu_uxHDmB",
              "start_location": [
                51.39467,
                35.735875
              ]
            },
            {
              "name": "جانبازان انقلاب اسلامی",
              "instruction": "به سمت جانبازان انقلاب اسلامی، به راست بپیچید",
              "bearing_after": 181,
              "type": "turn",
              "modifier": "right",
              "distance": {
                "value": 28,
                "text": "۲۸ متر"
              },
              "duration": {
                "value": 5,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "atbyEccuxHH?f@@",
              "start_location": [
                51.39522,
                35.735853
              ]
            },
            {
              "name": "ابطحی غربی",
              "instruction": "در میدان گلستانه، از خروجی دوم، خارج شوید",
              "rotaryName": "میدان گلستانه",
              "bearing_after": 192,
              "type": "rotary",
              "modifier": "straight",
              "exit": 2,
              "distance": {
                "value": 88,
                "text": "۱۰۰ متر"
              },
              "duration": {
                "value": 15,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "orbyEacuxHF@N?FADABABC@E@GACGI{@gA",
              "start_location": [
                51.395207,
                35.735598
              ]
            },
            {
              "name": "",
              "instruction": "به مسیر خود ادامه دهید",
              "bearing_after": 52,
              "type": "exit rotary",
              "modifier": "straight",
              "exit": 2,
              "distance": {
                "value": 110,
                "text": "۱۲۵ متر"
              },
              "duration": {
                "value": 17,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "csbyEmfuxHGKACEW@}C?U?O",
              "start_location": [
                51.395751,
                35.735697
              ]
            },
            {
              "name": "ابطحی شرقی",
              "instruction": "در ابطحی شرقی به مسیر خود ادامه دهید",
              "bearing_after": 88,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 185,
                "text": "۲۰۰ متر"
              },
              "duration": {
                "value": 30,
                "text": "۱ دقیقه"
              },
              "polyline": "qsbyEymuxH?QAgJ?_@",
              "start_location": [
                51.396934,
                35.735769
              ]
            },
            {
              "name": "بزرگراه کردستان",
              "instruction": "به راست برانید  و وارد بزرگراه کردستان شوید",
              "bearing_after": 104,
              "type": "fork",
              "modifier": "slight right",
              "distance": {
                "value": 1244,
                "text": "۱ کیلومتر"
              },
              "duration": {
                "value": 81,
                "text": "۱ دقیقه"
              },
              "polyline": "ssbyEszuxH@C@e@BMDGDIFEZDTJd@ZdCjBl@d@j@`@rCvBVT~BnBt@l@bBnBnAzAVX^d@~AnAlBbANHbCt@nARh@DD?`@BhCEF?nGk@dAG",
              "start_location": [
                51.39898,
                35.735783
              ]
            },
            {
              "name": "شهید گمنام، غرب",
              "instruction": "به راست برانید  و وارد شهید گمنام، غرب شوید",
              "bearing_after": 177,
              "type": "fork",
              "modifier": "slight right",
              "distance": {
                "value": 479,
                "text": "۵۰۰ متر"
              },
              "duration": {
                "value": 41,
                "text": "۱ دقیقه"
              },
              "polyline": "ew`yEq~txHRDd@AvGi@H?J@HBJFJPh@nA\\bANd@JZLl@Lf@Lz@TzAHh@HN",
              "start_location": [
                51.394492,
                35.726114
              ]
            },
            {
              "name": "بزرگراه شهید گمنام",
              "instruction": "در بزرگراه شهید گمنام به مسیر خود ادامه دهید",
              "bearing_after": 262,
              "type": "continue",
              "modifier": "straight",
              "distance": {
                "value": 283,
                "text": "۳۰۰ متر"
              },
              "duration": {
                "value": 18,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "ce`yEyntxH@R@vCBbFD~E",
              "start_location": [
                51.391973,
                35.723222
              ]
            },
            {
              "name": "بزرگراه جلال آل احمد",
              "instruction": "در بزرگراه جلال آل احمد به مسیر خود ادامه دهید",
              "bearing_after": 270,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 423,
                "text": "۴۲۵ متر"
              },
              "duration": {
                "value": 30,
                "text": "۱ دقیقه"
              },
              "polyline": "ud`yEi{sxH?dAAh@Ab@Cr@GfAEn@G~@KfAOlAEZ]hBq@rDMz@",
              "start_location": [
                51.388851,
                35.723153
              ]
            },
            {
              "name": "زیرگذر گیشا",
              "instruction": "در زیرگذر گیشا به مسیر خود ادامه دهید",
              "bearing_after": 288,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 634,
                "text": "۶۵۰ متر"
              },
              "duration": {
                "value": 71,
                "text": "۱ دقیقه"
              },
              "polyline": "si`yE}~rxHEXYrAUjA_@|AK`@O`@ELk@bBq@pBADi@bBs@zBc@rAc@rAW|@K^Uv@Ol@]~A",
              "start_location": [
                51.384307,
                35.723942
              ]
            },
            {
              "name": "بزرگراه جلال آل احمد",
              "instruction": "در بزرگراه جلال آل احمد به مسیر خود ادامه دهید",
              "bearing_after": 288,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 927,
                "text": "۹۵۰ متر"
              },
              "duration": {
                "value": 111,
                "text": "۲ دقیقه"
              },
              "polyline": "yx`yEkwqxH[~A[tBMr@u@jHu@fHCV]lCIl@[~AQj@Sn@qA|D[~@Up@i@jB]`B]xAQ`A",
              "start_location": [
                51.377982,
                35.72637
              ]
            },
            {
              "name": "شیخ فضل الله، جنوب",
              "instruction": "به راست برانید  و از شیخ فضل الله، جنوب خارج شوید",
              "bearing_after": 303,
              "type": "off ramp",
              "modifier": "slight right",
              "distance": {
                "value": 396,
                "text": "۴۰۰ متر"
              },
              "duration": {
                "value": 46,
                "text": "۱ دقیقه"
              },
              "polyline": "uiayEc{oxHc@~@YVYLu@Au@_@AAq@q@i@oAGu@L{@?A^i@ZOl@AfBj@",
              "start_location": [
                51.368341,
                35.729071
              ]
            },
            {
              "name": "بزرگراه شیخ فضل الله نوری",
              "instruction": "در بزرگراه شیخ فضل الله نوری به مسیر خود ادامه دهید",
              "bearing_after": 225,
              "type": "continue",
              "modifier": "straight",
              "distance": {
                "value": 3659,
                "text": "۴ کیلومتر"
              },
              "duration": {
                "value": 264,
                "text": "۴ دقیقه"
              },
              "polyline": "_layEgapxHdB`CnArAnDvDXXRR|BfC|EjFpEzElExEn@p@b@f@zCfDpCxCpCzCpCxCpCxCpCxCpCzCdCjCjArA`@ZjBxBLLlBlCDHx@xAv@zADHlA`DHXZ~@`@vAPv@HZXtAZfBDRn@fEp@lEr@pFFZr@xF@Ft@~Fj@rEFj@Hx@J~AJbBDtAFrB@hA@fA?@CzBCjAE`A?LO|BUnB",
              "start_location": [
                51.36932,
                35.729443
              ]
            },
            {
              "name": "پل جناح",
              "instruction": "در پل جناح به مسیر خود ادامه دهید",
              "bearing_after": 282,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 230,
                "text": "۲۵۰ متر"
              },
              "duration": {
                "value": 14,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "m`~xEazixHm@xFm@tF",
              "start_location": [
                51.337453,
                35.712229
              ]
            },
            {
              "name": "بزرگراه شهید حجازی",
              "instruction": "در بزرگراه شهید حجازی به مسیر خود ادامه دهید",
              "bearing_after": 281,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 7591,
                "text": "۸ کیلومتر"
              },
              "duration": {
                "value": 487,
                "text": "۸ دقیقه"
              },
              "polyline": "ic~xEqjixHg@dFMtAs@vHa@xCi@|EMhA]rCk@zEk@|EGf@g@rD_@lCQlAk@nEi@rECTq@hFo@hFg@~DIh@q@fFWjBW|Ba@fDIbAa@rE[bFKlBKfDG|BGvCCvAC~DAXGpFNtGDtCN~EFnBBlBH~EH~EH~EF|EH~EH~E?PJjEJ~EL~E@z@FjCHzBBpBH|EHzE?BJ~EHvE?DH~EFdE?XJ|EJnEJjFJlFLjFJjFJjFJlFJjFLjFHrEB|BJfFJfFHfFJfFJhFJfF@t@FpDJzEHfFDlBDfBL~FDtCDhBFdE@z@H~FFxF?nF",
              "start_location": [
                51.334972,
                35.712688
              ]
            },
            {
              "name": "بزرگراه شهید فهمیده",
              "instruction": "در بزرگراه شهید فهمیده به مسیر خود ادامه دهید",
              "bearing_after": 271,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 25419,
                "text": "۲۵ کیلومتر"
              },
              "duration": {
                "value": 1396,
                "text": "۲۳ دقیقه"
              },
              "polyline": "ao~xE{bywHIbGAl@EtAG|BAHQxEC\\YjEIp@g@pFGn@Gt@s@~Fs@~Fq@xFa@rDYrBo@tFq@rFg@jEGh@[`CQrBe@fFIpAOtCWhFSzDAj@GhFGjFGhFAp@KvDMtEIzDQdFEzAOjC[dFYdFGlAWvCa@bFc@bFG|@a@dDm@`Fg@`Em@vECRm@zDKj@}@fF{@fFa@zBa@hBiA`FaAnEy@rD{AxFyAxFSr@kAdE{AlFqAjEoAlEqAjE]lAs@~B_@nAq@zBqAjEiAxDsAnEsAnEsAnEsApEsAnEsAnEqAnEmA|DqAlEIXgAtDoAnEqAnEoAnEkAbEEHkA|DEPc@tAq@tB?Bc@|Am@lBqAlEqAnEsAlECJcApD}@~C{A`FyA~EaBrF_BnFwAxEwAxEwAxEwAzEsApEc@vAiAbEiA`DS|@w@nCoAhEoAjE}@vCQr@iAlE_AlDG`@}@tEw@jEAFo@zEo@xESbBQvBSdCKvAAFSpDQrDAh@IjCEpAEbBEtBErDBzABbCBhE@TBdBHvBDrALjCF|@N~CDf@XrD@Pb@fERrBTdBl@pE@Dr@tE^~BRtAn@vEVhBXlBr@hE@Jh@xEHv@TbDN|BD~AJtD@f@D~E?\\C`EAzAKbCQ~DA\\Y|EQrDEh@WzEQfDY|EWzEY|EW|EY|EW|EY|E??]zEM|AM|BY|EIrAQbC?D_@zE?B]vESlCQlAk@vEIp@k@bDo@vDeAnFm@tC_@tAuAfF[hA_ApCO^mAnDUl@oA~C]v@eAdCk@lAu@`BaAlBmA`Ci@bAeEnHwBvDyBvDwBxDwBvDoBlDa@p@mBvD{AxCQZsBrDsBpD??i@dAcAnBoBtDmBvD{@`Bq@tAmBvDkBxD_B`DkDbHoB~DoB`EoB~DmB~DmBxD}@nBi@hAcB|DeBzDeBzDu@fBm@tAcBzDeB|DcBzDeB|DcBzDcBzDeB|DwAdDuA`D{@tBq@rAgBnDKPuB`Ek@fAoApBwBfDIJgCnDqAhBw@~@aCvCmCxCoCvCmCxCmCvCmCvCcAhAiAnAyBdCSRmCxCcAhAgArAgC~CQRmBvC{BlDW^aBpCiAnBi@fAmB|DCBaB~DeBbEc@bAy@bCcAvCSt@eAhDo@tBa@nBa@pB_AnEERMr@m@nDKh@m@rDg@rDKbASjBWjCg@pFQ|CGlAQbFGrBKxDGzBOzFGzBG~BMzFMzFExBI`CElAIlDMjFI|DEfAA\\KbF",
              "start_location": [
                51.251819,
                35.714572
              ]
            },
            {
              "name": "آزادراه شهید فلاحی",
              "instruction": "در آزادراه شهید فلاحی به مسیر خود ادامه دهید",
              "bearing_after": 274,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 60147,
                "text": "۷۵ کیلومتر"
              },
              "duration": {
                "value": 2782,
                "text": "۴۶ دقیقه"
              },
              "polyline": "smmyEglgvHKnDAn@An@ItCAVQ~EAn@UlDEv@YbDKdAGf@UjBa@fDIn@o@pEADg@tCQ|@}@rEKl@u@`Dk@fCWfA_ArDQl@q@`Ci@~ASn@mAlDWr@iAhD{@hCi@pAaBjEkBpEkBpEGNgB|DqBjEKVy@vAw@pA}BrDoA`Bi@t@MJ[Ze@b@mBjBe@Z{@j@eB~@eCtA]RwA|@cA|@g@`@oB`BEDyBbBUXkCtCm@p@wAjBOReBjCuCtE?BqAxB{@bBQ\\}AtDSd@wAhDmBnFCFqBrFwB|F_BvEOb@oAnDk@pBW~@Oj@Mb@uAtFCLiAbGGVStAMt@M|@u@`FAJg@vE_@hDGz@c@fFc@dFa@fF_@nEOzAe@pF??e@pFe@pFe@nFCPa@~E_@`EGn@e@pFc@dF[xDGr@k@jGg@zFCLc@tDQjAe@jCOn@cAfFOr@{@nDe@lBo@lBs@tBo@~AaAdCi@hAs@xAcAhBsBtDiClD]b@o@bAu@~@g@j@A@wC|CUVi@h@}AvAaAz@{AhAuB`Bi@\\mAv@yAv@mAn@}Ap@_Br@qA`@cCv@o@R}Bp@y@NyDp@iBZaALSDyBNmAD{AFmBFgELaCFgADgEN}DLsDJq@BcCFuDHoDJ}@EsDJuDJuDLsDJqADcBDuDHcADoBFuDJC?aCHo@BqBDaADcDJmBPqANk@F_C\\SB}Dr@c@HwCj@m@LqBf@[JuDnAiDhAiC~@mBz@aDvAoAj@i@`@_DlB}ClBcAn@uAdAgBvAk@f@sCbCqCbCsCbCWTUTaBzAgC`Cc@`@c@`@oCtCiCpCkBnB_@b@eCzCcAlA}@nA}BbD_C`D}BbD_CbDyBzCCF}BdD{BdD{BdDoBrCe@r@qCbEsCbEqC`EmC|Ds@fAyEfH}BhD{BfD}BfDyBdD}BbDiBdCa@j@c@n@aBbCqAnBs@`AkAdBu@fA_CjD_CjDeCrDgCtDg@t@}A~BgCrDu@hAiAbBmBrCUZcCnDaCnDcCnDaAvAaAxAcCnDoAhBq@dAaCpD}BhDCF}BvDaA`Bu@xAqAbCc@z@}A~CcAfCkBrEiBnEyAvEMb@iBxFcBpFqA|Em@~Ba@~Au@lC[nAsA|E??qA|Em@xBc@bBsA|EmAnE]rAu@dCsApE{AzF{AxF{AzFyApFc@dBs@fCo@xBi@rBsAfFiAvEiAxEiAvEYjAg@nCe@dCWxAs@`EE\\s@nEc@zCUfBQfB[|Ci@`GA@OjCOtBYrFOxCGzAMbDEnAOtFOtFQtFCz@KxDOrFM~EOdFOdFQdFOdFOdFOdFAP?BOnEGpBKrBSlEe@bGGr@YpC]nCUjBk@pDMt@y@~EO`AQz@]~A[xAq@zB_@pAs@`Cq@vBe@vAw@|Be@lAeBfEy@vBi@pAcBfEcBfEGN_BtDcA~Ba@dAeBdEQb@uA`DgBbEEH_B|DqA~CmBxE{@tBaB~DaB|DaB~DaB~D_@x@cAbCcB|DcB|DaB~DcB|DcB|DcB|DcB|DaB|DcB|DoAxCeB`EcB`EeB`Es@bBq@|A_BzDQ\\kBnEiBhE_@|@cA`CcB`EcB~DcB~DeB~DcB~DcB~DcB`EcB~DeB~DcB~Dk@rA}@dBoBvDoBtDyArCU`@wBlDuBnDwBnDU`@kAhByBhDwBhDyBhDyBhDyBhDwBhDyBhDyBhDyBhDwBfDyBhDyBhDyBhDwBhDyBhDyBhDwBhDyBhDyBhDyBhDoAnBi@x@yBfDyBfDyBhD[b@_BbCkAfBmCfEkCfEgC`EwD|FqAtBoAlB}C|EsCnEuCnEqCjEeCtEeCrEUb@cBvDuBtEa@nAu@tBwAdEyAdEyAdEwAdEyAdEyAdEwAdEyAdEwAdEyAdEQd@u@zBOd@wAdEwAfEwAdEwAfEwAdEwAfEwAdEwAdEkAhDsAjEERqAtDwAfEyAfE_@fAw@`CwAhEwAhEwAhEwAfEY|@}@jCmAnDuAfEwAfEuAfEwAdE?@sAfEsAhEqAhEsAhEcA`DMh@gAnEs@vCSv@k@~B[nAe@nB_@`BaArEMj@s@fDaApEcArEaArEaApEMp@q@bD_ArE_ArE_ArE_AtE_ArE_ArE_ArE_AtE_ArE_ArE_ArEm@tCeAlFcA|ECNeAbFyAhHyAdHo@zCQt@aArEaArEaArEs@jDMf@aApEMl@u@`D?@Mf@aAdDKZeAlDg@`Bm@dByAdEc@nAy@pBoAvCSd@gBzDQ`@kAdCaCpEgBhD[d@eCbEgBrCQV}BbD}BbDKPyBhCeCzCg@n@aBbBmCnCmCnCmCnCuAvAu@v@mCnCmCpCmCnCkCnCmCnCmCnCmCnCkCpCmCnCmCnCmCnCmCnCkCnCeAfAaApAaC~CUXeBjC{BfD]h@sAfCoBrDs@pAw@bBiBxDiBvDiBxDiBxDiBvDgA~BaArBiB`DoBbEqBbEmB~DsBhEuBjEsBhEqBbEoB`EoB`EoB`EoB`EoB~DoB`EoB`EoB`EoB`EoB~D{@hBs@vAa@z@eAjCcBjEcBhEe@jAy@`C_BnEGP_AxCmBdGUt@oAnEq@bC_AnDgApEy@fDMf@s@~COr@_ArEYnAEPa@pBc@rB[vAeA|F_@jBCN_@bCCNo@dEIj@Gh@k@zEK|@]vDWlCKtA]bF?BY~EM|BGfBSdFIvBGlBSdFQdFQpE?TSdFQdFQdFEdAM~CO`EInBQpB_@vEAHi@~E]zCM`Aq@zEU~Ag@vBcAtEaAtEQr@y@zCkApEEJmA~DM\\qAdDKVqAjD_BdE_BbE}AbE_BbE}AdE_BbE_BbEQd@mA|CaB`EaBbEaB`E_B`EaBbEkArCWl@eB|DeB~DgB|DeB|DeB~DgB|D_@|@g@hAg@hAEJiB`EgB`EiB`EgBbEGL_BrDiB`EgBbEgB`EgBbEgB`EgB`EiBbEgB`EgB`EgBbEgB`EgBbEiB`EoAtCi@rAaC`F_C`Fu@`BoAxBeCrE",
              "start_location": [
                50.997318,
                35.79114
              ]
            },
            {
              "name": "آزادراه کرج - قزوین",
              "instruction": "در آزادراه کرج - قزوین به مسیر خود ادامه دهید",
              "bearing_after": 307,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 34523,
                "text": "۳۵ کیلومتر"
              },
              "duration": {
                "value": 1270,
                "text": "۲۱ دقیقه"
              },
              "polyline": "qle{Eau_sHqBpDqBpDmBjDyB~DyB~D}@~A{@`ByB`EoBrDaCfE_CfEaCdEaCfEwB|Ds@fAiArB{B~D{B|DkAvBk@hAuBdEsBdE_B~CSd@eBzD}BjFs@~AqCpGyBrFwBtFuBpFo@~Am@dB}AhE{AfE}AhE{AfE{AhE}AfE{AhEyA~DCF{AhE{AhE{AhE{AfEyAhE{AhE{AhE{AhE{AfE{AhEaAlCIV{AhE{AhE{AhE{AfE{AhECHyA~DELuAxD}AfE{AhE}AfE{AhE}AfE{AhE}AfE{AhE}AfEiA~C_AhC_@dAmBnFe@lAoAdDwBrFMXmBhEIReBxDABcBrDgBxDmAjCWl@aBnD_@v@iBvDkBxDiBvDiBxDkBvDiBvDiBxDkBvDiBvDkBxDiBvDiBxDkBvDc@|@eAxBkBvDiBxDkBvDiBvDkBvDiBxDkBvDiBvDkBvDiBvDkBxDyAxC{BvEsBdEsBfEqBdEqB`EyBrEyBrEuBnEkBvDiBvDg@dAaArBgBzDgBxDIPyAjDcB|DeAbC]z@}AbE}A`E}A`E}AbE}A`EcAlCWt@wAfEcAzCa@jAcBhFeBhFeBfFeBhFaB`FGPoB~FoB`GmBzF_CbH}@lC_ApCyAlEyAlEyAlEyAlEyAjEqA|DITuAdEuAfEs@tBa@nAuAbEmApDIRuAdEy@`C]bAuAbEa@nAu@tBwAdEwAbEuAdEwAbEwAdESl@iApC}A`Ek@vAu@bBeBxDsAzCqBdEsBfE[n@{ApCuBvDqBtDsBrDqBrDqBrDsBrDqBrDqBrDsBrDqBtDqBrDsBrDqBrDqBrDsBrD_BxCcClEcClEgBdDYf@kAtBw@xAq@jAkAtBqBrDqBrDsBrDqBrDsBrDqBrDsBrDqBrDsBrDoA~BQZsBvDqBtDsBtDqBvDsBtDqBvDsBtDqBtDsBvDqBtDsBvDqBtDo@jAy@pBcBbEcBbEm@vAs@lB}AfE}AhEm@`Bo@dB{AhE{AfE}AhE{AfEgAzCkA`DeB|EcBxEGP}AjE}AjE}AhEc@lAy@|B{AhE}AjE_@`AcAbCoAxCWh@kB~DUd@_BpC_BpCW`@_CjDcAzA}@jAiC~CiC`D{BpCKLkC|C}BjCeDxDKLyAdBiArAeDxDcDxD}CpDwEtF}@`AiArAW\\wCrDSXEFsC|DsC~DmCxD}BjDU^aBpCqAzBc@v@qBvDmBlDcAjBs@|AwBjEsBfEaBbEcBdEcBbEu@jBm@vAeB`EcBbEeB`EeB`EeBbE_@|@cAbCcBbEeBbEcB`EcBbEQ`@}@vBcBzDeB|Ds@|Ao@~AaB`EaB~DaB~Dg@lAy@pBGP}@hB_@~@_B`EQ`@eApCGLyAdEyAfE}@jCYx@gAfDkB|FiAhD[vAyAbGuB~IKh@aA`FSdAk@xCaA~Ec@zBYdBy@bFy@bFy@`Fc@hCMz@G\\[hB]xB{@`Fi@bDO~@{@`Fy@bF{@bFy@`Fm@pDg@bD[hBcAdGs@hEG^}@hFALw@zE{@hFy@dF?B}@fFKf@q@`Ew@rECJId@UxAGXUvA}@pFq@fEKh@y@hFSlAk@lDe@tCERW~A",
              "start_location": [
                50.466248,
                36.077692
              ]
            },
            {
              "name": "آزادراه کرج - قزوین",
              "instruction": "به چپ برانید  و وارد آزادراه کرج - قزوین شوید",
              "bearing_after": 286,
              "type": "fork",
              "modifier": "slight left",
              "distance": {
                "value": 189342,
                "text": "۲۰۰ کیلومتر"
              },
              "duration": {
                "value": 7051,
                "text": "۱ ساعت ۵۸ دقیقه"
              },
              "polyline": "mve|Eez`qHw@zEw@xEw@zE[pB[fBw@zEw@xEy@xEw@zEg@xCO~@q@|Es@zEs@zEi@lDG`@ALq@zEq@|EAJk@pEUjBSrBg@~EKfA[vC[bDIv@WtCKnAa@tEi@`Eo@xIe@bFYtCMjAe@~EWfCQxAUdB]vBI`@i@rCKb@c@fBi@hBGTmAdDEL}@|Bg@dAQ\\aBvC?@cBlCW\\uAlBo@p@mArAaA|@}@x@yAlAi@b@uBrAE@u@b@mAp@[PaAf@kA^uBl@mD`AoDbAoD`A_D|@MDmDfAgA\\aBv@yCzAIFuCdBIHoCtBGFqChCkAfAaAhAeApAy@nAgA~Ao@jAk@bAaApBUb@qAtCwAzCeAzBoBnEmBnEoBlEkBhEqBpEeB|DGRgBvEuAnDQh@gAdDUv@yA`FsAvEeAhEQt@aAvEcAvECHu@lEy@~Eq@|DI^aAzE_AzEKb@{@rD_@zAk@xBw@tCY|@uAnEwAnEKZUt@u@|BuAlEwAnEwAnECJsAbEwAlEyAnEOb@gAhDyAlEyAlE}@nC[|@u@|Bi@jAgA~Be@|@qAfC_@p@yAdCa@j@cBdCsBlCmCtCw@x@}ApAwCdCwAhAeAp@uCfBMHgDdBm@Z}Bz@kBt@cAZeDbAIBcAX}@Vs@HwDd@wDd@s@JeCNyDXyDVyDXyDVyDXyDVyDXyDVsCRe@DyDZoCRg@DmCTk@Dm@DqAVgCh@sAb@o@RqAh@mAh@y@`@qAt@o@`@}@l@eBtAMJaA|@cAdA[\\q@z@y@bAa@j@u@dA??gAfBy@~Ae@`AkAlCsApE{@rCW|@qArEa@vAk@|BkAtE_@zAg@zBcAzEu@jDMl@}@|EGVq@dEw@~Ew@~Ew@~Ew@~EGZq@bEo@bEKn@m@pDw@`FQdAc@nCAD]zB{@lF{@nFy@hFu@vEu@tEu@vEs@vEu@tEu@vEu@vEu@vEu@tEu@vEs@vEu@tEu@vEa@hCSlAc@|CIz@WdCIvAGpAIlC?DAvD?`@DzBFdBF|AP~BBZb@tDBH\\xBZzAJh@x@dDFTjApD~@tCvAlExAnE^jAv@xBBDz@xBh@hAVj@dAjBT^hBnCTZrAbBx@v@|@~@vAlAPNlClB??jCvAZNhBv@dA\\zAd@vA\\|@RzB\\zCd@zDl@|Dl@`Dd@XF|Dl@zDl@zCd@^HlDz@hCz@x@\\nBx@fAn@jCvARJ|AbA~ClCdBxAv@x@x@|@vAfBjCjDhAvAbAtAhClD`CbDNRzCfE|CdExC`E`C`D~BbD~B`Dv@dAhAxA`C`DxBtCFHdCzCdCzCjBzBX\\fCvCjAtA|@`AhCrCbClCFFjCnCjAjAbA`AnClClClCnClCnClCnClClClCnCjCnClCnBlBfDbD`D|C`F~EfBjBLLnDzCpD|CjDxCdElCfDvBZPhE~BbB~@~Ap@dE~AlBr@d@Nt@V^LhDhAbEtANDdCz@VFjDjAvC~@TJhDtAZLjClAfCjA\\PzCbBFB~CnBj@^pBpAVNbChB|BdBXTtCdCB@lCdCr@p@zAzA`A~@hApAv@~@pAtAjCpC`BdBh@l@lCpCnArA|@x@pCjCt@p@zAtAr@n@`BpAt@l@bBlAxCxBlA|@nAt@`DlB~ClB~CnB~ClB~ClB`B`A|@n@zCtBpBtA~AfAx@n@tC|B|@r@rApAnChChCbClAfAxBdC~BlCHJdC~CzAnB`@j@rEvG|BdDzBdD|BdDrAnBh@t@vB|CDFzBdD|BdD|BdD|BdDzBdD|BdDX`@bBbC|BdDzBdDbAxAx@jAzBfDzBfDlBtCJPtBlDtBlDvBlDtBlDtBlDZf@vAdCrBnDrBnDrBnDtBnD`AdBp@hApBpDrBnDrBnDrBpDrBnD`@r@pAzBrBnDrBnDrBnDrBnDrBnDR^`BlCtBlDtBlDvBlDtBjDb@t@tArB`AvA|BhDl@|@rAhB`CfDxApBh@p@dC~CdC|C@@fC~CfC|CfC~CfC|CxAhBl@t@hCzChC|CfCzChC|Cf@l@~AnBfC~CfC~CfC|CvBlCNPhCzChCzCjCzChCzC`BlB`FdGh@n@xAhB`CzC^d@|AzBzBbDPTbBvCpBlDLTvAbD|ApDBHrAxDDJjA`E@FfAlENj@n@fDp@nDFb@p@vEJn@b@hDn@xEl@vERzAX|Bl@xENfA^nCp@xEJl@j@fDNz@l@vCRdAp@fCNh@~@`Dp@~B`@dA~@fC^v@pAtCRb@jBtDbBjDDFpBnDvAbCZh@pBnDVb@xAhCrBlDpBlDpBnDtA`C\\j@pBlDpBnDZf@tAdCrBlDpBlDpBnDrBlDhAnBf@|@rBlDpBlDrBlDrBlDpBlDZh@vAbCpBnDpBlDpBlDj@`AhAhBxBfDb@r@rArBzBdDJPlBrChAdBp@|@|B`DJN`@h@nBhC`C`DbC`D`@h@bBrBfCzChAtA~@`AnCpC`BdBj@l@jCrCfClCDDnCnCpClCl@n@bB|ApCjCv@r@zAtArChC`Az@rAhAvCbCrAfAbAz@vCbC`BtAt@l@vC`CvC`CtAjA`Av@vC`CpB~ARPVRNLZTzAhArCbCpCbCDDjC`CnCdCdB|Aj@h@lCjClCjCn@n@zA~AjCnCfClC@@fCtCfCtCtA|Ap@v@dCvCdCvCbCvC|AfBh@n@dCtCdCvCdCvCxBfCJLbBnB`@f@dCvCfCvCdCvCdCvCdCtCdCvCdCvCf@l@|AhBdCtC~BnCDFfCvCdCvCfBtBZ`@`C|C~B|CpAbBj@~@tBhDtBhDtAxBxBtDxBtDR^zA|ClB~DbAvBf@hAfB`E@BbBfEb@hA|@~BfAzCTp@|@pCX|@L`@|@pCzA|En@rBj@hBnAtDNd@|AzE|AzE|A|Ex@hCX~@|BfHzAxExAtEtAfErAhEtAhEfAjDJZtAhErAfEtAhEXz@x@lCtAfErAhEhAjDJ\\rAfEn@lBf@xAzAdERl@fArCvAvDDJ`B~Dx@pBj@hAfBzDfBxDlAhC\\l@nBrDnBrD`AhBn@dAvBlD?@vBhDn@bAhAbB|BdDzBdDV\\jB`CtBlCJNfCxCnAzAv@x@jCrCjCrChCrCFFhC`CpCfCpChC\\XvBhBzBjBXRxC|BdAx@rA`AtAfAbDrB??bDpB`DnBzCpBvA~@dAl@`DdBPJjC`B|ClB|CnB|ClBzBtAb@X|ClB|ClBHFrCfB|ClBp@b@jBhA|ClB|ClB~ClB|ClBdBfAv@d@|ClB|CnB|ClB|CnB|ClB^VxB~AxCvBlBtAf@d@rCbC??hCpC^b@dBrBbCxCnAzAp@`A~A~BXd@hBbDFHlBpD@@fBtDJRpAjDzA`E^`At@bCv@dCVbAhAjE??|@rEP~@b@tC^bCRrA\\fCLnA\\`DDx@Z|ETjD@r@H~EFdDAx@A~EAtCCjAO~ECnAQlCY|EAZ]`E_@zEa@|EQxBO`Ba@zEc@|Ea@zEStBOdBa@zEc@zEa@|E??c@zEa@zEc@zEa@|Ea@zEc@zEE`@[xDc@|Ea@zEc@zEa@zEKjAUpC_@zE_@|Ea@zE_@|EOjBKpBW|EUzE?BG~EG~ECxB?fBB~E?|AJ`CP~EDrAPhCZ|EFdAZtC`@rDDf@Jz@d@zCr@tETzAd@vB`ApEb@tB`@vAjAjEr@fCZ`AvAdE~@rCVn@~A|D~A~DBFdAjCZv@`BzDbB~DxAhDHR`B|Dp@`Bl@~AzAbEDHpA|DrAhEZ~@r@jCjAlEl@|BZpAbApEPx@j@zCv@hE@Lt@vE\\|BP|Al@xEHr@\\hDd@|ED`@T|DZ~E@RPlER`F?DFzEFzD?f@?`F?nCEpAM`FO`FA^Q`EQ`FE|@U`DWlDGp@WpDIx@k@hFe@xECNs@xEm@|DG`@w@~Ei@jDOp@cAxEeAxEcAvEs@dDQr@iAtEiAvEgAtEiAvE}@tDeAzEk@fCYrA_A|EaAzEQ|@e@bDs@bFm@nEa@~EOfBOxBUzDEf@[`FEr@OnDS`FC|@GfDGbFCfA?|C?bFAhAFzCHbFHjEJ|FL~FJ~FBn@?lE?xF?r@EfFEdFAdAS~C]bF[tE]|EU~CKz@k@xEk@xE??w@tE_@~BWtAMn@q@`D}@bEsAbFq@dCg@zA}A~EM`@oAzDaAvC_@bAcBlE{AbE{AbE}AbE{AbE{AbE{AbE{AbE{A`EA@{AbE}AbE{A`E}AbE{AbE}AbE{AbE}A`E{AbE}AbE{AbE}A`E{@~Ba@bA{AbE}A`E}AbE}A`Eg@tAs@lB{AdE{AbE{AbE{AbESf@aA~CsAjEqAhEsAhEc@vAm@rBmAjE}@zCQn@gAnEeAdECHgApEeAnEgApEgApEeAnEgApEgAnEeApEw@bDOl@cApEeApEeApEeApEeApEcApEeApEeApEeApEm@lCWbAeApEeApEeApEeAnEcApEeApEeApEeApEeApEe@lBa@bBiAnEgAnEgAnEiAnEEPiAxDoAjEoAjEqAjEo@zBa@nAuAfEuAfECLi@`Bq@jB}AlEyAbEa@hAgCfHwA`EyAbEyAbEyAbEg@vAo@jByA`EyAbEyAbEwAbEyAbEyAbEwA`EyAbEyAbEyAbEwAbEGPqApDyA`EwAbEyAbEyAbEwAbEyAbEELqAtDyAbEwAbEi@zAq@dB}A~D_B~DoA`DOZcBzDeBxDcBzDeBxDcBzDq@|AWd@_ClE{BjEuBxDsBxDsBtDwBpDcAdBs@hAwBpDwBpDwBnDyBpDwBpDwBnDwBpDwBpDKNkB~CwBpDwBpDwBpDcBpCS^uBrDuBrD{AjC}CdFu@nAwA|BmCjEmCjEkClEgC`E}B~D}BzDA@_C|DyBpDuBlDkArBi@x@{BfD{BfDyBfD}@rA_ApA_C`DaC`DwBtCGJcC|CcC|CaC|Cw@bAmAxAcCzCeCxCwBjCMNeCzCcCzCeCzCi@p@{AhBcC|CcCzCcC|CeCzCcC|CcCzCeC|CcCzCcC|CeCzCcC|CmB`CUXeCzCeCxCeCzCeCzCeCxCY\\gBbCaC~C_C`DaC`D_C`D_AlAa@j@cClDeCjDcCjDcCjDs@`AiArBwBxDwBxDwBzDwBxDMTgBdDuBzDuBzDuBzDaBzC_BzCq@pACBeCxEiCzEqBtDoBtDqBtDoBrDKRcBbDw@vAs@vA{BnEyBhEiBbDIPqBxDoBvDoBxDoBvDcBbDMTqBtDqBvDc@v@sAxByBpDW`@cBhCGJ{BvCu@bAsAtAiBjBSROP]^uBjBWT_CpBQNiClBq@f@kBrAo@b@sBjAoCzAWJiD~AYLuC|@_Bd@qA^kCv@g@JsDx@gB^oAPwDd@eD`@Q@yD^wD^yD^yD\\_AJiBLO@yDVyDXyDXyDVyDXyDVyDXsAJcBPyD^aCTuDXuDXwDXcCRq@BuDRK@iDTwDTuDVuDVgDRMBuDZuD\\G@kDh@sDj@OBaDr@qDv@i@JeCp@oD~@o@P}Bt@mDjAe@NcC`AiDvAIB{CxAyCvAKFcDhBoC~AOJ}CvBsA|@eAz@wC~Bs@j@aBtAsCbCCBmCdCaBzAm@p@iCtCoBzBWZgCvCgCvCCB}B|C_C`Dc@j@}AtB_C`D{@jAeArAcC|CcC|CcC|CgAtAMPMNiDrEiDpEeDnEcDxEiBlC}@hAiDhEe@l@_BtBeCdDeAvA_AjAuBfCSVcCdDeCfDeB|B[h@}BnDuBfDEFuBtDwBtDS\\qAdD}AxDGJkB~DcBnD_BfE_B`EAB{AhE{AhEOb@gAfDyAjEwAjEoAzD}B~Hc@|AwAjFOh@eA`EuAjFu@pCc@tA}A|EY~@kCzJoApEoApE}@fDOh@oApEoArEm@vBc@vAuAlEuAjEiAlDM^wAjEwAlEs@vBg@pAaBdE_BdEGLqAzCyBhFaAzB}@hB_C~E}AdDMTsBvDqBtD_@r@uA~BuBrDeBvCQXyBnDyBnDQXiBrC}BjDo@~@qAdBeC`DcCbDeC`DeC`DgB~BgCbDiCbDiCbDgCbDiCbD_AjA_AlAcC~CcC|CaC|CcC~CcC|CcC|CmBbCUXcC|CcC|CcC|C{AjBg@p@cC|CcC~CaC|C]b@aB~B_CbD}BbDyAtBc@n@{BfDyBhD{BfDs@hAeA~AyBhDyBhDyBhDU^cBfC{BhDyBfDcBfCW^yBhD{BfDyBhD{BfDyBhD{BfDyBhD{BfDABwBdDyBhDyBhDyBhDMNkBxCyBhDyBjDyBhD[f@sAhCoBtDoBrDmBrDoBtDoBrDIPgB`DqBpDqBpDqBpDqBpDs@nAaA|AwBjDwBjDyBjDwBjDS\\gBfC}BdDaAtA}@lAaC~CaC~CaC`DaC~CEFyBzC_C`D_C`D{B|CCD}BdD}BdDs@`AkC|Do@`AyA`CqBdDU\\aC~Dg@`A]p@sAjCqB~Dg@dAcAzBiBbEaBxDGJcBhEcBfEcBhEGNsA~DyAnEyAnEmAtDkChIeBpFkB|FmB|FiBvFaBnEcBnEADwAvDGNgBjEiBjEmAvC[p@mBbEoBdEcAxBa@t@uDlHkBrDOV}BhE_CjE_ChE{BbE{BhEeCtEcCrEkC~EABmC`FmC|EINWd@wApCmBxDaBdDIPgB~DeB~DsA|CQ`@_BbE_BbE_A`C]dAwAhEiAfDM`@qAlEqAlECJmAbEoAlEqAlEoAnEc@vAm@tBqAlEsAlEqAlEOj@cA~CiAjDM^}AdEo@dBo@~A_BbE{@xBc@dAc@|@gA~BkB|DiB~DMT_BdDmBzDiBxDA@oBxDoBxDmBtDCBmBzDmBzDmBzDmBzDMX}A`DmBzDmBzDmBzDa@x@iAbCeBxDCD_BdEgApCWt@{AhEm@bBm@fBwAjEYx@{@rCuAnEsAlEkAxDITuAlEuAlEw@fCeAvDcDvJM`@qAdDaBbEYt@kAlCgB`E]v@kAdCmBzDg@bAkArBuBpDuBrDy@tA_AxA}BlD{BjD{A~Ba@l@}BhD}BjD}BjDmBrCyBhD{BjD{BjD{BjDyBjD{BhD{BjD{BjDyBjD{BjD{BhDyBjD{BjD{BjD{BjDyBhD{BjDKNmB|CyBlDyBlDaBjCU`@uBnDeBxCmBdDaBrC{B`E}B~D}B`E}B`EwBvD}BdE{B`E_CbEwBxDuBvDeAlBs@hAyBrD{BrD{BtDCB_CdDcCjDcChDoAfBu@~@kC~CkC~CmC`DqBbCsCbDqCdDsCbDqCbDsCdD_BjBq@x@oCdDoCfDaCtC}BdD_CfD}BfDcAxAu@pAuBrDsBpDuBpDe@z@eA|BiB|DiBzDgB|D]r@_AtBKRgB|DiB|DgB|Dk@pA{@jBgB|DiB|DgB|DO\\}AzCmBvDc@x@oAxBsBrDy@vA}@vAwBnDgAhBq@`A}BhD_B|B{BdDyBdD{BdD{BbDi@x@oAlB{BdDs@fAeA|AyBdDiBpCQTyBdD{BbD{BdD{BdDyBdD{BdD{BdDwAtBa@l@}BdD{BbD{BdDmAhBk@z@yBfDwBfDyBfDcA|AYd@wBnDyBpDyBlD?@uBrDuBtDuBrDcBvCQZuBrDuBtDuBrDuBrDsBtDuBrDmBfDGJyBpDwBpDwBpD]h@cB|BcCbDcCdDg@p@_BlBoBbCWXoCtCw@z@wAvAqCnCsCnCkAjAeAbAuCjCuCjCsClCuCjCyAtAqChCqCfCqChCmCfC{ElEwDnDwDlDsDhDoChCoCfCqCfCkCdCCBoCfCqCfCoCfCqChCoCfCqCfCoCfCoCfCMJcC|BoCfCoCfCqChCoCfCoCfCqChCeC|BIHoCfCqChCoCfCqCfCoChCoCfCqCfCk@h@cB|AoChCqCfCoCfCqChCoCfCoCfCaBzAo@j@oChCoCfCoChCqCfCoChC[XsBlBoChCqCfCoChCoChCyAtAu@p@qCfCoCfCqCfCoChC}BtBQPoChCoCjCON}@`Am@n@mCtCML{BjCgC|Cq@x@qAdB_CdDqAdBm@~@{BjD{BjD{BjD{BhDWb@cBdC}BhD}BhD{BhD}BhD}BhDq@bAkAbB_CfD_CdD}BfD_CfD_CdDaAvA{@nA}BhD}BhD}BfD}BhDaAvA{@nA}BhD}BfD}BhDgA`Bu@dA}BhD}BfD}BhD}@pA_AtA}BfD_CfD}BfD_ChD}BfDuBzC}@rAmC~DoC~DmC~DoC~DgCxDa@j@}A~BaCjD_CjDaCjD_CjDKNsBzC_CjDiA`Bs@lAyBrDsBfDEHqBzDqBzDUb@wAzC_BfDq@tAo@fByAbE{AbEITeArDmAbEkAnEe@dBe@hBmAnEkAnEkAnEkAnEkAnEkAlEeA~DqAxEmAtEoAtEmAtEmArEoAtEmAtEoAtEg@nBe@dBmAtEoAtEmAtEmAtEmArEkAlECFmAtEmAtEmAtEmAtEw@vCU|@oAtEy@|CkAjEkAlEkAlE?@iAjEkAlEkAlEkAjEiAlEkAlEkAlEkAlE[lAm@~BaArDY`A}A`GoAxEq@jCa@jA{ArEsA`EGNaBlEaBlECFkBzDmB`EoBbECFwBnD{BvDyBvDEF_CdD{B`DGHkCbDoBbC_DpD_DnDwFrGe@h@wDdEsDdE_EnE{DjEuA|Au@z@iCtCqD`EkD|DiCrCgCtCy@|@mAvAgCrCgCtCgCtCgCtCgCtCoBxBYZgCtCgCrCiCtCgCrCgCtCgCtCiCrCgCtCgCrCiCtCgCtCgCrCiCtCgCrCgCtCiCrCgCtC{AdBk@n@gCvCeCtCgCvCeCtCgCvCgCtCeCvCgCtCgCvCeCtCgCvCaAhAeAjAiCrCiCrCiCpCgCrCiCrCiCrCiCrCiCrCgCrCiCrCiCrCMLoBrC}BbDe@r@qAtBuBhD}@vAs@vAmBtDo@pAeB~D_AzB_@fAyAhEyAhE??kArEkApE[jAg@hC}@xE_AvEWtAc@dCy@xEy@zEy@zEy@xEy@zEy@zEa@dCWrAy@zEy@xE{@zEy@xEy@zEy@xE{@zEy@xEy@zEOv@k@`Dy@zE{@xEy@zE{@xE{@xEy@zE{@xEy@zEu@dEERu@|Eu@zEEXo@`Eu@|Ei@dDk@~Em@~EQxAWdCe@`F[nDGp@[bF[dFYlEATItAQlC]bF[bF??YfEAZe@`H]`F_@`F_@bF_@bF_@bFOnBOpBWpDEp@YbF?@KnCAtAEzB?hBA`@HpD@PTdFB\\\\bEHfAh@tCH^n@xDBNz@nDFThAzDFPn@nBTp@Rf@z@zBf@dA^t@JVr@nA",
              "start_location": [
                50.144508,
                36.243112
              ]
            },
            {
              "name": "آزادراه پیامبر اعظم",
              "instruction": "در آزادراه پیامبر اعظم به مسیر خود ادامه دهید",
              "bearing_after": 227,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 267954,
                "text": "۲۷۵ کیلومتر"
              },
              "duration": {
                "value": 10821,
                "text": "۳ ساعت "
              },
              "polyline": "inu~E}jigHvBhDDF|BlDdA`Bt@lA|BpDrBbD|A~BPVdBjCV^xBjDzBjDtBdDDDzBjDvBdDBDtBpD\\j@`A|BFR|@`CZfAb@`Bb@pB@?Z|BN`BRrBHlBDjA?zC?n@IlCCd@SlCOtAQxAa@bCSlAg@jC{@xEq@pDKf@{@xEO~@g@zCKp@a@jD?@]~DC`@_@bFUfDIz@c@hECTm@~E?Bo@zEq@|Eo@|Eq@~Eo@|Ei@vDk@dEKt@c@dDq@|Eo@zEq@zEo@zEQjA_@nC[~BQ|A_@lDEp@_@~E?JQvECx@ChDA|A@fCDbF@b@D~DD|C?dA?rCCpAGxCIfASnDIp@a@`EGZm@bEEV{@|DGTaArDKZsAhEELiA~DY~@m@pCUfA_@pCOpAQnCGbAE|CCvADlCFfCJxAXxDDf@^~EDb@NzD@BHlC?tAArAGnC?FOxBQ|AGj@]`CKl@QhA[tA_@zAq@~Bw@jBYt@}AjDKTmBdEiArCWv@u@zBa@tAGRaA~Ds@rDMp@o@bEGd@[zBWnBi@tDKr@{@hFW~Ag@dC{@nEET}@zECHkA`FiA`FK`@s@lDSbAGX]xAoA~FqA~FqA~FoAxFg@zBc@pBmAjFc@nBe@|BcAdFgA`FgA~EgA`FgA~EgA`FS`A[vAUdAaApEENq@rDGVs@jECRYpBSnBCT]~DALc@bFe@dFIhAUxC_@dF_@dFEj@]xD[hDGx@]dFEr@YlCE`@MpAQrCCR]pEEl@YvDa@bFIz@YhDCZ_@fEY~CKbAa@vDq@hFABu@bFW~Ac@dCw@pEERaAbFGXc@tBYpAy@rDIXIVoA|EUz@}@zCwAxEOj@mAdDyA`EGNcBnEw@pBe@jAoBrEmBrEkBjESb@gB`EgB`EgB`EgB`EgB~DgB`E}AnDIPkBfEkBhEkBfEkBhEmBhEkBfEkBhEkBfEkBhEcBzDq@|AgB`EgB`EgB`EgB`EgB`EgB~DgB`EgB`EgB`EgB`Ec@bAcA|Bq@|Am@rAeB~DcB|Dm@rAw@hBeB|DgB|Ds@`Bq@zAgBzDg@hA{@tBe@lA{@rBo@|As@`B_BnDEL_B`E_BbEu@lBi@tAmAbD]z@iCfH}AfEGRsAlDO^iDbJ}AbEsAlDKT{AdE}AbE}AdE}@dC_@z@{@rBe@lAm@`Bq@`B_A`Ca@~@kAjC[n@{A|CQXsBnDGHmBdD_A~Aw@jAyBjDiBtCORaAvAw@pAgAbBq@fAo@dAiAbBs@fAeAbBW`@}A~BEDaArAy@rAq@dAWb@Y`@KNeA~A_ApAq@~@sAlBy@nAiA`BiAdBw@lAeBjCY`@_ClDCBsAtBk@~@kAnBs@dAcCrDm@|@sArBABsAhBo@`AMNkAhBi@v@k@z@wArByAtBc@p@_CnDILoBdDEF{@bBq@jAU^cBnCABmBlDEHwBtDwBtD{AhC[j@sBxDsBxDiAvBk@~@yBrDuA`Ca@r@uBvDyAfC]l@sBxDu@rA_AbBs@vAw@hBo@zAs@jBm@|Ao@lBq@nBe@~Ag@`BQl@_@nAk@nBGRK`@u@nCS`AcArEI\\o@xDk@fDMn@?@y@xE{@vEy@xEO|@m@vCu@xDG\\u@rDGb@u@xEEVc@~CSxAY`Ce@`EEX]dCKtA[|DE`@a@vEAD_@fEATYzE?BQ`FQ`FO~EQ`FQ`FQ`FQ`FQ~EAPSnEGtAUhCO|AY|BM`A]vBSnA}@xDUv@{@`D_@dA}@dCkAhCSd@cCvEs@hA]h@g@x@wAdBc@h@cBjBKJaCzBA@wC~B??kCdBOJ_ClAc@RyB~@m@R{Bx@o@NmBh@aAPqAT_BP}@JcBPcAB}BFs@?iEKWAiCOe@EgE]}D[qDWIAwD]aE]cE_@aE]aE_@aE]sD[uDWgAGkBC??uD@c@?qCP_@BsCZK@{Cl@G@iDz@C@kDhAq@TuBbAYLeC|AQLiCbBGFqCpBYRwBnBcB|Am@h@qCfC}@x@sAjAqCdCqCdCsCdCqCdCqCfCqCdCsCdCYVuBnBmCdCC@oChC_@^eAhAo@r@y@|@oAtAs@v@qA`BaC|CCB{B|CgAzAs@hAoBxCILuBjDuBjDCBsBdDwBjDwBhDwBjDuBhDwBhDwBjDwBhDwBhDwBjDuBhDwBhDwBjDwBhDwBhDwBjDu@lA_AzAwBhDwBjDwBhDwBhDwBhD}AdCYb@wBjDoB~CEJwBhDoApBg@x@uBhDwBjDwBhDU`@aBfCwBhDkAjBk@|@yBhDYb@cB|BaBxB_@b@gCvCa@d@iBhBcB`Bk@f@sCdCoAhAcAt@aChBUPwBtAe@X_DjBE@}C`Bu@^_Bv@MFeBx@aA\\_DjAIBiDlAQFsCx@G@oDr@qB`@_ANqDj@qDl@y@LwB^UDyCj@iCf@e@LkCn@c@N}Bt@k@VeDzAGB_Aj@sAx@gChBq@f@gCtBSPqBlBq@t@yCjDqDdEsDfEmDbEmC|CoAxA{@bAmCzCkC|CmCzCkC|CmC|CkCzCmC|CkCzCeBpBe@j@yBnCONmCzCu@z@mAhAc@`@qCdC[T[VeAp@kAt@eC|A]NcBt@eAb@o@X_Cn@GB{Cv@MD_Dp@QDuDt@gB^kATsDt@uCl@]HyBf@w@RuA`@yAd@aA\\iBv@MDiCpAOHaCtA_@XiA~@kAdA_@\\oBrBu@t@uAbBo@v@uAdBsAbBo@|@aCdD_CfDiA|Au@fAaCdD_CdDaCdD_CfDaCdD_CdD_CdDaCdD_CfDaCdD_CdDaCdD_CdD_CfDaCdD_CdDaCdD_CdDaCfD_CdDaCdD_CdDKLwBrCs@z@uA~AsAzA{@t@gB|Ao@d@{AfAaAn@{BvAe@TeCjAc@NmC~@a@JoCt@a@F}B`@w@JcBP}BLk@DuCDsBDkAAw@AgCM_ES_EQA?}DQ}DQA?_EGs@AkCBK?sDH}@BwBNwBL}APqEd@aBPuAVu@N_Cf@uAZ}A^cB`@oA^iA\\eBl@cBj@kAd@yAl@qAl@oB|@y@`@iDbBgDbB{CzA}BhAoBbAoAl@_EnB_EpB_EpBwDjBqAn@iDbBkDdBiDbBoB`A{@`@kDbBgClAYLsD|AuDzA[LuC`A_Bh@kDlAkDjAmDlAkDlAmDjAkDlAkDjAmDlAkDjAmDlAkDjAkDlAmDjAkDlAmDjAi@RcCt@aCt@i@RmDlA{Ah@oAd@kDnA_DhAKDeD`BeD`Bg@V{BlAoAr@qAv@aCzA[TyC|BwC|BIFkCzBuCdC_BrAs@r@mCfCCBiCtCKLyBnCc@h@{AxB}BfDeA|As@jAkBzCKPoBtDEHcBnDe@bA}@zBaBbE_BbEa@bA{@~B}AdE{AdE}@~B_@dA}AbE{AdEoAhDw@|BwAhEyAjEABsAhEuAjEc@pAo@|BqAnEs@`C]lAmApEoApEa@vAg@zBu@zCSv@iArEENeAbEiArEiArEcA`EGPmArEmApEERaA~D_AzDsAtFU~@_ApDqAjFkAtEkAtEgAjEsAhFqAfFqAfFmA|Ee@jBw@zCmArEoAlEe@dBo@bB{A|DCDcB~D[t@oAbCUd@}AjC??yBjDIJuBvCaC`D_CbD]d@cBzBcBxB]f@}BfDQXeBpCsAxBc@t@sBnDuBpDsBnDsBpDuBpDsBnDsBpDuBpDsBnD[h@}A`CeBnCUXaC~CABiCpC_A`AoAjAc@b@oBbBKFmCrBQLkCdBEBsBlAi@VeD`B{BfAi@VgDzAgD|AeD|Ak@XyBfAeDbBi@VwBpA[RaCbBUN}BhBCBqCfCA@mClCoCnCoCnCmCnCoClCeBfBg@f@mCpCmCpCmCpCmCpCkCpCA?mCnCmCpCoCnCmCnCmCpCmCnCoCnCq@r@{A|AmCnCmCpCwAvA}A~AmCpCmCnCmCpCmCnCoCpCmCnCmCpCmCnCmCpCeCfCuCvCuCvCsCvCuCvCuCvCsCvCuCvCkCnCkClC}D~DmCpCeCdCIJmCtCkCvCA@mArA{@bAiCxCIJ}BnCaBnBe@l@cCbDyAnBi@p@wBpCi@t@eCbDgCdDeCdDaAnAeAtAeCdDeCdDwBrCOPeCdDeCdDgCdDeCbDgCdDs@`AqAbBkA`By@dAoAbBu@~@kC`Dq@v@qA`BEDiC`DY^oB~BoB|B{BnCMNgCzCu@|@}@fAWZm@r@_BjB?@kC~CeCxCEF}BpCMNgCfDEF_C`DA@cCfDwApBk@z@_ClDMRqB~CgBrCU\\}BrDW`@cBpC{BtD{BrD}BtDKPsAxBMPmFfIQX}BhDU\\mAfB[`@{@bAkAxASTmAzAg@f@c@d@eBdBEDqBhBc@^cBzAs@d@_BhA_Al@aAr@_B|@i@XyBnA[PmChAKD}CpAcAb@iBj@oDhAoDhAoDhAmDhAoDhAoDhAsBp@{@XmDnA[JmClAaBt@eAl@yCbBID}CxBw@j@_BtA_BvAs@r@mCnCABeC~C{AnBe@r@kBzCMRoBvDa@r@iAhCsAtCoBjEoBlEmBfEmBnEoBpEaBxDKRyAxC]n@_@v@yA|B{AlBi@n@mAvAy@~@m@n@cBzA_@\\wB`BGFsCpB{CvB{CvBqClB{BbB_@\\cBtAq@r@e@d@qAxAUXoAbBq@dAU\\qAdCKPq@rAw@jBSb@}@fCM^k@fBe@hBI\\q@hDCR_@hCQvA[lCIvAG|@KhDABAlB?vB?|DD`CFnBLrFBx@JvDNpFPrF@f@HhEJrFJpFDdBBlC?TBbD@x@@hCCfBCnECfAYlKEfAShFUfFGtAOrCOxCIlAYfFO|BMhB]fF]`F?BYhF[fFKhBQzBWjDIz@c@nEk@tE]xB]vB[fBe@bC]dBq@fDoAlGaA~EIf@mAdGmAdGm@|C]fBkA`GELWnA]lB_AvE_AvE}@vE_AvE_AvE}@vE_AvEWrAa@dCWbBYxBWxBOdBMvAQhCGr@SjD?BIhEAZGvC@jABjE?XDzCBhAHdFBdAJ~CNbFNdFJdD@~@JdFHtD@l@HdF@N?tE?r@CpDCtEANKdFADO~ECfASzCQvCGhA]bFAJa@tEe@~Ec@`Fe@`Fc@~E?@a@~ECP[pE_@`FWvDEj@Y`FMhBARIdBUdFGpACb@I`DGxBGrBQrEA`@OrFOtFQrFOtFOrFOhFSxGQzGSrGOdFMbFOdFObFOdFOdFObFOdFMdFObFOdFExAIjCGtBIlBEnAQrCCh@YxDAJ[vDEZa@dEEZg@~Ee@~EYlCMrAg@~Ei@~EYrCKlAg@~E[hDIv@a@~Ec@`FOzASdCc@`Fa@`FUnCg@zFe@tFo@bHk@~Gi@dGg@bGg@`Gg@|FYbDI`Ac@dFc@dFc@dFc@dFc@fFc@dFc@dFc@dFWxCKjA[fDI|@SfCI~AMdCE`BC|AClC?NBxD??@^HhDF~@NrCJpAHjA\\xCJz@h@dD@J~@lEDNfAdElAtE\\pAl@bChAtEZnAj@fCfAxE\\xAd@~Br@hDZvAfAbF`BvHPt@j@nC`AxET`Ar@rCT`Az@lCLd@bArCFNrAtCTf@jA~Bf@t@bA|Ax@jArAhBn@v@hCxC??pCpCnCpCXX~AbBRTlA|At@dA\\f@vA`C@DpAhCXr@b@`Av@tBDJr@`CXnA`@bBb@rBDN^xCHt@RhBLxBHzADjCDvACnC?d@ItDAJQ|CIdAI~@g@~CKl@i@zCEP_@`Bm@nBOh@gAbDu@~Bc@hAyAhE??eAxCQr@k@pB[bBIb@c@nDAJ[pDEp@OpBC`B?P?~BFfBNfFNfFNdFFrBBb@@b@N`GHlDDtAP`GN`G?@T~FDz@JvDRhHPbHRfHPfG@^TdHBx@RfED\\RfB\\vBD\\r@|Df@vCRbAn@jDJn@v@|E??p@~EHt@^bD@FVrCFnADn@LtDHjBFzBLfF@^JfENfFLdFF|BDhBFfFBnA?vCA~@UdDOjBWvBIh@i@xCGTo@fC_@hAWx@{@fCEFsBtDsBtDsBrDaBvCOVi@`AuBxDwBxDwBxDwBxDwBzDgB`DMVoAhC[x@aAfC[fAWz@u@|CGRw@lE_@vBYjBa@rCM|@Kt@Gh@WvDAPMnD@dADvFBvFDvFBfF?`C@|D@tABnC@bAJhC@TPhDDx@H~APbCJjA\\rCNtA`@fCTzA`@|Bf@nCRhAz@vEX~A`@xBz@xEx@xEz@xELn@f@jDNdAZvCHn@ZpD@HXxE??JlE@VDpD?p@CfF?DI|EAXQjEC`@[~DEh@_@jDAHo@|Eo@~Em@|Eo@|EY|BU~Ao@|Eo@|Eo@|Eo@|Eo@|Eo@|Eo@|Eo@|Eo@|Eo@|Eo@|E[|BU~Ac@zCQ~@{@fECNgArEI`@aAlDkApEmAnEkApEmAnEGR}@~DAD}@pEADs@`EEPy@xE]nBYvBcBrK[nBo@rDWvAu@fE}@tE}@pEA@{@vEOz@_@hCAR[jDCr@KrCAnAAlBDtBBxAPfCFp@`@hD@Hl@pDH\\j@jCZbAp@vBd@lA`AbC\\|@~A`Eh@tAr@jBbAnCVt@xAdE@FtA~DNf@|@bDLf@t@bD@Dr@vDF^d@xCL~@^zCL~@h@|Ej@zEj@|Ej@|Ej@zEFl@d@lDFh@l@nDJh@d@bCLf@h@tB`@vA`@vAl@rBNd@hA~CBH|AvD~A~D`B~D~A`E`B~D~A~Dr@dBl@xA`B`E~A~Dj@tAt@hB~A~DDJp@fBd@nAzAbERh@`A~CTp@v@xCTv@n@xCPz@h@zCNz@`@|CNfAXtCJjARrCFt@NjDDt@HlDB|@?bD@pACpC?ZKfE?BW|ECf@YvDGx@[dDe@|Ee@~Ee@|Ee@|EAJc@rEe@|Ec@fECTe@~Ec@|Ee@~EWdCKvAQfCIxAOlCErAK`DA`AGnE?PCbFAhA?xC?bF?zC?fA@bF?bF@lBAtBAtCCjAEzAOfCAH[|CKr@U~Ae@vBQv@e@hBSj@g@|As@dBa@|@iAvBCBsBfDk@z@mAlBwBhDyBhDy@rAeBlC_D`F{C|E{BnD}BlD{BnD{BnD{BnD{BlDc@r@wAzByBnDA@wBpDU`@_BtCq@lA}@jBu@|Au@`BaA~Ba@dAaBfEYt@aAtCiAlDM`@uAnEwAlEuAnEuAnEwAnEuAnEgAlD}A|E{A|E{A|E}A|E{A|E{A|EuAnEiBzFa@rAoArCEFmAxBaAxAs@fAoAvAm@p@cBxA]Z{B|A[RiCpAOF}C~@UHcCh@UDeDb@O?wDBe@@oCOoAIeBYmASaBg@wAc@sAi@iDwAqBw@y@WyC{@UG_Do@QCuDa@q@IcCK{@E{B?uDBK?kDLuDNwDNuDPwDNuDNwDNuDNwDNuDNwDNuDNwDNiBHiADkCLw@HeD`@YHaCh@y@VcBh@qAr@wC|AUPiDzBiDxBgDzBiDzByCpBeFhDsB|AcAbAGFs@|@aB|B_AvAeAnBk@lAYj@gAxCAD_A~CQv@o@tCM~@]|BYxCIbBKtBGhC?v@BlBZlGXfGTbF@VHvE@r@ExDIjFAv@CvFGjH?`@C`EEbFAbAG|CIbFKxE?HQ`FQbFMdDEz@U`FUbFU`FU`FU`FS`FUbFU`FU`FU`FSnEAPKhE?XB`F@@JlCJrAJvAXfCh@zEh@|EP|AN`C@RLnE?PCpEAPUnEA`@e@zDEVs@~DMn@{@~CMb@oA~C]z@kAzB_@r@yArB]f@eBrBgCvCgCvCeCvCgCxCeCvCgCvCe@j@cBfBkCnCEDiCdC{BtBURqCbCsCdCsCdCsAjA_At@wC|BuC~BC@sCxBwC|B{AjA}@j@{CrB}CrBiBlAq@b@}CnB}CpB}CnB}CpBy@f@eBbAa@VaCjA??qCfAUHoAd@{Ab@a@LmCj@iATeB\\qDr@oDp@qDr@oDp@oCh@a@HgCj@g@JcCl@i@NgA\\cBj@g@PoBv@QH_Br@eAd@eDzAC?cDzAeDzAeDzAaDxAC@eDzAeDzAeDzAeDzAeDzAoB|@w@XaA^{Aj@KBiAVgB\\E@yBXq@FsD`@sD`@}BVs@JmC`@_ATYFgBh@k@T_AZ{Ar@MH{@d@cBfAA@oAbAcA~@IHqAvAm@t@g@p@_AvAU\\_A~Ao@tA_@x@aAfCMXiAnDwAjEM^gAhDuAjEaAxCSp@uAhEuAjEuAjEuAjEuAjEo@pBe@vAwAhEi@|Ak@lBy@hCWbAa@zAe@vBI^u@vDCJe@lCQ~@YdBYvBo@|Eo@|Eo@|EABk@zEo@|Em@~Em@|EYzBUbBg@tDId@_AxEWpAi@bCa@lBe@dBe@~Am@lB_@hA{@zB}@~Bc@bAeB|DAFaBxDcB`E[t@eAjCi@rAu@nBe@rAu@rBMX}@zCGTi@fCWnAa@lBy@rEg@rDK`Ae@xDGt@g@pFY~CMrAe@rFKdA]lDc@tECZe@rFa@dFMtAq@rHg@hFe@jFe@hFg@hFATO`BQrBc@hFE`@YpDAVW~EYfFWdFCZMjEOfFOfFOfFOfFOfFOfFOzE?JQdFOfFQfFQfF?DSdECXOxBSjBCRa@pCQv@a@pBe@bBa@zAo@rBcAdDQf@{AhEK\\uAfDcBbEWl@mArCeB`EgB`ESd@qAxCwAbDK^wAlEK^aApDc@`Bc@rBa@pBADkApGiAlGGZq@zDw@vEy@vEu@hECNw@vEk@nDGh@a@dDGx@OfCExAE`B@`CBhCFxAR`FT`FNvD@j@?hACfC?PO`EC^QtCMjAUvBUbBEXq@xCK^i@hBm@|AQf@_AxBSZ_BnCUZcAvAe@j@e@j@eBfBa@d@kBhBi@h@gBbB{BxBSR_AjA}@lACFw@lA{@bB_@v@iAdC??o@rB_@xAeAxDGVgArEgArEc@dBc@lBeArEgArEu@`DQp@gArEOn@y@bDg@jBi@`By@~Bc@dAk@tA{@fBc@`AkArBYb@aBdCi@x@qAnB}BfD}BfDc@n@wAvB}BhD{BhDa@l@yAxB}BfD{BhDi@v@qApBmBtCMRkAtBc@`Aa@|@aA~BA@g@bBe@jBCLc@|BUjAWpAUlC?B_@|EAFGbCCxAEhBKzBIjBOvBMdBWzBKhAe@pCy@zEs@lEALc@nEAPSbFA\\@hE?d@N~DBz@TfDZbFN~BPfFBz@CjDCxAQlCQ|BWbBg@pDOj@kArEEPyArDe@hAkAlB{BlDyBlDyBnD{BlDyBlDyBlDeBpCS\\oBxD??aBdE_@|@w@lCcAjDId@_AzES|@e@~Cu@|Eu@|Eu@~EMt@u@`Ds@vCYz@wAjEOd@uAzCiB|DCFuBfDMTuBlCeAtAaAfAkCvCkCxCkCvCmArAwCdDuCbDoCzCoC|CoCzC{@`AoA`BoA`Bq@jAmBdDKPmB|DyAbEsAhEeAxDI`@aA`FaAbFcA`F}@rE]jBaAbFaA`FaAbF??aAbFaA`Fo@dDQ|@cA`FaAbF{@fEGX_AbFaAbF_AbFu@~DKd@}@tEgAxFMp@mAjEGRsApD{A~Da@bAgAvBaAfBu@fA{BbDA@iCvCiCxC??kCrCkCtCkCtCkCrCkCtCkCtCiCrCkCtCkCrCu@v@wA|AkCrCkCrCkCtCqBvB]VwC|B{@n@cB`Ae@X{BrAwCdBIDeD~AULkC|AaDlBc@X}BnAgCvAmDnBGDeDnBkDtBkBhA}@n@gD|ByBxAm@b@gD~BgD|Be@ZaCbBuCrB_H|EgAr@{CtB}CvB{CtBmAz@oAx@kCfBSJyCxAKBcCz@i@NaCl@o@HeCXo@BiADkBAqAAeBQy@IyBa@w@OuBo@{@YqBq@aA[kBo@kDoAkC_AcA]qEgBqAc@wBq@kDoAkDoAyBw@q@SoDaAGCiDy@gAYiBSeAMoBMoBMgACuDGIAmDGwDIuDIwDIM?iDIuDIwDIwDKkBEiAAwDIwDG_BCuABsABcBLeBNkAZoD~@eAXgBp@_A\\gB|@OHqCbBUN}BtB{BrBUXmB~BS^uBpDA?mBvDWf@iAxC_BdEs@hBgDnIgBjE}AvDKRqB`Ee@`AsAvBU\\mBrCeBjC]b@kCdDCDiC`CKHyCbCqCzBEBsFpDs@b@gDrByBrAm@`@eDxBgDvBeDxBgDvBu@f@oBpAeDvBgDxBYPmCbBeDvByCjBaAl@oDzBoDzBmDzBoDzB_Al@oBlAiDxBeFbD}CnBk@^sBhAcDdBaDfBaDdBaDdBsAt@mAp@aDfBaDdBsAt@mAp@cDdBaDdBA@wCdBEBcCnBQPwBrBSZwBpCoBhDyBvEGJgA|DU~@c@hBc@lCE\\a@nDMfBCb@KzCA`@EdFCbF?BGnEANUbFABi@xESbB_@tBy@xECLu@hEy@xEw@xEy@vEy@xEw@vEy@xEy@xEw@vEy@xEw@vEy@xEi@zCOz@y@xE{@vEu@dECPy@xEw@xEo@vDa@~B_ArF_ApF_ArF_@xB_@xB}@pF_ArF}@hFy@zEO`Ai@vCy@zEy@zEm@jDMl@y@zEy@xEy@zEu@lEk@dC}@fDQf@s@nBm@pAiA~Be@t@aBfC[^gApAeA~@y@r@}AlAe@^wBrAYPoCfA]NoBh@a@FaDf@Q@aDRS?cD?SAiCOk@IgC_@k@MqDy@u@QyBk@mA]cBUwCa@]AoAIeBCgAAoBNeCNm@LuAZ{A`@s@RwBv@aA\\cBbAg@XsB~Am@b@_BjBw@|@qAzAMLiB~C?@gB|DCF{@vBYfAgA`ECNeAtEeAtEeAtE[xAYjAgA`Fs@bDQv@eA~EgA|EeA~EgA|EgA~EeA|EgA~EcArEe@xBOp@yArGwApGwAjG[xAQ~@gA`FeA`FQx@u@dDiA~EiA~Eu@fDQx@s@pDQn@u@tC]`Ag@vA{@vB_@x@uAdCk@bAsAnBm@z@_BfBs@z@cBxAiC|BQLcD`CaCfBwCxByCxByCxByCxBqBzAe@^uBdB_@\\iCbCmCnCmCnCmCnCkClCmCnCmCnC}A~Ao@j@sCfCs@n@aBnAc@Z}BfAy@`@qBl@}Ad@oAT}AVuAJmBNeAAuDAuDAuDAsDAeDAO?uDCuDA{BAy@@sDFuDDmABgBHuDNsDPuDNgAFkBFuDLuDLsDLaADsBHuDNsDNuDNsDPuDNuDNsDNuDNsDNuDPuDNsDNuDNsDNY@{CNsDNuDPuDPqAFaBJgBJuDTuDVwDTuDTuDTuDTwDVuDTuDTwDTuDTuDTiDTM@uDTuDTuDTwDVuDTuDTwDTuDTuDVwDTuDTuDTuDTwDVuDTg@BmCVuD\\qD\\C@sDf@uDf@kBVgARqDn@sDp@m@LcCd@sDt@qDr@qDt@qDr@sDt@qDr@qDt@mATeBTsC`@a@BgDVM@uDLM?iD?_B?wAGkDQIAuDc@e@E{AWyIwA}Do@}Do@}Dq@_Eo@}Do@}Dq@}Do@_Eo@}Do@}Dq@cDg@sDm@sDm@sDm@sDm@qDm@sDm@sDm@sDm@eCa@m@IkBSiAG{@G{B?g@?mCNO@eC\\_@HcB\\kA^eBj@cAf@{At@gAp@aDnB_DlB_DnBaDnB_DnBaDlB_DnB_CvAa@TaDhBcDhBgAl@{Av@eDbBeDbB_Bz@eAf@eD~AgD~AeD~AeD~AgD`BeD~AgD~Ac@RcCdAuAl@uAd@wAf@m@PuBn@_ARyBf@_ANcC^o@FiD^I?uDNi@BkC?_D?SAuDOeAGmBOsD[uD[sDYsD[sD[sDYsD[A?qDg@WEyCk@OC}C{@e@McC_AiAa@}Aw@qCuAQKwCiBEEyC{Be@_@kBeBaA}@s@w@aCqC_@c@wCuDeC{CiAyA{@_AwA_Bs@q@cBaBm@e@{BaB]U_CyA_@SeCkA_@O_C}@k@QqBm@{@QwCo@WEqDs@oDq@qDs@oDs@qDs@oDq@qDs@oDs@yAYwAU{AUwAKy@GyBE[?yCJQ@aD^K@sCn@OFoC`AYLqBbAo@b@cBfAw@j@wCzByCzBwCzByCzByCxBwCzByCzBMJwBzAUJiB`A{@ZgAb@cBd@g@NeCd@A?eCXm@BwAD}AA_AAsBOWC{C_@ICeDo@qDs@{A[uAOWCuBQe@?mC?g@B{BHw@FuDXuBN}@BoABeBCS?_DUCAmCa@_@KwAa@uAa@kDeAmDeAaBg@kAYw@SwBa@OCcDa@C?mDWA?iDKK?uDGsDGuDEuDGuDGsDGuDEuDGmACsAAwDIyDGwDGaBCwAKwAK}AYu@O{Bo@]KoCaAmDqAmDqAgAa@eBg@kA]gB_@{A[wASoAOgBOMAkDKIAmD@o@?iCLwDPwDPyDPwDPwDPyDPwDPyDPwDPwDPyDPwDP}BJk@DkBJiBHkAJuD\\uD\\A?qDd@uDd@G@kDl@qDn@sDn@sDn@sDn@qDn@sDn@sDn@sDn@qDn@sDn@sDn@qDn@sDn@sDp@sDn@qDn@sDn@sDn@sDn@qDn@sDn@sDn@sDn@qDn@sDn@uCf@]FqDr@u@N{Bl@_@JmCx@a@LiCdA_A^gBz@cBz@_DlBg@XmDjCUNeCtBMLeCbC[ZqB`C{@dAoAzAgCbDiCbDiCbDiCbDiC`DiCbDgCbDiCbDiCbDiC`D}@jAmArAmC|CUV}BzB}BzBeA`AqD|CaAz@uBvAuDjCgDlBeDnBgDnBeDnBgDnBo@^sBtA}CtBC@{CfCgCrBSRuCnCkBfBg@l@mCzCy@~@oAbBeCdDQToBxC_CnD}BnDiAdBu@jA{BpDoB~CMRsBzDo@lAaAnBkA`CYl@cBdEm@zAq@jB{AjEKXmApDw@~Ba@lAyAlEyAjEyAlEwAjEyAlEyAlEyAjEyAlEwAlEyAjEyAlEyAlEcAzCUn@}AhEo@dBu@|A{AfDOTuBrDm@dAiAlBU^uA`BaApAsAvAuAtAiDhCQNyCtBg@\\iCxAeAl@oBz@o@ZkC|@sAd@kBh@_EhAgCt@e@LuDhAwDhAwDhAuDjAwDhAwDhAuDhAwDhAeD`AwDhAyDhAuDfAcBb@kF~AgF~AoDbAKDwD`BC@aCdAm@ZqAp@}A`AyA|@qAz@m@b@wBbBqCtBSR}CvC{AvA}@`AgClCuAvAgC|CiC|CeAnA_ApA_CfDs@`AiAhB{BnDuBfDCFwBpDyBpDwBpDwBpDyBpDwBpDuBlDABsBvDsBtDIPaBlD_BjDIRcBdEkAtCUn@{AjEw@zBa@nAuAnECHmAhEoArEoApEoArEoArEqArEoApEoArEoArEq@~Ba@pAuAlEaAxCcBtEyA`EKTkBpEgAlCe@`AsBjEa@x@uAjCyBdES\\kB~CaC|D]h@uAdCcChEAB}BrEm@jAkAlCqArC_@z@e@fAeAnCeBbFeBbF}@jCk@tAgBpEEHwBvE_BhDO^qBtDiBhDGJsBrDuBpDsBrDuBpDsBrDsBrDoAxBc@x@eAtBe@dAgB~DS`@gAdDaAtCUv@mAnEoApEa@xAq@rBm@fBo@~AgAnC]p@mBxDAByBdDcA|A_AdAkBvB]\\aC|BQLyCzBc@\\yBxA}CrB}CtBo@`@iAv@_CzAwCdCABqCrCA@_CnDMRyAjCMX}AfDM\\wAlDKZi@|Ai@vBCFq@pCQ`AYbBUbCc@tEKfAq@lGk@lFE\\u@vEMf@mA|EOh@qAfDaBdEEFoBdEoBdEqBdEoBdEoBbEe@bAsAxBqAvBm@|@_CtDgA`B_AhAkArAiAdA{AtAaAr@i@`@cBfAeAr@_Ad@k@XqDfBkD~AkD`BmD~AkD`BkD`BmD~AkD`BkD~AmD`BkD~AkD`BkD`BmD~AkD`BkD~AmD`BkD`BkD~AmD`BkD~AkD`BkD`BmD~AqB`AwDlBWLiAr@mA~@EBoClBUT{CbDQRuB`CQReCdDILcCdES^{AfDQ`@w@~BOd@{@nDAFo@vCQlAe@tCOrAo@jFM~@a@lDm@jFo@jFm@lFm@jFo@lF]tCOtAg@|E_@lDIr@c@bFYzCMdAm@`FGh@q@rD_@nBc@dBiAtEkArEiArEkArEa@~A_@vBo@lDKn@u@|EQdA]xCk@`Fk@`Fm@~E?@s@|EOhAc@tCu@|Ew@|EAFaAnE]|Ae@xBeAtEcAvEeAvEcAvEw@lDMh@cAvEcAvEcAvEcAvEcAvEk@jCMp@iAfFiAhFiAfFiAhFiAfFiAfFiAhFeAvES|@gAzEiAxEgAxEeArECD{AnEgA~CUj@}A~D",
              "start_location": [
                48.549747,
                36.651407
              ]
            },
            {
              "name": "آزادراه پیامبر اعظم",
              "instruction": "به چپ برانید  و وارد آزادراه پیامبر اعظم شوید",
              "bearing_after": 292,
              "type": "fork",
              "modifier": "slight left",
              "distance": {
                "value": 19114,
                "text": "۱۹ کیلومتر"
              },
              "duration": {
                "value": 921,
                "text": "۱۵ دقیقه"
              },
              "polyline": "qpxfFkef{Ga@`Ba@x@i@fAGLe@fAo@|@iB`E}@rBi@pAM\\u@tBUz@u@`C]pAmAvEGRgA`EmAvESv@w@~CaAtDK`@iAxEkAxEiAvEA?k@jDMt@Mz@c@fDIn@UbDATExAIpCC`AEjD?DDxDBpARdFJrCXdG@HR`F@ZJzDAjAClCGxBElAWvD??[zDKv@a@pD[hBiArGa@xAo@xBqApEqApEqApEsArEqApEqApEqApEqArEsApEqApEqApEqArEsApEqApEqApEqArEqApEsApE_AdDOl@iAvEiAtEcA`EETs@`Fg@~CG`A[hFOfCC~AEjFCrBHtBThFJnCt@vFp@vEDNlAzEjAtE^hAbB`ErA`DR\\xBlDvBlDxBnDxBlDx@tAv@~AhBzDfBtD@FrAnEv@fCThAv@rDXfBXzBj@nFHn@PbETrE?^?pFErEI|AOlCE`A[fDEf@g@xD?@m@nDOn@s@lDQl@_AbDYj@iBbEgB`E?@{BrDuBjDCDgCdDeCbDkBdCY\\kC|CkCzCABsBtDsBxDiBfDGRqArEsAtEsArEqArEsArEsAtEqArEsArEqAtEsArEsArEqAtEsArEy@tCuAzEuAxEoAlEqAnEoAlEqAlEoAlE[hAs@dCmAnEkAnEmApEM`@_AlDy@zCQt@aAtEy@zDSlAw@dGg@`EIdAKnAWrDEdAM|DCtAEfB?bD?FDrG?XPjFF~BJnBTjFZ~Gf@fKHjCVrFTpFTpFTrFVpFR`Fd@pKJbCTfFFbB?bC?~CEfAOpDGr@SdCS|Ae@`DQz@a@rBQz@Of@_AbDUf@_B`EABmBxDGLgBlC}BnC{@~@uApA}CrC}CtCk@h@oBhB{CtC}CtC{CrC}CtCm@j@aBxAWVcBlBwApBCBsAdC{@vBu@hCUt@_@nB]pCKbBMtBAbC?h@HbDDj@JvAVlBJj@N|@`@dB\\`An@nB`@bB",
              "start_location": [
                46.567423,
                37.977849
              ]
            },
            {
              "name": "آزادراه شهید کسایی",
              "instruction": "در آزادراه شهید کسایی به مسیر خود ادامه دهید",
              "bearing_after": 241,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 16041,
                "text": "۱۶ کیلومتر"
              },
              "duration": {
                "value": 891,
                "text": "۱۵ دقیقه"
              },
              "polyline": "}o`gF{c`zGd@vAr@vB`@zAHb@j@dCZrB@JR~ALzBBl@Bb@BlA?zACpAATAj@GbAO|BE^m@dGCZQ|AaAxJ_AbJa@jE}@vJQ|AWdCe@vCi@nCSt@Sx@e@~Aa@fAUn@kAlCMVk@dAo@bAc@n@CDkA~AaAfAqCdCo@h@k@b@_Ax@}AjAo@b@sBxAiAx@wAbAsCrBMJ}CdCw@l@kBnAs@f@iB|A}CfCGFaCzBgCzDs@dAcAdCWl@iAjDABmAjFmAhFYlAu@|Cc@pBi@xBeAvEmAfFU`Au@bDkA`FUbAELWfAeAxEMf@qA~Fs@vCaB`H_BzGyAjGyAhG[nAqA`GqAzFi@fCWhA]zBQhCGhCAfCDbBPjCHn@NlAv@|Ej@hD\\|BPjARlAFd@VzBLnB?@HpB?d@?jBARWpGUpBSlBc@tBOj@Sz@oA`E{@`DcBtFe@`Bs@xCCLeAtFgAzFeAfGi@tCYrBKj@UpBMjBGdBAjB@hA@l@Bb@DlAFb@JbAJv@Hj@\\bBFVTz@x@bDH^DZFXRxAPpBHjBBrBCvAKdBOvB]tBWrAI\\e@lBaA|CKXoBfGg@~AeAbDuAjEsAhEo@pBg@xAuAhEqA~DuAhEe@vA_@rA{BjH]hAq@~B[rAELYbBYjBObCGlB?b@?~AD~AHtALrA^dERzBPrBRpCFpB?X?`CA|CE~GCrGE~DEdDAbAEjFG`FEfDEjFElFA~@?bD@fDFzABj@ZpE|@`G|@`Gz@zFn@jEJr@PtARxBFl@FbAHpB@pAB~@EvCGbBCdAU|CETa@nDM~@Kx@WjB[vBq@~EKhASrBKfBGjAAd@EfC?`A?rADzCDhD@dABfF?hCA|BAPGhDIlBCf@UpDEp@Y|COlAOpAa@vCQrA_@tCAJ[vCKfAGl@IvAG`B?FAf@CtBArAAbC?JG~A?FK~AEd@It@Ih@QhAGXc@pBSr@K\\k@zAu@|AWd@k@~@u@`Aw@t@u@p@aAt@u@h@",
              "start_location": [
                46.372621,
                38.018707
              ]
            },
            {
              "name": "آزادراه شهید باکری",
              "instruction": "در آزادراه شهید باکری به مسیر خود ادامه دهید",
              "bearing_after": 330,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 13842,
                "text": "۱۴ کیلومتر"
              },
              "duration": {
                "value": 600,
                "text": "۱۰ دقیقه"
              },
              "polyline": "a~fgFwo_yGc@VYNwBp@A?uAZmAPYBuAJgB@q@?yCJ_ILsDF}ABwAHc@BcBPk@Jq@JeB^WHcAXyAh@MFa@PoAr@o@`@}A`A}@r@GDgBbB_@`@_AdAeAtAo@x@mAjB{BfDyBhD_B`C]d@}BbD[b@eBvBABoAtA{@|@i@l@cB~ASPeBxA[TaCfBWPmAz@qAr@{@d@oAn@{@b@yB`Aw@ZwDnAaBh@yAX_Ex@w@PgCV{Db@E?cEJ_BDcBCcDE_@CcEScEU_@CaDWoBOqAOaD_@[CoDO{DSMAiESyBKqAEcCEeAAcEA{DJw@@cCTyDZ{D\\QBeDn@wDt@yDr@_ARsBl@gD`AKFmDzAoDxAgDxAEBeDpBeDpBeDpBqCbBSN{CdC{CdC{BhBa@Z{CdCyBhBgDnCcDjCsAfAkA`AaDfCy@p@kBnAgDzBgAv@aB~@q@^{BhAgCnAi@RsDxAA@uDnAmBn@kAXmDv@cE~@E@kEn@{Dl@Q@oEXeDTc@?uBDaADyDLwDLyDLg@@oCHoCFi@BwDPwDR_DNYBoDb@E@uDh@gANmBZ_C^s@TqDfAoDdAqCx@]NiDzAkDxAiChA]T_DxB{CtBA@_DxB_BfAc@\\gCvAm@NcDr@]AsCCq@Q}Bi@_Aa@kAg@}A{@cCsA{C_BIEcDgBq@_@qBgAmBcAu@c@iCyAYOcDgBWMkC{A_B_AcAi@wBkAa@UmDoBm@]aCqAoAs@}A_AkBiA_Am@uA}@oAcAoAaAqAkA}CqCq@m@m@o@k@s@",
              "start_location": [
                46.205558,
                38.051691
              ]
            },
            {
              "name": "بزرگراه شهید باکری",
              "instruction": "به چپ برانید  و وارد بزرگراه شهید باکری شوید",
              "bearing_after": 36,
              "type": "fork",
              "modifier": "slight left",
              "distance": {
                "value": 919,
                "text": "۹۲۵ متر"
              },
              "duration": {
                "value": 54,
                "text": "۱ دقیقه"
              },
              "polyline": "qi}gFkfzxGwCwCwCsCyAsA{@c@i@G{@GYBg@DcAf@u@l@GLUd@St@QlAEx@A\\EpAG`ACbA??Gx@I`AK`AOp@WjAy@`C",
              "start_location": [
                46.178461,
                38.166165
              ]
            },
            {
              "name": "",
              "instruction": "به مسیر خود ادامه دهید",
              "bearing_after": 313,
              "type": "continue",
              "modifier": "straight",
              "distance": {
                "value": 21475,
                "text": "۲۱ کیلومتر"
              },
              "duration": {
                "value": 1202,
                "text": "۲۰ دقیقه"
              },
              "polyline": "wg~gFysyxG}@nAoApAsAxA}@`AwA`Bq@dAsAtBg@~@mBtDsBzDMTiB~Cs@lA}@nBc@~@u@fCAB_BlESj@iApCqBnD}BxDMRkB~CgEfHU`@_CxEg@`AwAdEu@zBsBrGKZSz@i@zBO`A}@zFOt@IdAIpAQrHOrFCz@WrHC^]jCYxA]jBm@pB_AbDWr@}ApE??iChDgCfDi@r@uA~B}BtDuA|Ba@|@eBjDiDrFuBzCe@bAGLIRoApC[`AY`ASn@gChIS`@mAbCCFeBdCu@j@wDrCuAdAsAtAwDbE{A~AwA`B_BrBo@bAu@lAgAxBoBpEoBrEqBrEe@hAkAhCoBjEqAvCeB`Ee@pAO`@q@`Ci@~BYxAe@bCU~AGp@i@xGU`B[nA_@rAe@bB}@tCeBxFcBtFqA`FqA`FsA`Fe@hBi@xBSx@[bBMlAq@nFo@pFMhAe@fDKr@q@vDaAhFMn@o@vC{ApF{AnF{ApFK\\qAnE{AhFwBtGcAvC}ArE_BvEEJ{AvDGNkBlEmBnEuAbDQl@wA~Eu@lC_@pAGRs@hBq@lAoBlDyB~D{B|DyB~DuBxDoC|EqA`Ck@fBaBfFA@yAlFiA~DQn@e@xAq@|ASh@{@rB{@pAcAzAaAzAgCtDeBhCg@d@oCpCIJ_BxBc@~@qBlEqBlEgBzDuBpEABiCbEg@t@aBlCeC~DW`@e@|@o@lACFkB|DkB|Dw@dBm@jAEHo@bAkAhBGHuB|CsBzCmCnDUX]^{C~B[TiAf@oA^s@LsF~@iBp@y@`@i@^WNeAdAm@t@]j@MRs@zAs@xBi@tBiAvEe@pBc@~ACB]fAq@hBKXc@dAu@zAS\\a@r@wAzB_AzA{@rA}@xA}@rA}BlDwBdDCF_CjD[b@eBbCe@p@}ApBmBfC}EnGm@v@cBvBs@dA[f@QVe@~@_@v@]z@Yx@kBhGSl@oAhD_@v@q@tAw@tAABcAzA}@jA_@b@wChDCD{ArBu@jAABm@bAk@fAc@~@AB]dAs@fCMVWp@c@|@_A|A{BfD}BhDgA~As@jA_A|Au@rAmBjDyB|DKPkAfBiAvAKLiCbDmC`DkCbDmC`DmCbD}BnCOPk@j@gAv@k@\\aBbAeAn@mAv@u@h@]\\YVyB|ByB|BY\\UZu@jAe@z@Yl@w@xA]t@iBtDEHqA`Cg@p@a@h@iBrBkC|CkCzCmC|C{BjCONcCvCeAvAeA|AiApBKPq@~Ao@bBGRe@`Bu@lCUlA_@~B]zDMbBWrDIt@]nB]zBa@tAITa@~@Qh@o@tAg@z@[d@u@`As@~@W\\ID",
              "start_location": [
                46.175485,
                38.170999
              ]
            },
            {
              "name": "بزرگراه تبریز - صوفیان - مرند",
              "instruction": "در میدان هفتم تیر، از خروجی دوم، خارج شوید",
              "rotaryName": "میدان هفتم تیر",
              "bearing_after": 7,
              "type": "rotary",
              "modifier": "right",
              "exit": 2,
              "distance": {
                "value": 89,
                "text": "۱۰۰ متر"
              },
              "duration": {
                "value": 10,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "iathF}yswGG?G?I@GBQLu@h@IFGFEFAJ",
              "start_location": [
                45.981906,
                38.282607
              ]
            },
            {
              "name": "",
              "instruction": "به مسیر خود ادامه دهید",
              "bearing_after": 326,
              "type": "exit rotary",
              "modifier": "right",
              "exit": 2,
              "distance": {
                "value": 32070,
                "text": "۳۲ کیلومتر"
              },
              "duration": {
                "value": 1767,
                "text": "۲۹ دقیقه"
              },
              "polyline": "methF{vswGC@[ViAd@q@VwAb@m@PoBb@eAPoBRkBLuAHgDPO@_BDkA@M?iB@mAAgB?_ACQAa@AuCMyDQ_DMWAkBCmA@oCBg@?_B?o@Ci@Cg@CeBEi@?y@BeBLWFeARsAb@WJaAb@iAx@eA|@_AhAcCdDaCfDcCdD_@h@aB~Bm@|@w@vAO\\e@jAg@bBI^[~A]~Bq@pEANq@bFo@xEAF]zCMhASrBWnBWfB]jBCJw@|CWv@m@hBm@bBQb@oAbDaBfEm@|As@hBaBfEaBfEa@fA_ArBCHu@xA}@|ACDw@bA}@bA{BrBw@r@cBbBiA~Bq@zBe@bCQzAWxBSjBUlBYtBCPg@`CWdA[pAi@lBITg@bBs@fBEJiBpDYj@{AfCMPsA`Bi@d@gB`Bq@`@kC|AWLqBjAs@^cDfBGDeCxASRoBhB_@h@_BxB]p@uBvDsBvDw@xAy@|AqBxDqBxDu@tAu@jBUl@w@dDI\\_@`E?DItDBr@LlCRxAr@zE@Dz@~E|@|El@`DJ|@b@hDBz@J|BElB?DOdCCVe@zFYfDKpAe@lFe@lFIdA[fDO~Ac@fCER{@rCUn@o@fBu@dBcB`EEFyA`DU`@mAxBo@z@i@t@aBnBABiBjBi@b@}CfC}CfCwAjAg@b@cFjEaAz@aAx@sAjAuBfB_@^}BvBST}BlCILyBnDOTsAjDe@hAo@dCy@~CMt@q@vDGd@q@`FAF[nEKvDM|FM|F?BKtCIzAIzA[pCAJi@vFAFe@pFi@vFAJ]nF_@lFGz@o@jLk@jF[pCSxAu@fFu@hFEPo@tEu@hFAJq@|EADc@nE?VKrE@\\PbEFj@XdCXjAf@tBh@vAtApDFPdB`EdB~DpA|CLb@Vx@n@tBD`@RvBLhBLfBL|BDn@HtD?J?`DAx@EpCCtAKdFAf@O|DGlAUvCKjAWtC_@`Eo@lHo@jHADm@~Ge@hF?Bc@lFUxCOrAYfCWbBSlAq@rCq@rCSjACLe@~EQdB_@`C?@o@nBq@~AINwB`DaCpD_@h@sA~ByBvDUb@{AzCKTuAvDADyAjEyAfECHoAdEENc@~AYrBEVKzAQrBWvCSbAMj@sAfDCHyAjECFsApEuAzEYbA{@vCmAhEo@xC{AjEShA@vAI|BC`B?HDtDDr@PfFPfFD~@TfD@VNhBT`BZ~BNvA`@|BRrB^`CZbB^lCVnBP`CVjDFpAFzAL`DL`DD|AR~FP~F@HBlDEfAEjAStCEZUtAu@vCs@pC]|@k@rAuA~BgCxCKL{BjCABaAfAcAjAkCtCo@r@oAnBmAhBi@`AeAfBm@jAoBtDi@bAaAtB}AhDGT_AjDKd@cAtEKd@o@rDy@zEY`Be@tBo@nCWdAw@pCW|@cAvDKt@q@tBk@pBSn@{@rBo@lAy@zAwAvBGFgBpBcA`Ac@`@]\\yF~E}CtCA?wC~CcAdAmAbBuAnBm@jAuBdEA@aBzECHoAxEa@|Ag@jCYrAi@vCcAlFy@hEy@nEWlAmAxFGZoArEcBvEIReBxDADyBxDABiChDc@j@mBxBg@j@yB`BuCxBgC`Bk@\\eBv@mA^uDlAwDjAuDjAc@LsCx@wDdAyDdAwDdAwDdAeBd@sAV{Dr@{Dr@m@LoCTeDVmETaELqBFoAA{DAaFUaFU}EUeG[_G[wDSmCMg@?wD?wD?C?qDJwDJmDHiBByDH{DHyDH{DHyDH{DFyDHC?wDFyDFyDD{DFyDF{DFaBBwAEiCEq@CyBK_AKyD]}CYeAGsBOoDOQ?aCE_ADm@BoCPiCPcE\\cE^m@FuCTuAJoBN{DXw@F}@F",
              "start_location": [
                45.981423,
                38.283269
              ]
            },
            {
              "name": "بزرگراه تبریز - صوفیان - مرند",
              "instruction": "به راست برانید  و وارد بزرگراه تبریز - صوفیان - مرند شوید",
              "bearing_after": 354,
              "type": "fork",
              "modifier": "slight right",
              "distance": {
                "value": 49930,
                "text": "۵۰ کیلومتر"
              },
              "duration": {
                "value": 2307,
                "text": "۳۸ دقیقه"
              },
              "polyline": "asqiFeqdvGeDPkC@{@?oBAIA}D_@{D_@CAaCQw@KqAQiBSi@IiCa@EAsBi@aA_@CAcBq@eAm@QI{A}@k@c@_@YqAcAq@o@a@c@qAcBYe@[g@a@m@w@oAMUcAoBk@_Bc@iAcAmCKYcA{COe@wA}DK[yAeEmBmFkBmFmBmFiBeFUo@qB{FeCcH_BoE}AmE}AmEg@uAy@sBa@cAmA{BCCuAcCa@i@}@iAmAsA[[iB_B][_Au@k@_@[Qi@[oAm@w@UwDmACAyDo@MCsDUEA{C?_@@o@BoCTS@sATuAZ_ATgBn@OFuDxAiAd@gBx@sD~AqD~AyCrAiChAc@PmDzAoDzAmDzA]NoCjAgDvAkDxAmDzAmAf@}Ap@kDzAmDzAkDzAqCjAYNmDzA{Ap@qAb@cA^oB`@sDx@YFkC`@Q@mCTk@BcCHw@?qA@gBE{@EwAIe@GiBSgAQEAuDw@e@KmCw@_Be@qAc@yBy@s@WcC_A{Ai@aCs@cA]_EqAsE}AqE_BiBo@_Bm@kA[gCk@w@Ks@KoCEg@A{C@s@?mCF]@{CPoA`@iBf@A?kBt@gAh@m@XeBfAYRwAbAmA|@e@ZuAtAa@b@{AbBu@`AmAbBq@v@g@~@_@j@{A~BEFsBdDi@z@oAtBwBnDsBhDED_CfDwBzCGHkCvCu@x@}ApAwCbCCB}CdBcB|@cA^uCdAWHmDbAODaDt@uCp@YJmDlAmDlAe@NaChAo@ZwB~@o@XuBhAoAn@qA|@aAn@{AfA}CvB{CxB}CvB]V_C`BkBpAq@`@cDhByAx@kAh@iDxAc@RgCz@mDhAeBl@iARkBZgALyCZ[BuD^e@DoCNuDT_BHwADuDL{@D{BPqAJaBRyARyAVwB^qE|@gB\\gBh@mEtAcEnAsDhAuDhAwBp@}@RyDx@yDv@}Cp@[DyDj@{Dj@{Dh@{Dj@{Dj@yDj@{Dh@{Dj@{Dj@{Dj@kC^m@PuCx@iAf@{C`B{@d@cAd@iDfBmCtAYLmDvAEBcCd@m@DmCTk@?w@AaCE{DIeACsB?{D?q@?gCL}AF{AR[FiCb@ODsD`AaAVoBp@w@VwBx@yAj@uAd@gDfAIBqDdAqDdAs@RaCb@G@oC`@_@@{DLW@aDGs@AeCYgAKoBc@aB]k@Kg@MsA]eBc@_B_@yAWs@MiCYKAaBIqACuBCkA?[@aDRYBkBNy@LWDwB\\k@NkAX}Ab@u@XyAt@eD~AC@wCrBaAp@uAlAqChCURsBbCeCzC_BnBa@p@wBlDwBlDyBlDwBlDwBlDwBlDoAtBm@r@cC|CeC|C_AlAkAbAsCfCqCfC{@t@_B`A_DlB_DlB_DjBcAl@_Bt@gDzAeD|AeDzAcAd@aBz@aDdBi@VsBzA{CvBc@ZoBfBsCfCIFgCbCmBhBgCxCiCxCgCvCgCxCiCvCm@t@cBrAuC~BwC`CwC~BIHsCfB_DnB}CnB_DnB}CnBSL_CvBsChCiAbAgAdAoCjCuBpBYZiCvCgCxC??eC|CeCzCcC|CeC|CiB|BuCnDuCpDuAdBaAdA{CdDsCxCsCdCuCbCuCbCuCbCsCbC{ApA{@l@}CrB}CrB{CrB}CtBiAt@uAr@eD`BcD`BeD`BcD`BcD`BeD`BcD`BwAr@gAx@yCxB{CvByCxB{CxByCxBgAv@gA|@GFs@j@m@h@s@l@uC`CwCbCuC`CuCbCuC`CuCbCcAx@yAr@gDxAsB~@s@TmD`A}Ad@sANqDd@sDb@sDd@gBTiALsD`@I@oCj@UHmDfAODoCfBsChBGHmCpCcCdCKFeCdBULiCtA[HmD`AuA^kDr@cB^qE~@yDx@wDv@eATqBn@sDnAsDlAsAd@{At@mDdBkDfB{@b@kBpAaD|BcD|BkCjBUPmC|BmAnAaA~@OLqBhBSNwCbC_Av@{AdAiAv@sA|@}CrBcAp@}Az@wC~AMFgDzAiDzAs@ZuBz@e@PeCz@aCv@m@NoD`Am@PaCj@sCr@]HoDz@qD|@oDz@_@JqCr@oD~@oD~@kBf@cA^kDnAy@ZmB|@{At@iAp@k@ZqBvAGBiBxAe@d@YXoBpBEDuAbBo@z@??e@v@qAzBQ\\s@vAwBbFUn@cCrGiBxEw@pB}@xAcC~DA?_DtCeA`AaBhAiCfBc@TeDhB{BlAoAv@EDkAhAs@|@i@~@y@bBcCdFSb@iB~CQVoAlBmAzA[`@qCdC{CdC}CdC}CbC}CdC}CdCQNkCrBGDiDdAe@LqCb@wDl@A@iDpAEB{CfCqAfAeAfAsCvCONsBzCCBaAbCe@|@kBjDmEtFwClCQPuCtA{@`@sBl@wBp@{@NuDt@G@kDx@uDx@yA\\{ATaC^u@FgDXQA}AGyA_@QE_DeAsBs@}@U_AUwBQQAgDHoBFiAD{DPuAFcBBeABuBGc@AcBa@k@Uu@[}A{@QSw@}@qAeBqAeBu@{@c@e@cBuAQKyAw@qAc@]KyCa@_@GyCOq@EcCo@A?aCkAsCsB{BaBg@UiB_AeASeB]sAI{DY{DWcBMwAA{DEm@?oCB{DB}@@}BH}DJ{DL{DL{BFaAA{DI}BG}@G{D[eCQu@KyDg@A?sD_AuD_AuCs@_@MqDoAqDoAqBs@mDoAmDqAmDoAmDoAmDqAEAkD}@iAYiBa@cB_@k@Mc@GwDe@}@MwBSgD]O?yDOaDKU?yD?wDAuA?cBGwDQoCMaBIa@EaEc@oAOqB_@}Du@YGcDy@{DeAcAW{B_@eAQyBSuD]uAEyCO}CG",
              "start_location": [
                45.739873,
                38.433928
              ]
            },
            {
              "name": "مرند - جلفا",
              "instruction": "به چپ برانید  و وارد مرند - جلفا شوید",
              "bearing_after": 2,
              "type": "fork",
              "modifier": "slight left",
              "distance": {
                "value": 9700,
                "text": "۱۰ کیلومتر"
              },
              "duration": {
                "value": 642,
                "text": "۱۱ دقیقه"
              },
              "polyline": "q`_lFs~kuGqFOgDEyCTiBJi@BsCb@o@JqCTI@oD?yD?S?cDWwDWcDUSEuDe@m@IgCi@eBa@mAKsD[C?yDQw@E_CHwDNc@BsC^iDd@KBsDv@uBd@}@NaDh@SBwDb@uDb@kALmBFwDJkBDmA@wDBA?wDOwDQwDOeDOgDDaBI_Dq@q@QUE{A_@m@@q@FgAt@C@URgA|Ai@l@}Bb@oCf@c@F{ARwARe@FmAFaADm@DiCFA?gC?m@AwAE}AMoAMcBYcAQoB[o@KiBc@s@UeCcA]MsC}AOGmBiAo@e@_CeBg@c@}AwAy@{@}AaBy@gAo@w@_B}BACkB{CSe@uAeDUe@yBkE{@gB{AaDIQoB}C?AqBwD{@_By@sAs@oAcAaBCEwBcDAA_CgDKOwBsCe@o@aBmBu@}@sA{Ak@o@aBeB{@}@sAsAi@i@iBaB_A{@uAkA{AoA{@q@yBcB{AcA}AeAo@c@iCcB]SgCyAUKcDeBoCsAwCqA}@_@uB}@_Bm@}@]_Cy@MEcDaAk@QoBm@_Ba@}A_@kBa@w@QkB[}@OgDi@s@KqDe@_AK_DYeGe@iDSs@Mo@Qe@U",
              "start_location": [
                45.614017,
                38.830327
              ]
            },
            {
              "name": "مرند - جلفا",
              "instruction": "در میدان عباس میرزا، از خروجی اول، خارج شوید",
              "rotaryName": "میدان عباس میرزا",
              "bearing_after": 33,
              "type": "rotary",
              "modifier": "straight",
              "exit": 1,
              "distance": {
                "value": 184,
                "text": "۲۰۰ متر"
              },
              "duration": {
                "value": 17,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "{nnlFqequGUQ]Qi@Oc@CaA@i@Hy@`@MR",
              "start_location": [
                45.640729,
                38.909423
              ]
            },
            {
              "name": "",
              "instruction": "به مسیر خود ادامه دهید",
              "bearing_after": 351,
              "type": "exit rotary",
              "modifier": "slight right",
              "exit": 1,
              "distance": {
                "value": 3480,
                "text": "۳ کیلومتر"
              },
              "duration": {
                "value": 334,
                "text": "۶ دقیقه"
              },
              "polyline": "qxnlFgequGk@Bw@JgALWBq@JiAPeAP[D{Bf@g@NSHiAd@kAh@KHcAp@mA|@UR_At@eAlAUVi@r@o@x@o@fACDeAlBq@pAg@`AiAjCc@bAsAfCMTeA`CS^q@z@u@~@]^KJsAz@}@j@EBkAj@qAb@o@Xk@N[J_C~@s@^[RcAj@u@j@OPg@j@g@t@k@dAKTWf@Sl@O\\Oj@Qn@_@xAS~@WpA[pBYfBq@lDGXM`@_BzEOb@g@~Ag@vAg@vAWv@Wt@IRoBlEm@rAa@|@[~@_BzECDUr@c@`AYb@_@b@A@UVYRYRe@Te@RSFMDUFUDSBUBW@U@WA[AgD]oC]",
              "start_location": [
                45.640682,
                38.910967
              ]
            },
            {
              "name": "",
              "instruction": "در میدان شهدای مرزبان(یادبود)، از خروجی سوم، خارج شوید.",
              "rotaryName": "میدان شهدای مرزبان(یادبود)",
              "bearing_after": 75,
              "type": "rotary",
              "modifier": "right",
              "exit": 3,
              "distance": {
                "value": 65,
                "text": "۷۵ متر"
              },
              "duration": {
                "value": 15,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "scslFioluGCKCIGGGEI?G?IDEFEJAH?H@HBF",
              "start_location": [
                45.616689,
                38.933224
              ]
            },
            {
              "name": "",
              "instruction": "به مسیر خود ادامه دهید",
              "bearing_after": 345,
              "type": "exit rotary",
              "modifier": "right",
              "exit": 3,
              "distance": {
                "value": 34,
                "text": "۳۴ متر"
              },
              "duration": {
                "value": 3,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "oeslFmnluG[FELAR@D",
              "start_location": [
                45.616551,
                38.933522
              ]
            },
            {
              "name": "جاده جلفا - پلدشت",
              "instruction": "به سمت جاده جلفا - پلدشت، به راست برانید",
              "bearing_after": 272,
              "type": "turn",
              "modifier": "slight right",
              "distance": {
                "value": 37,
                "text": "۳۷ متر"
              },
              "duration": {
                "value": 5,
                "text": "کمتر از ۱ دقیقه"
              },
              "polyline": "qfslF}lluG?D?nA",
              "start_location": [
                45.616307,
                38.933692
              ]
            },
            {
              "name": "ولیعصر جلفا",
              "instruction": "در ولیعصر جلفا به مسیر خود ادامه دهید",
              "bearing_after": 268,
              "type": "new name",
              "modifier": "straight",
              "distance": {
                "value": 638,
                "text": "۶۵۰ متر"
              },
              "duration": {
                "value": 68,
                "text": "۱ دقیقه"
              },
              "polyline": "qfslFgjluG?jD?hC?pC@fJ?ZDhFDrFKb@GPIPGJGF[P",
              "start_location": [
                45.615878,
                38.933693
              ]
            },
            {
              "name": "جاده جلفا-پلدشت",
              "instruction": "در جاده جلفا-پلدشت به مسیر خود ادامه دهید",
              "bearing_after": 352,
              "type": "turn",
              "modifier": "straight",
              "distance": {
                "value": 19153,
                "text": "۱۹ کیلومتر"
              },
              "duration": {
                "value": 1268,
                "text": "۲۱ دقیقه"
              },
              "polyline": "mhslFo}juGoGd@qCToF^oF^kF^G@sBPeFf@m@FsDb@}Ej@{Dd@{Dd@}Dd@{Dd@qD`@wEh@aCXwAHuET_GXeAR}@^y@b@qAx@aEhCcC`Be@`@m@d@cAhAg@p@g@r@aAhBUf@kBtEmBtEq@~Aw@xB_BrE_BjE}AjEO`@cArDoAtEo@~BYxAEROnAOdCYlEEZMz@c@vAa@z@m@nAcAjByAnC]d@_@h@qApA]XiBxAo@f@qCvBg@\\cAr@{A`AiBhAy@\\SJiBTu@DkCNi@Fi@DiCf@aAPkA`@_@RqBbAu@ZoAf@wAr@A?o@^i@`@}@|@m@l@oAhA]ZiCdCCB}@fAeAvAKR[f@y@rB_A~CMn@Cl@c@jBI~@C~A@VLdB\\vBLfAFj@vAlDR^bC`EpB|D^r@|AzB@?~AhBr@f@ZRvBt@XHf@JnCXL@rBv@h@`@xBzAf@Z`CzA`@Xv@f@d@p@\\lAlAzEp@jC\\jAFRV|ABlAFf@d@hF?@r@hDLt@b@~B\\`Bd@bCZ|A\\jBh@pBH\\xA~CDFdBrCT^~ApCTf@Td@XfALz@JfBXnEBTH~A@rB?RIhFC|AOhCYfFCXDlEBpCItAG|@Mj@_@tBABMbFC`A_@`Dk@bF_@bDK|@]zCW`AMh@gAtBSZuBpDuBnDwBpDuBnDaBpCQ`@Yn@SzA?lA?bBAdCAd@YdB]~@EJmBxDmBvD{@bB]~A?Dm@`FUjB]rBKl@[nAm@lAA@qBnDuBpDuBnDoBhDEHo@zAa@pB_AvEA@gAtEa@~A[zBs@~EIl@u@jDU~@}@lC}@fCUfAi@fCi@bAEH{BvCEDWn@EnAHtAF~AE|AYZu@z@sAzAa@d@iAhBI^Y~AI`C?HIvBUbBQpAWpBCZGl@SbA_@jBCHc@|@_BbAA@o@Za@b@MV[z@AHc@lECTa@bFa@dFKfAW|CEd@a@pDCHkA|DGPgAlDM^wAjEa@lAs@~BsAlEk@hB_@hBq@hDKp@G\\At@\\~@l@h@??zCdALJ?@Ld@Ch@g@hC_AxEUfAUdBA^?J?DAnANxCBh@P|BWt@c@tAWbCIp@iAzC_BfEw@rBo@fAeBvCUTiCrCYZ]j@Ol@FpAFhBLj@TT`@?h@?PFLNJLDRFXBZ@T@HBbDBTDPDXA`@ENENEJGHMFS@s@COAWDSHQPOXIb@Bl@DL~@dDJ\\LJHHXHZLNR?RE\\KRUNIByBv@OHQLIRA@G^Ov@WlCGd@YrDAPCN?ZL`@Vl@V~@BX?BARCPITk@dAK\\G\\ARAD?d@CbAO~B?DQnAEpAO`ACPE`@@`@Pp@Jl@Dn@@LZVXRNNHZCj@Ej@QrCBbADTH`@Pv@Dp@Gt@M^ADo@|@Sb@Ml@Al@@F?nAKv@e@vAe@tAo@~Bs@bDM`@O^SVUNa@XSTKJSXMZC^HZJVPb@??PZtAfCFX@DB^ARGNIF",
              "start_location": [
                45.608715,
                38.933988
              ]
            },
            {
              "name": "جاده جلفا",
              "instruction": "در مقصد قرار دارید",
              "bearing_after": 0,
              "type": "arrive",
              "distance": {
                "value": 0,
                "text": ""
              },
              "duration": {
                "value": 0,
                "text": ""
              },
              "polyline": "gi~lFeqktG",
              "start_location": [
                45.448028,
                38.990441
              ]
            }
          ]
        }
      ]
    }
  ]
  
}

        // Create a Leaflet map
        const neshanMap = new L.Map("map", {
            key: "web.dda34d32ec804b969bfb5db4d2cdaece", // Get your own API Key on https://platform.neshan.org/panel
            maptype: "standard-day",
            poi: false,
            traffic: false,
            center: [23.700936, 51.391194],
            zoom: 5,
        })

        var greenIcon = new L.Icon({
                        iconUrl: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAACXBIWXMAAAsSAAALEgHS3X78AAABZVBMVEUAAAD+xGPxV3b9w2JeSSX0WHgOAwX/xWP/x2X/xmQAAACs9PoTCAj8jksAAACsxeMAAAAWEQgEAwPGR2HiGEQdCg7frVe8RFxrUykAAABml8UfGAyrEzPSo1IJDQ/9qVcAAABqJjT2i0pIKRYfLTKUczozEBegfD6yiUXFmk35wWFMPB6CZjP/x2TOoFH3vmBHNxy7GDtc6u43VWLhUW4tP03sVXSRNEcAAADfF0Kv9/3vUHFUc5DiI0wAAABGGSKFu8AAAAAAAACtxuSf4eYbEAgUGyGhvNt9lqmTsdNWHyr///4AAAD/5r1fjLcAAABxnckAAACvyOZbNhx0iaEAAAAAAADBRV6CqdGsPlSJ8PX+0oYAAAAAAACvyOeux+YAAAD/+/NQtrjPdj54XS7st1x/YzH+zHf+0IFg2dzxV3bClkz+2Zipg0L7qFfqOF7/oFSU0dYAgABpAAAAAGNHcExHcEzuIr97AAAAd3RSTlP/////////////6f///y//lv////8D////pv///////5D//////////////////////////////77//////w7//9z3//9Y//////v/Qf//nv8k////Fn7//////5Vi//8B///7////////tP//////PP9+nv8AAAU0DKwAAAVeSURBVHja7ZrrW9pIFIcDFNSIYoNooJaaLqa3vSFEUNNYoAgiglAudRUv24uue//Sv3/nTBJzIQihhDz7dH6fdDI5eZM55wxzZqgvLosiAASAABAAAkAACAABIAAEgAAQAAJAABadUeNyVADaGS1FRgVwSNH/FcDDd0gPJqdXjE2A754uPP3L45uUZh4/tA+w8GTGMynNfcMAfxwdHV1rAMUlC/UkBwGODg8PT313AOtW4ZFflxwFuBoGgC41jJkwH3hnApiZmTH9YdFkcc1zdHVlBgiYBATZRcNcUPzwYUEPMPucZdnHc8jwykeWfeZDTb4Nlv38CfWYe4Gu/Q7XPn1m2Y2X0P9Plv24gu/2XZ+e3sx6DABra2vJVZ04lCOoXFU/G/6zsGAE+J6imOez6Gk/IkMPAODlK5StVtBzZ5+h2zdmAe4RRf38E/RnKSr44gf5XpQFPAaAwNry8utdv6YtDj4C3YvYBngkAzC2AbZf73r1ygTBFTvS4CEYH+D65sY0BBYA3hMeCJbad9Nx0OiE4wP4+p3QCsDf5XXB0B+GX/EF+sPQCsDrT1dwMFSdADi0AEj3KYwJcsVJA+BUbAZYTu7xZu3xEI04GCYK4Jmb8/SHYTIw8GcL3ZgwgHE2VAGCAwHy1WkBxBP92kfP6U0LQPgN6a1RZWSrMy2A1Obm5i/zBu28iVPU0qV7APP/ojHIRlwEeJtAAG0XAeYFlIsabgKkUCKougkgokTQcxFgB8fhNAF2jM/HcRidViL6FemNSWUEkJ3WXBC3EkzJ7k5GyAunARAYVkxwFmA7yQ1ScDoAfb8JVW3tfTsAWyDXAJJcBevEBgA15trw3ijI+EcEGHt1PCEAWO9bFANGqQ8MAOCDWCMDTKxIpTphWFba6xaAUh8wrg+hYWoA/SkgnAHxrgH4M/fMBe4AOFArjkRMANgL/FYATlTLc9F6PacH8KdPMlyFy4QhJfuNPgBiGEe2De4AtjI85COGCnJhJQi0KHBQKkC6or0gf2LOA0wgEJCTldyLwb/W4Ha5VUmlTFy5HLQhXCf0ykUh1ULwxATAryWTSchVuIQXF8RWWUzAhQrOYF3cL5ESW61UHN8fHlnd9O4u+gCc0QIfNgFsLy//DWMC/fbF2HGp2TxIIdhgGIaqi7AYoRZ7HzoPtdCKluK8/pEl1+V0FsrYwpYeIKAChKGUIcZQv1CoWUJLxwAHNgBLiCGsQih03orDC4z4ZBUUW6jJFi5gNSC/mW4IcEW5qzwpBv1CTejIr66uQmFTxUJCK0om010dKvjKYfnPfguUbOEuDJETxpVaugivCt0KpYRSbYfhQ1gHBXx7i5G9dpg4BMBpNfpETbXQBAtyGd8i9AH0WAYNCVqzcAeAP8woqtze3lbsWxgKcFEeLWMxdZSL69r/2jc8NwFo20lnsFBMqUNwcYDcla6fndVpFBo1dQSbIlR5z5aGCsqw8q7V/Rb02/fVvG6sCiJ61Tqa0yJoBR1PKR+mcJCAsoa9HXqwwKgWmmAhX7U8P9DOKuESKlxcQLzm4TW+9BicHRBXoVkCF85KNs8IFPODLRgOMPTykDDE2vvSgQh1TLkf5tpP1Y5LpbLAqFh2JCkWYhYWDAAS9pp4QhD28d6SsrtVpcGr9hNCArvPesT2MYlqzmDhLDLoCEc7qnNPbW+rSCuujd1bGuOgRjGnt9AefIZE6tBq5UC/u1fN5lWqjjTWURHNAm20YD7EcrnYyeZoOhctGrpJxSi0ZjuL4x5W0SxcDjtFIzUWG+2+cY60UbP0NedlrC2Qc0QEgAAQAAJAAAgAASAABIAAEAACQABcB/gPZkMsVva3wOAAAAAASUVORK5CYII=',
                        iconSize: [25, 41],
                        iconAnchor: [12, 41],
                        popupAnchor: [1, -34],
                        shadowSize: [41, 41]
                    });
                    var redMarker = L.marker([37.12199,47.45561], { icon: greenIcon, title: "توضیحات مد نظر شما" }).addTo(neshanMap).on('click', function(e) {
                        alert("hi. you clicked the marker at " + e.latlng);
});
        // iterate through response steps
        for (let k = 0; k < Object.keys(exampleResponse.routes).length; k++) {

            for (let j = 0; j < Object.keys(exampleResponse.routes[k].legs).length; j++) {

                for (let i = 0; i < Object.keys(exampleResponse.routes[k].legs[j].steps).length; i++) {
                    var step = exampleResponse.routes[k].legs[j].steps[i];

                    // decode Encoded polyline and draw on map
                    L.Polyline.fromEncoded(step.polyline, {
                        color: "#250ECD",
                        weight: 12
                    }).addTo(neshanMap);

                    // add point in start of step
                    L.circleMarker([step.start_location[1], step.start_location[0]], {
                        weight: 1,
                        color: "#FFFFFF",
                        radius: 5,
                        fill: true,
                        fillColor: "#9fbef9",
                        fillOpacity: 1.0
                    }).addTo(neshanMap);
                }
            }
        }

    </script>
@endsection

{{-- <!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Neshan Leaflet Map</title>


</head>

<body>

</body>

</html> --}}
