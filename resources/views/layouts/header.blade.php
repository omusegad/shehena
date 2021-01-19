<!-- Header -->
<header class="header-area">
  <div class="top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-10">
          <ul class="header-left-content">
            <li> <i class="icofont-location-pin"></i> Nairobi, Kenya</li>
            <li> <i class="icofont-phone"></i> <a href="tel:+1-(123)-456-7890">+1 (123) 456 7890</a> </li>
            <li> <i class="icofont-envelope"></i> <a href="#"><span class="__cf_email__">info@istores.com</span></a> </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-2">
          <div class="header-right-content">
            <ul>
              <li><a href="">Quotation Tool</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar-area">
    <div class="mobile-nav">
      <div class="container">
        <div class="mobile-menu">
          <div class="logo"> <a href="index.html"> iStores.com </a> </div>
        </div>
      </div>
    </div>
    <div class="desktop-nav">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light"> <a class="navbar-brand" href="index.html"> iStores.com </a>
          <div class="collapse navbar-collapse mean-menu">
            <ul class="navbar-nav m-auto">
              <li class="nav-item"> <a href="#" class="nav-link"> Catergories <i class="bx bx-chevron-right"></i> </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"> <a href="#" class="nav-link">Vehicles & Accessories</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Machinery</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Consumer Electronics</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Home Appliances</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Apparel / Fashion Accessories</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Timepieces,Jewelry,Eyewear</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Lights & Lighting</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Construction & Real Estate</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Home & Garden</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Furniture</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Fabric & Textiles</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Electrical Equipment & Supplies</a> </li>
                </ul>
              </li>
              <!-- <li class="nav-item"> <a href="#" class="nav-link">Catergories</a> </li> -->
              <li class="nav-item"> <a href="#" class="nav-link">Prohibited Items</a> </li>
              <li class="nav-item"> <a href="#" class="nav-link"> Services <i class="bx bx-chevron-right"></i> </a>
                <ul class="dropdown-menu">
                  <li class="nav-item"> <a href="#" class="nav-link">Buy & Shipping</a> </li>
                  <li class="nav-item"> <a href="#" class="nav-link">Shipping Only</a> </li>
                </ul>
              </li>
              <li class="nav-item"> <a href="consolidation.html" class="nav-link">Consolidation & Packaging</a> </li>
              <li class="nav-item"> <a href="#" class="nav-link">Partner with Us</a> </li>
            </ul>
            <div class="others-option">
               <div class="get-quote"> 
                    @if (Auth::check())
                      <a class="btncustomer pr-5" href="{{ route('customers') }}"> <span> All Customers</span> </a> 
                      <a class="default-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                    @else
                      <a href="{{ route('login') }}" class="default-btn"> <span>Member Login</span> </a> 
                    @endif
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="others-option-for-responsive">
      <div class="container">
        <div class="dot-menu">
          <div class="inner">
            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
            <div class="circle circle-three"></div>
          </div>
        </div>
        <div class="container">
          <div class="option-inner">
            <div class="others-option justify-content-center d-flex align-items-center">
              <div class="get-quote"> <a href="pricing-style-two.html" class="default-btn"> <span>Sign Up</span> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
