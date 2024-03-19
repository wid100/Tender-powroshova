  <header id="page-topbar">
      <div class="navbar-header d-flex align-items-center justify-content-between gap-5">
          <div class="dashboard-logo">
              <a href="/">
                  <img src="{{ asset('assets-frontend/images/logo.png') }}" alt="" />
              </a>
          </div>
          <div class="dashboard-right">
              <div class="dashboard-social-link d-flex align-items-center justify-content-end gap-4">
                  <a href="#" class="social-list d-flex align-items-center gap-2">
                      <img src="{{ asset('assets-frontend/images/icons/email.svg') }}" alt="" />
                      <span>tendar@ramgunjpouroshova.com </span>
                  </a>
                  <a href="#" class="social-list d-flex align-items-center gap-2">
                      <img src="{{ asset('assets-frontend/images/icons/number.svg') }}" alt="" />
                      <span>123-456-7890</span>
                  </a>
              </div>
              <div class="dashboard-profile d-flex align-items-center justify-content-end gap-4">
                  <div class="dashboard-notifaction">
                      <img src="{{ asset('assets-frontend/images/icons/notifaction.svg') }}" alt="" />
                      <span class="dashboard-count">1</span>
                  </div>
                  <div href="#" class="dashboard-profile-user">
                      <div class="d-flex align-items-center gap-3">
                          <img class="user-img" src=" {{ asset('assets-frontend/images/icons/wid.svg') }}"
                              alt="" />
                          <p>WOMEN IN DIGITAL</p>
                          <img src="{{ asset('assets-frontend/images/icons/arrow.svg') }}" alt="" />
                      </div>
                      <div class="user-logout-btn">
                          <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                      </div>

                  </div>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>

                  <div class="header-menu">
                      <img src="{{ asset('assets-frontend/images/icons/menu.svg ') }}" alt="" />
                  </div>
              </div>
          </div>
      </div>
  </header>
