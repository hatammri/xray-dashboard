<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img width="35px" height="35px" viewbox="0 0 30 30" version="1.1" src="{{ asset('/assets/img/logo/sapa.png')}}">

        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">صاایران</span>
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
      <li class="menu-item {{ request()->is('/') ? 'active' : '' }}" >
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div >صفحه‌ی اصلی</div>
        </a>
      </li>
      <!-- Apps & Pages -->
      <li class="menu-item {{ request()->is('reports/list_scan_period') ? 'active open' : '' }} {{ request()->is('reports/listContradictions') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bxs-report"></i>
          <div >گزارش‌گیری </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item  {{ request()->is('reports/list_scan_period') ? 'active' : '' }}">
            <a href="{{ route('reports.list_scan_period') }}" class="menu-link ">
              <div >لیست دوره‌های اسکن شده </div>
            </a>
          </li>
          {{-- <li class="menu-item  {{ request()->is('personnels/list_personnels') ? 'active' : '' }}">
            <a href="{{ route('reports.testtable') }}" class="menu-link">
              <div >تست جدول</div>
            </a>
          </li> --}}
           <li class="menu-item {{ request()->is('reports/listContradictions') ? 'active' : '' }}" >
            <a href="{{ route('reports.listContradictions.listcontradictions')}}" class="menu-link">
              <div >لیست مغایرت‌های بارنامه</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('reports/listscanOriginDestination') ? 'active' : '' }}">
            <a href="{{ route('reports.listCompareOriginDestination.listcompare')}}" class="menu-link">
              <div >گزارش مغایرت های بارنامه در مبدا و مقصد</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('reports.listdrivers.listdrivers') }}" class="menu-link">
              <div >گزارش خودروهای متخلف</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="{{ route('reports.listPersonnel.listPersonnel') }}" class="menu-link">
              <div >لیست گزارشات پرسنل</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-universal-access"></i>
          <div >سطوح دسترسی </div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('accesslevel.index')}}" class="menu-link ">
              <div >سطوح دسترسی مراکز</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('accesslevel.accesspermission')}}" class="menu-link">
              <div>لیست مجوزها</div>
            </a>
          </li>

        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div >اطلاعات رانندگان</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="#" class="menu-link">
                  <div >لیست رانندگان</div>
                </a>
              </li>
          <li class="menu-item">
            <a href="#" class="menu-link">
              <div >اضافه کردن رانندگان</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item" >
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div >تنظیمات</div>
        </a>
      </li>
      <li class="menu-item" >
        <a href="{{ route('map.carlocations')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-map-alt"></i>
          <div >نقشه</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase"><span class="menu-header-text">اطلاعات ایستگاه و مراکز اسکن</span></li>
      <li class="menu-item {{ request()->is('personnels/list_centers') ? 'active open' : '' }} {{ request()->is('personnels/list_personnels') ? 'active open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div >لیست مراکز و گمرک</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item  {{ request()->is('personnels/list_centers') ? 'active' : '' }}">
            <a href="#" class="menu-link ">
              <div >لیست مراکز </div>
            </a>
          </li>
          <li class="menu-item  {{ request()->is('personnels/list_personnels') ? 'active' : '' }}">
            <a href="#" class="menu-link">
              <div >لسیت پرسنل</div>
            </a>
          </li>

        </ul>
      </li>
      <li class="menu-item {{ request()->is('personnels/list_centers') ? 'active open' : '' }} {{ request()->is('personnels/list_personnels') ? 'active open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div >پرسنل</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item  {{ request()->is('personnels/list_centers') ? 'active' : '' }}">
            <a href="#" class="menu-link ">
              <div >لیست مراکز </div>
            </a>
          </li>
          <li class="menu-item  {{ request()->is('personnels/list_personnels') ? 'active' : '' }}">
            <a href="#" class="menu-link">
              <div >لسیت پرسنل</div>
            </a>
          </li>

        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div >تخصص</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#" class="menu-link">
          <i class="menu-icon tf-icons bx bx-detail"></i>
          <div >سگ‌های‌ موادیاب</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase"><span class="menu-header-text">متفرقه</span></li>
      <li class="menu-item">
        <a href="#" target="_blank" class="menu-link">
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">پشتیبانی</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ asset('/assets/pdf/perposal.pdf')}}" target="_blank" class="menu-link">
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">مستندات</div>
        </a>
      </li>
      <li class="menu-item" >
        <a href="{{ route('logout') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
          <div >خروج</div>
        </a>
      </li>




      <!-- Charts & Maps -->
      {{-- <li class="menu-header small text-uppercase"><span class="menu-header-text">نمودارها و نقشه‌ها</span></li>
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
      </li> --}}
      {{-- <li class="menu-item">
        <a href="maps-leaflet.html" class="menu-link">
          <i class="menu-icon tf-icons bx bx-map-alt"></i>
          <div data-i18n="Leaflet Maps">نقشه‌های Leaflet</div>
        </a>
      </li> --}}

      <!-- Misc -->
    </ul>
  </aside>
