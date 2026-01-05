    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                    <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                      <div class="emergency__icon">
                        <i class="icon-call3"></i>
                      </div>
                      <a href="tel:+923206995613" class="phone__number">
                        <i class="icon-phone"></i> <span>+92 320 6995613</span>
                      </a>
                      <p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
                      </p>
                      <a href="{{ route('contact') }}" class="btn btn__secondary btn__link btn__block">
                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                      </a>
                    </div><!-- /.miniPopup-emergency -->
                  </li>
                  <li>
                    <i class="icon-phone"></i><a href="tel:+923206995613">Emergency Call: +92 320 6995613</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="https://www.google.com/maps/dir//A+536+2nd+floor+14%2FB,+Shadman+Town,+Karachi,+75850/@24.9551104,67.0583741,15z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3eb33fec4301e163:0xd29d94c94a25ad20!2m2!1d67.0631115!2d24.9625178?entry=ttu&g_ep=EgoyMDI1MTIwOS4wIKXMDSoASAFQAw%3D%3D">Location: Shadman, North Nazimabad, Karachi.</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="{{ route('contact') }}">Mon - Fri: 9:00 am - 10:00 pm</a>
                  </li>
                </ul><!-- /.contact__list -->
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul><!-- /.social-icons -->
                  {{-- <form class="header-topbar__search">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                  </form> --}}
                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('web-assets/images/logo/logo0.png') }}" class="logo-light" alt="logo">
            <img src="{{ asset('web-assets/images/logo/logo0.png') }}" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class=" navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav__item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav__item-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav__item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class="nav__item-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                </li>
                <li class="nav__item {{ request()->routeIs('all_services.index') ? 'active' : '' }}">
                    <a href="{{ route('all_services.index') }}" class="nav__item-link {{ request()->routeIs('all_services.index') ? 'active' : '' }}">Products</a>
                </li>
                <li class="nav__item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav__item-link {{ request()->routeIs('contact') ? 'active' : '' }}">Certifications</a>
                </li>
                <li class="nav__item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}" class="nav__item-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contacts</a>
                </li>
            </ul>
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
            <div class="miniPopup-departments-trigger">
              <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
              <a href="departments.html">Departments</a>
            </div>
            <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
              <li class="nav__item">
                <a href="{{ route('all_services.index') }}" class="nav__item-link">Neurology</a>
              </li>
              <li class="nav__item">
                <a href="{{ route('all_services.index') }}" class="nav__item-link">Cardiology</a>
              </li>
              <li class="nav__item">
                <a href="{{ route('all_services.index') }}" class="nav__item-link">Pathology</a>
              </li>
              <li class="nav__item">
                <a href="{{ route('all_services.index') }}" class="nav__item-link">Laboratory</a>
              </li>
              <li class="nav__item">
                <a href="{{ route('all_services.index') }}" class="nav__item-link">Cardiac</a>
              </li>
            </ul> <!-- /.miniPopup-departments -->
            <a href="{{ route('contact') }}" class="btn btn__primary btn__rounded ml-30">
              <i class="icon-calendar"></i>
              <span>Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->
