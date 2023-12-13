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
      <li class="menu-header small text-uppercase"><span class="menu-header-text">برنامه‌ها و صفحات</span></li>
      <li class="menu-item {{ request()->is('/') ? 'active' : '' }}" >
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div >داشبورد</div>
        </a>
      </li>
      <!-- Apps & Pages -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">برنامه‌ها و صفحات</span></li>
      <li class="menu-item {{ request()->is('personnels/list_centers') ? 'active open' : '' }} {{ request()->is('personnels/list_personnels') ? 'active open' : '' }} ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div >پرسنل</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item  {{ request()->is('personnels/list_centers') ? 'active' : '' }}">
            <a href="{{ route('personnels.list_centers') }}" class="menu-link ">
              <div >لیست مراکز </div>
            </a>
          </li>
          <li class="menu-item  {{ request()->is('personnels/list_personnels') ? 'active' : '' }}">
            <a href="{{ route('personnels.list_personnels') }}" class="menu-link">
              <div >لسیت پرسنل</div>
            </a>
          </li>

        </ul>
      </li>
      {{-- <li class="menu-item">
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
      </li> --}}
    </ul>
  </aside>
