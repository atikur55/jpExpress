
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JP Express | Courier</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
  
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="{{asset('frontend_assets/plugins/owl/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend_assets/plugins/owl/owl.theme.default.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}" />
    @yield('css')
    <style>
      .active {
                background-color: #0CC9E8;
                transition: 0.8s;
      }
      .active:hover{
                background-color: #E2222D;
                color: white;
      }


    </style>
    <!-- megamenu -->
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function () {
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll(".dropdown-menu").forEach(function (element) {
          element.addEventListener("click", function (e) {
            e.stopPropagation();
          });
        });
      });
      // DOMContentLoaded  end
    </script>
  </head>
  <body>
    {{-- <header class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 top-contact">
            <div class="top-info">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-telephone-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                />
              </svg>
              <span>+88016546548646</span>
              <span>+66546846468</span>
            </div>
            <div class="top-info">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-envelope-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                />
              </svg>
              <span>info@jpex.com.bd</span>
            </div>
          </div>
          <div class="col-md-6 top-login">
            <div class="top-btn float-md-end">
              <a class="top-btn-1" href="{{ route('login') }}">Login</a>
              <a class="top-btn-2" href="{{ route('register') }}">Register</a>
            </div>
          </div>
        </div>
      </div>
    </header> --}}
    <!-- nav -->
    {{-- <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{asset('frontend_assets/img/logo/logo.png')}}" alt="" srcset="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="{{url('e-commerce/solution')}}"> E-commerce Solution </a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('about')}}"> About </a></li>
            <li class="nav-item dropdown has-megamenu">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Services
              </a>
              <div class="dropdown-menu megamenu" role="menu">
                <div class="row g-3">
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu One</h6>
                      <ul class="list-unstyled">
                        <li><a href="{{url('offer')}}">Offer</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                    <!-- col-megamenu.// -->
                  </div>
                  <!-- end col-3 -->
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Two</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                    <!-- col-megamenu.// -->
                  </div>
                  <!-- end col-3 -->
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Three</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                    <!-- col-megamenu.// -->
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Four</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                    <!-- col-megamenu.// -->
                  </div>
                  <!-- end col-3 -->
                </div>
                <!-- end row -->
              </div>
              <!-- dropdown-mega-menu.// -->
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('contact-Us')}}"> Contact Us </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Dropdown right
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              </ul>
            </li> -->
          </ul>
        </div>
        <!-- navbar-collapse.// -->
      </div>
      <!-- container-fluid.// -->
    </nav> --}}
    <header class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 top-contact">
            <div class="top-info">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-telephone-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                />
              </svg>
              <span>+88016546548646</span>
              <span>+66546846468</span>
            </div>
            <div class="top-info">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-envelope-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                />
              </svg>
              <span>info@jpex.com.bd</span>
            </div>
          </div>
          <div class="col-md-6 top-login">
            <div class="top-btn float-md-end">
              <a class="top-btn-1" href="{{ route('login') }}">Login</a>
              <a class="top-btn-2" href="{{ route('register') }}">Register</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('frontend_assets/img/logo/logo.png')}}" alt="" srcset="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main_nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                About Us
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{url('board-of-director')}}"> Board of Directors</a></li>
                <li><a class="dropdown-item" href="#"> Networking Partners</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Services
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">International Courier Service</a></li>
                <li><a class="dropdown-item" href="#">International Import Service</a></li>
                <li><a class="dropdown-item" href="#">Custom Clearance Service</a></li>
                <li><a class="dropdown-item" href="#">Air Cargo &amp; Freight Service</a></li>
                <li><a class="dropdown-item" href="#">Ocean &amp; Freight Service</a></li>
                <li><a class="dropdown-item" href="#">Door to Door Service</a></li>
              </ul>
            </li>
            <!-- <li class="nav-item dropdown has-megamenu">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Services
              </a>
              <div class="dropdown-menu megamenu" role="menu">
                <div class="row g-3">
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu One</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Two</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Three</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="col-megamenu">
                      <h6 class="title">Title Menu Four</h6>
                      <ul class="list-unstyled">
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                        <li><a href="#">Custom Menu</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{url('e-commerce/solution')}}">E-Commerce</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact-Us')}}"> Contact Us </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
              >
                Dropdown right
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <h3>get in touch</h3>
            <p>
              <span class="foot-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  class="bi bi-geo-alt-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                  />
                </svg>
              </span>
              G. P Gho-185(2nd Floor), Opposite of Titumir Collage, Mohakhali,
              Dhaka-1213, Bangladesh
            </p>
            <p>
              <span class="foot-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  class="bi bi-telephone-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                  />
                </svg>
                +08801681637836 +08801717602690
              </span>
            </p>
            <p>
              <span class="foot-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  class="bi bi-envelope-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                  />
                </svg>
              </span>
              info@jpex.com.bd
            </p>
          </div>
          <div class="col-md-4 col-sm-12">
            <h3>userful link</h3>
            <a href="">Online Booking</a>
            <a href="">Volumetric weight</a>
            <a href="">Currency Converter</a>
            <a href="">Claim & Complain Form</a>
          </div>
          <div class="col-md-4 col-sm-12">
            <a href="">e-Commerce Solution </a>
            <a href="">E-shop</a>
            <a href="">E-Full-fillment </a>
            <a href="">Processing</a>
            <a href="">J.P Packaging </a>
            <a href="">Shipping Documents</a>
            <a href="">Excess Baggage Courier</a>
            <a href="">Blog</a>
          </div>
        </div>
        <div class="row">
          <div class="footbar">
            <h2>follow us</h2>
            <a class="facebook" href=""><i class="bi bi-facebook"></i></a>
            <a class="twitter" href=""><i class="bi bi-twitter"></i></a>
            <a class="instagram" href=""><i class="bi bi-instagram"></i></a>
            <a class="linkedin" href=""><i class="bi bi-linkedin"></i></a>
            <a class="youtube" href=""><i class="bi bi-youtube"></i></a>
            <a class="google" href=""><i class="bi bi-google"></i></a>
          </div>
          <!-- <h5>&copy; no copyright issues</h5> -->
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="{{asset('frontend_assets/plugins/owl/owl.carousel.min.js')}}"></script>

    <script>
      $("#owl-one").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });

      $("#owl-two").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
    </script>
    @yield('js')
  </body>
</html>
